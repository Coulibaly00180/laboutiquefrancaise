<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/mon-panier", name="app_cart")
     */
    public function index(): Response
    {
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/mon-panier/add/{id}", name="app_cart_add")
     */
    public function add($id): Response
    {
        $cart->add($id)

        return $this->render('cart/add.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }
}
