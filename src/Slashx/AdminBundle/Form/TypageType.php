<?php

namespace Slashx\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypageType extends AbstractType
{
	
	protected $id_papillon;
	
	public function __construct (array $id_papillon = null)
	{
		$this->id_papillon = $id_papillon ;
	}
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lieuConservation')
            ->add('localite')
            ->add('categorie')
            ->add('sexe')
            ->add('file')
            ->add('papillon','entity',array(
             		'class'=>"SlashxAdminBundle:Papillon",
           		'property'=>'nom',
        ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Slashx\AdminBundle\Entity\Typage'
        ));
    }

    public function getName()
    {
        return 'slashx_adminbundle_typagetype';
    }
}
