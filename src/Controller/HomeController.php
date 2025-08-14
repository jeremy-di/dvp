<?php

namespace App\Controller;

use App\Repository\ParametersRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ParametersRepository $parametersRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'parameters' => $parametersRepository->findAll(),
        ]);
    }
}
