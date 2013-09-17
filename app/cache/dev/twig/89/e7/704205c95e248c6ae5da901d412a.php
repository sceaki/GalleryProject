<?php

/* AcmeDemoBundle:Demo:item.html.twig */
class __TwigTemplate_89e7704205c95e248c6ae5da901d412a extends Twig_Template
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
        // line 28
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Item";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elem"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 7
            echo "    <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "getImageName", array(), "method"), "html", null, true);
            echo "</h1>
\t
\t\t";
            // line 10
            echo "\t\t<table>
\t\t\t <tr>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_item", array("id" => $this->getAttribute($this->getContext($context, "value"), "getIdImage", array(), "method"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "getImageFile", array(), "method"))), "html", null, true);
            echo "\" style=\"max-width:80%; \"/>
\t\t\t\t\t\t
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "getImageDescription", array(), "method"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t </tr>
\t\t </table>
\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  66 => 17,  60 => 14,  56 => 13,  51 => 10,  45 => 7,  40 => 6,  37 => 5,  31 => 3,  26 => 28,);
    }
}
