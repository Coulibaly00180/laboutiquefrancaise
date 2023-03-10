<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'disabled' => true,
                'label' => 'Email'
            ])
            ->add('firstname', TextType::class, [
                'disabled' => true,
                'label' => 'Nom'
            ])
            ->add('lastname', TextType::class, [
                'disabled' => true,
                'label' => 'Prénom'
            ])
            ->add('password', PasswordType::class, [
                'label' =>'Mot de passe actuel',
                'attr' => [
                    'placeholder' => 'Saisir le mot de passe actuel'
                ]
            ])
            ->add('new_password', RepeatedType::class, [
                'mapped' => true
                'type' => PasswordType::class,
                'invalid_message' => 'Le mot de passe est diiférent',
                'label' => 'Mot de passe',
                'required' => true,
                'first_options' => ['label' => 'Nouveau Mot de passe'],
                'second_options' => ['label' => 'Confirmation du nouveau mot de passe']
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
