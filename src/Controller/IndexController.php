<?php
// src/Controller/IndexController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
	/**
    * @Route("/")
	*/

	public function loadIndex()
	{

		$greeting = '<h1>Welcome to the landing page</h1>';

		return new Response($greeting);
	}
}
?>