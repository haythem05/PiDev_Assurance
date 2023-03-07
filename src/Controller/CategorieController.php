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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;



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


#[Route('/afficheCategorieF', name:'afficheCategorieF')]
public function afficheCategorieFront(CategorieRepository $repository): Response
{
//utiliser la fonction findAll()
$c=$repository->findAll();
    return $this->render('categorie/afficheCategorieF.html.twig', [
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
public function addCategorie(ManagerRegistry $doctrine, Request $request, MailerInterface $mailer)
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


 /** PARTIE JSON */
 #[Route("/categorie/displayJSON", name:"categorie_displayJSON")]
 public function displayJSON(CategorieRepository $repo, NormalizerInterface $normalizer)
 {
     $categorie = $repo->findAll();
     $categorieNormalises = $normalizer->normalize($categorie, 'json', ['groups' => "categorie"]);
     $json= json_encode($categorieNormalises);
     return new Response($json);
 }

    #[Route("/addJSON", name:"categorie_addJSON")]
    public function addJSON(ManagerRegistry $doctrine, Request $req, NormalizerInterface $Normalizer)
    {
        $em = $doctrine->getManager();
        $categorie = new Categorie();
        $categorie->setNom($req->get('nom'));
        $categorie->setCategorieImage($req->get('categorieImage'));
        $categorie->setDescription($req->get('description'));
        $em->persist($categorie);
        $em->flush();

        $jsonContent = $Normalizer->normalize($categorie, 'json', ['groups' => 'categorie']);
        return new Response(json_encode($jsonContent));
    }

    #[Route("/categorie/editJSON/{id}", name:"mouvement_editJSON")]
    public function editJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $doctrine->getManager();
        $categorie = $em->getRepository(categorie::class)->find($id);
        $categorie->setNom($req->get('nom'));
        $categorie->setCategorieImage($req->get('categorieImage'));
        $categorie->setDescription($req->get('description'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($categorie, 'json', ['groups' => 'categorie']);
        return new Response("categorie updated successfully" . json_encode($jsonContent));
    }

    #[Route("/categorie/deleteJSON/{id}", name:"categorie_deleteJSON")]
    public function deleteJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $doctrine->getManager();
        $categorie = $em->getRepository(categorie::class)->find($id);
        $em->remove($categorie);
        $em->flush();

        $jsonContent = $Normalizer->normalize($categorie, 'json', ['groups' => 'categorie']);
        return new Response("categorie deleted successfully" . json_encode($jsonContent));
    }






}



