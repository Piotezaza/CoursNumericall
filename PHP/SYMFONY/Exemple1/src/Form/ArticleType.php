<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            -> add('title', null, array(
                'label' => 'Titre'
            ))
            -> add('content', null, array(
                'label' => 'Contenu'
            ))
            -> add('save', SubmitType::class, array(
              'label' => 'Enregistrer'
            ))
        ;
    }
}