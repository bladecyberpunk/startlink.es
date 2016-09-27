<?php

/* forms/fields/input/filepicker.html.twig */
class __TwigTemplate_445bef9fe1527f77c0269049451ce6465f67a88682f3af7128d3411d04cfbf4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'reset_field' => array($this, 'block_reset_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ("forms/field.html.twig")), "forms/fields/input/filepicker.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"g-filepicker\">
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
        $context["picker"] = array("field" => (("input[name=\"" . twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))))) . "\"]"), "root" => twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "root", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "root", array()), "gantry-media://")) : ("gantry-media://"))), "filter" => twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()), false)) : (false))));
        // line 20
        echo "            <span class=\"input-group-btn\">
                <button class=\"button\" type=\"button\" data-g5-filepicker=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["picker"]) ? $context["picker"] : null)), "html_attr");
        echo "\">
                    <i class=\"fa ";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "icon", array()), "fa-file-o")) : ("fa-file-o")));
        echo "\" ></i>
                </button>
            </span>
            ";
        // line 25
        $this->displayBlock('reset_field', $context, $blocks);
        // line 26
        echo "        </div>
    </div>
";
    }

    // line 25
    public function block_reset_field($context, array $blocks = array())
    {
        $this->displayParentBlock("reset_field", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "forms/fields/input/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  96 => 26,  94 => 25,  88 => 22,  84 => 21,  81 => 20,  79 => 19,  76 => 18,  69 => 17,  64 => 16,  59 => 15,  52 => 14,  47 => 12,  43 => 10,  39 => 9,  36 => 8,  31 => 4,  28 => 3,  19 => 1,);
    }
}
