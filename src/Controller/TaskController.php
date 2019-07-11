<?php 
namespace App\Controller;

use App\Entity\Task; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Componeny\Form\Extension\Core\Type\TextType;
use App\Form\TaskType;

class TaskController extends AbstractController
{
	public function new()
	{
		$task = $this->createFormBuilder($task)
			->add('task', TextType::class)
			->add('dueDate', DateType::class)
			->add('save', SubmitType::class, ['label' => 'Create Task'])
			->getForm();

		$form = $this->createForm(TaskType::class, $task);

		if ($form->isSubmitted() && $form->isValid())
		{
			$task = $form->getData();
			// now perform an action
			return $this->redirectToRoute('task_success');
		}
		
		return $this->render('task/new.html.twig', [
			'form' => $form->createView(),
		]);
	}
}

?>