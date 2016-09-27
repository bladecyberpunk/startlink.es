<?php

/* @gantry-admin/partials/gantry-details.html.twig */
class __TwigTemplate_e918d89e38bd0ddd43b0ecdf08096ce873e3edc83cefad094b797b1cb7b0e697 extends Twig_Template
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
        echo "<div class=\"g-grid overview-gantry\">
\t<div class=\"g-block size-35\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-assets://images/gantry5-logo-light.png"));
        echo "\" class=\"about-gantry\" alt=\"Gantry 5\" />

\t</div>
\t<div class=\"g-block\">
\t\t<p>
\t\t    Gantry 5 is the most customizable and powerful version of the framework yet. Packed full of features such as drag-and-drop layout creation and the powerful particle system, Gantry 5 has been designed from the ground up to be lightning fast and hassle free.
\t\t</p>
\t\t<ul class=\"overview-list\">
\t\t    <li><i class=\"fa fa-asterisk\"></i>Fast, flexible, easy to use framework</li>
\t\t    <li><i class=\"fa fa-asterisk\"></i>Drag-n-drop layout controls</li>
\t\t    <li><i class=\"fa fa-asterisk\"></i>Powerful dynamic particles system</li>
\t\t</ul>
\t\t<p><a href=\"http://docs.gantry.org/gantry5\" class=\"button button-primary\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a></p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/gantry-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
