<?php

/* partials/presets.html.twig */
class __TwigTemplate_dd99e1528b2d52111b34939daefebdf04a0d54c94132504946eab8f99bd04eb6 extends Twig_Template
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
        $context["presets"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "presets", array());
        // line 2
        echo "
<ul class=\"g-grid\">
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["presets"]) ? $context["presets"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["preset"]) {
            // line 5
            echo "        ";
            $context["counter"] = 0;
            // line 6
            echo "        <li class=\"g-block\">
            <a href=\"#\" class=\"swatch\" data-g-styles=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["presets"]) ? $context["presets"] : null), "flatten", array(0 => ($context["key"] . ".styles"), 1 => "][", 2 => "styles"), "method")), "html_attr");
            echo "\">
                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute($context["preset"], "image", array())), $this->env->getExtension('UrlExtension')->urlFunc("gantry-admin://images/placeholder.png")));
            echo "\" class=\"swatch-image\" />
                ";
            // line 9
            if (twig_length_filter($this->env, $this->getAttribute($context["preset"], "colors", array()))) {
                // line 10
                echo "                ";
                $context["stop"] = twig_number_format_filter($this->env, (100 / twig_length_filter($this->env, $this->getAttribute($context["preset"], "colors", array()))), 3, ".");
                // line 11
                echo "                <span class=\"swatch-colors\"
                    ";
                // line 13
                echo "                    style=\"background: linear-gradient(to right
                        ";
                // line 14
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["preset"], "colors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
                    // line 15
                    echo ",";
                    echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                    echo "%,";
                    echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((isset($context["counter"]) ? $context["counter"] : null) + (isset($context["stop"]) ? $context["stop"] : null)), "html", null, true);
                    echo "%
                            ";
                    // line 16
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + (isset($context["stop"]) ? $context["stop"] : null));
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo ")\">
                </span>
                ";
            }
            // line 20
            echo "                <span class=\"swatch-preview\"><i class=\"fa fa-fw fa-eye\"></i></span>
                <span class=\"swatch-matched\"><i class=\"fa fa-fw fa-star\"></i></span>
            </a>
            <span class=\"swatch-description\"><span class=\"swatch-title-matched\"><i class=\"fa fa-fw fa-star\"></i></span> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["preset"], "description", array()), "html", null, true);
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['preset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo " </ul>
";
    }

    public function getTemplateName()
    {
        return "partials/presets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  85 => 23,  80 => 20,  75 => 17,  69 => 16,  58 => 15,  54 => 14,  51 => 13,  48 => 11,  45 => 10,  43 => 9,  39 => 8,  35 => 7,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
