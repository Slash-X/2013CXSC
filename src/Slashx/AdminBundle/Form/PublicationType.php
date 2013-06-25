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
//             ->add('date', 'choice',
//                     array(
//                         'required' => true, 'choices' => $this->buildYearChoices()
//                     ))
        ->add('date')
            ->add('reference', 'textarea',array('required' => false))
           	->add('papillon','entity',array(
             	'class'=>"SlashxAdminBundle:Papillon",
           		'property'=>'nom',
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
    
    public function buildYearChoices() {
    	$distance = 20;
    	$yearsBefore = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y") - $distance));
    	$yearsAfter = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y") + ceil($distance/2)));
    	return array_combine(range($yearsBefore, $yearsAfter), range($yearsBefore, $yearsAfter));
    }
}
