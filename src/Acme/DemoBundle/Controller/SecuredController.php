<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Acme\DemoBundle\Form\ImageType;

/**
 * @Route("/demo/secured")
 */
class SecuredController extends Controller
{
    /**
     * @Route("/login", name="_demo_login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return array(
            'last_username' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    }

    /**
     * @Route("/login_check", name="_security_check")
     */
    public function securityCheckAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/logout", name="_demo_logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request
    }

    /**
     * @Route("/hello", defaults={"name"="World"}),
     * @Route("/hello/{name}", name="_demo_secured_hello")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/hello/admin/{name}", name="_demo_secured_hello_admin")
     * @Template()
     */
    public function helloadminAction($name)
    {
        return array('name' => $name);
    }
	
	
	 /**
     * @Route("/insert_image", name="_demo_secured_insert_image")
     * @Template()
     */
    public function insert_imageAction()
    {
	
        $form = $this->get('form.factory')->create(new ImageType());
        $request = $this->get('request');
		
        if ($request->isMethod('POST')) {
            $form->submit($request);
            if ($form->isValid()) 
			{
                //$mailer = $this->get('mailer');
                //$this->get('session')->getFlashBag()->set('notice', 'Message sent!');
				
				//insert into table image
				$data = $form->getData();
				
				$image_name = $data['image_name'];
				$image_description = $data['image_description'];
				$idcategory = $data['category'];
				$image_file = $data['image_file'];
				
				$conn = $this->get('database_connection');
				$elems = $conn->query('insert into image(image_name, image_description, image_file, idcategory) values("'.$image_name.'", "'.$image_description.'", "'.$image_file.'", '.$idcategory.')');
				
                //return new RedirectResponse($this->generateUrl('_demo_secured_insert_image'));
            }
        }

        return array('form' => $form->createView());
    }
	
	
	/**
	 * @Route("/list", defaults={"idcategory"=0}, name="_demo_secured_list"),
     * @Route("/list/{idcategory}", name="_demo_secured_list_filter")
     * @Template()
     */
    public function listAction($idcategory)
    {
	
		//$array_list[1] = "A1";
		//$array_list[2] = "A2";
		$user = $this->getUser();
		$username = $user->getUsername();
		
		
		$conn = $this->get('database_connection');
		
		$string_query = 'SELECT * FROM image i 
		                inner join category c on c.idcategory = i.idcategory';
		
		$string_query = $string_query.' inner join user u on u.iduser = i.iduser
										where u.username = "'.$username.'"';
		
		if ($idcategory != 0)
		{
			$string_query = $string_query.' and i.idcategory = '.$idcategory;
		}
		
        $list_images = $conn->fetchAll($string_query);
		
		
        $list_categories = $conn->fetchAll('SELECT * FROM category');
		
		return array('list_images' => $list_images, 'list_categories' => $list_categories);
    }	
	
}
