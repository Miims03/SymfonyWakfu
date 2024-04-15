<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BaseController extends AbstractController
{
    #[Route('/', name: 'base')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', [
            'Title' => 'ᗯᗩᛕᖴᑌ',
            'Logo' => 'https://upload.wikimedia.org/wikipedia/fr/1/1f/Wakfu_Logo.png',
        ]);
    }
}
