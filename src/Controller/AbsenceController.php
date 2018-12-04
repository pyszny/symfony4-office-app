<?php
/**
 * Created by PhpStorm.
 * User: mateusz
 * Date: 03.12.18
 * Time: 20:22
 */

namespace App\Controller;

use App\Entity\Absence;
use App\Form\AbsenceType;
use App\Repository\AbsenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/new", name="absence_new", methods="GET|POST")
     */
    public function new(Request $request)
    {
        $absence = new Absence();
        $form = $this->createForm(AbsenceType::class, $absence);

        return $this->render('absence/new.html.twig', [
            'absence' => $absence,
            'form' => $form->createView()
        ]);
    }
}