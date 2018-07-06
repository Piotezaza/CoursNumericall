<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('title', null, array(
                'label' => 'Titre'
            ))

            -> add('category', null, array(
                'label' => 'category.catagory'
            ))

            -> add('content', null, array(
                'label' => 'Contenu',
                'attr' => array(
                    'class' => 'tinymce'
                )
            ))
        ;
    }
}