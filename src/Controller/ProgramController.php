<?php

// App/src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class ProgramController extends AbstractController
{
    /**
     * @Route("/programs", name="program_index")
     */
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * @Route("/program/", name="program_4")
     */
    public function show(): Response
    {
        return $this-> render('templates/program/show.html.twig', [
            'id' => 4
    ]);

    }
}


