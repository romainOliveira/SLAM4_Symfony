<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Testtable;
use Doctrine\ORM\EntityManagerInterface;

class TestController extends AbstractController
{
    /**
     * @Route("/ajout_etudiant", name="test")
     */
        public function ajoutEtudiant(): Response
    {
            $entityManager = $this->getDoctrine()->getManager();
            $etudiant = new Testtable();
            $etudiant->setNom('David');
            $etudiant->setPrenom('Lafarge');
            $etudiant->setAdresse('7 rue des împots');
            $etudiant->setAge(32);
            
            /*
            $entityManager->persist($etudiant);
            
            $entityManager->flush();
             * 
             */
            
            $etudiants = $this->getDoctrine()
                    ->getRepository(Testtable::class)
                    ->findAll() ;
            
            return $this->render('test\testtwig.html.twig', ['etudiants' => $etudiants]);
        
    }
}
