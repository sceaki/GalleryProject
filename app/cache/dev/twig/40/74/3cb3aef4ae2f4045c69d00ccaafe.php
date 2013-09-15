<?php

/* AcmeDemoBundle:Demo:list.html.twig */
class __TwigTemplate_40743cb3aef4ae2f4045c69d00ccaafe extends Twig_Template
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
        // line 49
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "List";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<ul>
\t\t<li> 
\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_demo_list", array("idcategory" => 0));
        echo "\">
\t\t\t\tAll
\t\t\t</a>
\t\t</li>
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_categories"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 14
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_list", array("idcategory" => $this->getAttribute($this->getContext($context, "value"), "idcategory"))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "category_name"), "html", null, true);
            echo "
\t\t\t</a>
\t\t\t
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t</ul>
\t
\t<table border=\"0\">
\t <tr>
\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_images"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 26
            echo "\t\t";
            // line 27
            echo "\t\t
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_item", array("id" => $this->getAttribute($this->getContext($context, "value"), "idimage"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div style=\"margin:3px;width: 300px;height: 300px;border-radius: 150px;-webkit-border-radius: 150px;-moz-border-radius: 150px;background:url(";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "image_file"))), "html", null, true);
            echo ") 50% 50%; background-size: 500px;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "image_file"))), "html", null, true);
            echo "\" style=\"width:300px;height:300px;opacity: 0;filter: alpha(opacity=0); \"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "image_name"), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "category_name"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t";
            // line 38
            if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 3)) {
                // line 39
                echo "\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t";
            }
            // line 42
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</tr>
\t</table>
\t
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  134 => 42,  129 => 39,  127 => 38,  121 => 35,  117 => 34,  111 => 31,  107 => 30,  103 => 29,  99 => 27,  97 => 26,  80 => 25,  74 => 21,  63 => 16,  59 => 15,  56 => 14,  52 => 13,  45 => 9,  40 => 6,  37 => 5,  31 => 3,  26 => 49,);
    }
}
