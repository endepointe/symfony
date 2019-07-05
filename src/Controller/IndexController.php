<?php
// src/Controller/IndexController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
	/**
   * @Route("/")
	*/

	public function loadIndex()
	{

		$greeting = '<h1>Welcome to the landing page</h1>';

		return new Response(
			'<html>
				<body>
					'.$greeting.'
				</body>
			</html>');
	}

	/**
		* @Route("/login")
	*/
	public function  login()
	{
		$login_form = "tHIS will Be A FOrm";
		return new Response($login_form);
	}
}
?>