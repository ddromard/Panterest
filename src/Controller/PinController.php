<?php

namespace App\Controller;

use App\Repository\PinsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PinsRepository $pinsRepository): Response
    {
        $pins = $pinsRepository->findAll();

        return $this->render('pin/index.html.twig', compact('pins'));
    }
}
