<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 04.12.18
 * Time: 20:40
 */

namespace App\Form;

use App\Entity\Absence;
use App\Entity\Employee;
use App\Entity\Status;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbsenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('employee', EntityType::class, array(
                'class' => Employee::class,
                'choice_label' => 'lastname'
            ))
            ->add('start_date', DateType::class)
            ->add('end_date', DateType::class)
            ->add('status', EntityType::class, array(
                'class' => Status::class,
                'choice_label' => 'name'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Absence::class
        ));
    }
}