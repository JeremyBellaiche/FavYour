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
			->add('description', 'textarea')
			->add('titreRecompense1', 'text')
			->add('descriptionRecompense1','textarea')
			->add('titreRecompense2', 'text')
			->add('descriptionRecompense2','textarea')
			->add('titreRecompense3', 'text')
			->add('descriptionRecompense3','textarea')
			->add('titreRecompense4', 'text')
			->add('descriptionRecompense4','textarea')
			->add('titreRecompense5', 'text')
			->add('descriptionRecompense5','textarea')
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