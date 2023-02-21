<?php

namespace App\Controller\front;

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
    #[Route('/reclamation', name: 'reclamation')]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/front/reclamation_index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    

     #[Route('/reclamation_new', name: 'reclamation_new')]
    public function new(Request $request): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationFormType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $reclamation->setCreatedAt(new \DateTime('now'));
            $file = $form->get('file')->getData();
        if($file)
            {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('files_directory'), $fileName);
                $reclamation->setFile($fileName);
            }
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('reclamation');
        }

        return $this->renderForm('reclamation/front/new.html.twig',['form'=>$form]);
    }

#[Route('/reclamation_edit/{id}', name: 'reclamation_edit')]
    public function edit(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reclamation = $entityManager->getRepository(Reclamation::class)->find($id);
        $form = $this->createForm(ReclamationFormType::class, $reclamation);
        $form->handleRequest($request);
    
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
             $reclamation->setCreatedAt(new \DateTime('now'));
            $file = $form->get('file')->getData();
        if($file)
            {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('files_directory'), $fileName);
                $reclamation->setFile($fileName);
            }

        // Appel à la méthode persist() pour enregistrer les modifications en base de données
        $entityManager->persist($reclamation);
        $entityManager->flush();
       
    
        return $this->redirectToRoute('reclamation');
        }
        return $this->renderForm('reclamation/front/edit.html.twig',['form'=>$form]);
        
    }

    #[Route('/reclamation_delete/{id}', name: 'reclamation_delete')]
    public function delete(Reclamation $reclamation, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($reclamation);
        $entityManager->flush();
    
        return $this->redirectToRoute('reclamation');
    }
    
}