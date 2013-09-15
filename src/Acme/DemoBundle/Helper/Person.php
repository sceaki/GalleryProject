<?php
namespace Acme\DemoBundle\Helper;


class Person  
{  
	private $_id;
    private $_name;  
    private $_job;  
    private $_age;  
  
    public function __construct($id, $name, $job, $age)  
    {  
        $this->_id = $id;  
        $this->_name = $name;  
        $this->_job = $job;  
        $this->_age = $age;  
    }  
  
    public function changeJob($newjob)  
    {  
        $this->_job = $newjob;  
    }  
  
    public function happyBirthday()  
    {  
        ++$this->_age;  
    }  
	 
	public function setName($name)  
    {  
        $this->_name = $name;  
    }  
  
    public function getName()  
    {  
        return $this->_name;  
    }  
	
	
	public function setJob($job)  
    {  
        $this->_job = $job;  
    }  
  
    public function getJob()  
    {  
        return $this->_job;  
    }  
	
	public function setId($id)  
    {  
        $this->_id = $id;  
    }  
  
    public function getId()  
    {  
        return $this->_id;  
    }  
	
	
	public function setAge($age)  
    {  
        $this->_age = $age;  
    }  
  
    public function getAge()  
    {  
        return $this->_age;  
    }  
}  

