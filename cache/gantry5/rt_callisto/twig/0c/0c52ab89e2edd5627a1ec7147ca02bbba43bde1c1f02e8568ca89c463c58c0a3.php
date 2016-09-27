<?php

/* @particles/infolist.html.twig */
class __TwigTemplate_9a981149755a55521b6f7940fd3f3fbe87be11f99f60be97d7a71c04611fe165 extends Twig_Template
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
        $context['_parent'] = $context;
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
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-infolist {{ particle.class|e }}">*/
/* */
/* 		{% for infolist in particle.infolists %}*/
/* 			<div class="g-infolist-item">*/
/* 				<div class="g-infolist-item-text">*/
/* 					{% if infolist.title %}<div class="g-infolist-item-title"><a href="{{ infolist.link|e }}">{{ infolist.title|raw }}</a></div>{% endif %}*/
/* 					{% if infolist.description %}<div class="g-infolist-item-desc">{{ infolist.description|raw }}</div>{% endif %}	*/
/* 				</div>	*/
/* 			</div>*/
/* 		{% endfor %}*/
/* */
/* 	</div>*/
/* */
/* {% endblock %}*/
