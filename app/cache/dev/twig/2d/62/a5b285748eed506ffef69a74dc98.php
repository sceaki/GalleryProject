<?php

/* AcmeDemoBundle:Demo:item.html.twig */
class __TwigTemplate_2d62a5b285748eed506ffef69a74dc98 extends Twig_Template
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
        // line 29
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
        echo "    <h1>Item</h1>
\t
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elem"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 9
            echo "\t\t";
            // line 10
            echo "\t\t<table>
\t\t\t <tr>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_item", array("id" => $this->getAttribute($this->getContext($context, "value"), "idimage"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "image_file"))), "html", null, true);
            echo "\" style=\"max-width:80%; \"/>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "image_name"), "html", null, true);
            echo "
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "image_description"), "html", null, true);
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
        // line 25
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
        return array (  82 => 25,  69 => 18,  64 => 16,  59 => 14,  55 => 13,  50 => 10,  48 => 9,  44 => 8,  40 => 6,  37 => 5,  31 => 3,  26 => 29,);
    }
}
