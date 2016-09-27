<?php

/* @particles/infolist.html.twig */
class __TwigTemplate_8cedf22f16ad1d02f3c09c9e0103aba0c4c90cf362484b90b8a1a97f24c474bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/infolist.html.twig", 1);
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
        echo "
\t";
        // line 5
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 6
        echo "
\t<div class=\"g-infolist ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">

\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "infolists", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["infolist"]) {
            // line 10
            echo "\t\t\t<div class=\"g-infolist-item\">
\t\t\t\t<div class=\"g-infolist-item-text\">
\t\t\t\t\t";
            // line 12
            if ($this->getAttribute($context["infolist"], "title", array())) {
                echo "<div class=\"g-infolist-item-title\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["infolist"], "link", array()));
                echo "\">";
                echo $this->getAttribute($context["infolist"], "title", array());
                echo "</a></div>";
            }
            // line 13
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["infolist"], "description", array())) {
                echo "<div class=\"g-infolist-item-desc\">";
                echo $this->getAttribute($context["infolist"], "description", array());
                echo "</div>";
            }
            echo "\t
\t\t\t\t</div>\t
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infolist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/infolist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  64 => 13,  56 => 12,  52 => 10,  48 => 9,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
