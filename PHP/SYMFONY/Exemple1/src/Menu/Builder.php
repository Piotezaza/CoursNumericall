<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;

class Builder
{
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this -> factory = $factory;
    }

    public function createAdminMenu()
    {
        $menu = $this -> factory -> createItem('root');
        $menu -> setChildrenAttribute('class', 'navbar-nav');
        $menu -> addChild('article.article', ['route' => 'app_admin_article_index']);
        $menu -> addChild('category.category', ['route' => 'app_admin_category_index']);
        return $menu;
    }

    public function createMainMenu()
    {
        $menu = $this -> factory -> createItem('root');
        $menu -> setChildrenAttribute('class', 'navbar-nav');
        $menu -> addChild('article.article', ['route' => 'app_article_index']);
        return $menu;
    }


}