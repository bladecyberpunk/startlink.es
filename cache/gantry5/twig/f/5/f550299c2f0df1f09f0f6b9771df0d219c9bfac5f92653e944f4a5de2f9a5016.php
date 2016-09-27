<?php

/* @gantry-admin/pages/configurations/layouts/particle.html.twig */
class __TwigTemplate_f550299c2f0df1f09f0f6b9771df0d219c9bfac5f92653e944f4a5de2f9a5016 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/layouts/particle.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"), "html", null, true);
        echo "\">
    <div class=\"g-tabs\">
        <ul>
            <li class=\"active\"><a href=\"#\">Particle</a></li>
            <li><a href=\"#\">Block</a></li>
        </ul>
    </div>

    <div class=\"g-panes\">
        <div class=\"g-pane active\">
            <div class=\"card settings-block\">
                <h4>
                    <span data-title-editable=\"";
        // line 16
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array())));
        echo "\" class=\"title\">";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array())));
        echo "</span> <i class=\"fa fa-pencil font-small\" data-title-edit></i>
                    <span class=\"badge font-small\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "subtype", array()), "html", null, true);
        echo "</span>
                    ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "form", array()), "fields", array()), "enabled", array())) {
            // line 19
            echo "                    ";
            $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/configurations/layouts/particle.html.twig", 19)->display(array_merge($context, array("name" => (("particles." . $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "subtype", array())) . ".enabled"), "field" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "form", array()), "fields", array()), "enabled", array()), "value" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes", array()), "enabled", array()), "default" => 1, "disabled" =>  !$this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => (("particles." . $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "subtype", array())) . ".enabled"), 1 => true), "method"))));
            // line 20
            echo "                    ";
        }
        // line 21
        echo "                </h4>

                <div class=\"inner-params\">
                    ";
        // line 24
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/layouts/particle.html.twig", 24)->display(array_merge($context, array("overrideable" => true, "blueprints" => $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "form", array()))));
        // line 25
        echo "                </div>
            </div>
        </div>

        <div class=\"g-pane\">
            <div class=\"card settings-block\">
                <h4>
                    Block
                </h4>
                <div class=\"inner-params\">
                    ";
        // line 35
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/layouts/particle.html.twig", 35)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["extra"]) ? $context["extra"] : null), "form", array()), "data" => array("block" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "block", array())), "prefix" => "block.")));
        // line 36
        echo "                </div>
            </div>
        </div>
    </div>

    <div class=\"g-modal-actions\">
        <button class=\"button button-primary\" type=\"submit\">Apply</button>
        <a class=\"button g5-dialog-close\">Cancel</a>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/layouts/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  83 => 35,  71 => 25,  69 => 24,  64 => 21,  61 => 20,  58 => 19,  56 => 18,  52 => 17,  46 => 16,  30 => 4,  27 => 3,  18 => 1,);
    }
}
