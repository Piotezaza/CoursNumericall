<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

use App\Entity\Article;
use App\Form\ArticleType;

/**
 * @Route("/admin/article")
 */

class ArticleController extends Controller
{
	/**
	 * @Route("/{page}", requirements={"page" = "\d+"}, defaults={"page" = 1})
	 */
	public function index($page)
	{
		$count = 10;

		$em = $this -> getDoctrine() -> getManager();

		$entities = $em 
			-> getRepository(Article::class)
			->findByPage($page, $count)
		;

		$nbPages = ceil(count($entities) / $count);

		if($nbPages < $page)
		{
			$this -> addFlash('danger', "Il n'y a que " . $nbPages . " page(s).");
			return $this -> redirectToRoute('app_admin_article_index');
		}
		
		return $this->render('admin/article/index.html.twig', array(
			'entities' => $entities,
			'nbPages' => (int)$nbPages,
			'page' => $page
		));
	}

	/**
	 * @Route("/new")
	 */
	public function new(Request $request)
	{
		// NOUVELLE ENTITÉE ARTICLE
		$article = new Article;

		// CREATION DU FORMULAIRE
		$form = $this -> createForm(ArticleType::class, $article);
		$form -> handleRequest($request);

		if($form -> isSubmitted() && $form -> isValid())
		{
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($article);
			$em -> flush();

			$this -> addFlash('success', "L'article " . $article->getTitle() . " a bien été ajouté");

			return $this -> redirectToRoute('app_admin_article_index');
		}

		return $this->render('admin/article/new.html.twig', array(
			'form' => $form->createView(),
		));
	}

	/**
	 * @Route ("/edit/{id}", requirements={"id" = "\d+"})
	 */
	public function edit(Request $request, Article $article)
	{
		// CREATION DU FORMULAIRE
		$form = $this -> createForm(ArticleType::class, $article);
		$form -> handleRequest($request);

		if($form -> isSubmitted() && $form -> isValid())
		{
			$article -> setDateUpdate(new \DateTime);
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($article);
			$em -> flush();

			$this -> addFlash('success', 'L\'article "<strong>'  . $article->getTitle() . '</strong>" a bien été modifié');

			return $this -> redirectToRoute('app_admin_article_index');
		}

		return $this->render('admin/article/edit.html.twig', array(
			'form' => $form->createView(),
		));
	}

	/**
	 * @Route ("/delete/{id}", requirements={"id" = "\d+"})
	 */
	public function delete(Request $request, Article $article)
	{
		$formBuilder = $this -> createFormBuilder()
			-> setAction($this -> generateUrl('app_admin_article_delete', ['id' => $article -> getId()]))
			-> setMethod('DELETE')
		;

		$form = $formBuilder -> getForm();
		$form -> handleRequest($request);

		if($form -> isSubmitted() && $form -> isValid())
		{
			$em = $this -> getDoctrine() -> getManager();
			$em -> remove($article);
			$em -> flush();

			$this -> addFlash('success', "L'article " . $article->getTitle() . " a bien été supprimé");

			return $this -> redirectToRoute('app_admin_article_index');
		}

		return $this -> render('admin/article/delete.html.twig', array(
			'form' => $form->createView(),
			'entity' => $article
		));
	}
}
