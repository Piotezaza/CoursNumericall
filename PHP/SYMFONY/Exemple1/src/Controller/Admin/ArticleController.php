<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

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
		return $this->render('admin/article/new.html.twig');
	}
}
