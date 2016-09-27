<?php

/* @gantry-admin/pages/configurations/settings/field.html.twig */
class __TwigTemplate_5a290e05442b7cf57a8aff2d910c68a45ccafa669c4b5294f85b579da33e9fb3 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/settings/field.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        $context["action"] = $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => ((((isset($context["configuration"]) ? $context["configuration"] : null) . "/") . strtr((isset($context["route"]) ? $context["route"] : null), ".", "/")) . "/validate")), "method");
        // line 5
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null));
        echo "\">
    ";
        // line 6
        if (($this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "type", array()) == "collection.list")) {
            // line 7
            echo "        ";
            $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/settings/field.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        <div class=\"card settings-block\">
            <h4>
                ";
            // line 11
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 12
                echo "                    <span data-title-editable=\"";
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "data", array()), (isset($context["title"]) ? $context["title"] : null), array(), "array")));
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter(((isset($context["prefix"]) ? $context["prefix"] : null) . (isset($context["title"]) ? $context["title"] : null))), "html", null, true);
                echo "\" class=\"title\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "data", array()), (isset($context["title"]) ? $context["title"] : null), array(), "array"));
                echo "
                    </span>
                    <i class=\"fa fa-pencil font-small\" data-title-edit=\"\"></i>
                ";
            } else {
                // line 17
                echo "                Edit
                ";
            }
            // line 19
            echo "            </h4>
            <div class=\"inner-params\">
                ";
            // line 21
            $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/settings/field.html.twig", 21)->display(array_merge($context, array("skip" => array(0 => (isset($context["title"]) ? $context["title"] : null)))));
            // line 22
            echo "            </div>
        </div>
    ";
        }
        // line 25
        echo "    <div class=\"g-modal-actions\">
        <button class=\"button button-primary\" type=\"submit\">Apply</button>
        <a class=\"button g5-dialog-close\">Cancel</a>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/settings/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  75 => 22,  73 => 21,  69 => 19,  65 => 17,  58 => 13,  51 => 12,  49 => 11,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  32 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
