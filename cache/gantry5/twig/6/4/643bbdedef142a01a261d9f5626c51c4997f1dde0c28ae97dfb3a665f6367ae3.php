<?php

/* forms/field.html.twig */
class __TwigTemplate_643bbdedef142a01a261d9f5626c51c4997f1dde0c28ae97dfb3a665f6367ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'reset_field' => array($this, 'block_reset_field'),
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
        $context["default_value"] = (((null === (isset($context["default_value"]) ? $context["default_value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["default_value"]) ? $context["default_value"] : null)));
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('field', $context, $blocks);
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

    // line 19
    public function block_field($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"settings-param ";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), ".", "-"));
        echo "\">
        ";
        // line 21
        if ((((isset($context["overrideable"]) ? $context["overrideable"] : null) && ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array(), "any", true, true) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array()) == true))) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) != "container.set"))) {
            // line 22
            echo "            <input type=\"checkbox\" class=\"settings-param-toggle\" id=\"of-";
            echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : null) != (isset($context["default_value"]) ? $context["default_value"] : null))) ? (" checked=\"checked\"") : (""));
            echo " />
            <label class=\"settings-param-override\" for=\"of-";
            // line 23
            echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
            echo "\"></label>
        ";
        }
        // line 25
        echo "        ";
        $this->displayBlock('contents', $context, $blocks);
        // line 61
        echo "    </div>
";
    }

    // line 25
    public function block_contents($context, array $blocks = array())
    {
        // line 26
        echo "            <span class=\"settings-param-title float-left\">
                ";
        // line 27
        $this->displayBlock('label', $context, $blocks);
        // line 35
        echo "            </span>
            <div class=\"settings-param-field\">
                ";
        // line 37
        $this->displayBlock('group', $context, $blocks);
        // line 59
        echo "            </div>
        ";
    }

    // line 27
    public function block_label($context, array $blocks = array())
    {
        // line 28
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 29
            echo "                        <span class=\"g-tooltip\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</span>
                    ";
        } else {
            // line 31
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "
                    ";
        }
        // line 33
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 37
    public function block_group($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 58
        echo "                ";
    }

    // line 38
    public function block_input($context, array $blocks = array())
    {
        // line 39
        echo "                        <input
                                ";
        // line 41
        echo "                                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))));
        echo "\"
                                value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "));
        echo "\"
                                ";
        // line 44
        echo "                                ";
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 50
        echo "                                />

                        ";
        // line 52
        $this->displayBlock('reset_field', $context, $blocks);
        // line 57
        echo "                    ";
    }

    // line 44
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 45
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()));
            echo "\" ";
        }
        // line 46
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 47
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 48
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()));
            echo "\" ";
        }
        // line 49
        echo "                                ";
    }

    // line 52
    public function block_reset_field($context, array $blocks = array())
    {
        // line 53
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reset_field", array(), "any", true, true) || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reset_field", array()), array(0 => "on", 1 => "true", 2 => 1)))) {
            // line 54
            echo "                                <span class=\"g-reset-field\" data-g-reset-field=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))));
            echo "\"><i class=\"fa  fa-fw fa-times-circle\"></i></span>
                            ";
        }
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 54,  231 => 53,  228 => 52,  224 => 49,  217 => 48,  210 => 47,  203 => 46,  196 => 45,  193 => 44,  189 => 57,  187 => 52,  183 => 50,  180 => 44,  176 => 42,  171 => 41,  168 => 39,  165 => 38,  161 => 58,  158 => 38,  155 => 37,  148 => 33,  142 => 31,  134 => 29,  131 => 28,  128 => 27,  123 => 59,  121 => 37,  117 => 35,  115 => 27,  112 => 26,  109 => 25,  104 => 61,  101 => 25,  96 => 23,  89 => 22,  87 => 21,  82 => 20,  79 => 19,  74 => 10,  69 => 4,  64 => 2,  60 => 19,  57 => 18,  55 => 17,  53 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 10,  41 => 9,  38 => 8,  36 => 7,  33 => 4,  31 => 2,  29 => 1,);
    }
}
