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
        return $menu;
    }
}