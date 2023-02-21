<?php

namespace App\Controller;
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
        'form' => $form,
    ]);
}


#[Route('/updateCategorie/{id}', name: 'updateCategorie')]
               public function updateCategorie(CategorieRepository $repository,
               $id,ManagerRegistry $doctrine,Request $request)
               { //récupérer la categorie à modifier
                   $categorie= $repository->find($id);
                   $form=$this->createForm(CategorieFormType::class,$categorie);
                   $form->handleRequest($request);
                   if ($form->isSubmitted()&& $form->isValid() ) {
                     
                       $em =$doctrine->getManager();
                       $em->flush();
                       return $this->redirectToRoute("afficheCategorie"); }
                      return $this->renderForm("categorie/addCategorie.html.twig", array("f" => $form));

}
}



