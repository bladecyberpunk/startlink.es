<?php

/* @nucleus/content/pagecontent.html.twig */
class __TwigTemplate_e42c85f2c2002d57711fc99cc67cd7465fcb116e6bfcd2049d32a1a9279815d6 extends Twig_Template
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
        $context["subtype"] = (($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array()), $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "type", array()))) : ($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "type", array())));
        // line 2
        $context["enabled"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => (("particles." . (isset($context["subtype"]) ? $context["subtype"] : null)) . ".enabled"), 1 => 1), "method");
        // line 3
        echo "
";
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if (((isset($context["enabled"]) ? $context["enabled"] : null) && ((null === $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "enabled", array())))) {
            // line 6
            echo "        ";
            if (((isset($context["subtype"]) ? $context["subtype"] : null) == "pagecontent")) {
                // line 7
                echo "            ";
                echo (isset($context["content"]) ? $context["content"] : null);
                echo "
        ";
            } elseif ((            // line 8
(isset($context["subtype"]) ? $context["subtype"] : null) == "system-messages")) {
                // line 9
                echo "            ";
                echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "displaySystemMessages", array(), "method");
                echo "
        ";
            }
            // line 11
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
";
        // line 14
        if (trim((isset($context["html"]) ? $context["html"] : null))) {
            // line 15
            echo "    ";
            $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "joomla", array(0 => true), "method");
            // line 16
            echo "    <div class=\"g-content";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "classes", array())) ? ((" " . twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "classes", array()), " ")))) : ("")), "html", null, true);
            echo "\">
        <div class=\"platform-content\">
            ";
            // line 18
            echo (isset($context["html"]) ? $context["html"] : null);
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/content/pagecontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  47 => 11,  41 => 9,  39 => 8,  34 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
