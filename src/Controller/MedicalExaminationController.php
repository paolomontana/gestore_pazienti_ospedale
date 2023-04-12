<?php

namespace App\Controller;

use App\Entity\MedicalExamination;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;


use App\Repository\PatientRepository;
use DateTime;
use Psr\Log\LoggerInterface;


use Doctrine\ORM\EntityManagerInterface;

class MedicalExaminationController extends AbstractController
{
  
    private LoggerInterface $logger;
    private DateTime $date;
    private EntityManagerInterface $entityManager;
    

    public function __construct(LoggerInterface $logger, EntityManagerInterface $entityManager)
    {

        $this->logger = $logger;
        $this->date = new \DateTime();
        $this->entityManager = $entityManager;
       
    
    }

    #[Route('/add_medical_examination', name: 'add_medical_examination')]
    public function medicalExamination(): Response
    {
        
            //$this->logger->notice($_POST['birthday']);
            $visit = new MedicalExamination();
            $visit->setType($_POST['type']);
            $visit->setReason($_POST['reason']);
            $visit->setProtocolNumber($_POST['protocol_number']);
            $visit->setProtocolDate($this->date->createFromFormat('Y-m-d', $_POST['protocol_date']));
            $visit->setDateOfExamination($this->date->createFromFormat('Y-m-d', $_POST['visit_date']));
            $visit->setResultOfExamination($_POST['outcome']);

            $patient =  $this->entityManager->getRepository(Patient::class)->find($_POST['patient_id']);
            $visit->setPatient($patient);

            $this->entityManager->persist($visit);
            $this->entityManager->flush();

            $visits = $this->entityManager->getRepository(MedicalExamination::class)->findAll();
            return $this->render('medicalExamination/medical_examination_list.html.twig',[
                'medical_examinations' => $visits
            ]);
        
        
    }
    #[Route('/medical_examination_list', name: 'medical_examination_list')]
    public function medicalExaminationList(): Response
    {
        $medical_examinations = $this->entityManager->getRepository(MedicalExamination::class)->findAll();
        return $this->render('medicalExamination/medical_examination_list.html.twig',[
            'medical_examinations' => $medical_examinations
        ]);
    }

    #[Route('/remove_medical_examination', name: 'remove_medical_examination')]
    public function removeMedicalExamination(): Response
    {
        $medical_examination = $this->entityManager->getRepository(MedicalExamination::class)->find($_GET['id_medical_examination']);

        $this->entityManager->remove($medical_examination);
        $this->entityManager->flush();
        
        $m = $this->entityManager->getRepository(MedicalExamination::class)->findAll();
        return $this->render('medicalExamination/medical_examination_list.html.twig',[
            'medical_examinations' => $m
        ]);
    }

    #[Route('/medical_examinations_patient', name: 'medical_examinations_patient')]
    public function medicalExaminationPatientList(): Response
    {

        $patient = $this->entityManager->getRepository(Patient::class)->find($_GET['id_patient']);
        $medical_examinations = $this->entityManager->getRepository(MedicalExamination::class)->findBy(
            ['patient' =>  $patient]
        );
        return $this->render('medicalExamination/medical_examination_list.html.twig',[
            'medical_examinations' => $medical_examinations
        ]);
    }

    #[Route('/mod_medical_examination', name: 'mod_medical_examination')]
    public function modMedicalExamination(): Response
    {
        $medical_examination = $this->entityManager->getRepository(MedicalExamination::class)->find($_GET['id_medical_examination']);
        return $this->render('medicalExamination/mod_medical_examination.html.twig',[
            'patient' => $medical_examination->getPatient(),
            'medical_examination' => $medical_examination
        ]);

       
    }

    #[Route('/modify_medical_examination', name: 'modify_medical_examination')]
    public function modifyMedicalExamination(): Response
    {

            $visit =  $this->entityManager->getRepository(MedicalExamination::class)->find($_POST['medical_examination_id']);

            $visit->setType($_POST['type']);
            $visit->setReason($_POST['reason']);
            $visit->setProtocolNumber($_POST['protocol_number']);
            $visit->setProtocolDate($this->date->createFromFormat('Y-m-d', $_POST['protocol_date']));
            $visit->setDateOfExamination($this->date->createFromFormat('Y-m-d', $_POST['visit_date']));
            $visit->setResultOfExamination($_POST['outcome']);

            $this->entityManager->persist($visit);
            $this->entityManager->flush();

            $visits = $this->entityManager->getRepository(MedicalExamination::class)->findAll();
            return $this->render('medicalExamination/medical_examination_list.html.twig',[
                'medical_examinations' => $visits
            ]);
        
        
    }

  

   
    
}
