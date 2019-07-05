<?php
// src/Controller/TestController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{

	public function test()
	{

		$number = random_int(0,99);

		return new Response(
			'<html>
				<body>
					Test number is:'.$number.'
				</body>
			</html>');
	}
}
?>