<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Light_Novel;

class Light_NovelController extends Controller
{
	/**
     * @Route("/hello/{name}", name="hello")
     */
	public function helloAction($name)
	{
	    return new Response('<html><body>Hello '.$name.'!</body></html>');
	}
	
	/**
     * @Route("/", name="index")
     */
	public function indexAction()
	{
	    return new Response('<html><body>Hello voici la page d\'index!</body></html>');
	}
}