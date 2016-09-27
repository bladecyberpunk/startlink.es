<?php

/* forms/fields/input/icon.html.twig */
class __TwigTemplate_6ec5e1079f160e00cef44d0e314d9cf0a5513cf424911082bf33c0fcd1c9e1cc extends Twig_Template
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
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ("forms/field.html.twig")), "forms/fields/input/icon.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"g-icons\">
        <div class=\"input-group append\">
            <input
                    ";
        // line 8
        echo "                    type=\"text\"
                    name=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))));
        echo "\"
                    value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "));
        echo "\"
                    ";
        // line 12
        echo "                    ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
                    ";
        // line 14
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()));
            echo "\"";
        }
        // line 15
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 17
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "list", array(), "any", true, true)) {
            echo "list=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "list", array()));
            echo "\"";
        }
        // line 18
        echo "                    />
            ";
        // line 19
        $context["picker"] = (("input[name=\"" . twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))))) . "\"]");
        // line 20
        echo "             <span class=\"input-group-btn\">
                <button class=\"button\" type=\"button\" data-g5-iconpicker=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["picker"]) ? $context["picker"] : null), "html_attr");
        echo "\">
                    <i class=\"";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), "fa fa-hand-o-up picker")) : ("fa fa-hand-o-up picker")), "html_attr");
        echo "\"></i>
                </button>
            </span>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/input/icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  83 => 21,  80 => 20,  78 => 19,  75 => 18,  68 => 17,  63 => 16,  58 => 15,  51 => 14,  46 => 12,  42 => 10,  38 => 9,  35 => 8,  30 => 4,  27 => 3,  18 => 1,);
    }
}
