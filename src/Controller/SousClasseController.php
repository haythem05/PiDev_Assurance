<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SousClasse;
use App\Form\SousClasseFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Repository\SousClasseRepository;

class SousClasseController extends AbstractController
{
    #[Route('/sous/classe', name: 'app_sous_classe')]
    public function index(): Response
    {
        return $this->render('sous_classe/index.html.twig', [
            'controller_name' => 'SousClasseController',
        ]);
    }

    #[Route('/sousclasse/add', name: 'sousclasse_add')]
    public function add(Request $request)
    {
        $sousclasse = new SousClasse();
        $form = $this->createForm(SousClasseFormType::class, $sousclasse);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sousclasse);
            $entityManager->flush();

            return $this->redirectToRoute('sousclasse_display');
        }

        return $this->render('sous_classe/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/sousclasse/display', name: 'sousclasse_display')]
    public function display(EntityManagerInterface $entityManager)
    {
        $sousclasse = $entityManager->getRepository(SousClasse::class)->findAll();

        return $this->render('sous_classe/display.html.twig', [
            'sousclasse' => $sousclasse,
        ]);
    }

    #[Route('/sousclasse/delete/{id}', name: 'sousclasse_delete')]
    public function delete(EntityManagerInterface $entityManager, int $id)
    {
        $sousclasse = $entityManager->getRepository(SousClasse::class)->find($id);
        if (!$sousclasse) {
            throw $this->createNotFoundException(sprintf('No SousClasse found with id %s', $id));
        }

        $entityManager->remove($sousclasse);
        $entityManager->flush();

        return $this->redirectToRoute('sousclasse_display');
    }

    #[Route('/sousclasse/edit/{id}', name: 'sousclasse_edit')]
    public function edit(Request $request, SousClasse $sousclasse): Response
    {
        $form = $this->createForm(SousClasseFormType::class, $sousclasse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sousclasse_display');
        }

        return $this->render('sous_classe/edit.html.twig', [
            'sousclasse' => $sousclasse,
            'form' => $form->createView(),
        ]);
    }

    /** PARTIE JSON */
    #[Route("/sousclasse/displayJSON", name:"sousclasse_displayJSON")]
    public function displayJSON(SousClasseRepository $repo, NormalizerInterface $normalizer)
    {
        $sousclasse = $repo->findAll();
        $sousclasseNormalises = $normalizer->normalize($sousclasse, 'json', ['groups' => "sousclasse"]);
        $json= json_encode($sousclasseNormalises);
        return new Response($json);
    }

    #[Route("/sousclasse/addJSON", name:"sousclasse_addJSON")]
    public function addJSON(Request $req, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $sousclasse = new SousClasse();
        $sousclasse->setCodeSousClasse($req->get('codeSousClasse'));
        $sousclasse->setNomSousClasse($req->get('nomSousClasse'));
        $em->persist($sousclasse);
        $em->flush();

        $jsonContent = $Normalizer->normalize($sousclasse, 'json', ['groups' => 'sousclasse']);
        return new Response(json_encode($jsonContent));
    }

    #[Route("/sousclasse/editJSON/{id}", name:"sousclasse_editJSON")]
    public function editJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $sousclasse = $em->getRepository(SousClasse::class)->find($id);
        $sousclasse->setCodeSousClasse($req->get('codeSousClasse'));
        $sousclasse->setNomSousClasse($req->get('nomSousClasse'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($sousclasse, 'json', ['groups' => 'sousclasse']);
        return new Response("Sous classe updated successfully" . json_encode($jsonContent));
    }

    #[Route("/sousclasse/deleteJSON/{id}", name:"sousclasse_deleteJSON")]
    public function deleteJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $sousclasse = $em->getRepository(SousClasse::class)->find($id);
        $em->remove($sousclasse);
        $em->flush();

        $jsonContent = $Normalizer->normalize($sousclasse, 'json', ['groups' => 'sousclasse']);
        return new Response("Sous classe deleted successfully" . json_encode($jsonContent));
    }
}
