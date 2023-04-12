<?php
namespace App\Controller;

use App\Entity\MedicalExamination;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

use App\Entity\Patient;

use Doctrine\ORM\EntityManagerInterface;



class WebController extends AbstractController
{
    private $logger;
    private EntityManagerInterface $entityManager;
   
    
    public function __construct(LoggerInterface $logger, EntityManagerInterface $entityManager)
    {
        
        $this->logger = $logger;
        $this->entityManager = $entityManager;
    }



    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home.html.twig');
    }

   
    #[Route('/insert_medical_examination', name: 'insert_medical_examination')]
    public function insertMedicalExamination(): Response
    {
       // $patient=null;
       // if(!isset($_GET['id_patient'])){
            $patient = $this->entityManager->getRepository(Patient::class)->find($_GET['id_patient']);
       // }
       
        return $this->render('medicalExamination/insert_medical_examination.html.twig',[
            'patient' => $patient
        ]);
    }

    #[Route('/insert_patient', name: 'insert_patient')]
    public function insertPatient(): Response
    {
        return $this->render('patient/insert_patient.html.twig');
    }

    

  


}