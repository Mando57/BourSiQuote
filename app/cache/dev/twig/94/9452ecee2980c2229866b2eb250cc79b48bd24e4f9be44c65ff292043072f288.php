<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_f36220e797b78d08e02968cbaa1f9d18bfd2d29d0b26975b8e9c30a15dbbdd59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_305c2163a38b46f809427fb935cfb82e63428c72c1eaaa2ee79be05239764795 = $this->env->getExtension("native_profiler");
        $__internal_305c2163a38b46f809427fb935cfb82e63428c72c1eaaa2ee79be05239764795->enter($__internal_305c2163a38b46f809427fb935cfb82e63428c72c1eaaa2ee79be05239764795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : null), "keys", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["bag"]) ? $context["bag"] : null), "get", array(0 => $context["key"]), "method")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
        
        $__internal_305c2163a38b46f809427fb935cfb82e63428c72c1eaaa2ee79be05239764795->leave($__internal_305c2163a38b46f809427fb935cfb82e63428c72c1eaaa2ee79be05239764795_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  22 => 1,);
    }
}
/* <table {% if class is defined %}class='{{ class }}'{% endif %} >*/
/*     <thead>*/
/*         <tr>*/
/*             <th scope="col" style="width: 25%">Key</th>*/
/*             <th scope="col" style="width: 75%">Value</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for key in bag.keys|sort %}*/
/*             <tr>*/
/*                 <th>{{ key }}</th>*/
/*                 <td><pre>{{ profiler_dump(bag.get(key)) }}</pre></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
