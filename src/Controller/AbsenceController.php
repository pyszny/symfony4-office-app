<?php
/**
 * Created by PhpStorm.
 * User: mateusz
 * Date: 03.12.18
 * Time: 20:22
 */

namespace App\Controller;

use App\Entity\Absence;
use App\Repository\AbsenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbsenceController extends AbstractController
{
    /**
     * @Route("/absences", name="absences")
     */
    public function  index (AbsenceRepository $absenceRepository): Response
    {
        return $this->render('absence/index.html.twig', ['absences' => $absenceRepository->findAll()]);
    }
}