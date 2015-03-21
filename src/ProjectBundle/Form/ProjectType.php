<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjectType extends AbstractType 
{
	public function BuildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('title', 'text')
			->add('categorie', 'choice', array('choices' => array(
					  'Littérature'=>'Littérature',
				      'Art'=>'Art',
				      'Spectacle'=>'Spectacle',
				      'Photographie'=>'Photographie',
				      'Mode'=>'Mode',
				      'Journalisme'=>'Journalisme',
				      'Education'=>'Education',
				      'Ecologie'=>'Ecologie',
				      'Solidarité'=>'Solidarité',
				      'Aventure - Sport'=>'Aventure - Sport',
				      'Design'=>'Design',
				      'Invention'=>'Invention',
				      'Film'=>'Film',
				      'Cuisine'=>'Cuisine',
				      'Jeux'=>'Jeux',
				      'Projet perso'=>'Projet perso',
				      'Application'=>'Application',
				      'Gadgets'=>'Gadgets',),
				'multiple'=>false,
				))
			->add('location', 'text')
			->add('duree', 'integer')
			->add('amountRequested', 'integer')
			->add('description', 'textarea');

	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults([
			'data_class'	=>	'ProjectBundle\Entity\Project'
		]);
	}

	public function getName()
	{
		return 'project';
	}

}

?>