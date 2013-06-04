<?php

namespace Slashx\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicationType extends AbstractType
{
	
	public $papillon;
	
	public function __construct (array $papillon = null)
	{
		$this->papillon = $papillon ;
	}
	
	
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('auteur')
            ->add('date')
            ->add('reference')
           ->add('papillon','entity',array(
             		'class'=>"SlashxAdminBundle:Papillon",
           		'property'=>'id',
        ))
//             ->add('papillon')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Slashx\AdminBundle\Entity\Publication'
        ));
    }

    public function getName()
    {
        return 'slashx_adminbundle_publicationtype';
    }
}
