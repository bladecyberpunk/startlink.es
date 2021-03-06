<?php

/* @gantry-admin/pages/about/about.html.twig */
class __TwigTemplate_ea4b326e1c372e7097746f412fa7afd1fd8982170663b0efb288fdb3e9ad313c extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/about/about.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"g-grid overview-header\">
        <div class=\"g-block\">
            <h2 class=\"theme-title\">
                ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "title", array()), "html", null, true);
        echo "
            </h2>
            <span class=\"theme-version\">v";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "version", array()), "html", null, true);
        echo "</span>
            <div>By <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "author", array()), "link", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "author", array()), "name", array()), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"g-block\">
            <span class=\"float-right\">
                <button class=\"button button-back-to-conf\"><i class=\"fa fa-fw fa-arrow-left\"></i> <span>Back to Configuration</span></button>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "support", array()), "link", array()), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-support\"></i> <span>Support</span></a>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "documentation", array()), "link", array()), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-book\"></i> <span>Documentation</span></a>
            </span>
        </div>
    </div>

    <div class=\"g-grid overview-details\">
        <div class=\"g-block size-35\">
             <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "thumbnail", array())), "html", null, true);
        echo "\" class=\"preview-image\" alt=\"\">
        </div>

        <div class=\"g-block\">
            <p>Callisto is the first RocketTheme Club template to be released on the new Gantry 5 Framework, marking the dawn of a new era of powerful, highly customizable and mobile friendly web building, and complemented by a vibrant, engaging visual design.</p>
            <ul class=\"overview-list\">
                <li><i class=\"fa fa-asterisk\"></i>Vibrant, adaptable design</li>
                <li><i class=\"fa fa-asterisk\"></i>Multiple custom particles</li>
                <li><i class=\"fa fa-asterisk\"></i>Six configurable preset style variations</li>
            </ul>
        </div>
    </div>

    ";
        // line 36
        $this->loadTemplate("@gantry-admin/partials/gantry-details.html.twig", "@gantry-admin/pages/about/about.html.twig", 36)->display($context);
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  74 => 23,  64 => 16,  60 => 15,  50 => 10,  46 => 9,  35 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
