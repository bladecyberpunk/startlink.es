<?php

/* @gantry-admin/partials/base.html.twig */
class __TwigTemplate_b3ada085ee921a03462cc015acd8bd45066dd5e2fcc259a7ac25201c508510f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gantry-admin/partials/page.html.twig", "@gantry-admin/partials/base.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
            'gantry_content_wrapper' => array($this, 'block_gantry_content_wrapper'),
            'gantry' => array($this, 'block_gantry'),
            'footer_section' => array($this, 'block_footer_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@gantry-admin/partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-admin://assets/css-compiled/nucleus.css"));
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-admin://assets/css-compiled/admin.css"));
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-admin://assets/css/font-awesome.min.css"));
        echo "\" type=\"text/css\" />
    ";
        // line 7
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        // line 11
        echo "    <script type=\"text/javascript\" async=\"async\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-admin://assets/js/main.js"));
        echo "\"></script>
    ";
        // line 12
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div id=\"g5-container\">
    <div id=\"main-header\" data-mode-indicator=\"production\">
        ";
        // line 18
        $this->loadTemplate("@gantry-admin/partials/header.html.twig", "@gantry-admin/partials/base.html.twig", 18)->display($context);
        // line 19
        echo "    </div>
    <div class=\"inner-container\">
        ";
        // line 21
        $this->loadTemplate("@gantry-admin/partials/updates.html.twig", "@gantry-admin/partials/base.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        $this->displayBlock('gantry_content_wrapper', $context, $blocks);
        // line 37
        echo "    </div>
</div>
";
    }

    // line 22
    public function block_gantry_content_wrapper($context, array $blocks = array())
    {
        // line 23
        echo "            <div data-g5-content-wrapper>
                ";
        // line 24
        $this->loadTemplate("@gantry-admin/partials/navigation.html.twig", "@gantry-admin/partials/base.html.twig", 24)->display($context);
        // line 25
        echo "                <div class=\"g-grid\">
                    <div class=\"g-block main-block\">
                        <section id=\"g-main\">
                            <div class=\"g-content\" data-g5-content>
                                ";
        // line 29
        $this->displayBlock('gantry', $context, $blocks);
        // line 31
        echo "                            </div>
                        </section>
                    </div>
                </div>
            </div>
        ";
    }

    // line 29
    public function block_gantry($context, array $blocks = array())
    {
        // line 30
        echo "                                ";
    }

    // line 41
    public function block_footer_section($context, array $blocks = array())
    {
        // line 42
        echo "    <footer id=\"footer\">
        <a href=\"http://gantry-framework.org\">Gantry Administration</a> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.
    </footer>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  125 => 41,  121 => 30,  118 => 29,  109 => 31,  107 => 29,  101 => 25,  99 => 24,  96 => 23,  93 => 22,  87 => 37,  84 => 22,  82 => 21,  78 => 19,  76 => 18,  72 => 16,  69 => 15,  63 => 12,  58 => 11,  55 => 10,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
