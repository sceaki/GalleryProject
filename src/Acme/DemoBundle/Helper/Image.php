<?php
namespace Acme\DemoBundle\Helper;

class Image  
{  
	private $image_id;
    private $image_name;  
    private $image_description;  
    private $image_file;  
    private $image_width;
	private $image_height;
	private $date_created;
  
    public function __construct($image_id, $image_name, $image_description, $image_file)  
    {  
        $this->image_id = $image_id;  
        $this->image_name = $image_name;  
        $this->image_description = $image_description;  
        $this->image_file = $image_file;  
		$this->date_created = date("Y-m-d H:i:s");
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


 

