<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Mouvement;
use App\Form\MouvementFormType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Repository\MouvementRepository;
use Stripe\Stripe;
use Stripe\Charge;

class MouvementController extends AbstractController
{
    #[Route('/mouvement', name: 'app_mouvement')]
    public function index(): Response
    {
        return $this->render('mouvement/index.html.twig', [
            'controller_name' => 'MouvementController',
        ]);
    }

    #[Route('/mouvement/add', name: 'mouvement_add')]
    public function add(Request $request)
    {
        $mouvement = new Mouvement();
        $form = $this->createForm(MouvementFormType::class, $mouvement);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $compteDebit = $mouvement->getCompteDebit();
            if($compteDebit->getSoldeCompte() >= $mouvement->getMontantMouvement())
            {
                $nouveauSoldeD = $compteDebit->getSoldeCompte() - $mouvement->getMontantMouvement();
                $compteDebit->setSoldeCompte($nouveauSoldeD);
                $compteCredit = $mouvement->getCompteCredit();
                $nouveauSoldeC = $compteCredit->getSoldeCompte() + $mouvement->getMontantMouvement();
                $compteCredit->setSoldeCompte($nouveauSoldeC);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($mouvement);
                $entityManager->flush();
                return $this->redirectToRoute('mouvement_display');
            }
            else
            {
                $this->addFlash('error', 'Le solde du compte debit est insuffisant.');
                return $this->render('mouvement/add.html.twig', [
                    'form' => $form->createView(),
                ]);
            }       
        }

