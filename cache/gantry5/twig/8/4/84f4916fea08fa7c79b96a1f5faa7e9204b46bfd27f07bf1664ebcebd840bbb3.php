<?php

/* partials/configuration-selector.html.twig */
class __TwigTemplate_84f4916fea08fa7c79b96a1f5faa7e9204b46bfd27f07bf1664ebcebd840bbb3 extends Twig_Template
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
        // line 1
        echo "<li class=\"config-select-wrap\">
    ";
        // line 3
        echo "    <select id=\"configuration-selector\" class=\"config-select\" data-selectize-ajaxify data-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("allowEmptyOption" => true)), "html_attr");
        echo "\">
        <optgroup label=\"Global Defaults\">
            <option value=\"default\"
                ";
        // line 6
        if (((isset($context["configuration"]) ? $context["configuration"] : null) == "default")) {
            echo "selected=\"selected\"";
        }
        // line 7
        echo "                data-data=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("params" => array("navbar" => true), "url" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations/default", 1 => ((array_key_exists("configuration_page", $context)) ? (_twig_default_filter((isset($context["configuration_page"]) ? $context["configuration_page"] : null), "styles")) : ("styles"))), "method"))), "html_attr");
        echo "\">
                ";
        // line 8
        echo "Base Configuration";
        echo "
            </option>
        </optgroup>

        ";
        // line 12
        $context["user_conf"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "configurations", array()), "user", array());
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["user_conf"]) ? $context["user_conf"] : null), "count", array())) {
            // line 14
            echo "        <optgroup label=\"Theme Pages\">
            ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_conf"]) ? $context["user_conf"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 16
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["name"]);
                echo "\"
                        ";
                // line 17
                if (($context["name"] == (isset($context["configuration"]) ? $context["configuration"] : null))) {
                    echo "selected=\"selected\"";
                }
                // line 18
                echo "                        data-data=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("params" => array("navbar" => true), "url" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => twig_escape_filter($this->env, $context["name"]), 2 => ((array_key_exists("configuration_page", $context)) ? (_twig_default_filter((isset($context["configuration_page"]) ? $context["configuration_page"] : null), "styles")) : ("styles"))), "method"))), "html_attr");
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $context["title"]);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </optgroup>
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        $context["system_conf"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "configurations", array()), "system", array());
        // line 26
        echo "        ";
        if ($this->getAttribute((isset($context["system_conf"]) ? $context["system_conf"] : null), "count", array())) {
            // line 27
            echo "        <optgroup label=\"System Pages\">
            ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["system_conf"]) ? $context["system_conf"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 29
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["name"]);
                echo "\"
                        ";
                // line 30
                if (($context["name"] == (isset($context["configuration"]) ? $context["configuration"] : null))) {
                    echo "selected=\"selected\"";
                }
                // line 31
                echo "                        data-data=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("params" => array("navbar" => true), "url" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => twig_escape_filter($this->env, $context["name"]), 2 => ((array_key_exists("configuration_page", $context)) ? (_twig_default_filter((isset($context["configuration_page"]) ? $context["configuration_page"] : null), "styles")) : ("styles"))), "method"))), "html_attr");
                echo "\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, $context["title"]);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </optgroup>
        ";
        }
        // line 37
        echo "    </select>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/configuration-selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  122 => 35,  113 => 32,  108 => 31,  104 => 30,  99 => 29,  95 => 28,  92 => 27,  89 => 26,  87 => 25,  84 => 24,  80 => 22,  71 => 19,  66 => 18,  62 => 17,  57 => 16,  53 => 15,  50 => 14,  47 => 13,  45 => 12,  38 => 8,  33 => 7,  29 => 6,  22 => 3,  19 => 1,);
    }
}
