<?php
namespace Acme\DemoBundle\Helper;

use Acme\DemoBundle\Helper\Image;
use Acme\DemoBundle\Helper\ImageSmall;
use Acme\DemoBundle\Helper\ImageLarge;

class ImageFactory
{
	public static function create($type, $image_id, $image_name, $image_description, $image_file)
    {
		if ($type == 'small')
		{
			return new ImageSmall($image_id, $image_name, $image_description, $image_file);
		}
		else
		{
			return new ImageLarge($image_id, $image_name, $image_description, $image_file);
		}
		
    }
}