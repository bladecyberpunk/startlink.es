<?php

/* @gantry-admin/partials/page.html.twig */
class __TwigTemplate_0b7db7054ae6a1b3f38203ee67fc94fbdc0b1cb1cb258ca9259cdadc7fd0ecc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
            'footer_section' => array($this, 'block_footer_section'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('javascript', $context, $blocks);
        $context["headerContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        $this->env->getExtension('UrlExtension')->parseAssetsFunc((isset($context["headerContent"]) ? $context["headerContent"] : null), "head", 10);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('footer_section', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "finalize", array(), "method");
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-admin://assets/css-compiled/joomla-admin.css"));
        echo "\" type=\"text/css\" />
    ";
    }

    // line 6
    public function block_javascript($context, array $blocks = array())
    {
        // line 7
        echo "        <script>
            var GANTRY_AJAX_SUFFIX = '";
        // line 8
        echo $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "ajax_suffix", array());
        echo "';
            var GANTRY_AJAX_URL = '";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "%ajax%"), "method"));
        echo "';
            var GANTRY_AJAX_CONF_URL = '";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "configurations/%ajax%"), "method"));
        echo "';
        </script>
    ";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    // line 19
    public function block_footer_section($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  84 => 16,  77 => 10,  73 => 9,  69 => 8,  66 => 7,  63 => 6,  56 => 3,  53 => 2,  49 => 22,  46 => 21,  44 => 19,  41 => 18,  39 => 16,  36 => 15,  34 => 14,  31 => 6,  28 => 5,  25 => 2,  23 => 1,);
    }
}
