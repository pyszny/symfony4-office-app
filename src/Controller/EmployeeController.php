<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 03.12.18
 * Time: 20:33
 */

namespace App\Controller;


use App\Entity\Employee;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    /**
     * @Route("/Employee", name="employee")
     */
    public function index()
    {
        $employees = $this->getDoctrine()
            ->getRepository(Employee::class)
            ->findAll();

        return $this->render('employee/index.html.twig', [
            'employees' => $employees,
        ]);
    }
}