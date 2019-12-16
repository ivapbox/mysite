<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    /**
     * @Route("/main1", name="mainpage")
     */
    public function main()
    {
        return $this->render('new.html.twig', ['message' => 'hello']);
    }
}