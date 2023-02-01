<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\UserEtu;
use App\Form\RegistrationEtuType;

class AuthentificationEtuController extends AbstractController
{
    /**
     * @Route("/authentificationEtu", name="app_authentification_etu")
     */
    public function registration(Request $request, ManagerRegistry $manager)
    {
        $user = new UserEtu() ;

        $form = $this -> createForm(RegistrationEtuType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
             $manager->persist($user);
            $manager->flush();
        }

        return $this->render('authentification_etu/index.html.twig', [
            'form' => $form->createView()
        ]);

    }
}
