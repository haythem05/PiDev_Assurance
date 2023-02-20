<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contrat;
use App\Repository\ContratRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContratFormType;

class ContratController extends AbstractController
{
    #[Route('/contrat', name: 'app_contrat')]
    public function index(): Response
    {
        return $this->render('contrat/index.html.twig', [
            'controller_name' => 'ContratController',
        ]);
    }
    #[Route('/afficheContrat', name:'afficheContrat')]
    public function afficheContrat(ContratRepository $repository): Response
    {
    //utiliser la fonction findAll()
    $c=$repository->findAll();
        return $this->render('contrat/afficheContrat.html.twig', [
            'contrats' => $c
        ]);
}

#[Route('/addContrat', name: 'addContrat')]
    public function addContrat(Request $request)
    {
        $contrat = new contrat();
        $form = $this->createForm(ContratFormType::class, $contrat);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contrat);
            $entityManager->flush();

            return $this->redirectToRoute('afficheContrat');
                        }
                
                        return $this->render('contrat/addcontrat.html.twig', [
                            'f' => $form->createView(),
                        ]);
                    }



    #[Route('/updateContrat/{id}', name: 'updateContrat')]
               public function updateContrat(ContratRepository $repository,
               $id,ManagerRegistry $doctrine,Request $request)
               { //récupérer la categorie à modifier
                   $contrat= $repository->find($id);
                   $form=$this->createForm(ContratFormType::class,$contrat);
                   $form->handleRequest($request);
                   if ($form->isSubmitted() && $form->isValid() ) {
                     
                       $em =$doctrine->getManager();
                       $em->flush();
                       return $this->redirectToRoute("afficheContrat"); }
                       return $this->renderForm("contrat/addcontrat.html.twig", array("f" => $form));
                    }


                    #[Route('/suppContrat/{id}', name: 'suppContrat')]
                    public function suppContrat($id,ContratRepository $r,
                    ManagerRegistry $doctrine): Response
                    {//récupérer la classroom à supprimer
                    $contrat=$r->find($id);
                    //Action suppression
                     $em =$doctrine->getManager();
                     $em->remove($contrat);
                     $em->flush();
                    return $this->redirectToRoute('afficheContrat',);}
                    
                    
                    
                    
                    

}


