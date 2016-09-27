<?php

/* forms/fields/menu/list.html.twig */
class __TwigTemplate_62a72742259965a8d8cb809c1b8084148c0db36f6daabbc0bdffe2014f661331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/select/selectize.html.twig", "forms/fields/menu/list.html.twig", 1);
        $this->blocks = array(
            'options' => array($this, 'block_options'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/selectize.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_options($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("options", $context, $blocks);
        echo "
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "menu", array()), "getMenus", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 6
            echo "        ";
            $context["text"] = twig_capitalize_string_filter($this->env, $context["key"]);
            // line 7
            echo "        <option
                ";
            // line 9
            echo "                ";
            if (($context["key"] == (isset($context["value"]) ? $context["value"] : null))) {
                echo "selected=\"selected\"";
            }
            // line 10
            echo "                value=\"";
            echo twig_escape_filter($this->env, $context["key"]);
            echo "\"
                ";
            // line 12
            echo "                ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "disabled=\"disabled\"";
            }
            // line 13
            echo "                >";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null));
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/menu/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  56 => 12,  51 => 10,  46 => 9,  43 => 7,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
