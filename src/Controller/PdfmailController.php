<?php
namespace App\Controller;
use App\Entity\Contrat;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Psr\Log\LoggerInterface;

class ContractController extends AbstractController
{
    /**
     * @Route("/contrat", name="contrat")
     */
    public function index(): Response
    {
        // Retrieve contrat from database
        $contrat = $this->getDoctrine()->getRepository(Contrat::class)->findAll();

        return $this->render('contrat/index.html.twig', [
            'contrats' => $contrat,
        ]);
    }


 #[Route('contract_pdf/{id}', name: 'contract_pdf')]
 public function generatePdf(Request $request, Contrat $contrat, MailerInterface $mailer): Response
 {
     // Configure PDF options
     $options = new Options();
     $options->set('defaultFont', 'Helvetica');
     $options->setIsRemoteEnabled(true);
 
     // Create new PDF instance

     $dompdf = new Dompdf($options);
 
     // Retrieve contrat details to include in PDF
     $content = $this->renderView('contrat/pdf.html.twig', [
         'contrat' => $contrat,
     ]);
 
     // Load HTML content into PDF
     $dompdf->loadHtml($content);
 
     // Render PDF
     $dompdf->render();
 
     // Get PDF contents as string
     $pdfContent = $dompdf->output();
 
     // Save PDF to a file on the server
     $pdfFilename = 'contract_details_' . $contrat->getId() . '.pdf';
     $pdfPath = $this->getParameter('kernel.project_dir') . '/public/' . $pdfFilename;
     file_put_contents($pdfPath, $pdfContent);
 
     // Check if file was created
     if (file_exists($pdfPath)) {
         // Create email message with PDF attachment
         $email = (new Email())
             ->from('haythemloueti0@gmail.com')
             ->to('haythem.loueti@esprit.tn')
             ->subject('Contrat Details')
             ->html('<p>Please find attached the details of your contrat.</p>')
             ->attachFromPath($pdfPath);
        
             // Send email
             $mailer->send($email);
        
         // Redirect back to contrat page
         return $this->redirectToRoute('afficheContrat');
     } else {
         // Handle error if file was not created
         // ...
     }
 }
 
    
}
