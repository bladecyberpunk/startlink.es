<?php

/* @gantry-admin/pages/configurations/settings/settings.html.twig */
class __TwigTemplate_ce74696d43ac4736868f5a74fa3290998e8b21674b23238ace4f27fc2834a673 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/settings/settings.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"settings\">
        <form method=\"post\">
            <div data-set-page=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null), "html", null, true);
        echo "\" data-set-root=\"\">
                <span class=\"float-right\">
                    <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Settings\">
                    <i class=\"fa fa-fw fa-check\"></i> <span>Save Settings</span></button>
                </span>
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["particles"]) ? $context["particles"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group"] => $context["list"]) {
            // line 12
            echo "                    <h2 class=\"page-title\">
                        <span class=\"title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
            echo " Settings</span>
                    </h2>

                    <div class=\"cards-wrapper g-grid\">
                        ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["list"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["id"] => $context["particle"]) {
                // line 18
                echo "                            ";
                if ( !$this->getAttribute($context["particle"], "hidden", array())) {
                    // line 19
                    echo "                                ";
                    $context["prefix"] = (("particles." . $context["id"]) . ".");
                    // line 20
                    echo "                                <div class=\"card settings-block\">
                                    <h4>
                                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["particle"], "name", array()), "html", null, true);
                    echo "
                                        <input type=\"hidden\" name=\"particles[";
                    // line 23
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "]\"/>
                                        ";
                    // line 24
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["particle"], "form", array()), "fields", array()), "enabled", array())) {
                        // line 25
                        echo "                                            ";
                        $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/configurations/settings/settings.html.twig", 25)->display(array_merge($context, array("default" => true, "scope" => (isset($context["prefix"]) ? $context["prefix"] : null), "name" => "enabled", "field" => $this->getAttribute($this->getAttribute($this->getAttribute($context["particle"], "form", array()), "fields", array()), "enabled", array()), "value" => $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "enabled")), "method"))));
                        // line 26
                        echo "                                        ";
                    }
                    // line 27
                    echo "                                    </h4>

                                    <div class=\"inner-params\">
                                        ";
                    // line 30
                    $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/settings/settings.html.twig", 30)->display(array_merge($context, array("overrideable" => (isset($context["overrideable"]) ? $context["overrideable"] : null), "blueprints" => $this->getAttribute($context["particle"], "form", array()), "skip" => array(0 => "enabled"), "data" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "prefix" => (isset($context["prefix"]) ? $context["prefix"] : null))));
                    // line 31
                    echo "                                    </div>
                                </div>
                            ";
                }
                // line 34
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['particle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                    </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/settings/settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 37,  138 => 35,  124 => 34,  119 => 31,  117 => 30,  112 => 27,  109 => 26,  106 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 20,  89 => 19,  86 => 18,  69 => 17,  62 => 13,  59 => 12,  42 => 11,  34 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }
}
