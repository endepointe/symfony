<?php
// src/Form/TaskType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
	public function buildForm(FormBuilderInerface $builder, array $options)
	{
		$builder
			->add('task')
			->add('debate', null, ['widget' => 'single_text'])
			->add('save', SubmitType::class);
	}
}
?>