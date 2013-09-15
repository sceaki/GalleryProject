<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_41804401c16aed9af4baaec6be0399df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "GalleryProject - Home";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div align=\"center\">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_demo_list", array("idcategory" => 0));
        echo "\">
\t\t<div style=\"margin:3px;width: 600px;height: 600px;border-radius: 300px;-webkit-border-radius: 300px;-moz-border-radius: 300px;background:url(";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/DSC_5949.JPG"), "html", null, true);
        echo ") 50% 50%; background-size: 800px;\">
\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/DSC_5949.JPG"), "html", null, true);
        echo "\" style=\"max-width:80%;width:600px;height:600px;opacity: 0;filter: alpha(opacity=0);\"/>
\t\t</div>
\t</a>
\t</div>
    <ul id=\"demo-list\">
        ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "\t\t";
        // line 19
        echo "        ";
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
        return array (  67 => 20,  65 => 19,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
