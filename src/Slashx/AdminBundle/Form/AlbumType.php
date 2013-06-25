<?php

namespace Slashx\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AlbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('papillon','entity',array(
             	'class'=>"SlashxAdminBundle:Papillon",
           		'property'=>'nom',
            		'required' => false,
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Slashx\AdminBundle\Entity\Album'
        ));
    }

    public function getName()
    {
        return 'slashx_adminbundle_albumtype';
    }
}
