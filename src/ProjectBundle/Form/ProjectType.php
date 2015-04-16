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
				      'Design'=>'Design',
				      'Invention'=>'Invention',
				      'Film'=>'Film',
				      'Cuisine'=>'Cuisine',
				      'Jeux'=>'Jeux',
				      'Application'=>'Application',
				      'Gadgets'=>'Gadgets',),
				'multiple'=>false,
				))
			->add('location', 'text')
			->add('duree', 'integer')
			->add('amountRequested', 'integer')
			->add('description', 'textarea')
			->add('titreRecompense1', 'text', array('required' => false))
			->add('descriptionRecompense1','textarea', array('required' => false))
			->add('titreRecompense2', 'text', array('required' => false))
			->add('descriptionRecompense2','textarea', array('required' => false))
			->add('titreRecompense3', 'text', array('required' => false))
			->add('descriptionRecompense3','textarea', array('required' => false))
			->add('titreRecompense4', 'text', array('required' => false))
			->add('descriptionRecompense4','textarea', array('required' => false))
			->add('titreRecompense5', 'text', array('required' => false))
			->add('descriptionRecompense5','textarea', array('required' => false))
			->add('file');


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