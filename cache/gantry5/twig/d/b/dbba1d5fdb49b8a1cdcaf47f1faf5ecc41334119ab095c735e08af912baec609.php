<?php

/* @gantry-admin/ajax/icons.html.twig */
class __TwigTemplate_dbba1d5fdb49b8a1cdcaf47f1faf5ecc41334119ab095c735e08af912baec609 extends Twig_Template
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
        echo "<div class=\"g-particles-header icons-header settings-block clearfix\">
    <div class=\"float-left particle-search-wrapper\">
        <input type=\"text\" placeholder=\"Search...\"/>
        <span class=\"particle-search-total\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</span>
    </div>
    <div class=\"float-right\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["option"]) {
            // line 8
            echo "            ";
            if (twig_test_iterable($context["option"])) {
                // line 9
                echo "                <select name=\"type\">
                ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["option"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 11
                    echo "                    <option value=\"fa-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                </select>
            ";
            } else {
                // line 15
                echo "                <label><input type=\"checkbox\" name=\"fa-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" value=\"fa-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"/> ";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</label>
            ";
            }
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
</div>

<div class=\"g-particles-main icons-wrapper\">
    <ul>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["icons"]) ? $context["icons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 24
            echo "            <li data-g-icon=\"";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "\"><i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
</div>
<div class=\"g-particles-footer settings-block clearfix\">
    <div class=\"float-left g-icon-preview\"></div>
    <div class=\"float-right\">
        <a href=\"#\" class=\"button button-primary\" data-g-select=\"\">Select</a>
        <a href=\"#\" class=\"button g5-dialog-close\">Cancel</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  86 => 24,  82 => 23,  75 => 18,  69 => 17,  59 => 15,  55 => 13,  44 => 11,  40 => 10,  37 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
