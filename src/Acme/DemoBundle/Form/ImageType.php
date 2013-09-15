<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('image_name', 'text');
        $builder->add('image_description', 'textarea');
        $builder->add('category', 'choice',array(
            'choices' => array('1' => 'one', '2' => 'two', '3' => 'three')));
        $builder->add('image_file', 'file');
        //$builder->add('image_file', 'file');
    }

    public function getName()
    {
        return 'image';
    }
}
