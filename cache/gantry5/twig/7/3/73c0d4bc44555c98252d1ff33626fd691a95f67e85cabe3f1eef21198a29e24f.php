<?php

/* @nucleus/layout/container.html.twig */
class __TwigTemplate_73c0d4bc44555c98252d1ff33626fd691a95f67e85cabe3f1eef21198a29e24f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 3
            echo "        ";
            $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), "@nucleus/layout/container.html.twig", 3)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
            // line 4
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        echo "
";
        // line 7
        if (trim((isset($context["html"]) ? $context["html"] : null))) {
            // line 8
            echo "    ";
            $context["attr_id"] = (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array())) ? (((" id=\"" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array()))) . "\"")) : (""));
            // line 9
            echo "    ";
            $context["classes"] = (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array())) ? (((" " . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array()))) . "\"")) : (""));
            // line 10
            echo "
    <div";
            // line 11
            echo (isset($context["attr_id"]) ? $context["attr_id"] : null);
            echo " class=\"g-container";
            echo twig_escape_filter($this->env, (isset($context["classes"]) ? $context["classes"] : null), "html", null, true);
            echo "\">
        ";
            // line 12
            echo (isset($context["html"]) ? $context["html"] : null);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 12,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  42 => 4,  39 => 3,  21 => 2,  19 => 1,);
    }
}
