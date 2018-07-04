<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

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
	public function new()
	{
		$article = new Article;

		if(!empty($_POST))
		{
			$post = array();
			
			foreach($_POST as $key => $p)
			{
				$post[$key] = trim($p); // trim enlève les espaces avant & après
			}

			$article 	-> setTitle(strip_tags($post/* ou $_POST si la boucle n'existe pas */['title']))
						-> setContent($post['content'])
						;
		}

		return $this->render('admin/article/new.html.twig');
	}
}
