<?php

/* forms/fields/container/set.html.twig */
class __TwigTemplate_7b1445260d8e82e05e04a828393d30e6b579b8c198237a499fa54d0e9a25f2c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/container/set.html.twig", 1);
        $this->blocks = array(
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contents($context, array $blocks = array())
    {
        // line 4
        echo "    <h5>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
        echo "</h5>
    <div>
    ";
        // line 6
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 7
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 8
                echo "            ";
                if ((is_string($__internal_4a2dea2786336701098c50df8b8fe2edc804a5fe790ec50d69a1ff7bcab9375e = $context["childName"]) && is_string($__internal_983e93ea3657905a0a5a3121d4fff741775db6f47798052e9fb7e1cf6ee57047 = ".") && ('' === $__internal_983e93ea3657905a0a5a3121d4fff741775db6f47798052e9fb7e1cf6ee57047 || 0 === strpos($__internal_4a2dea2786336701098c50df8b8fe2edc804a5fe790ec50d69a1ff7bcab9375e, $__internal_983e93ea3657905a0a5a3121d4fff741775db6f47798052e9fb7e1cf6ee57047)))) {
                    // line 9
                    echo "                ";
                    $context["childValue"] = $this->getAttribute((isset($context["value"]) ? $context["value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 10
                    echo "                ";
                    $context["childDefault"] = $this->getAttribute((isset($context["default_value"]) ? $context["default_value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 11
                    echo "                ";
                    $context["childName"] = ((isset($context["name"]) ? $context["name"] : null) . $context["childName"]);
                    // line 12
                    echo "            ";
                } else {
                    // line 13
                    echo "                ";
                    $context["childValue"] = $this->env->getExtension('UrlExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                    // line 14
                    echo "                ";
                    $context["childDefault"] = $this->env->getExtension('UrlExtension')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "
            ";
                // line 17
                if ($this->getAttribute($context["child"], "type", array())) {
                    // line 18
                    echo "                ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . strtr($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/container/set.html.twig", 18)->display(array_merge($context, array("name" =>                     // line 19
$context["childName"], "field" => $context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null), "default_value" => (isset($context["childDefault"]) ? $context["childDefault"] : null))));
                    // line 20
                    echo "            ";
                }
                // line 21
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        }
        // line 23
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/container/set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 23,  107 => 22,  93 => 21,  90 => 20,  88 => 19,  86 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  39 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
