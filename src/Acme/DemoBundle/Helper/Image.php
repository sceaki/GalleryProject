<?php
namespace Acme\DemoBundle\Helper;

class Image  
{  
	private $idimage;
    private $image_name;  
    private $image_description;  
    private $image_file;  
    private $image_width;
	private $image_height;
	private $date_created;
	private $category_name;
	private $username;
  
    public function __construct($idimage, $image_name, $image_description, $image_file, $category_name, $username)  
    {  
        $this->idimage = $idimage;  
        $this->image_name = $image_name;  
        $this->image_description = $image_description;  
        $this->image_file = $image_file;   
		$this->date_created = date("Y-m-d H:i:s");
        $this->category_name = $category_name;  
        $this->username = $username;  
    }  
  
    public function setIdImage($idimage)  
    {  
        $this->idimage = $idimage;  
    }  
  
    public function getIdImage()  
    {  
        return $this->idimage;  
    }  
	
	public function setImageName($image_name)  
    {  
        $this->image_name = $image_name;  
    }  
  
    public function getImageName()  
    {  
        return $this->image_name;  
    }  
	
	public function setImageDescription($image_description)  
    {  
        $this->image_description = $image_description;  
    }  
  
    public function getImageDescription()  
    {  
        return $this->image_description;  
    }  
	
	public function setImageFile($image_file)  
    {  
        $this->image_file = $image_file;  
    }  
  
    public function getImageFile()  
    {  
        return $this->image_file;  
    }  
	
	public function setCategoryName($category_name)  
    {  
        $this->category_name = $category_name;  
    }  
  
    public function getCategoryName()  
    {  
        return $this->category_name;  
    }  
	
	public function setUsername($username)  
    {  
        $this->username = $username;  
    }  
  
    public function getUsername()  
    {  
        return $this->username;  
    }  
	
	public function changeImage()
	{
	
	}
	
	public function getFields()
	{
		$fields['image_name'] = $this->image_name;
		$fields['image_description'] = $this->image_description;
		$fields['image_file'] = $this->image_file;
		$fields['image_width'] = $this->image_width;
		$fields['image_height'] = $this->image_height;
		$fields['date_created'] = $this->date_created;
		
		return $fields;
	}

	
}  


 

