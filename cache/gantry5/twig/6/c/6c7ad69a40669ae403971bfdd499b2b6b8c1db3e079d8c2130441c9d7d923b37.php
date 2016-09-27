<?php

/* @particles/iconmenu.html.twig */
class __TwigTemplate_6c7ad69a40669ae403971bfdd499b2b6b8c1db3e079d8c2130441c9d7d923b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/iconmenu.html.twig", 1);
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
        echo "    <div class=\"g-iconmenu ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "            <a target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "target", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
            echo "\" class=\"g-iconmenu-item\">
                <span class=\"g-iconmenu-icon ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\"></span>
                <span class=\"g-iconmenu-text\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/iconmenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  53 => 8,  49 => 7,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
