<?php
// src/Controller/LoginController

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController
{
	/**
		* @Route("/login")
	*/
	public function login()
	{
		$login_form = "tHIS will Be A FOrm";
		$username = "username";
		$email = "email";
		
		return new Response($login_form);
	}
}
?>