<?php

/* partials/error_head.html.twig */
class __TwigTemplate_436708c0196eff18a56f9298f3951600a54b33cc953ff1800e655d8c94f18f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/page_head.html.twig", "partials/error_head.html.twig", 1);
        $this->blocks = array(
            'head_application' => array($this, 'block_head_application'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_application($context, array $blocks = array())
    {
        // line 4
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "styles", array(0 => "head", 1 => true), "method"), "
    ");
        echo "
    ";
        // line 5
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "scripts", array(0 => "head", 1 => true), "method"), "
    ");
    }

    public function getTemplateName()
    {
        return "partials/error_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
