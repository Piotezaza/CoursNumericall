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
		return $this->render('admin/article/new.html.twig');
	}
}
