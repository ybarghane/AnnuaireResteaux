<?php

namespace Annuaire\RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Annuaire\RestoBundle\Entity\Restaurant;
use Annuaire\RestoBundle\Form\RestaurantType;
use Symfony\Component\HttpFoundation\Response;



class RestoController extends Controller
{
    public function indexAction(){
	
		   $em=$this->getDoctrine()->getManager();
	       $repository=$em->getRepository('AnnuaireRestoBundle:Restaurant'); 
	       $restos=$repository->findAll();
           return $this->render('AnnuaireRestoBundle:Resto:index.html.twig',array('restos'=>$restos));
	    }
	
	public function addAction(){
	
		$restaurant=new Restaurant();
	  
	    $form=$this->createForm(new RestaurantType,$restaurant);
	
	   $request = $this->get('request');
		// On vérifie qu'elle est de type POST
	if ($request->getMethod() == 'POST') {
         echo 'posting ....';
          $form->bind($request);

         if ($form->isValid()) {
		  
		   echo 'valid ....';
           $restaurant->getImage()->upload();
			$em = $this->getDoctrine()->getManager();
			$em->persist($restaurant);
			$em->flush();
	
			return $this->redirect($this->generateUrl('resto_show', array('id' => $restaurant->getId())));
		}
    }
   
	   
         return $this->render('AnnuaireRestoBundle:Resto:add.html.twig',array('form'=>$form->createView(),));
	
			
       // return $this->render('AnnuaireRestoBundle:Resto:add.html.twig', array());
    }
	
	public function deleteAction($id){
        return $this->render('AnnuaireRestoBundle:Resto:delete.html.twig', array('id'=>$id));
    }
	
	public function updateAction($id){
        return $this->render('AnnuaireRestoBundle:Resto:update.html.twig', array('id'=>$id));
    }
	public function showAction($id){
        return $this->render('AnnuaireRestoBundle:Resto:show.html.twig', array('id'=>$id));
    }
	
	
	
}
