<?php

namespace App\Controller\Dashboard;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function indexAction(): Response
    {
        $number = 100;

        return $this->render('dashboard/index.html.twig', [
            'number' => $number,
        ]);
    }
}