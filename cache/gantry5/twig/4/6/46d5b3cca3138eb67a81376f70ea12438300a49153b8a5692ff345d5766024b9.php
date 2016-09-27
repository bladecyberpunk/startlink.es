<?php

/* forms/fields/enable/enable.html.twig */
class __TwigTemplate_46d5b3cca3138eb67a81376f70ea12438300a49153b8a5692ff345d5766024b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ("forms/field.html.twig")), "forms/fields/enable/enable.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "<span class=\"enabler\">
    <input
            ";
        // line 7
        echo "            type=\"hidden\"
            name=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))));
        echo "\"
            value=\"";
        // line 9
        echo (((isset($context["value"]) ? $context["value"] : null)) ? (1) : (0));
        echo "\"
            ";
        // line 10
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            echo "disabled=\"disabled\"";
        }
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
            />
    ";
        // line 14
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 15
            echo "    <span><i class=\"fa fa-power-off\"></i></span>
    ";
        } else {
            // line 17
            echo "    <span class=\"toggle\"><span class=\"knob\"></span></span>
    ";
        }
        // line 19
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/enable/enable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  63 => 17,  59 => 15,  57 => 14,  51 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  34 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
