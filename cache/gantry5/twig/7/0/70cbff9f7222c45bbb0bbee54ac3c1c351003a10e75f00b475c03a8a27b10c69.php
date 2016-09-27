<?php

/* @gantry-admin/pages/configurations/layouts/edit.html.twig */
class __TwigTemplate_70cbff9f7222c45bbb0bbee54ac3c1c351003a10e75f00b475c03a8a27b10c69 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/layouts/edit.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"g-grid\">
    <div class=\"g-block sidebar-block size-14\">
        <h2 class=\"page-title\">
            <span class=\"title\">Particles</span>
        </h2>
        <div class=\"g5-lm-particles-picker\">
            <div class=\"search settings-block\">
                <input type=\"text\" placeholder=\"Filter...\" />
                <i class=\"fa fa-fw fa-search\"></i>
            </div>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["particles"]) ? $context["particles"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["list"]) {
            // line 15
            echo "                    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]));
            echo "
                    <ul>
                    ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["list"]);
            foreach ($context['_seq'] as $context["type"] => $context["particle"]) {
                // line 18
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["particle"]);
                foreach ($context['_seq'] as $context["item_key"] => $context["item"]) {
                    // line 19
                    echo "                            <li class=\"g5-lm-particle-";
                    echo twig_escape_filter($this->env, $context["type"]);
                    echo "\"
                                data-lm-blocktype=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $context["type"]);
                    echo "\"
                                data-lm-subtype=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $context["item_key"]);
                    echo "\"
                                ";
                    // line 22
                    if ( !$this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => (("particles." . $context["item_key"]) . ".enabled"), 1 => true), "method")) {
                        echo "data-lm-disabled data-lm-nodrag title=\"This particle has been disabled from the Settings Panel and it cannot be added into the Layout\"";
                    }
                    echo ">
                                ";
                    // line 23
                    echo twig_escape_filter($this->env, $context["item"]);
                    echo "
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['item_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['particle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
    <div class=\"g-block main-block\">
        <span class=\"float-right\">
            ";
        // line 35
        echo "            <a href=\"#\" class=\"button\" data-lm-switcher=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["switcher_url"]) ? $context["switcher_url"] : null)), "method"));
        echo "\"><i class=\"fa fa-fw fa-code-fork\"></i> <span>Load</span></a>
            <a href=\"#\" class=\"button\" data-lm-clear><i class=\"fa fa-fw fa-trash-o\"></i> <span>Clear</span></a>
            <a href=\"#\" class=\"button button-primary button-save\" data-save=\"Layout\"><i class=\"fa fa-fw fa-check\"></i> <span>Save Layout</span></a>
        </span>
        <h2 class=\"page-title layout-title\">
            <span class=\"title\">Layout <small>(";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("preset_title", $context)) ? (_twig_default_filter((isset($context["preset_title"]) ? $context["preset_title"] : null), "Unknown")) : ("Unknown")), "html", null, true);
        echo ")</small></span>
        </h2>

        <div class=\"lm-newblocks clearfix\" data-lm-blocktypes>
            ";
        // line 45
        echo "            <span class=\"float-right\">
                <a data-lm-back href=\"#\" class=\"button disabled\"><i class=\"fa fa-fw fa-arrow-left\"></i> Undo</a>
                ";
        // line 48
        echo "                <a data-lm-forward href=\"#\" class=\"button disabled\">Redo <i class=\"fa fa-fw fa-arrow-right\"></i></a>
            </span>
        </div>
        <div id=\"page\">
            <div class=\"lm-blocks\" data-lm-page=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null));
        echo "\" data-lm-preset=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["preset"]) ? $context["preset"] : null)), "html_attr");
        echo "\" data-lm-root=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["layout"]) ? $context["layout"] : null)), "html_attr");
        echo "\"></div>
            ";
        // line 53
        if (twig_test_empty((isset($context["layout"]) ? $context["layout"] : null))) {
            // line 54
            echo "            <div id=\"lm-no-layout\">
                <div class=\"card full-width\">
                    <h4>No layout specified!</h4>
                    <div class=\"inner-params\">
                        <p>This configuration has no layout specified and will use layout defined in <i>Base Configuration</i>.</p>
                        <p>To use preset layout or copy layout from any existing configuration:</p>
                        <ul>
                            <li>Click on <strong>Load</strong></li>
                            <li>Select a new layout from either <strong>Presets</strong> or <strong>Configurations</strong></li>
                            <li>Click on <strong>Save Layout</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            ";
        }
        // line 69
        echo "        </div>
    </div>

    <div id=\"trash\" data-lm-eraseblock><div class=\"trash-zone\">&times;</div><span>Drop here to delete</span></div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/layouts/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 69,  144 => 54,  142 => 53,  134 => 52,  128 => 48,  124 => 45,  117 => 40,  108 => 35,  102 => 29,  95 => 27,  89 => 26,  80 => 23,  74 => 22,  70 => 21,  66 => 20,  61 => 19,  56 => 18,  52 => 17,  46 => 15,  42 => 14,  30 => 4,  27 => 3,  18 => 1,);
    }
}
