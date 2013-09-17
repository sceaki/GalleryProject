<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_661770bafb896a119f6b2af30e27cf15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-1.7.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
\t
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 17
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('content_header', $context, $blocks);
        // line 38
        echo "
    <div class=\"1block\">
        ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "    </div>

\t";
    }

    // line 21
    public function block_content_header($context, array $blocks = array())
    {
        // line 22
        echo "        <ul id=\"menu\">
            ";
        // line 23
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 34
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 23
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t\t";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 25
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_demo_secured_list");
            echo "\">Home</a></li>
\t\t\t\t";
        } else {
            // line 27
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_demo");
            echo "\">Home</a></li>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 30
            echo "\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_demo_login");
            echo "\">Login</a></li>
\t\t\t\t";
        }
        // line 33
        echo "            ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  146 => 33,  140 => 31,  137 => 30,  134 => 29,  128 => 27,  122 => 25,  119 => 24,  116 => 23,  109 => 34,  107 => 23,  104 => 22,  101 => 21,  95 => 41,  93 => 40,  89 => 38,  87 => 21,  84 => 20,  75 => 17,  72 => 16,  68 => 15,  65 => 14,  62 => 13,  56 => 11,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,);
    }
}
