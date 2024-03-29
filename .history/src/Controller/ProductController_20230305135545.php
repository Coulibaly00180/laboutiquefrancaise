<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/nos-produits", name="app_products")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => 'ProductController',
        ]);
    }
}
