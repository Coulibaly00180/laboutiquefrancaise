<?php

namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{


    
    public function configureOptions(OptionsResolverer $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}