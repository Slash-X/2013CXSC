<?php

namespace Slashx\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PhotographieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file')
            ->add('commentaire','textarea',array('required' => false))
            ->add('ordre')
            ->add('album','entity',array(
            		'class'=>"SlashxAdminBundle:Album",
            		'property'=>'titre',
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Slashx\AdminBundle\Entity\Photographie'
        ));
    }

    public function getName()
    {
        return 'slashx_adminbundle_photographietype';
    }
}
