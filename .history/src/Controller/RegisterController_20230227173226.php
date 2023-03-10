<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/inscription", name="app_register")
     */
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {

        // Initialisé User
        $user = new User();

        // Instancier le formulaire
        $form = $this->createForm(RegisterType::class, $user);

        // La requête
        $form->handleRequest($request);

        // Condition de validation du formulaire (de la requête)
        if ($form->isSubmitted() && $form->isValid()){

            // L'entity manager
            $em = $doctrine->getManager();
            
            // Récupère les données du formulaire pour l'associer à $user
            $user = $form->getData();
        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
