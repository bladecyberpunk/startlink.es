<?php

/* @nucleus/page_head.html.twig */
class __TwigTemplate_bef285846e5cd16753d7e5797d7228bb5349fb829ee322b55ac05086b7462141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_platform' => array($this, 'block_head_platform'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_title' => array($this, 'block_head_title'),
            'head_application' => array($this, 'block_head_application'),
            'head_ie_stylesheets' => array($this, 'block_head_ie_stylesheets'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "    ";
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 12
        $this->displayBlock('head_platform', $context, $blocks);
        $context["headStylesheets"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        $this->env->getExtension('UrlExtension')->parseAssetsFunc((isset($context["headStylesheets"]) ? $context["headStylesheets"] : null), "head", 10);
        // line 16
        echo "<head>";
        // line 17
        $this->displayBlock('head_meta', $context, $blocks);
        // line 22
        $this->displayBlock('head_title', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('head_application', $context, $blocks);
        // line 31
        echo "
    ";
        // line 32
        $this->displayBlock('head_ie_stylesheets', $context, $blocks);
        // line 40
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>
";
    }

    // line 2
    public function block_head_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-assets://css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-engine://css-compiled/nucleus.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array(), "any", false, true), "configuration", array(), "any", false, true), "css", array(), "any", false, true), "persistent", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "configuration", array()), "css", array()), "files", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "configuration", array()), "css", array()), "files", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 6
            $context["url"] = $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "css", array(0 => $context["css"]), "method"));
            if ((isset($context["url"]) ? $context["url"] : null)) {
                // line 7
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "css", array(0 => $context["css"]), "method")), "html", null, true);
                echo "\" type=\"text/css\"/>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
    }

    // line 12
    public function block_head_platform($context, array $blocks = array())
    {
    }

    // line 17
    public function block_head_meta($context, array $blocks = array())
    {
        // line 18
        echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    }

    // line 22
    public function block_head_title($context, array $blocks = array())
    {
        // line 23
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>Title</title>";
    }

    // line 27
    public function block_head_application($context, array $blocks = array())
    {
        // line 28
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "styles", array(0 => "head"), "method"), "
    ");
        echo "
        ";
        // line 29
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "scripts", array(0 => "head"), "method"), "
    ");
    }

    // line 32
    public function block_head_ie_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "<!--[if (gte IE 8)&(lte IE 9)]>
        <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-assets://js/html5shiv-printshiv.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-engine://css/nucleus-ie9.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-assets://js/matchmedia.polyfill.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    ";
    }

    // line 40
    public function block_head($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@nucleus/page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  140 => 36,  136 => 35,  132 => 34,  129 => 33,  126 => 32,  121 => 29,  116 => 28,  113 => 27,  108 => 23,  105 => 22,  100 => 18,  97 => 17,  92 => 12,  88 => 10,  78 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 3,  59 => 2,  54 => 41,  52 => 40,  50 => 32,  47 => 31,  45 => 27,  42 => 26,  40 => 22,  38 => 17,  36 => 16,  34 => 14,  31 => 12,  28 => 2,  26 => 1,);
    }
}
