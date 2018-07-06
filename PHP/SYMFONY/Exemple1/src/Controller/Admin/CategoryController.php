<?php
namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Category;
use App\Form\CategoryType;
/**
 * @Route("/admin/category")
 */

class CategoryController extends Controller
{
    /**
     * @Route("/{page}", requirements={"page"= "\d+"}, defaults = {"page"=1})
     */
    public function index($page)
    {
        $count = 10;
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository(Category::class)->findByPage($page, $count);
        $nbPages = ceil(count($entities) / $count);
        if ($nbPages < $page) {
            $t = $this->get('translator');
            $this->addFlash('danger', $t->transChoice('page_error', $nbPages, array('%nbPages%' => $nbPages)));
            return $this->redirectToRoute('app_admin_category_index');
        }
        return $this->render('admin/category/index.html.twig', array(
            'entities' => $entities,
            'nbPages' => (int)$nbPages,
            'page' => $page,
        ));
    }

    /**
     * @Route("/new")
     */
    public function new(Request $request)
    {
        $category = new Category;
        //Creation du formulaire
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            $t = $this->get('translator');
            $this->addFlash('success', $t->trans('category.add_success', array('%entity%' => $category->getTitle())));
            return $this->redirectToRoute('app_admin_category_index');
        }
    //         /*if(!empty($_POST))
	// 	{
	// 		$post = array();
			
	// 		foreach($_POST as $key => $p)
	// 		{
	// 			$post[$key] = trim($p); // trim enlève les espaces avant & après
	// 		}
	// 		// HYDRATATION
	// 		$category 	-> setTitle(strip_tags($post/* ou $_POST si la boucle n'existe pas */['title']))
	// 					-> setContent($post['content'])
	// 					;
	// 		// SAUVEGARDE DANS LA BDD
	// 		$em = $this -> getDoctrine() -> getManager();
	// 		$em -> persist($category);
	// 		$em -> flush();
    // }

        return $this->render('admin/category/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/edit/{id}", requirements={"id" = "\d+"})
     */

    public function edit(Request $request, category $category)
    {
		// CREATION DU FORMULAIRE
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $category->setDateUpdate(new \DateTime);
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            $t = $this->get('translator');
            $this->addFlash('success', $t->trans('category.edit_success', array('%entity%' => $category->getTitle())));
            return $this->redirectToRoute('app_admin_category_index');
        }

        return $this->render('admin/category/edit.html.twig', array(
            'form' => $form->createView(),
            'entity' => $category,
        ));
    }

    /**
     * @Route("/delete/{id}", requirements={"id" = "\d+"})
     */
    public function delete(Request $request, category $category)
    {
        $formBuilder = $this->createFormBuilder()
            ->setAction($this->generateUrl('app_admin_category_delete', ['id' => $category->getId()]))
            ->setMethod('DELETE');

        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();

            $t = $this->get('translator');
            $this->addFlash('success', $t->trans('category.delete_success', array('%entity%' => $category->getTitle())));
            return $this->redirectToRoute('app_admin_category_index');
        }

        return $this->render('admin/category/delete.html.twig', array(
            'form' => $form->createView(),
            'entity' => $category,
        ));
    }
}