<?php

/* @particles/contentlist.html.twig */
class __TwigTemplate_fca949f64c11ab7e29322e4c24d5a16997d7c280fc68224850256fe3816efd7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentlist.html.twig", 1);
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
\t<div class=\"g-contentlist ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">

\t    <div class=\"g-grid\">
\t        <div class=\"g-block size-33 g-contentlist-img\" style=\"background-image: url(";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())));
        echo ")\">
\t            ";
        // line 11
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagetag", array())) {
            echo "<div class=\"g-contentlist-img-tag\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imagetag", array()));
            echo "</div>";
        }
        // line 12
        echo "\t        </div>
\t        <div class=\"g-block size-67 g-contentlist-text\">
\t            <div class=\"g-content\">
\t                ";
        // line 15
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headline", array())) {
            echo "<h3 class=\"g-contentlist-headline\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "headline", array());
            echo "</h3>";
        }
        // line 16
        echo "\t                ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "subtitle", array())) {
            echo "<h5 class=\"g-contentlist-subtitle\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "subtitle", array());
            echo "</h5>";
        }
        // line 17
        echo "\t                ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array())) {
            echo "<div class=\"g-contentlist-desc\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "desc", array());
            echo "</div>";
        }
        // line 18
        echo "\t                ";
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmore", array())) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "link", array()));
            echo "\" class=\"button button-2\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "readmore", array());
            echo "</a>";
        }
        // line 19
        echo "\t            </div>
\t        </div>    
\t    </div> 

\t    ";
        // line 23
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "listgriditems", array())) {
            // line 24
            echo "\t    <div class=\"g-grid g-contentlist-list\">
\t        <div class=\"g-block\">
\t            <div class=\"g-content\">
\t                <div class=\"g-listgrid ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "cols", array()));
            echo "\">
\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "listgriditems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["listgriditem"]) {
                // line 29
                echo "\t\t                    <div class=\"g-listgrid-item\">
\t\t                        <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["listgriditem"], "link", array()));
                echo "\">
\t\t                        \t<span class=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["listgriditem"], "icon", array()), "html", null, true);
                echo "\"></span>
\t\t                        \t<span>";
                // line 32
                echo $this->getAttribute($context["listgriditem"], "text", array());
                echo "</span>
\t\t                        </a>
\t\t                    </div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listgriditem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " 
\t                </div>
\t            </div>
\t        </div>
\t    </div>   
\t\t";
        }
        // line 41
        echo "\t\t
\t</div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 35,  125 => 32,  121 => 31,  117 => 30,  114 => 29,  110 => 28,  106 => 27,  101 => 24,  99 => 23,  93 => 19,  84 => 18,  77 => 17,  70 => 16,  64 => 15,  59 => 12,  53 => 11,  49 => 10,  43 => 7,  40 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/* */
/* 	{% if particle.title %}<h2 class="g-title">{{ particle.title|raw }}</h2>{% endif %}*/
/* */
/* 	<div class="g-contentlist {{ particle.class|e }}">*/
/* */
/* 	    <div class="g-grid">*/
/* 	        <div class="g-block size-33 g-contentlist-img" style="background-image: url({{ url(particle.image)|e }})">*/
/* 	            {% if particle.imagetag %}<div class="g-contentlist-img-tag">{{ particle.imagetag|e }}</div>{% endif %}*/
/* 	        </div>*/
/* 	        <div class="g-block size-67 g-contentlist-text">*/
/* 	            <div class="g-content">*/
/* 	                {% if particle.headline %}<h3 class="g-contentlist-headline">{{ particle.headline|raw }}</h3>{% endif %}*/
/* 	                {% if particle.subtitle %}<h5 class="g-contentlist-subtitle">{{ particle.subtitle|raw }}</h5>{% endif %}*/
/* 	                {% if particle.desc %}<div class="g-contentlist-desc">{{ particle.desc|raw }}</div>{% endif %}*/
/* 	                {% if particle.readmore %}<a href="{{ particle.link|e }}" class="button button-2">{{ particle.readmore|raw }}</a>{% endif %}*/
/* 	            </div>*/
/* 	        </div>    */
/* 	    </div> */
/* */
/* 	    {% if particle.listgriditems %}*/
/* 	    <div class="g-grid g-contentlist-list">*/
/* 	        <div class="g-block">*/
/* 	            <div class="g-content">*/
/* 	                <div class="g-listgrid {{ particle.cols|e }}">*/
/* 						{% for listgriditem in particle.listgriditems %}*/
/* 		                    <div class="g-listgrid-item">*/
/* 		                        <a href="{{ listgriditem.link|e }}">*/
/* 		                        	<span class="{{ listgriditem.icon }}"></span>*/
/* 		                        	<span>{{ listgriditem.text|raw }}</span>*/
/* 		                        </a>*/
/* 		                    </div>*/
/* 						{% endfor %} */
/* 	                </div>*/
/* 	            </div>*/
/* 	        </div>*/
/* 	    </div>   */
/* 		{% endif %}*/
/* 		*/
/* 	</div>*/
/* */
/* {% endblock %}*/
