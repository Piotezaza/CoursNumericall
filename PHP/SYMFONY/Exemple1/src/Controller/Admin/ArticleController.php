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
		return $this->render('admin/article/index.html.twig');
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

		// if(!empty($_POST))
		// {
		// 	$post = array();
			
		// 	foreach($_POST as $key => $p)
		// 	{
		// 		$post[$key] = trim($p); // trim enlève les espaces avant & après
		// 	}

		// 	// HYDRATATION
		// 	$article 	-> setTitle(strip_tags($post/* ou $_POST si la boucle n'existe pas */['title']))
		// 				-> setContent($post['content'])
		// 				;

		// 	// SAUVEGARDE DANS LA BDD
		// 	$em = $this -> getDoctrine() -> getManager();
		// 	$em -> persist($article);
		// 	$em -> flush();
		// }

		if($form -> isSubmitted() && $form -> isValid())
		{
			$em = $this -> getDoctrine() -> getManager();
			$em -> persist($article);
			$em -> flush();
		}

		return $this->render('admin/article/new.html.twig', array(
			'form' => $form->createView(),
		));
	}
}
