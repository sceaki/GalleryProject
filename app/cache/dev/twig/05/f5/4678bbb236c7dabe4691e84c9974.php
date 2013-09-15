<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_05f54678bbb236c7dabe4691e84c9974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <!--<h1 class=\"title\">Available demos 11</h1>-->
\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_demo_list", array("idcategory" => 0));
        echo "\">
\t\t<div style=\"margin:3px;width: 600px;height: 600px;border-radius: 300px;-webkit-border-radius: 300px;-moz-border-radius: 300px;background:url(";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/DSC_5949.JPG"), "html", null, true);
        echo ") 50% 50%; background-size: 800px;\">
\t\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/DSC_5949.JPG"), "html", null, true);
        echo "\" style=\"max-width:80%;width:600px;height:600px;opacity: 0;filter: alpha(opacity=0);\"/>
\t\t</div>
\t</a>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "Simona"));
        echo "\">Hello11 World</a></li>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_demo_list", array("idcategory" => 0));
        echo "\">List</a></li>
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_demo_secured_insert_image");
        echo "\">Insert image</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 20
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  56 => 11,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
