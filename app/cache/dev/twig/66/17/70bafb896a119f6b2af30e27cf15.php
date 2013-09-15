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
\t
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('content_header', $context, $blocks);
        // line 37
        echo "
    <div class=\"1block\">
        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "    </div>

\t";
    }

    // line 20
    public function block_content_header($context, array $blocks = array())
    {
        // line 21
        echo "        <ul id=\"menu\">
            ";
        // line 22
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 33
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 22
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t\t";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 24
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_demo_secured_list");
            echo "\">Home</a></li>
\t\t\t\t";
        } else {
            // line 26
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_demo");
            echo "\">Home</a></li>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 29
            echo "\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_demo_login");
            echo "\">Login</a></li>
\t\t\t\t";
        }
        // line 32
        echo "            ";
    }

    // line 39
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
        return array (  146 => 39,  142 => 32,  136 => 30,  133 => 29,  130 => 28,  124 => 26,  118 => 24,  115 => 23,  112 => 22,  105 => 33,  103 => 22,  100 => 21,  97 => 20,  91 => 40,  89 => 39,  85 => 37,  83 => 20,  80 => 19,  71 => 16,  68 => 15,  64 => 14,  61 => 13,  58 => 12,  52 => 10,  45 => 6,  41 => 5,  36 => 4,  33 => 3,);
    }
}
