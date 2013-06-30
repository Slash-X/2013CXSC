<?php

namespace Slashx\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PapillonType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('famille')->add('espece')
				->add('sousEspece', 'text', array('required' => false))
				->add('forme', 'text', array('required' => false))
				->add('auteur')->add('date')->add('nom')->add('statut')
			
				->add('distributions', 'choice',
						array('multiple' => true,
								'choices' => array('Cameroun' => 'Cameroun',
										'Gabon' => 'Gabon', 'Congo' => 'Congo'),
								'required' => false, 'empty_data' => null))
				->add('habitats', 'choice',
						array('multiple' => true,
								'choices' => array('Cameroun' => 'Cameroun',
										'Gabon' => 'Gabon', 'Congo' => 'Congo'),
								'required' => false, 'empty_data' => null))
				->add('plantes', 'choice',
						array('multiple' => true,
								'choices' => array('Cameroun' => 'Cameroun',
										'Gabon' => 'Gabon', 'Congo' => 'Congo'),
								'required' => false, 'empty_data' => null))
				->add('premiersEtats', 'choice',
						array('multiple' => true,
								'choices' => array('Cameroun' => 'Cameroun',
										'Gabon' => 'Gabon', 'Congo' => 'Congo'),
								'required' => false, 'empty_data' => null))
				->add('couleur');
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver
				->setDefaults(
						array(
								'data_class' => 'Slashx\AdminBundle\Entity\Papillon'));
	}

	public function getName() {
		return 'slashx_adminbundle_papillontype';
	}
}
