<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\DemoBundle\Helper\Person;


class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_demo_hello")
     * @Template()
     */
    public function helloAction($name)
    {
	
        return array('name' => $name);
    }

	
	 /**
     * @Route("/item/{id}", name="_demo_item")
     * @Template()
     */
    public function itemAction($id)
    {
	
		$conn = $this->get('database_connection');
        $elem = $conn->fetchAll('SELECT * FROM image where idimage ='.$id);
		
		//print_r($elem);
		
		return array('elem' => $elem);
    }
	

	
	  /**
     * @Route("/list/{idcategory}", name="_demo_list")
     * @Template()
     */
    public function listAction($idcategory)
    {
	
		//$array_list[1] = "A1";
		//$array_list[2] = "A2";
		
		$conn = $this->get('database_connection');
		
		$string_query = 'SELECT * FROM image i 
		                inner join category c on c.idcategory = i.idcategory';
		if ($idcategory != 0)
		{
			$string_query = $string_query.' where i.idcategory = '.$idcategory;
		}
		
        $list_images = $conn->fetchAll($string_query);
		
		
        $list_categories = $conn->fetchAll('SELECT * FROM category');
		
		//print_r($list_images);
		
		$person1 = new Person(1, "Tom", "Button-Pusher", 34);  
		$person2 = new Person(2, "John", "Lever Puller", 41);
		
		//print_r($person1);
		
		$array_list[1] = $person1;
		$array_list[2] = $person2;
		
		//print_r($array_list);
		
		return array('list_images' => $list_images, 'list_categories' => $list_categories);
    }	
	
	
    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction()
    {
        $form = $this->get('form.factory')->create(new ContactType());

        $request = $this->get('request');
        if ($request->isMethod('POST')) {
            $form->submit($request);
            if ($form->isValid()) {
                $mailer = $this->get('mailer');
                // .. setup a message and send it
                // http://symfony.com/doc/current/cookbook/email.html

                $this->get('session')->getFlashBag()->set('notice', 'Message sent!');

                return new RedirectResponse($this->generateUrl('_demo'));
            }
        }

        return array('form' => $form->createView());
    }
}
