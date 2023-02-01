<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthentificationProfController extends AbstractController
{
    /**
     * @Route("/authentificationProf", name="app_authentification_prof")
     */
    public function index(): Response
    {
        return $this->render('authentification_prof/index.html.twig', [
            'controller_name' => 'AuthentificationProfController',
        ]);
    }
}
