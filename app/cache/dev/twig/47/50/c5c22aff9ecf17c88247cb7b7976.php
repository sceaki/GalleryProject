<?php

/* AcmeDemoBundle:Secured:list.html.twig */
class __TwigTemplate_4750c5c22aff9ecf17c88247cb7b7976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 57
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "List";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_secured_insert_image");
        echo "\">
\t\tInsert image
\t</a>
\t<ul>
\t\t<li> 
\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("_demo_secured_list", array("idcategory" => 0));
        echo "\">
\t\t\t\tAll
\t\t\t</a>
\t\t</li>
\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_categories"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 18
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_list_filter", array("idcategory" => $this->getAttribute($this->getContext($context, "value"), "idcategory"))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 20
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
        // line 25
        echo "\t</ul>
\t
\t<div style=\"display: block; position : absolute;
\t  float:left; background-color:#f0f0f0;\" id=\"details\">
\t
\t </div>
\t<table border=\"0\">
\t <tr>
\t";
        // line 33
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
            // line 34
            echo "\t\t";
            // line 35
            echo "\t\t
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_item", array("id" => $this->getAttribute($this->getContext($context, "value"), "idimage"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div style=\"margin:3px;width: 300px;height: 300px;border-radius: 150px;-webkit-border-radius: 150px;-moz-border-radius: 150px;background:url(";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "image_file"))), "html", null, true);
            echo ") 50% 50%; background-size: 500px;\">
\t\t\t\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "image_file"))), "html", null, true);
            echo "\" style=\"width:300px;height:300px;opacity: 0;filter: alpha(opacity=0); \" onmouseover=\"javascript:showDetails(event, '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "image_description"), "html", null, true);
            echo "');\" onmouseout=\"javascript:hideDetails();\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "image_name"), "html", null, true);
            echo "
\t\t\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "category_name"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t";
            // line 46
            if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 3)) {
                // line 47
                echo "\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t";
            }
            // line 50
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
        // line 51
        echo "\t</tr>
\t</table>
\t
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  144 => 50,  139 => 47,  137 => 46,  131 => 43,  127 => 42,  119 => 39,  115 => 38,  111 => 37,  107 => 35,  105 => 34,  88 => 33,  78 => 25,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  49 => 13,  40 => 8,  37 => 7,  31 => 3,  26 => 57,);
    }
}
