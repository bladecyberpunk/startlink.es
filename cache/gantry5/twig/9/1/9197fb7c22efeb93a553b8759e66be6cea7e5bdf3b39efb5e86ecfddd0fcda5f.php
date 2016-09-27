<?php

/* @particles/logo.html.twig */
class __TwigTemplate_9197fb7c22efeb93a553b8759e66be6cea7e5bdf3b39efb5e86ecfddd0fcda5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "url", array())));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()));
        echo "\" rel=\"home\" class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())));
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()));
        echo "\" />
</a>
";
    }

    public function getTemplateName()
    {
        return "@particles/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
