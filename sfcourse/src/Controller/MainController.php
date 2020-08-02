<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return new Response($content='<h1>Symfony</h1>'  );
    }

    /**
     * @Route("/custom", name="custom")
     */
    public function custom() {
        return new Response($content='Custom Page',$status='200');
    }
}
