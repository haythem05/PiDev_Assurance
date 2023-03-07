<?php 
namespace App\Controller;
use App\Entity\AssuranceHabitation;
use App\Form\HabitationFormType;
use App\Repository\AssuranceHabitationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class AssuranceHabitationController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/affichehabitation', name: 'affichehabitation')]
    public function affichehabitation(AssuranceHabitationRepository $repository): Response
{
    $habitations = $repository->findAll();
    return $this->render('assurance_habitation/afficheh.html.twig', [
        'habitations' => $habitations,
    ]);
}

#[Route('/affichehabitationF', name: 'affichehabitationF')]
public function affichehabitationF(AssuranceHabitationRepository $repository): Response
{
$habitations = $repository->findAll();
return $this->render('assurance_habitation/affichehF.html.twig', [
    'habitations' => $habitations,
]);
}

    #[Route('/addH', name: 'addH')]
    public function addH(Request $request): Response
    {
        $AssuranceHabitation = new AssuranceHabitation();
        $form = $this->createForm(HabitationFormType::class, $AssuranceHabitation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the values entered in the form
            $nbPieceImmobilier = $AssuranceHabitation->getNbPieceImmobilier();
            $capitalImmobilier = $AssuranceHabitation->getCapitalImmobilier();
            $capitalMobilier = $AssuranceHabitation->getCapitalMobilier();
    
            // Calculate the "devis" value
            $devis = $nbPieceImmobilier+ $capitalImmobilier;
    
            // Set the "devis" value in the entity
            $AssuranceHabitation->setDevis($devis);
    
            // Persist the entity
            $this->entityManager->persist($AssuranceHabitation);
            $this->entityManager->flush();
    
            return $this->redirectToRoute('affichehabitationF');
        }
    
        return $this->render('assurance_habitation/addH.html.twig', [
            'f' => $form->createView(),
        ]);
    }
    
    #[Route('/updateH/{id}', name: 'updateH')]
    public function updateH(Request $request, AssuranceHabitation $assuranceHabitation): Response
    {
        $form = $this->createForm(HabitationFormType::class, $assuranceHabitation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('affichehabitation');
        }

        return $this->render('assurance_habitation/addH.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    #[Route('/suppH/{id}', name: 'suppH')]
    public function suppH(Request $request, AssuranceHabitation $assuranceHabitation): Response
    {
        $this->entityManager->remove($assuranceHabitation);
        $this->entityManager->flush();

        return $this->redirectToRoute('affichehabitation');
    }
    
    #[Route('/suppHF/{id}', name: 'suppHF')]
    public function suppHF(Request $request, AssuranceHabitation $assuranceHabitation): Response
    {
        $this->entityManager->remove($assuranceHabitation);
        $this->entityManager->flush();

        return $this->redirectToRoute('affichehabitationF');
    }


    /** PARTIE JSON */

 #[Route("/habitationdisplayJSON", name:"habitation_displayJSON")]
 public function displayHJSON(AssuranceHabitationRepository $repo, NormalizerInterface $normalizer)
 {
     $AssuranceHabitation = $repo->findAll();
     $AssuranceHabitationNormalises = $normalizer->normalize($AssuranceHabitation, 'json', ['groups' => "AssuranceHabitation"]);
     $json= json_encode($AssuranceHabitationNormalises);
     return new Response($json);
 }

 
    /**#[Route("/addJSONhabitation", name:"habitation_addJSON")]
    public function addHJSON(ManagerRegistry $doctrine, Request $req, NormalizerInterface $Normalizer)
    {
        $em = $doctrine->getManager();
        $AssuranceHabitation = new AssuranceHabitation();
        $AssuranceHabitation->setNbPieceImmobilier($req->get('nbPieceImmobilier'));
        $AssuranceHabitation->setCapitalImmobilier($req->get('capitalImmobilier'));
        $AssuranceHabitation->setCapitalMobilier($req->get('capitalMobilier'));
        $AssuranceHabitation->setIdClient($req->get('idClient'));
        $em->persist($AssuranceHabitation);
        $em->flush();

        $jsonContent = $Normalizer->normalize($AssuranceHabitation, 'json', ['groups' => 'AssuranceHabitation']);
        return new Response(json_encode($jsonContent));
    }*/

    #[Route("/addJSONhabitation", name:"habitation_addJSON")]
    public function addJSON(ManagerRegistry $doctrine, Request $req, NormalizerInterface $Normalizer)
    {
        $em = $doctrine->getManager();
        $AssuranceHabitation= new AssuranceHabitation();
        $AssuranceHabitation->setNbPieceImmobilier($req->get('nbPieceImmobilier') ?? 0);
        $AssuranceHabitation->setCapitalImmobilier($req->get('capitalImmobilier'));
        $AssuranceHabitation->setCapitalMobilier($req->get('capitalMobilier'));
        $AssuranceHabitation->setIdClient($req->get('idClient'));
        $em->persist($AssuranceHabitation);
        $em->flush();

        $jsonContent = $Normalizer->normalize($AssuranceHabitation, 'json', ['groups' => 'AssuranceHabitation']);
        return new Response(json_encode($jsonContent));
    }




    #[Route("HeditJSON/{id}", name:"habitation_editJSON")]
    public function editHJSON(ManagerRegistry $doctrine,Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $doctrine->getManager();
        $AssuranceHabitation = $em->getRepository(AssuranceHabitation::class)->find($id);
        $AssuranceHabitation->setNbPieceImmobilier($req->get('nbPieceImmobilier') ?? 0);
        $AssuranceHabitation->setCapitalImmobilier($req->get('capitalImmobilier'));
        $AssuranceHabitation->setCapitalMobilier($req->get('capitalMobilier'));
        $AssuranceHabitation->setIdClient($req->get('idClient'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($AssuranceHabitation, 'json', ['groups' => 'AssuranceHabitation']);
        return new Response("AssuranceHabitation updated successfully" . json_encode($jsonContent));
    }

    #[Route("HdeleteJSON/{id}", name:"habitaiton_deleteJSON")]
    public function deleteJSON(ManagerRegistry $doctrine, Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $doctrine->getManager();
        $AssuranceHabitation = $em->getRepository(AssuranceHabitation::class)->find($id);
        $em->remove($AssuranceHabitation);
        $em->flush();

        $jsonContent = $Normalizer->normalize($AssuranceHabitation, 'json', ['groups' => 'AssuranceHabitation']);
        return new Response("AssuranceHabitation deleted successfully" . json_encode($jsonContent));
    }

 ///TRI_HABITATION
 public function displaySortedByIdClientASC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['idClient' => 'ASC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByNbPieceImmobilierASC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['nbPieceImmobilier' => 'ASC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByCapitalImmobilierASC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['capitalImmobilier' => 'ASC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByCapitalMobilierASC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['capitalMobilier' => 'ASC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByDevisASC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['devis' => 'ASC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByIdClientDESC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['idClient' => 'DESC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByNbPieceImmobilierDESC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['nbPieceImmobilier' => 'DESC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByCapitalImmobilierDESC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['capitalImmobilier' => 'DESC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByCapitalMobilierDESC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['capitalMobilier' => 'DESC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }

 public function displaySortedByDevisDESC(ManagerRegistry $doctrine)
 {
     $habitations = $doctrine->getRepository(AssuranceHabitation::class)->findBy([], ['devis' => 'DESC']);

     return $this->render('assurance_habitation/afficheh.html.twig', [
         'habitations' => $habitations,
     ]);
 }


}
