<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'TestController',
        ]);



    }
    
    #[Route('/test1', name: 'app_test1')]
    public function index1(): Response
    {
        return $this->render('index1.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    
    
}