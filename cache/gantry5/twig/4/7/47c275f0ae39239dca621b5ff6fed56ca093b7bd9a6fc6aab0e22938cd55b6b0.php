<?php

/* menu/item.html.twig */
class __TwigTemplate_47c275f0ae39239dca621b5ff6fed56ca093b7bd9a6fc6aab0e22938cd55b6b0 extends Twig_Template
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
        $context["ajaxTarget"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) > 1)) ? ("data-g5-ajaxify-target-parent=\".submenu-column\"") : ("data-g5-ajaxify-target=\"[data-g5-menu-columns]\""));
        // line 2
        echo "
";
        // line 3
        $context["tag"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())) ? ("a") : ("span"));
        // line 4
        $context["attributes"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())) ? (((((((" data-g5-ajaxify=\"\" data-g5-ajaxify-params=\"" . twig_escape_filter($this->env, "{\"inline\":1}", "html_attr")) . "\" ") . (isset($context["ajaxTarget"]) ? $context["ajaxTarget"] : null)) . " href=\"") . twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu", 1 => (isset($context["id"]) ? $context["id"] : null), 2 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array())), "method"))) . "\"")) : (""));
        // line 5
        echo "
<";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
        echo (isset($context["attributes"]) ? $context["attributes"] : null);
        echo " class=\"menu-item\">
";
        // line 7
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "particle")) {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()));
            echo "
    <span class=\"badge menu-item-type\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "particle", array()));
            echo "</span>
";
        } else {
            // line 11
            echo "    ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array())) {
                // line 12
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array())));
                echo "\" />
    ";
            } elseif ($this->getAttribute(            // line 13
(isset($context["item"]) ? $context["item"] : null), "icon", array())) {
                // line 14
                echo "        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()));
                echo "\"></i>
    ";
            }
            // line 16
            echo "    ";
            if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon_only", array()) ||  !($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array()) || $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array())))) {
                // line 17
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()));
                echo "
    ";
            }
            // line 19
            echo "    ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())) {
                // line 20
                echo "<span class=\"parent-indicator\"></span>";
            }
        }
        // line 23
        echo "</";
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
        echo ">
<a class=\"config-cog\" href=\"";
        // line 24
        echo ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "particle")) ? (twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/particle"), "method"))) : (twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/edit", 1 => (isset($context["id"]) ? $context["id"] : null), 2 => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array())), "method"))));
        echo "\">
    <i class=\"fa fa-cog\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "menu/item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  80 => 23,  76 => 20,  73 => 19,  67 => 17,  64 => 16,  58 => 14,  56 => 13,  51 => 12,  48 => 11,  43 => 9,  38 => 8,  36 => 7,  31 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
