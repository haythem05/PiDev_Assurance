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
        $originalFile = $reclamation->getFile(); // store the original file filename
        $form = $this->createForm(ReclamationFormType::class, $reclamation);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('file')->getData(); // get the uploaded file
        
            if ($file) {
                // generate a unique filename
                $newFilename = md5(uniqid()) . '.' . $file->guessExtension();
        
                // move the file to the files directory
                $file->move(
                    $this->getParameter('files_directory'),
                    $newFilename
                );
        
                // update the entity with the new filename
                $reclamation->setFile($newFilename);
        
                // delete the original file, if it exists
                if ($originalFile) {
                    $originalFilePath = $this->getParameter('files_directory') . '/' . $originalFile;
                    if (file_exists($originalFilePath)) {
                        unlink($originalFilePath);
                    }
                }
            } else {
                // use the original file filename
                $reclamation->setFile($originalFile);
            }
        
            $reclamation->setCreatedAt(new \DateTime('now'));
        
            // save and execute the changes to the database
            $entityManager->persist($reclamation);
            $entityManager->flush();
        
            return $this->redirectToRoute('reclamation');
        }
        
        return $this->renderForm('reclamation/front/new.html.twig', ['form' => $form]);
        
    }

    #[Route('/reclamation_delete/{id}', name: 'reclamation_delete')]
    public function delete(Reclamation $reclamation, EntityManagerInterface $entityManager)
    {
        $entityManager->remove($reclamation);
        $entityManager->flush();
    
        return $this->redirectToRoute('reclamation');
    }
    
}