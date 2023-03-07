<?php

namespace App\Controller;

use App\Repository\AdminRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(UserRepository $userRepository, AdminRepository $adminRepository, Security $security): Response
    {
        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->render('user/index.html.twig', [
                'users' => $userRepository->findAll(),
            ]);
        } else {
            return $this->render('security/index.html.twig', [
                'user' => $security->getUser(),
            ]);
        }
    }
}
