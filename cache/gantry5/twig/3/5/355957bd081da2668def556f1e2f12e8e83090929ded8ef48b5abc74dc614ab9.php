<?php

/* @gantry-admin/pages/configurations/layouts/section.html.twig */
class __TwigTemplate_355957bd081da2668def556f1e2f12e8e83090929ded8ef48b5abc74dc614ab9 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/layouts/section.html.twig", 1);
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
    <div class=\"card settings-block\">
        <h4>
            ";
        // line 7
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "name", array())));
        echo " ";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array())));
        echo "
        </h4>

        <div class=\"inner-params\">
            ";
        // line 11
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/layouts/section.html.twig", 11)->display(array_merge($context, array("overridable" => true, "blueprints" => $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "form", array()))));
        // line 12
        echo "        </div>
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
        return "@gantry-admin/pages/configurations/layouts/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  46 => 11,  37 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