        return $this->render('mouvement/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/mouvement/display', name: 'mouvement_display')]
    public function display(EntityManagerInterface $entityManager)
    {
        $mouvement = $entityManager->getRepository(Mouvement::class)->findAll();

        return $this->render('mouvement/display.html.twig', [
            'mouvement' => $mouvement,
        ]);
    }

    #[Route('/mouvement/delete/{id}', name: 'mouvement_delete')]
    public function delete(EntityManagerInterface $entityManager, int $id)
    {
        $mouvement = $entityManager->getRepository(Mouvement::class)->find($id);
        if (!$mouvement) {
            throw $this->createNotFoundException(sprintf('No Mouvement found with id %s', $id));
        }

        $entityManager->remove($mouvement);
        $entityManager->flush();

        return $this->redirectToRoute('mouvement_display');
    }

    #[Route('/mouvement/edit/{id}', name: 'mouvement_edit')]
    public function edit(Request $request, Mouvement $mouvement): Response
    {
        $compteDebit = $mouvement->getCompteDebit();
        $compteCredit = $mouvement->getCompteCredit();
        $compteDebit->setSoldeCompte($compteDebit->getSoldeCompte() + $mouvement->getMontantMouvement());
        $compteCredit->setSoldeCompte($compteCredit->getSoldeCompte() - $mouvement->getMontantMouvement());
        $form = $this->createForm(MouvementFormType::class, $mouvement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $compteDebit = $mouvement->getCompteDebit();
            if($compteDebit->getSoldeCompte() >= $mouvement->getMontantMouvement())
            {
                $nouveauSoldeD = $compteDebit->getSoldeCompte() - $mouvement->getMontantMouvement();
                $compteDebit->setSoldeCompte($nouveauSoldeD);
                $compteCredit = $mouvement->getCompteCredit();
                $nouveauSoldeC = $compteCredit->getSoldeCompte() + $mouvement->getMontantMouvement();
                $compteCredit->setSoldeCompte($nouveauSoldeC);
                $this->getDoctrine()->getManager()->flush();
                return $this->redirectToRoute('mouvement_display');
            }
            else
            {
                $this->addFlash('error', 'Le solde du compte debit est insuffisant.');
                return $this->render('mouvement/edit.html.twig', [
                    'mouvement' => $mouvement,
                    'form' => $form->createView(),
                ]);
            } 
            
        }

        return $this->render('mouvement/edit.html.twig', [
            'mouvement' => $mouvement,
            'form' => $form->createView(),
        ]);
    }

    /** PARTIE JSON */
    #[Route("/mouvement/displayJSON", name:"mouvement_displayJSON")]
    public function displayJSON(MouvementRepository $repo, NormalizerInterface $normalizer)
    {
        $mouvement = $repo->findAll();
        $mouvementNormalises = $normalizer->normalize($mouvement, 'json', ['groups' => "mouvement"]);
        $json= json_encode($mouvementNormalises);
        return new Response($json);
    }

    #[Route("/mouvement/addJSON", name:"mouvement_addJSON")]
    public function addJSON(Request $req, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $mouvement = new Mouvement();
        $mouvement->setReferenceMouvement($req->get('referenceMouvement'));
        $dateMouvement = new \DateTime($req->get('dateMouvement'));
        $mouvement->setDateMouvement($dateMouvement);
        $mouvement->setMontantMouvement($req->get('montantMouvement'));
        $em->persist($mouvement);
        $em->flush();

        $jsonContent = $Normalizer->normalize($mouvement, 'json', ['groups' => 'mouvement']);
        return new Response(json_encode($jsonContent));
    }

    #[Route("/mouvement/editJSON/{id}", name:"mouvement_editJSON")]
    public function editJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $mouvement = $em->getRepository(Mouvement::class)->find($id);
        $mouvement->setReferenceMouvement($req->get('referenceMouvement'));
        $dateMouvement = new \DateTime($req->get('dateMouvement'));
        $mouvement->setDateMouvement($dateMouvement);
        $mouvement->setMontantMouvement($req->get('montantMouvement'));
        $em->flush();

        $jsonContent = $Normalizer->normalize($mouvement, 'json', ['groups' => 'mouvement']);
        return new Response("Mouvement updated successfully" . json_encode($jsonContent));
    }

    #[Route("/mouvement/deleteJSON/{id}", name:"mouvement_deleteJSON")]
    public function deleteJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $mouvement = $em->getRepository(Mouvement::class)->find($id);
        $em->remove($mouvement);
        $em->flush();

        $jsonContent = $Normalizer->normalize($mouvement, 'json', ['groups' => 'mouvement']);
        return new Response("Mouvement deleted successfully" . json_encode($jsonContent));
    }

    /**FONCTION PAIEMENT STRIPE */
    public function pay(Request $request, Mouvement $mouvement, EntityManagerInterface $entityManager)
    {
        // Configurer la clé secrète Stripe (à obtenir dans le tableau de bord Stripe)
        Stripe::setApiKey('sk_test_51Mi1UQFkmBkIAttrDYvG9Q1bG5iEi0365lCfFlN1N2DG54zxUXb8aqclnKYJAi2ep21sU8klcPbdaDIimUtjn5pO00Y1EOQafl');

        // Obtenir les informations de paiement à partir du formulaire
        $token = $_POST['stripeToken'];
        $amount = $mouvement->getMontantMouvement() * 100; // Le montant doit être en cents
        try {
            // Effectuer le paiement via Stripe
            Charge::create([
                'amount' => $amount,
                'currency' => 'eur',
                'description' => 'Paiement pour le mouvement ' . $mouvement->getReferenceMouvement(),
                'source' => $token,
            ]);

            // Supprimer le mouvement
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mouvement);
            $entityManager->flush();

            // Afficher un message de confirmation
            $this->addFlash('success', 'Paiement effectué avec succès !' );

            // Rediriger vers la vue display.html.twig
            return $this->redirectToRoute('mouvement_display');
        } catch (\Stripe\Exception\CardException $e) {
            // Afficher un message d'erreur
            $this->addFlash('error', $e->getMessage());

            // Rediriger vers la vue display.html.twig
            return $this->redirectToRoute('mouvement_display');
        }
    }
}
