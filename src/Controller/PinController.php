<?php

namespace App\Controller;

use App\Repository\PinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    /**
     * @Route("/", name="pin")
     */
    public function index(PinRepository $pinRepository): Response
    {
        return $this->render('pin/index.html.twig', [
            'allPins' => $pinRepository->findAll(),
        ]);
    }
}
