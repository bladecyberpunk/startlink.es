<?php

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_a4ecd3fa25e2837a4f1626d732ee1a9b7279fac043be56ac4661b79889ec5793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/textarea/textarea.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
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
        echo "    <textarea
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
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "cols", array(), "any", true, true)) {
            echo "cols=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "cols", array()));
            echo "\"";
        }
        // line 12
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 13
        echo "            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "maxlength", array(), "any", true, true)) {
            echo "maxlength=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "maxlength", array()));
            echo "\"";
        }
        // line 14
        echo "            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "minlength", array(), "any", true, true)) {
            echo "minlength=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "minlength", array()));
            echo "\"";
        }
        // line 15
        echo "            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()));
            echo "\"";
        }
        // line 16
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 17
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 18
        echo "            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "rows", array(), "any", true, true)) {
            echo "rows=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "rows", array()));
            echo "\"";
        }
        // line 19
        echo "            ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrap", array()), array(0 => "hard", 1 => "soft"))) {
            echo "wrap=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "wrap", array()));
            echo "\"";
        }
        // line 20
        echo "            >";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), "
"));
        echo "</textarea>

    ";
        // line 22
        $this->displayBlock('reset_field', $context, $blocks);
    }

    public function block_reset_field($context, array $blocks = array())
    {
        $this->displayParentBlock("reset_field", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "forms/fields/textarea/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  107 => 20,  100 => 19,  93 => 18,  88 => 17,  83 => 16,  76 => 15,  69 => 14,  62 => 13,  57 => 12,  50 => 11,  45 => 10,  40 => 8,  35 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
