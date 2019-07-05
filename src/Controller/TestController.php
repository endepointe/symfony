<?php 
// src/Controller/TestController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{
	public function test()
	{
		$number = random_int(0,50);

		return new Response(
			'<html>
				<body>
					Test number is:'.$number.'
				</body>
			</html>');
	}
}
?>