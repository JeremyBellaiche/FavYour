<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType 
{
	public function BuildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('title', 'checkbox')
			->add('Littérature', 'checkbox')
			->add('Art', 'checkbox')
			->add('Spectacle', 'checkbox')
			->add('Photographie', 'checkbox')
			->add('Mode', 'checkbox')
			->add('Journalisme', 'checkbox')
			->add('Education', 'checkbox')
			->add('Ecologie', 'checkbox')
			->add('Solidarité', 'checkbox')
			->add('Design', 'checkbox')
			->add('Invention', 'checkbox')
			->add('Film', 'checkbox')
			->add('Cuisine', 'checkbox')
			->add('Jeux', 'checkbox')
			->add('Application', 'checkbox')
			->add('Gadgets', 'checkbox')
			;


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