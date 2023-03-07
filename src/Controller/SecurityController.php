<?php

namespace App\Controller;

use App\Form\RegistrationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Admin;
use App\Entity\User;
use App\Repository\AdminRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends AbstractController
{
    /**
     * @Route("/Inscription", name="security_registration")
     */
    public function registration(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user, true);

            return $this->redirectToRoute('security_registration', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('security/registration.html.twig', [
            'user' => $user,
            'form' => $form->createView()
        ]);
    }
}
