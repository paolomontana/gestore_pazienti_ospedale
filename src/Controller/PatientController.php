<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Patient;


use App\Repository\PatientRepository;
use DateTime;
use Psr\Log\LoggerInterface;


use Doctrine\ORM\EntityManagerInterface;

class PatientController extends AbstractController
{
    private LoggerInterface $logger;
    private PatientRepository $patientRepository;
    private DateTime $date;
    private EntityManagerInterface $entityManager;
    

    public function __construct(LoggerInterface $logger, PatientRepository $patientRepository, EntityManagerInterface $entityManager)
    {

        $this->logger = $logger;
        $this->patientRepository = $patientRepository;
        $this->date = new \DateTime();
        $this->entityManager = $entityManager;
       
    
    }

    #[Route('/add_patient', name: 'add_patient')]
    public function addPatient(): Response
    {
        
            $this->logger->notice($_POST['birthday']);
            $patient = new Patient();
            $patient->setName($_POST['name']);
            $patient->setSurname($_POST['surname']);
            $patient->setBirthPlace($_POST['birthcity']);
            $patient->setBirthDate($this->date->createFromFormat('Y-m-d', $_POST['birthday']));
            $patient->setGender($_POST['gender']);
            $patient->setFiscalCode($_POST['fiscalCode']);
            $patient->setCityOfResidence($_POST['cityOfResidence']);
            $patient->setStreet($_POST['street']);
            $patient->setPhoneNumber($_POST['phone']);
            $patient->setEmail($_POST['email']);


            $this->entityManager->persist($patient);
            $this->entityManager->flush();

            $patients = $this->entityManager->getRepository(Patient::class)->findAll();
            return $this->render('patient/patients_list.html.twig',[
                'patients' => $patients
            ]);
        
        
    }
    #[Route('/patients_list', name: 'patients_list')]
    public function patientsList(): Response
    {
        $patients = $this->entityManager->getRepository(Patient::class)->findAll();
        return $this->render('patient/patients_list.html.twig',[
            'patients' => $patients
        ]);
    }

    #[Route('/remove_patient', name: 'remove_patient')]
    public function removePatient(): Response
    {
        $patient = $this->entityManager->getRepository(Patient::class)->find($_GET['id_patient']);

        $this->entityManager->remove($patient);
        $this->entityManager->flush();
        
        $patients = $this->entityManager->getRepository(Patient::class)->findAll();
        return $this->render('patient/patients_list.html.twig',[
            'patients' => $patients
        ]);
    }

   
    
}
