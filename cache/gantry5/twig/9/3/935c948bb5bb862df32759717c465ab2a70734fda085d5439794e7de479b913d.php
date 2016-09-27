<?php

/* @gantry-admin/pages/configurations/styles/styles.html.twig */
class __TwigTemplate_935c948bb5bb862df32759717c465ab2a70734fda085d5439794e7de479b913d extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/styles/styles.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"styles\">
    <form method=\"post\">
        <span class=\"float-right\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations", 1 => (isset($context["configuration"]) ? $context["configuration"] : null), 2 => "styles/compile"), "method"), "html", null, true);
        echo "\" class=\"button button-secondary\" data-ajax-action><i class=\"fa fa-fw fa-tasks\"></i> <span>Recompile CSS</span></a>
            <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Styles\"><i class=\"fa fa-fw fa-check\"></i> <span>Save Styles</span></button>
        </span>
        <h2 class=\"page-title\">
            <span class=\"title\">Styles</span>
        </h2>

        <div class=\"swatches-block\">
            ";
        // line 15
        $this->loadTemplate("partials/presets.html.twig", "@gantry-admin/pages/configurations/styles/styles.html.twig", 15)->display($context);
        // line 16
        echo "        </div>

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
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
            // line 19
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
            echo " Styles</h2>

        <div id=\"styles\" class=\"cards-wrapper g-grid\">

            ";
            // line 23
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
            foreach ($context['_seq'] as $context["id"] => $context["block"]) {
                // line 24
                echo "                ";
                $context["prefix"] = (("styles." . $context["id"]) . ".");
                // line 25
                echo "                <div class=\"card settings-block\">
                    <h4>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["block"], "name", array()), "html", null, true);
                echo "</h4>
                    <div class=\"inner-params\">
                        ";
                // line 28
                $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/styles/styles.html.twig", 28)->display(array_merge($context, array("overrideable" => (isset($context["overrideable"]) ? $context["overrideable"] : null), "blueprints" => $this->getAttribute($context["block"], "form", array()), "data" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()))));
                // line 29
                echo "                    </div>
                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </div>
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
        // line 34
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/styles/styles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  123 => 32,  107 => 29,  105 => 28,  100 => 26,  97 => 25,  94 => 24,  77 => 23,  69 => 19,  52 => 18,  48 => 16,  46 => 15,  35 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
