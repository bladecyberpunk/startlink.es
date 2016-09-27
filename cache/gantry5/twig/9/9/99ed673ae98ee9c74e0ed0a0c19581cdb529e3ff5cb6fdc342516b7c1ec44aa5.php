<?php

/* @nucleus/content/particle.html.twig */
class __TwigTemplate_99ed673ae98ee9c74e0ed0a0c19581cdb529e3ff5cb6fdc342516b7c1ec44aa5 extends Twig_Template
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
        try {            // line 2
            echo "
    ";
            // line 3
            $context["enabled"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => (("particles." . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array())) . ".enabled"), 1 => 1), "method");
            // line 4
            echo "    ";
            $context["particle"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "getJoined", array(0 => ("particles." . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array())), 1 => $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array())), "method");
            // line 5
            echo "
    ";
            // line 6
            ob_start();
            // line 7
            echo "        ";
            if (((isset($context["enabled"]) ? $context["enabled"] : null) && ((null === $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "enabled", array())))) {
                // line 8
                echo "            ";
                try {
                    $this->loadTemplate(array(0 => (("particles/" . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array())) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute(                    // line 9
(isset($context["segment"]) ? $context["segment"] : null), "subtype", array())) . ".html.twig")), "@nucleus/content/particle.html.twig", 8)->display(array("gantry" =>                     // line 10
(isset($context["gantry"]) ? $context["gantry"] : null), "site" => (isset($context["site"]) ? $context["site"] : null), "page" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "particle" => (isset($context["particle"]) ? $context["particle"] : null)));
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
    ";
            // line 14
            if (trim((isset($context["html"]) ? $context["html"] : null))) {
                // line 15
                echo "    <div class=\"g-content";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "classes", array())) ? ((" " . twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "classes", array()), " ")))) : ("")), "html", null, true);
                echo "\">
        ";
                // line 16
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "
    </div>
    ";
            }
            // line 19
            echo "
";
        } catch (\Exception $e) {
        $context['e'] = $e;
            // line 21
            echo "    <div class=\"alert alert-error\"><strong>Error</strong> while rendering ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array()), "html", null, true);
            echo " particle.</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/content/particle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  68 => 19,  62 => 16,  57 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  40 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  20 => 2,  19 => 1,);
    }
}
