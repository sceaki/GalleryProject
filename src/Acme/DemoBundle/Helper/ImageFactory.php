<?php
namespace Acme\DemoBundle\Helper;

use Acme\DemoBundle\Helper\Image;
use Acme\DemoBundle\Helper\ImageSmall;
use Acme\DemoBundle\Helper\ImageLarge;

class ImageFactory
{
	public static function create($type, $image_id, $image_name, $image_description, $image_file, $cateogory_name, $username)
    {
		if ($type == 'small')
		{
			return new ImageSmall($image_id, $image_name, $image_description, $image_file, $cateogory_name, $username);
		}
		else
		{
			return new ImageLarge($image_id, $image_name, $image_description, $image_file, $cateogory_name, $username);
		}
		
    }
}