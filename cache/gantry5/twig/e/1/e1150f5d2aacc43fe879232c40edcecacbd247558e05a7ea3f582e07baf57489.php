<?php

/* partials/field.html.twig */
class __TwigTemplate_e1150f5d2aacc43fe879232c40edcecacbd247558e05a7ea3f582e07baf57489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'global_attributes' => array($this, 'block_global_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('javascript', $context, $blocks);
        $context["headerContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        $this->env->getExtension('UrlExtension')->parseAssetsFunc((isset($context["headerContent"]) ? $context["headerContent"] : null));
        // line 8
        echo "
";
        // line 9
        ob_start();
        // line 10
        $this->displayBlock('javascript_footer', $context, $blocks);
        $context["footerContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        $this->env->getExtension('UrlExtension')->parseAssetsFunc((isset($context["footerContent"]) ? $context["footerContent"] : null), "footer");
        // line 14
        echo "
";
        // line 15
        $context["name"] = (((null === (isset($context["name"]) ? $context["name"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) : ((isset($context["name"]) ? $context["name"] : null)));
        // line 16
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('group', $context, $blocks);
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 10
    public function block_javascript_footer($context, array $blocks = array())
    {
    }

    // line 18
    public function block_group($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayBlock('input', $context, $blocks);
    }

    public function block_input($context, array $blocks = array())
    {
        // line 20
        echo "        <input
                ";
        // line 22
        echo "                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
                value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html", null, true);
        echo "\"
                ";
        // line 25
        echo "                ";
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 31
        echo "                />
    ";
    }

    // line 25
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 26
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "html", null, true);
            echo "\" ";
        }
        // line 27
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), "html", null, true);
            echo "\" ";
        }
        // line 28
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()), "html", null, true);
            echo "\" ";
        }
        // line 29
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "html", null, true);
            echo "\" ";
        }
        // line 30
        echo "                ";
    }

    public function getTemplateName()
    {
        return "partials/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 30,  127 => 29,  120 => 28,  113 => 27,  106 => 26,  103 => 25,  98 => 31,  95 => 25,  91 => 23,  86 => 22,  83 => 20,  76 => 19,  73 => 18,  68 => 10,  63 => 4,  58 => 2,  54 => 18,  51 => 17,  49 => 16,  47 => 15,  44 => 14,  42 => 13,  39 => 10,  37 => 9,  34 => 8,  32 => 7,  29 => 4,  27 => 2,  25 => 1,);
    }
}
