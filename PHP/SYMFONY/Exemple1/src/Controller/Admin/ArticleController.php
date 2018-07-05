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
	 * @Route("/")
	 */
	public function index()
	{
		$count = 10;

		$em = $this -> getDoctrine() -> getManager();
		$entities = $em -> getRepository(Article::class)->findByPage();
		$nbPages = ceil(count($entities) / $count);
		
		return $this->render('admin/article/index.html.twig', array(
			'entities' => $entities,
			'nbPages' => (int)$nbPages
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

		return $this->render('admin/article/edit.html.twig', array(
			'form' => $form->createView(),
		));
	}
}
