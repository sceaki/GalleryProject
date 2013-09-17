<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\DemoBundle\Helper\Image;
use Acme\DemoBundle\Helper\ImageSmall;
use Acme\DemoBundle\Helper\ImageLarge;
use Acme\DemoBundle\Helper\ImageFactory;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

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
        $image_data_db = $conn->fetchAll('select i.idimage, i.image_name, i.image_description, i.image_file,
								 c.category_name, u.username
								 from image i 
								 inner join category c on c.idcategory = i.idcategory	
								 inner join user u on i.iduser = u.iduser
								 where i.idimage = '.$id);
		
		$image_data = array();
		foreach ($image_data_db as $row)
		{
			$idimage = $row['idimage'];
			$image_name = $row['image_name'];
			$image_description = $row['image_description'];
			$image_file = $row['image_file'];
			$category_name = $row['category_name'];
			$username = $row['username'];
			
			$image_obj = ImageFactory::create('large', $idimage, $image_name, $image_description, $image_file, $category_name, $username);
			array_push($image_data, $image_obj);
		}
		
		
		return array('elem' => $image_data);
    }
	

	 /**
     * @Route("/list", name="_demo_showMessage")
     */
	public function showMessageAction(Request $request)
    {
		if ( $request->isMethod( 'POST' ) ) 
		{
			$params = array();
			$content = $this->get("request")->getContent();
			
			if (!empty($content))
			{
				$params = json_decode($content);
			}
			
			$idimage = $params->idimage;
			
			$conn = $this->get('database_connection');
			$string_query = 'select i.image_name, i.image_description, i.image_file,
			                 c.category_name
							 from image i 
                             inner join category c on c.idcategory = i.idcategory			
			                 where i.idimage = '.$params->idimage;
			$image_data = $conn->fetchAll($string_query);
			
			foreach ($image_data as $row)
			{
				$image_name = $row['image_name'];
				$image_description = $row['image_description'];
				$image_file = $row['image_file'];
				$category_name = $row['category_name'];
			}
			
			$message = 'Image '.$image_name.' is included in '.$category_name.' category and is described as '.$image_description;
			
			$response['success'] = true;
			$response['message'] = $message;
			
			return new JsonResponse($response);
		}
		return array();
		
	}
	
	  /**
     * @Route("/list/{idcategory}", name="_demo_list")
     * @Template()
     */
    public function listAction($idcategory)
    {
	
		$conn = $this->get('database_connection');
		
		$string_query = 'SELECT * FROM image i 
		                inner join category c on c.idcategory = i.idcategory
						inner join user u on i.iduser = u.iduser';
		if ($idcategory != 0)
		{
			$string_query = $string_query.' where i.idcategory = '.$idcategory;
		}
		
        $list_images_db = $conn->fetchAll($string_query);
		
		
		$list_images = array();
		foreach ($list_images_db as $row)
		{
			$idimage = $row['idimage'];
			$image_name = $row['image_name'];
			$image_description = $row['image_description'];
			$image_file = $row['image_file'];
			$category_name = $row['category_name'];
			$username = $row['username'];
			
			$image_obj = ImageFactory::create('small', $idimage, $image_name, $image_description, $image_file, $category_name, $username);
			array_push($list_images, $image_obj);
		}
		
        $list_categories = $conn->fetchAll('SELECT * FROM category');
		
		return array('list_categories' => $list_categories, 'list_images' => $list_images);
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

                $this->get('session')->getFlashBag()->set('notice', 'Message sent!');

                return new RedirectResponse($this->generateUrl('_demo'));
            }
        }

        return array('form' => $form->createView());
    }
}
