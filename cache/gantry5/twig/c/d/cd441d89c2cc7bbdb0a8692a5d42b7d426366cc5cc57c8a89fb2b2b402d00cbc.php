<?php

/* @nucleus/partials/particle.html.twig */
class __TwigTemplate_cd441d89c2cc7bbdb0a8692a5d42b7d426366cc5cc57c8a89fb2b2b402d00cbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        $this->displayBlock('javascript', $context, $blocks);
        $context["headerContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        $this->env->getExtension('UrlExtension')->parseAssetsFunc((isset($context["headerContent"]) ? $context["headerContent"] : null));
        // line 8
        echo "
";
        // line 9
        ob_start();
        // line 10
        $this->displayBlock('javascript_footer', $context, $blocks);
        $context["footerContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        $this->env->getExtension('UrlExtension')->parseAssetsFunc((isset($context["footerContent"]) ? $context["footerContent"] : null), "footer");
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('particle', $context, $blocks);
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
    }

    // line 10
    public function block_javascript_footer($context, array $blocks = array())
    {
    }

    // line 15
    public function block_particle($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@nucleus/partials/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  59 => 10,  54 => 4,  49 => 2,  45 => 15,  42 => 14,  40 => 13,  37 => 10,  35 => 9,  32 => 8,  30 => 7,  27 => 4,  25 => 2,  23 => 1,);
    }
}
