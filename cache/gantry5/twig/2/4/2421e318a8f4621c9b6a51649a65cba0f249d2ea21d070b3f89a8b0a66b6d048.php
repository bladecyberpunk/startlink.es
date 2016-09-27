<?php

/* @gantry-admin/pages/configurations/configurations.html.twig */
class __TwigTemplate_2421e318a8f4621c9b6a51649a65cba0f249d2ea21d070b3f89a8b0a66b6d048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/configurations.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"menu-header\">
        <span class=\"float-right\">
            <button class=\"button button-back-to-conf\"><i class=\"fa fa-fw fa-fw fa-arrow-left\"></i> <span>Back to Configuration</span></button>
        </span>
        <h2 class=\"page-title\">
            Configurations
            <button data-g-config=\"create\" data-g-config-href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["name"]) ? $context["name"] : null), 2 => "create"), "method"));
        echo "\" data-g-config-method=\"POST\" class=\"button button-primary\">
                <i class=\"fa fa-fw fa-plus\"></i>
            </button>
            ";
        // line 14
        echo "            ";
        // line 15
        echo "        </h2>
    </div>

    <div id=\"configurations\" class=\"cards-wrapper\">
        <ul class=\"g-grid\">
            ";
        // line 21
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "configurations", array()), "user", array()));
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 22
            echo "                ";
            // line 23
            echo "                <li class=\"card g-block size-1-4\">
                    <div class=\"page\">
                        <h4>
                            <span data-g-config-href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"], 2 => "rename"), "method"));
            echo "\" data-g-config-method=\"POST\" data-title-editable=\"";
            echo twig_escape_filter($this->env, $context["title"]);
            echo "\" class=\"title\">";
            echo twig_escape_filter($this->env, $context["title"]);
            echo "</span> <i class=\"fa fa-fw fa-pencil font-small\" data-title-edit=\"\"></i>
                        </h4>
                        <div class=\"inner-params\">
                            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc((($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array()), "gantry-admin://images/layouts/default.png")) : ("gantry-admin://images/layouts/default.png"))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"inner-params\">
                            <div class=\"center\">
                                <a data-title=\"Edit\" data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content-wrapper]\" data-g5-ajaxify-params=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"], 2 => "styles"), "method"));
            echo "\" class=\"button button-primary g-tooltip\">
                                    <i class=\"fa fa-fw fa-pencil\"></i>
                                </a>
                                <button data-title=\"Duplicate\" data-g-config=\"duplicate\" data-g-config-href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"], 2 => "duplicate"), "method"));
            echo "\" data-g-config-method=\"POST\" class=\"button button-secondary g-tooltip\">
                                    <i class=\"fa fa-fw fa-copy\"></i>
                                </button>
                                ";
            // line 39
            if (($context["name"] != "default")) {
                // line 40
                echo "                                <button data-title=\"Delete\" data-g-config=\"delete\" data-g-config-href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"]), "method"));
                echo "\" data-g-config-method=\"DELETE\" class=\"button red g-tooltip\">
                                    <i class=\"fa fa-fw fa-trash-o\"></i>
                                </button>
                                ";
            }
            // line 44
            echo "                            </div>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            <li class=\"card g-block size-1-4 add-new\">
                <div class=\"page\">
                    <a data-g-config=\"create\" data-g-config-href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["name"]) ? $context["name"] : null), 2 => "create"), "method"));
        echo "\" data-g-config-method=\"POST\" data-g5-lm-add>
                        <i class=\"fa fa-fw fa-plus\"></i>
                    </a>
                    ";
        // line 55
        echo "                </div>
            </li>
        </ul>

        <h2>System Configurations</h2>
        <ul class=\"g-grid\">
            ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "configurations", array()), "system", array()));
        foreach ($context['_seq'] as $context["name"] => $context["title"]) {
            // line 62
            echo "                ";
            // line 63
            echo "                <li class=\"card g-block size-1-4\">
                    <div class=\"page\">
                        <h4>";
            // line 65
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</h4>
                        <div class=\"inner-params\">
                            <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc((($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["preset"]) ? $context["preset"] : null), "image", array()), "gantry-admin://images/layouts/default.png")) : ("gantry-admin://images/layouts/default.png"))), "html", null, true);
            echo "\" />
                        </div>
                        <div class=\"inner-params\">
                            ";
            // line 77
            echo "                            <div class=\"center\">
                                <a data-title=\"Edit\" data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content-wrapper]\" data-g5-ajaxify-params=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("navbar" => true)), "html_attr");
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"], 2 => "styles"), "method"));
            echo "\" class=\"button button-primary g-tooltip\">
                                    <i class=\"fa fa-fw fa-pencil\"></i>
                                </a>
                                <button data-title=\"Duplicate\" data-g-config=\"duplicate\" data-g-config-href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => $context["name"], 2 => "duplicate"), "method"));
            echo "\" data-g-config-method=\"POST\" class=\"button button-secondary g-tooltip\">
                                    <i class=\"fa fa-fw fa-copy\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/configurations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 89,  166 => 81,  158 => 78,  155 => 77,  149 => 67,  144 => 65,  140 => 63,  138 => 62,  134 => 61,  126 => 55,  120 => 51,  116 => 49,  106 => 44,  98 => 40,  96 => 39,  90 => 36,  82 => 33,  75 => 29,  65 => 26,  60 => 23,  58 => 22,  53 => 21,  46 => 15,  44 => 14,  38 => 10,  30 => 4,  27 => 3,  18 => 1,);
    }
}
