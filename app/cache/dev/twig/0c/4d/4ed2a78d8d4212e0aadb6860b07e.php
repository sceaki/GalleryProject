<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_0c4d4ed2a78d8d4212e0aadb6860b07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
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

    // line 4
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  28 => 4,  158 => 51,  144 => 50,  139 => 47,  137 => 46,  131 => 43,  127 => 42,  119 => 39,  115 => 38,  111 => 37,  107 => 35,  105 => 34,  88 => 33,  78 => 25,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  49 => 13,  40 => 8,  37 => 7,  31 => 5,  26 => 57,);
    }
}
