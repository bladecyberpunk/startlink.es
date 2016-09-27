<?php

/* @particles/contact.html.twig */
class __TwigTemplate_f1e48bc5d5431c40c4ae556316e4550f27e3882dfe6339f578490eaa431fa1db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contact.html.twig", 1);
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
\t<div class=\"g-contact ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "contactitems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contactitem"]) {
            // line 9
            echo "\t\t    <div class=\"g-contact-item\">
\t\t        ";
            // line 10
            if ($this->getAttribute($context["contactitem"], "icon", array())) {
                echo "<div class=\"g-contact-icon\"><span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contactitem"], "icon", array()), "html", null, true);
                echo "\"></span></div>";
            }
            // line 11
            echo "\t\t        ";
            if ($this->getAttribute($context["contactitem"], "label", array())) {
                echo "<div class=\"g-contact-label\">";
                echo $this->getAttribute($context["contactitem"], "label", array());
                echo "</div>";
            }
            // line 12
            echo "\t\t        ";
            if ($this->getAttribute($context["contactitem"], "text", array())) {
                echo "<div class=\"g-contact-text\">";
                echo $this->getAttribute($context["contactitem"], "text", array());
                echo "</div>";
            }
            echo "        
\t\t    </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  67 => 12,  60 => 11,  54 => 10,  51 => 9,  47 => 8,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
