<?php

namespace Slashx\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PapillonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('famille')
            ->add('espece')
            ->add('sousEspece')
            ->add('forme')
            ->add('auteur')
            ->add('date')
            ->add('nom')
            ->add('statut')
            ->add('distributions')
            ->add('habitats')
            ->add('plantes')
            ->add('premiersEtats')
            ->add('couleur')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Slashx\AdminBundle\Entity\Papillon'
        ));
    }

    public function getName()
    {
        return 'slashx_adminbundle_papillontype';
    }
}
