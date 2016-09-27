<?php

/* @gantry-admin/partials/updates.html.twig */
class __TwigTemplate_96d08277ead7493f752a2ba0cd652bec821373ab04f9a6e225e96a42ede52c77 extends Twig_Template
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
        $context["updates"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "updates", array());
        // line 2
        if ((isset($context["updates"]) ? $context["updates"] : null)) {
            // line 3
            echo "<div class=\"g-grid\">
    <div class=\"g-block\">
        <div class=\"update-header clearfix\">
            <span class=\"update-text\">Updates Available: ";
            // line 6
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["updates"]) ? $context["updates"] : null), ", "), "html", null, true);
            echo "</span>
            <div class=\"update-tools\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "update", array()));
            echo "\" class=\"button button-update\"><i class=\"fa fa-refresh\"></i> <span>Update</span></a>
                <a href=\"#\" class=\"fa fa-close\" data-g-close=\".g-grid\"></a>
            </div>
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/updates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 8,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
