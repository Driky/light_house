<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Person;
use AppBundle\Form\Type\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonController extends Controller
{
	/**
     * @Route("/person", name="index_person")
     */
    public function indexAction()
    {
    	$repository = $this->getDoctrine()
            ->getRepository('AppBundle:Person');

        $persons = $repository->findAll();

        return $this->render(':light_house:person_index.html.twig', array(
            'persons' => $persons,
        ));
    }
    
    /**
     * @Route("/person/new", name="new_person")
     */
    public function newAction()
    {
    	
    }
    
    /**
     * @Route("/person/edit/{id}", name="edit_person")
     */
    public function editAction()
    {
    	
    }
    
    /**
     * @Route("/person/delete/{id}", name="delete_person")
     */
    public function deleteAction()
    {
    	
    }
	
}