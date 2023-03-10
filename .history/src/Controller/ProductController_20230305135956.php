<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    // private $entityManager;

    public function __construct(EntityManagerInterface $entityManagerInterface)

    /**
     * @Route("/nos-produits", name="app_products")
     */
    public function index(): Response
    {
        $products = 

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
}
