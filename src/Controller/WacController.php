<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WacController extends AbstractController
{
    #[Route('/', name: 'app_wac')]
    public function index(): Response
    {
        return $this->render('wac/index.html.twig', [
            'controller_name' => 'WacController',
        ]);
    }
}
