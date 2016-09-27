<?php

/* partials/page_head.html.twig */
class __TwigTemplate_69e0cee0d2d1cc8b7ace7a7c3f33dfd8d09b356bdaaf4c1dc66bec8039acf689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/page_head.html.twig", "partials/page_head.html.twig", 1);
        $this->blocks = array(
            'head_title' => array($this, 'block_head_title'),
            'head_application' => array($this, 'block_head_application'),
            'head_platform' => array($this, 'block_head_platform'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/page_head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_head_application($context, array $blocks = array())
    {
        // line 7
        echo "<jdoc:include type=\"head\" />";
    }

    // line 10
    public function block_head_platform($context, array $blocks = array())
    {
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "joomla", array())) {
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-assets://css/bootstrap-gantry.css"), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-engine://css-compiled/joomla.css"), "html", null, true);
            echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("media/jui/css/icomoon.css"), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "debug", array())) {
            // line 17
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("media/cms/css/debug.css"), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 17,  61 => 16,  56 => 14,  52 => 13,  47 => 12,  45 => 11,  42 => 10,  38 => 7,  35 => 6,  30 => 3,  11 => 1,);
    }
}
