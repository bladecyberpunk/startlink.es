<?php

/* @particles/imagegrid.html.twig */
class __TwigTemplate_bf357735229cead3e140d92b51574e04826ffef9a7048d9ab7c7309bf64bfebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/imagegrid.html.twig", 1);
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
\t<div class=\"g-imagegrid ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
\t\t
\t\t";
        // line 9
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array())) {
            echo "<div class=\"g-imagegrid-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array());
            echo "</div>";
        }
        // line 10
        echo "
\t\t<div class=\"g-imagegrid-wrapper ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
        echo "\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagegriditems", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["imagegriditem"]) {
            // line 13
            echo "\t\t\t    <div class=\"g-imagegrid-item\">
\t\t\t        <a class=\"g-imagegrid-link\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["imagegriditem"], "image", array())));
            echo "\" data-rokbox data-rokbox-album=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "album", array()));
            echo "\" data-rokbox-caption=\"";
            echo $this->getAttribute($context["imagegriditem"], "caption", array());
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["imagegriditem"], "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imagegriditem"], "caption", array()));
            echo "\"></a>
\t\t\t    </div>\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagegriditem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 
\t\t</div>

\t</div>\t

";
    }

    public function getTemplateName()
    {
        return "@particles/imagegrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  68 => 14,  65 => 13,  61 => 12,  57 => 11,  54 => 10,  48 => 9,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-imagegrid {{ particle.class|e }}">*/
/* 		*/
/* 		{% if particle.desc %}<div class="g-imagegrid-desc">{{ particle.desc|raw }}</div>{% endif %}*/
/* */
/* 		<div class="g-imagegrid-wrapper {{ particle.cols|e }}">*/
/* 			{% for imagegriditem in particle.imagegriditems %}*/
/* 			    <div class="g-imagegrid-item">*/
/* 			        <a class="g-imagegrid-link" href="{{ url(imagegriditem.image)|e }}" data-rokbox data-rokbox-album="{{ particle.album|e }}" data-rokbox-caption="{{ imagegriditem.caption|raw }}"><img src="{{ url(imagegriditem.image)|e }}" alt="{{ imagegriditem.caption|e }}"></a>*/
/* 			    </div>	*/
/* 			{% endfor %} */
/* 		</div>*/
/* */
/* 	</div>	*/
/* */
/* {% endblock %}*/
