<?php

namespace App\Controller\back;

use App\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\ReclamationFormType;
use App\Repository\ReclamationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ReclamationController extends AbstractController
{
    #[Route('/back_reclamation', name: 'back_reclamation')]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/back/back_index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/reclamation_approuver/{id}', name: 'reclamation_approuver')]
    public function approuver(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
    
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        $reclamation->setStatut('approuvée');
        $entityManager->flush();
        
    
      
        return $this->redirectToRoute('back_reclamation');
            }

            #[Route('/reclamation_refuser/{id}', name: 'reclamation_refuser')]
            public function refuser(Request $request, int $id): Response
            {
                $entityManager = $this->getDoctrine()->getManager();
            
                $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
                $reclamation->setStatut('refusée');
                $entityManager->flush();
                
            
              
                return $this->redirectToRoute('back_reclamation');
                    
              
              
            }
    
}

