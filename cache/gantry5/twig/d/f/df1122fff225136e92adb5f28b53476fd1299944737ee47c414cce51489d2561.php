<?php

/* forms/fields/select/select.html.twig */
class __TwigTemplate_df1122fff225136e92adb5f28b53476fd1299944737ee47c414cce51489d2561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/select/select.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'options' => array($this, 'block_options'),
            'reset_field' => array($this, 'block_reset_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <select
            ";
        // line 6
        echo "            name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))));
        echo "\"
            ";
        // line 8
        echo "            ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
            ";
        // line 10
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 11
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 12
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "multiple=\"multiple\"";
        }
        // line 13
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 14
        echo "            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) {
            echo "data-placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()));
            echo "\"";
        }
        // line 15
        echo "            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array(), "any", true, true)) {
            echo "size=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()));
            echo "\"";
        }
        // line 16
        echo "            >

        ";
        // line 18
        $this->displayBlock('options', $context, $blocks);
        // line 30
        echo "    </select>
    ";
        // line 31
        $this->displayBlock('reset_field', $context, $blocks);
    }

    // line 18
    public function block_options($context, array $blocks = array())
    {
        // line 19
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 20
            echo "                <option
                        ";
            // line 22
            echo "                        ";
            if (($context["key"] == (isset($context["value"]) ? $context["value"] : null))) {
                echo "selected=\"selected\"";
            }
            // line 23
            echo "                        value=\"";
            echo twig_escape_filter($this->env, $context["key"]);
            echo "\"
                        ";
            // line 25
            echo "                        ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "disabled=\"disabled\"";
            }
            // line 26
            echo "                        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "label", array(), "any", true, true)) {
                echo "label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()), "label", array()));
                echo "\"";
            }
            // line 27
            echo "                        >";
            echo twig_escape_filter($this->env, $context["text"]);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        ";
    }

    // line 31
    public function block_reset_field($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 31,  135 => 29,  126 => 27,  119 => 26,  114 => 25,  109 => 23,  104 => 22,  101 => 20,  96 => 19,  93 => 18,  89 => 31,  86 => 30,  84 => 18,  80 => 16,  73 => 15,  66 => 14,  61 => 13,  56 => 12,  51 => 11,  46 => 10,  41 => 8,  36 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }
}
