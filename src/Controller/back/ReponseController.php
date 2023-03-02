<?php

namespace App\Controller;

use App\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\ReponseFormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReponseRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ReponseController extends AbstractController
{
    #[Route('/reponse', name: 'reponse')]
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse/reponse_index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }
    

     #[Route('/reponse_new', name: 'reponse_new')]
    public function new(Request $request): Response
    {
        $reponse = new Reponse();

        $form = $this->createForm(ReponseFormType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $reponse->setCreatedAt(new \DateTime('now'));
           
            $entityManager->persist($reponse);
            $entityManager->flush();

            return $this->redirectToRoute('reponse');
        }

        return $this->renderForm('reponse/new.html.twig',['form'=>$form]);
    }



    #[Route('/reponse_edit/{id}', name: 'reponse_edit')]
    public function edit(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reponse = $entityManager->getRepository(Reponse::class)->find($id);
        $form = $this->createForm(ReponseFormType::class, $reponse);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
           
            $reponse->setCreatedAt(new \DateTime('now'));
        
            // save the changes to the database
            $entityManager->persist($reponse);
            $entityManager->flush();
        
            return $this->redirectToRoute('reponse');
        }
        
        return $this->renderForm('reponse/new.html.twig', ['form' => $form]);
        
        
    }

    #[Route('/reponse_delete/{id}', name: 'reponse_delete')]
    public function delete(reponse $reponse, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($reponse);
        $entityManager->flush();
    
        return $this->redirectToRoute('reponse');
    }
}