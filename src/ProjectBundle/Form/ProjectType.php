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
			->add('title', 'text', array( 'label'  => 'Title', 'attr'=> ['class'=>'form-control'] ) )
			->add('amountRequested', 'text', array( 'label'  => 'Amount Requested', 'attr'=> ['class'=>'form-control'] ) )
			->add('save', 'submit');
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