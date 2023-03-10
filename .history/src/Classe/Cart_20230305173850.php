<?php 

namespace App\Classe;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

Class Cart
{
    private $sessionInterface;

    public function __construct(SessionInterface $sessionInterface)
    {
        $this->sessionInterface = $sessionInterface;
    }

    public function add()
    {
        $this->sessionInterface->set('cart')
    }
}