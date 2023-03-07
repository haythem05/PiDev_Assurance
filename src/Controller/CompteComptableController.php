<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CompteComptable;
use App\Form\CompteComptableFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Repository\CompteComptableRepository;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use PHPExcel;
use PHPExcel_IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class CompteComptableController extends AbstractController
{
    #[Route('/comptecomptable', name: 'app_compte_comptable')]
    public function index(): Response
    {
        return $this->render('compte_comptable/index.html.twig', [
            'controller_name' => 'CompteComptableController',
        ]);
    }

    #[Route('/comptecomptable/add', name: 'comptecomptable_add')]
    public function add(Request $request)
    {
        $comptecomptable = new CompteComptable();
        $form = $this->createForm(CompteComptableFormType::class, $comptecomptable);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comptecomptable);
            $entityManager->flush();

            return $this->redirectToRoute('comptecomptable_display');
        }

        return $this->render('compte_comptable/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/comptecomptable/display', name: 'comptecomptable_display')]
    public function display(EntityManagerInterface $entityManager)
    {
        $comptecomptable = $entityManager->getRepository(CompteComptable::class)->findAll();

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptecomptable,
        ]);
    }

    #[Route('/comptecomptable/delete/{id}', name: 'comptecomptable_delete')]
    public function delete(EntityManagerInterface $entityManager, int $id)
    {
        $comptecomptable = $entityManager->getRepository(CompteComptable::class)->find($id);
        if (!$comptecomptable) {
            throw $this->createNotFoundException(sprintf('No CompteComptable found with id %s', $id));
        }

        $entityManager->remove($comptecomptable);
        $entityManager->flush();

        return $this->redirectToRoute('comptecomptable_display');
    }

    #[Route('/comptecomptable/edit/{id}', name: 'comptecomptable_edit')]
    public function edit(Request $request, CompteComptable $comptecomptable): Response
    {
        $form = $this->createForm(CompteComptableFormType::class, $comptecomptable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('comptecomptable_display');
        }

        return $this->render('compte_comptable/edit.html.twig', [
            'comptecomptable' => $comptecomptable,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/comptecomptable/search', name: 'search_compte')]
    public function searchCompte(Request $request, CompteComptableRepository $repository): Response
{
    $query = $request->request->get('query');
    $comptes = $repository->searchByNumero($query);
    return $this->render('compte_comptable/search.html.twig', [
        'comptecomptable' => $comptes
    ]);
}

    #[Route('/comptecomptable/generate_excel', name: 'generate_excel')]
    public function generateExcelAction()
    {
        // Get all accounts
        $accounts = $this->getDoctrine()->getRepository(CompteComptable::class)->findAll();
    
        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();
    
        // Set document properties
        $spreadsheet->getProperties()
                    ->setCreator("Your Name")
                    ->setLastModifiedBy("Your Name")
                    ->setTitle("Compte Comptable List")
                    ->setSubject("Compte Comptable List")
                    ->setDescription("List of all Compte Comptable accounts.")
                    ->setKeywords("Compte Comptable accounts")
                    ->setCategory("Accounts");
                         
        // Add headers
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Numero Compte')
            ->setCellValue('B1', 'Nom Compte')
            ->setCellValue('C1', 'Solde Compte')
            ->setCellValue('D1', 'Code Sous-Classe')
            ->setCellValue('E1', 'Nom Sous-Classe')
            ->setCellValue('F1', 'Nom Classe');
                   
        // Add data
        $i = 2;
        foreach ($accounts as $account) {
            $codeSousClasse = $account->getCodeCompte()->getCodeSousClasse();
            $nomSousClasse = $account->getCodeCompte()->getNomSousClasse();
            $nomClasse = $account->getCodeCompte()->getClasseSousClasse()->getNomClasse();
        
            $sheet->setCellValue('A'.$i, $account->getNumeroCompte())
                ->setCellValue('B'.$i, $account->getNomCompte())
                ->setCellValue('C'.$i, $account->getSoldeCompte())
                ->setCellValue('D'.$i, $codeSousClasse)
                ->setCellValue('E'.$i, $nomSousClasse)
                ->setCellValue('F'.$i, $nomClasse);
            $i++;
        }
    
        // Set column widths
        $sheet->getColumnDimension('A')->setWidth(15);
        $sheet->getColumnDimension('B')->setWidth(30);
        $sheet->getColumnDimension('C')->setWidth(15);
        $sheet->getColumnDimension('D')->setWidth(15);
        $sheet->getColumnDimension('E')->setWidth(30);
        $sheet->getColumnDimension('F')->setWidth(30);
    
        // Rename worksheet
        $sheet->setTitle('Accounts');
    
        // Create new writer
        $writer = new Xlsx($spreadsheet);
    
        // Create temporary file
        $filename = tempnam(sys_get_temp_dir(), 'compte_comptable_').'.xlsx';
    
        // Write file
        $writer->save($filename);
    
        // Create response
        $response = new BinaryFileResponse($filename);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, 'compte_comptable.xlsx');
    
        return $response;
    }

    public function displaySortedByCodeASC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['codeCompte' => 'ASC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedByNumeroASC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['numeroCompte' => 'ASC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedByNomASC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['nomCompte' => 'ASC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedBySoldeASC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['soldeCompte' => 'ASC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedByTypeASC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['typeCompte' => 'ASC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedByCodeDESC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['codeCompte' => 'DESC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedByNumeroDESC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['numeroCompte' => 'DESC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedByNomDESC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['nomCompte' => 'DESC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedBySoldeDESC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['soldeCompte' => 'DESC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    public function displaySortedByTypeDESC()
    {
        $comptesComptables = $this->getDoctrine()->getRepository(CompteComptable::class)->findBy([], ['typeCompte' => 'DESC']);

        return $this->render('compte_comptable/display.html.twig', [
            'comptecomptable' => $comptesComptables,
        ]);
    }

    #[Route('/comptecomptable/stats', name: 'comptecomptable_stats')]
    public function stats(CompteComptableRepository $compteComptableRepository)
    {
    $stats = $compteComptableRepository->getStatsByCode();

    return $this->render('compte_comptable/stats.html.twig', [
        'stats' => $stats,
    ]);
    }

    /** PARTIE JSON */
    #[Route("/comptecomptable/displayJSON", name:"comptecompteable_displayJSON")]
    public function displayJSON(CompteComptableRepository $repo, NormalizerInterface $normalizer)
    {
        $comptecomptable = $repo->findAll();
        $comptecomptableNormalises = $normalizer->normalize($comptecomptable, 'json', ['groups' => "comptecomptable"]);
        $json= json_encode($comptecomptableNormalises);
        return new Response($json);
    }

    #[Route("/comptecomptable/addJSON", name:"comptecomptable_addJSON")]
    public function addJSON(Request $req, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $comptecomptable = new CompteComptable();
        $comptecomptable->setNumeroCompte($req->get('numeroCompte'));
        $comptecomptable->setNomCompte($req->get('nomCompte'));
        $comptecomptable->setSoldeCompte($req->get('soldeCompte'));
        $comptecomptable->setTypeCompte($req->get('typeCompte'));
        $em->persist($comptecomptable);
        $em->flush();

        $jsonContent = $Normalizer->normalize($comptecomptable, 'json', ['groups' => 'comptecomptable']);
        return new Response(json_encode($jsonContent));
    }

    #[Route("/comptecomptable/editJSON/{id}", name:"comptecomptable_editJSON")]
    public function editJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $comptecomptable = $em->getRepository(CompteComptable::class)->find($id);
        $comptecomptable->setNumeroCompte($req->get('numeroCompte'));
        $comptecomptable->setNomCompte($req->get('nomCompte'));
        $comptecomptable->setSoldeCompte($req->get('soldeCompte'));
        $comptecomptable->setTypeCompte($req->get('typeCompte'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($comptecomptable, 'json', ['groups' => 'comptecomptable']);
        return new Response("CompteComptable updated successfully" . json_encode($jsonContent));
    }

    #[Route("/comptecomptable/deleteJSON/{id}", name:"comptecomptable_deleteJSON")]
    public function deleteJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $comptecomptable = $em->getRepository(CompteComptable::class)->find($id);
        $em->remove($comptecomptable);
        $em->flush();

        $jsonContent = $Normalizer->normalize($comptecomptable, 'json', ['groups' => 'comptecomptable']);
        return new Response("Compte comptable deleted successfully" . json_encode($jsonContent));
    }
}
