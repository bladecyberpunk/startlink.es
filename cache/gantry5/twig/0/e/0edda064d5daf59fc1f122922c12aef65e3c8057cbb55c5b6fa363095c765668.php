<?php

/* component.html.twig */
class __TwigTemplate_0edda064d5daf59fc1f122922c12aef65e3c8057cbb55c5b6fa363095c765668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/page.html.twig", "component.html.twig", 1);
        $this->blocks = array(
            'page_layout' => array($this, 'block_page_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_layout($context, array $blocks = array())
    {
        // line 4
        echo "    <jdoc:include type=\"component\" />
";
    }

    public function getTemplateName()
    {
        return "component.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
