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
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;


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
            $tel = $form->get('tel')->getData();
            $phoneUtil = PhoneNumberUtil::getInstance();
            $numberProto = $phoneUtil->parse($tel, 'TN'); // Remplacez "FR" par le code ISO du pays du numéro de téléphone saisi
            $formattedTel = $phoneUtil->format($numberProto, PhoneNumberFormat::E164); // Le format E164 inclut l'indicatif du pays
    
            // Créez une nouvelle réclamation avec le numéro de téléphone formaté
            $reclamation->setTel($formattedTel);
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
    #[Route('/TriPAB', name: 'app_tri_nom')]
    public function Tri(ReclamationRepository $repository)
    {
        $reclamation = $repository->orderByNomASC();
        return $this->render("reclamation/front/reclamation_index.html.twig", array("reclamations" => $reclamation));
    }

    #[Route('/sms/{id}', name: 'app_sms')]
    function envoyerSMS(ReclamationRepository $repository, $id, Request $request, ManagerRegistry $doctrine)
    {
        $reclamation = $repository->find($id);
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation non trouvée.');
        }
    
        // Récupération du numéro de téléphone du client
        $tel = $reclamation->getTel();
        if (!$tel) {
            throw $this->createNotFoundException('Numéro de téléphone non trouvé.');
        }
    
        // Envoi du SMS
        $repository->sms($tel);
    
        $em = $doctrine->getManager();
        $em->flush();
    
        $this->addFlash('danger', 'SMS envoyé avec succès');
    
        return $this->redirectToRoute('reclamation');
    }
}