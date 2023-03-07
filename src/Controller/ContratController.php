<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Form\ContratFormType;
use App\Repository\ContratRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Psr\Log\LoggerInterface;

class ContratController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/contrat', name: 'app_categorie')]
    public function index(): Response
    {
        return $this->render('contrat/index.html.twig', [
            'controller_name' => 'ContratController',
        ]);
    }

/**
     * @Route("/searchf", name="searchf")
     */
    public function search(Request $request,ManagerRegistry $doctrine)
    {
        $marque =  $request->query->get('marque');
        $prixMin = $request->query->get('prixMin');
        $prixMax = $request->query->get('prixMax');

        $c = $doctrine
            ->getRepository(contrat::class)
            ->searchContrat($marque, $prixMin, $prixMax);

        return $this->render('contrat/affichecontratF.html.twig', [
            'contrats' => $c,
        ]);
    }





    #[Route('/contrat/search', name: 'search_contrat')]
    public function searchContrat(Request $request, ContratRepository $repository): Response
{
    $query = $request->request->get('query');
    $c = $repository->searchByMarque($query);
    return $this->render('contrat/search.html.twig', [
        'contrat' => $c
    ]);
}



    #[Route('/afficheContrat', name:'afficheContrat')]
    public function afficheContrat(ContratRepository $repository): Response
    {
    //utiliser la fonction findAll()
    $c=$repository->findAll();
        return $this->render('contrat/afficheContrat.html.twig', [
            'contrat' => $c,
        ]);
}

#[Route('/afficheContratF', name:'afficheContratF')]
public function afficheContratF(ContratRepository $repository): Response
{
//utiliser la fonction findAll()
$c=$repository->findAll();
    return $this->render('contrat/afficheContratF.html.twig', [
        'contrats' => $c,
    ]);
}


#[Route('/addContrat', name:'addContrat')]
public function addContrat(Request $request): Response
{
    $contrat = new Contrat();
    $form = $this->createForm(ContratFormType::class, $contrat);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $nbPlace = $contrat->getNbPlace();
    
        $valeurCatalogue = $contrat->getValeurCatalogue();
        $dateCirculation = $contrat->getDateCirculation()->format('Y-m-d');

        $price = $nbPlace * 1000 + ((strtotime(date('Y-m-d')) - strtotime($dateCirculation)) / 86400) * ($valeurCatalogue / 1000);

       

        $contrat->setPrix($price);

        $entityManager = $this->doctrine->getManager();
        $entityManager->persist($contrat);
        $entityManager->flush();

        return $this->redirectToRoute('afficheContrat');
    }

    return $this->render('contrat/addcontrat.html.twig', [
        'f' => $form->createView(),
    ]);
}


    
    #[Route('/updateContrat/{id}', name: 'updateContrat')]
    public function updateContrat(ContratRepository $repository, $id, Request $request): Response
    {
        $contrat = $repository->find($id);
        $form = $this->createForm(ContratFormType::class, $contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->doctrine->getManager();
            $em->flush();

            return $this->redirectToRoute('afficheContrat');
        }

        return $this->renderForm('contrat/addcontrat.html.twig', [
            'f' => $form,
        ]);
    }

    #[Route('/suppContrat/{id}', name: 'suppContrat')]
    public function suppContrat($id, ContratRepository $r): Response
    {
        $contrat = $r->find($id);
        $em = $this->doctrine->getManager();
        $em->remove($contrat);
        $em->flush();

        return $this->redirectToRoute('afficheContrat');
    }


   

    //JSON

    #[Route("/ContratdisplayJSON", name:"contart_displayJSON")]
    public function displayCJSON(ContratRepository $repo, NormalizerInterface $normalizer)
    {
        $contrat = $repo->findAll();
        $ContratNormalises = $normalizer->normalize($contrat, 'json', ['groups' => "contrat"]);
        $json= json_encode($ContratNormalises);
        return new Response($json);
    }
   
       #[Route("/addJSONcontrat", name:"contrat_addJSON")]
       public function addCJSON(ManagerRegistry $doctrine, Request $req, NormalizerInterface $Normalizer)
       {
           $em = $doctrine->getManager();
           $contrat = new contrat();
           $contrat->setIdClient($req->get('idClient'));

           $dateDebut= new \DateTime($req->get('dateDebut'));
           $contrat->setDateDebut($dateDebut);

           $dateFin= new \DateTime($req->get('dateFin'));
           $contrat->setDateFin($dateFin);

           $DateCirculation= new \DateTime($req->get('DateCirculation'));
           $contrat->setDateCirculation($DateCirculation);


           $contrat->setModele($req->get('modele'));

           $contrat->setNbPlace($req->get('nbPlace'));

           $contrat->setMarque($req->get('marque'));

           $contrat->setValeurCatalogue($req->get('valeurCatalogue'));
           $contrat->setPrix($req->get('prix'));
           $contrat->setAvantages($req->get('avantages'));
           $em->persist($contrat);
           $em->flush();
   
           $jsonContent = $Normalizer->normalize($contrat,'json',['groups' => 'contrat']);
           return new Response(json_encode($jsonContent));
       }
   

   
       #[Route("CeditJSON/{id}", name:"contrat_editJSON")]
       public function editCJSON(ManagerRegistry $doctrine, Request $req, $id,NormalizerInterface $Normalizer)
       {


           $em = $doctrine->getManager();
          
        
           $contrat= $em->getRepository(contrat::class)->find($id);
           $contrat->setIdClient($req->get('idClient'));

           $dateDebut= new \DateTime($req->get('dateDebut'));
           $contrat->setDateDebut($dateDebut);

           $dateFin= new \DateTime($req->get('dateFin'));
           $contrat->setDateFin($dateFin);

           $DateCirculation= new \DateTime($req->get('DateCirculation'));
           $contrat->setDateCirculation($DateCirculation);


           $contrat->setModele($req->get('modele'));

           $contrat->setNbPlace($req->get('nbPlace'));

           $contrat->setMarque($req->get('marque'));

           $contrat->setValeurCatalogue($req->get('valeurCatalogue'));
           $contrat->setPrix($req->get('prix'));
           $contrat->setAvantages($req->get('avantages'));
           $em->flush();
   
           $jsonContent = $Normalizer->normalize($contrat, 'json', ['groups' => 'contrat']);
           return new Response("contrat updated successfully" . json_encode($jsonContent));
       }
   
       #[Route("CdeleteJSON/{id}", name:"contrat_deleteJSON")]
       public function deleteCJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
       {
           $em = $doctrine->getManager();
           $contrat = $em->getRepository(contrat::class)->find($id);
           $em->remove($contrat);
           $em->flush();
   
           $jsonContent = $Normalizer->normalize($contrat, 'json', ['groups' => 'contrat']);
           return new Response("contrat deleted successfully" . json_encode($jsonContent));
       }
}
