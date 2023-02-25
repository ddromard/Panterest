<?php

namespace App\Controller;

use App\Entity\Pins;
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

    #[Route('/pins/{id<[0-9]+>}', name: 'app_pins_show')]
    public function show(Pins $pins): Response
    {
        return $this->render('pin/show.html.twig', compact('pins'));
    }
}
