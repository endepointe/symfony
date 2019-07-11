<?php
// src/Form/TaskType.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

<<<<<<< HEAD
class TaskType extends AbstractType
{
	public function buildForm(FormBuilderInerface $builder, array $options)
	{
		$builder
			->add('task')
			->add('debate', null, ['widget' => 'single_text'])
			->add('save', SubmitType::class);
=======
class TaskType
{
	public function doSomething()
	{
		// ... something gets done
>>>>>>> 2969f5309e2fc7531181ce87ddfcfe51afc34084
	}
}
?>