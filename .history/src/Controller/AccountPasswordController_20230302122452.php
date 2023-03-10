<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountPasswordController extends AbstractController
{
    /**
     * @Route("/compte/modify_password", name="app_account_password")
     */
    public function index(ManagerRegistry $doctrine, Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        // Récuperer l'utilisateur connecté
        $user = $this->getUser();
        
        // Appel du formulaire
        $form = $this->createForm(ChangePasswordType::class, $user);

        //
        $form->handleRequest($request);

        //
        if ($form->isSubmitted() && $form->isValid()){

            // Récuperer le mot de passe actuel qui a été saisi par l'utilisateur
            $old_password = $form->get('old_password')->getData();

            // Vérifie si le mot de passe saisie et le mot de passe de enregistrer de l'utilisateur sont pareil
            if ($encoder->isPasswordValid($user, $old_password)){
                // Récuperer le nouveau password
                $new_password = $form->get('new_password')->getData();

                // Encoder le nouveau password
            }
        }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
