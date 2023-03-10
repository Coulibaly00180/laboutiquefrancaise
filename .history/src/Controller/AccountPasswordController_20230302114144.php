<?php

namespace App\Controller;

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
        $form = $this->createForm()
        return $this->render('account/password.html.twig');
    }
}
