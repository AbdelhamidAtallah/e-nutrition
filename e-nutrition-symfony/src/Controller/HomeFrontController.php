<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeFrontController extends AbstractController
{
    /**
     * @Route("index", name="home_front")
     */
    public function index(): Response
    {
        return $this->render('front/home_front/index.html.twig', [
            'controller_name' => 'HomeFrontController',
        ]);
    }

    /**
     * @Route("indexotherpage", name="home_front2")
     */
    public function index2(): Response
    {
        return $this->render('front/test.html.twig', [
            'controller_name' => 'HomeFrontController',
        ]);
    }
}
