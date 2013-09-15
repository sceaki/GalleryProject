<?php

/* AcmeDemoBundle:Secured:list.html.twig */
class __TwigTemplate_8cff3c26ffd5241c1ced367cc9d9d873 extends Twig_Template
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
        // line 62
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "GalleryProject - List ";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_secured_insert_image");
        echo "\">Insert image
\t</a>
\t<br/>
\t<br/>
\t<table width=\"100%\">
\t<tr>
\t\t<td valign=\"top\" style=\"padding-right:20px;\">
\t\t\t<ul>
\t\t\t\t<li> 
\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_demo_secured_list");
        echo "\">
\t\t\t\t\t\tAll
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "list_categories"));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 21
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_list_filter", array("idcategory" => $this->getAttribute($this->getContext($context, "value"), "idcategory"))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "category_name"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</ul>
\t\t</td>
\t\t<td>
\t
\t\t\t<table border=\"0\" >
\t\t\t <tr>
\t\t\t";
        // line 34
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
            // line 35
            echo "\t\t\t\t";
            // line 36
            echo "\t\t\t\t
\t\t\t\t\t\t<td align=\"center\">
\t\t\t\t\t\t\t<!--<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_item", array("id" => $this->getAttribute($this->getContext($context, "value"), "idimage"))), "html", null, true);
            echo "\">-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div style=\"margin:3px;width: 300px;height: 300px;border-radius: 150px;-webkit-border-radius: 150px;-moz-border-radius: 150px;background:url(";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "image_file"))), "html", null, true);
            echo ") 50% 50%; background-size: 500px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/acmedemo/images/" . $this->getAttribute($this->getContext($context, "value"), "image_file"))), "html", null, true);
            echo "\" style=\"width:300px;height:300px;opacity: 0;filter: alpha(opacity=0); \"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "image_name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "category_name"), "html", null, true);
            echo "
\t\t\t\t\t\t\t<!--</a>-->
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 49
            if ((0 == $this->getAttribute($this->getContext($context, "loop"), "index") % 3)) {
                // line 50
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t";
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
        // line 54
        echo "\t\t\t</tr>
\t\t\t</table>
\t\t</td>
\t</tr>
</table>
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
        return array (  160 => 54,  146 => 53,  141 => 50,  139 => 49,  133 => 46,  128 => 44,  122 => 41,  118 => 40,  113 => 38,  109 => 36,  107 => 35,  90 => 34,  82 => 28,  71 => 23,  67 => 22,  64 => 21,  60 => 20,  53 => 16,  40 => 7,  37 => 6,  31 => 3,  26 => 62,);
    }
}
