<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController 
{
	/**
	 * @Route("/")
	 */
	public function index()
	{
		return new JsonResponse("Hello World!");
	}
}