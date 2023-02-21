<?php

namespace App\Controller;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormError;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use App\Repository\CategorieRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Form\CategorieFormType;



class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }

    #[Route('/afficheCategorie', name:'afficheCategorie')]
    public function afficheCategorie(CategorieRepository $repository): Response
    {
    //utiliser la fonction findAll()
    $c=$repository->findAll();
        return $this->render('categorie/afficheCategorie.html.twig', [
            'categories' => $c,
        ]);
}


#[Route('/suppCategorie/{id}', name: 'suppC')]
public function suppCategorie($id,CategorieRepository $r,
ManagerRegistry $doctrine): Response
{//récupérer la classroom à supprimer
$categorie=$r->find($id);
//Action suppression
 $em =$doctrine->getManager();
 $em->remove($categorie);
 $em->flush();
return $this->redirectToRoute('afficheCategorie',);}


 
#[Route('/addC', name: 'addCategorie')]
public function addCategorie(ManagerRegistry $doctrine, Request $request)
{
    $categorie = new Categorie();
    $form = $this->createForm(CategorieFormType::class, $categorie);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $file = $form->get('categorieImage')->getData();

        if ($file) {
            $fileName = uniqid().'.'.$file->guessExtension();

            try {
                $file->move(
                    $this->getParameter('categorie_images_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // Handle the exception
            }

            $categorie->setCategorieImage($fileName);
        }

        $entityManager = $doctrine->getManager();
        $entityManager->persist($categorie);
        $entityManager->flush();

        return $this->redirectToRoute('afficheCategorie');
    }

    return $this->renderForm('categorie/addCategorie.html.twig', [
        'form' => $form->createView(),
    ]);
}


#[Route('/updateCategorie/{id}', name: 'updateCategorie')]
public function updateCategorie(CategorieRepository $repository, $id, Request $request, EntityManagerInterface $entityManager)
{
    $categorie = $repository->find($id);
    $originalImage = $categorie->getCategorieImage(); // store the original image filename

    // create the form and handle the request
    $form = $this->createForm(CategorieFormType::class, $categorie);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('categorieImage')->getData(); // get the uploaded file

        if ($imageFile) {
            // generate a unique filename
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            // move the file to the images directory
            $imageFile->move(
                $this->getParameter('categorie_images_directory'),
                $newFilename
            );

            // update the entity with the new filename
            $categorie->setCategorieImage($newFilename);

            // delete the original image file, if it exists
            if ($originalImage) {
                $originalImagePath = $this->getParameter('categorie_images_directory').'/'.$originalImage;
                if (file_exists($originalImagePath)) {
                    unlink($originalImagePath);
                }
            }
        } else {
            // use the original image filename
            $categorie->setCategorieImage($originalImage);
        }

        // save the changes to the database
        $entityManager->flush();

        return $this->redirectToRoute('afficheCategorie');
    }

    return $this->render('categorie/addCategorie.html.twig', [
        'form' => $form->createView(),
    ]);
}


}



