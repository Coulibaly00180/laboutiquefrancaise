<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/inscription", name="app_register")
     */
    public function index(): Response
    {

        // Initialisé User
        $user = new User();

        // Instancier le formulaire
        $form = $this->createForm(RegisterType::class, $user);

        

        return $this->render('register/index.html.twig');
    }
}
