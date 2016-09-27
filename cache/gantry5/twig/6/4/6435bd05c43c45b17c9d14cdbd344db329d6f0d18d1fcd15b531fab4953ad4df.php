<?php

/* @gantry-admin/partials/header.html.twig */
class __TwigTemplate_6435bd05c43c45b17c9d14cdbd344db329d6f0d18d1fcd15b531fab4953ad4df extends Twig_Template
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
        echo "<div class=\"g-grid\">
    <div class=\"g-block\">
        <div class=\"g-content clearfix\">
            <span class=\"theme-title\"><i class=\"fa fa-tint\"></i> Theme: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "title", array()));
        echo " <small>(";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "name", array()));
        echo ")</small></span>

            ";
        // line 6
        $context["settings_url"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "settings", array());
        // line 7
        echo "            ";
        $context["settings_key"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "settings_key", array());
        // line 8
        echo "            ";
        // line 15
        echo "            <ul class=\"float-right\">
                <li ";
        // line 16
        echo ((((isset($context["location"]) ? $context["location"] : null) == "configurations")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations"), "method"));
        echo "\"><i class=\"fa fa-fw fa-gears\"></i> Configurations</a>
                </li>
                <li ";
        // line 19
        echo ((((isset($context["location"]) ? $context["location"] : null) == "menu")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu"), "method"));
        echo "\"><i class=\"fa fa-fw fa-list\"></i> <span>Menu</span></a>
                </li>
                <li ";
        // line 22
        echo ((((isset($context["location"]) ? $context["location"] : null) == "about")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "about"), "method"));
        echo "\"><i class=\"fa fa-fw fa-question-circle\"></i> <span>About</span></a>
                </li>
                <li data-g-extras>
                    <a href=\"#\"><i class=\"fa fa-fw fa-cog\"></i> Extras <i class=\"small fa fa-fw fa-chevron-down\"></i></a>
                    <ul data-popover-content class=\"hidden\">
                        <li data-g-popover-follow>
                            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "cache"), "method"));
        echo "\" data-ajax-action data-ajax-action-method=\"get\" data-ajax-action-indicator=\"li[data-g-extras]\"><i class=\"fa fa-fw fa-recycle\"></i> Clear Cache</a>
                        </li>
                        ";
        // line 31
        if ((isset($context["settings_url"]) ? $context["settings_url"] : null)) {
            // line 32
            echo "                            <li>
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["settings_url"]) ? $context["settings_url"] : null));
            echo "\" data-settings-key=\"";
            echo twig_escape_filter($this->env, (isset($context["settings_key"]) ? $context["settings_key"] : null));
            echo "\"><i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "name", array()), "html", null, true);
            echo "\"></i> Platform Settings</a>
                            </li>
                        ";
        }
        // line 36
        echo "                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  82 => 33,  79 => 32,  77 => 31,  72 => 29,  63 => 23,  59 => 22,  54 => 20,  50 => 19,  45 => 17,  41 => 16,  38 => 15,  36 => 8,  33 => 7,  31 => 6,  24 => 4,  19 => 1,);
    }
}
