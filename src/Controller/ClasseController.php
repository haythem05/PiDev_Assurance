<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Classe;
use App\Form\ClasseFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Repository\ClasseRepository;

class ClasseController extends AbstractController
{
    #[Route('/classe', name: 'app_classe')]
    public function index(): Response
    {
        return $this->render('classe/index.html.twig', [
            'controller_name' => 'ClasseController',
        ]);
    }

    #[Route('/classe/add', name: 'classe_add')]
    public function add(Request $request)
    {
        $classe = new Classe();
        $form = $this->createForm(ClasseFormType::class, $classe);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($classe);
            $entityManager->flush();

            return $this->redirectToRoute('classe_display');
        }

        return $this->render('classe/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/classe/display', name: 'classe_display')]
    public function display(EntityManagerInterface $entityManager)
    {
        $classe = $entityManager->getRepository(Classe::class)->findAll();

        return $this->render('classe/display.html.twig', [
            'classe' => $classe,
        ]);
    }

    #[Route('/classe/delete/{id}', name: 'classe_delete')]
    public function delete(EntityManagerInterface $entityManager, int $id)
    {
        $classe = $entityManager->getRepository(Classe::class)->find($id);
        if (!$classe) {
            throw $this->createNotFoundException(sprintf('No classe found with id %s', $id));
        }

        $entityManager->remove($classe);
        $entityManager->flush();

        return $this->redirectToRoute('classe_display');
    }

    #[Route('/classe/edit/{id}', name: 'classe_edit')]
    public function edit(Request $request, Classe $classe): Response
    {
        $form = $this->createForm(ClasseFormType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('classe_display');
        }

        return $this->render('classe/edit.html.twig', [
            'classe' => $classe,
            'form' => $form->createView(),
        ]);
    }

    /** PARTIE JSON */
    #[Route("/classe/displayJSON", name:"classe_displayJSON")]
    public function displayJSON(ClasseRepository $repo, NormalizerInterface $normalizer)
    {
        $classe = $repo->findAll();
        $classeNormalises = $normalizer->normalize($classe, 'json', ['groups' => "classe"]);
        $json = json_encode($classeNormalises);
        return new Response($json);
    }

    #[Route("/classe/addJSON", name:"classe_addJSON")]
    public function addJSON(Request $req, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $classe = new Classe();
        $classe->setIdClasse($req->get('idClasse'));
        $classe->setNomClasse($req->get('nomClasse'));
        $em->persist($classe);
        $em->flush();

        $jsonContent = $Normalizer->normalize($classe, 'json', ['groups' => 'classe']);
        return new Response(json_encode($jsonContent));
    }

    #[Route("/classe/editJSON/{id}", name:"classe_editJSON")]
    public function editJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository(Classe::class)->find($id);
        $classe->setIdClasse($req->get('idClasse'));
        $classe->setNomClasse($req->get('nomClasse'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($classe, 'json', ['groups' => 'classe']);
        return new Response("Classe updated successfully" . json_encode($jsonContent));
    }

    #[Route("/classe/deleteJSON/{id}", name:"classe_deleteJSON")]
    public function deleteJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository(Classe::class)->find($id);
        $em->remove($classe);
        $em->flush();

        $jsonContent = $Normalizer->normalize($classe, 'json', ['groups' => 'classe']);
        return new Response("Classe deleted successfully" . json_encode($jsonContent));
    }
}
