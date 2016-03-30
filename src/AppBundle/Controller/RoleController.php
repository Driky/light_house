<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Role;
use AppBundle\Form\Type\RoleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RoleController extends Controller
{
    /**
     * @Route("/role", name="index_role")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Role');

        $roles = $repository->findAll();

        return $this->render(':light_house:role_index.html.twig', array(
            'roles' => $roles,
        ));
    }

    /**
     * @Route("/role/new", name="newRole")
     */
    public function newAction(Request $request)
    {
        $role = new Role();


        //print_r("1".class_exists(RoleType::class)."2"); print_r(in_array('Symfony\Component\Form\FormTypeInterface', class_implements(RoleType::class)));die;


        $form = $this->createForm(RoleType::class, $role);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($role);
            $em->flush();
            return $this->redirectToRoute('index_role');
        }

        return $this->render(':light_house:role_new.html.twig', array(
            'form' 		=> $form->createView(),
            'action' 	=> 'create',
        ));
    }
    
    /**
     * @Route("/role/edit/{id}", name="editRole")
     */
    public function editAction($id, Request $request)
    {
    	$role = $this->getDoctrine()
	        ->getRepository('AppBundle:Role')
        	->find($id);
        	
        if(!empty($role)){
        	$form = $this->createForm(RoleType::class, $role);
        	$form->handleRequest($request);
        	
        	if ($form->isSubmitted() && $form->isValid()) {
	            $em = $this->getDoctrine()->getManager();
	            $em->persist($role);
	            $em->flush();
	            return $this->redirectToRoute('index_role');
        	}
        	
        	return $this->render(':light_house:role_new.html.twig', array(
            	'form' 		=> $form->createView(),
            	'action' 	=> 'edit',
        	));
        	
        }else{
        	throw $this->createNotFoundException(
            	'No role found for id '.$id
        	);
        	
        	return $this->render(':light_house:error.html.twig', array(
            	'error_type' 	=> 'Entity not found',
            	'message' 		=> 'The entity doesn\'t seems to exist',
        	));
        }
    	
    }
    
    /**
     * @Route("/role/delete/{id}", name="deleteRole")
     */
    public function deleteAction($id, Request $request)
    {
    	$role = $this->getDoctrine()
	        ->getRepository('AppBundle:Role')
        	->find($id);
        	
        if(!empty($role)){
        	$em = $this->getDoctrine()->getManager();
        	$em->remove($role);
			$em->flush();
			
			return $this->redirectToRoute('index_role');
        }else{
        	throw $this->createNotFoundException(
            	'No role found for id '.$id
        	);
        	
        	return $this->render(':light_house:error.html.twig', array(
            	'error_type' 	=> 'Entity not found',
            	'message' 		=> 'The entity doesn\'t seems to exist',
        	));	
        }
    }

}
