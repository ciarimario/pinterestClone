<?php

namespace App\Controller;

use App\Entity\Pin;
use App\Repository\PinRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PinController extends AbstractController
{
    /**
     * @Route("/", name="pin")
     */
    public function index(PinRepository $pinRepository): Response
    {

        return $this->render('pin/index.html.twig', [
            'allPins' => $pinRepository->findBy([], ['createdAt' => 'DESC']),
        ]);
    }

    /**
     * @Route("/pin/{id<[0-9]+>}", name="show_pin")
     */
    public function show(Pin $pin): Response
    {

        return $this->render('pin/show_pin.html.twig', [
            'pin' => $pin,
        ]);
    }
}
