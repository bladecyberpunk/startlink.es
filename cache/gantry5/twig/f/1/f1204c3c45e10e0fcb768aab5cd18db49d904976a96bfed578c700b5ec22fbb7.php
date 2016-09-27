<?php

/* @nucleus/page.html.twig */
class __TwigTemplate_f1204c3c45e10e0fcb768aab5cd18db49d904976a96bfed578c700b5ec22fbb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'page_offcanvas' => array($this, 'block_page_offcanvas'),
            'page_layout' => array($this, 'block_page_layout'),
            'page_top' => array($this, 'block_page_top'),
            'page_bottom' => array($this, 'block_page_bottom'),
            'page' => array($this, 'block_page'),
            'page_head' => array($this, 'block_page_head'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "setLayout", array(), "method");
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        $context["offcanvas"] = null;
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "segments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            if (($this->getAttribute($context["segment"], "type", array()) == "offcanvas")) {
                // line 10
                $context["offcanvas"] = $context["segment"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $this->displayBlock('page_offcanvas', $context, $blocks);
        $context["page_offcanvas"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        $context["page_offcanvas"] = ((trim((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null))) ? (trim((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null))) : (""));
        // line 22
        $context["offcanvas_position"] = (((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null)) ? ((($this->getAttribute($this->getAttribute((isset($context["offcanvas"]) ? $context["offcanvas"] : null), "attributes", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["offcanvas"]) ? $context["offcanvas"] : null), "attributes", array(), "any", false, true), "position", array()), "g-offcanvas-left")) : ("g-offcanvas-left"))) : (""));
        // line 24
        ob_start();
        // line 25
        echo "    ";
        $this->displayBlock('page_layout', $context, $blocks);
        $context["page_layout"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        ob_start();
        // line 33
        echo "    ";
        $this->displayBlock('page_top', $context, $blocks);
        $context["page_top"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        ob_start();
        // line 38
        echo "    ";
        $this->displayBlock('page_bottom', $context, $blocks);
        $context["page_bottom"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        $this->displayBlock('page', $context, $blocks);
        // line 66
        $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "platform", array()), "finalize", array(), "method");
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
    }

    // line 14
    public function block_page_offcanvas($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ((isset($context["offcanvas"]) ? $context["offcanvas"] : null)) {
            // line 16
            echo "            ";
            $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute((isset($context["offcanvas"]) ? $context["offcanvas"] : null), "type", array())) . ".html.twig"), "@nucleus/page.html.twig", 16)->display(array_merge($context, array("segment" => (isset($context["offcanvas"]) ? $context["offcanvas"] : null))));
        }
        // line 18
        echo "    ";
    }

    // line 25
    public function block_page_layout($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "segments", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            if (($this->getAttribute($context["segment"], "type", array()) != "offcanvas")) {
                // line 27
                echo "        ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), "@nucleus/page.html.twig", 27)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
                // line 28
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    ";
    }

    // line 33
    public function block_page_top($context, array $blocks = array())
    {
        // line 34
        echo "    ";
    }

    // line 38
    public function block_page_bottom($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        echo twig_join_filter($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "scripts", array(0 => "footer"), "method"), "
    ");
        echo "
    ";
    }

    // line 43
    public function block_page($context, array $blocks = array())
    {
        // line 44
        echo "<!DOCTYPE ";
        echo (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array(), "any", false, true), "doctype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array(), "any", false, true), "doctype", array()), "html")) : ("html"));
        echo ">
<html";
        // line 45
        echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "htmlAttributes", array());
        echo ">
    ";
        // line 46
        $this->displayBlock('page_head', $context, $blocks);
        // line 49
        echo "    ";
        $this->displayBlock('page_body', $context, $blocks);
        // line 63
        echo "
</html>
";
    }

    // line 46
    public function block_page_head($context, array $blocks = array())
    {
        // line 47
        $this->loadTemplate("partials/page_head.html.twig", "@nucleus/page.html.twig", 47)->display($context);
    }

    // line 49
    public function block_page_body($context, array $blocks = array())
    {
        // line 50
        echo "<body";
        echo $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "bodyAttributes", array(0 => array("class" => array(0 => (isset($context["offcanvas_position"]) ? $context["offcanvas_position"] : null)))), "method");
        echo ">
        ";
        // line 51
        echo (isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null);
        echo "
        <div id=\"g-page-surround\">
            ";
        // line 53
        if (trim((isset($context["page_offcanvas"]) ? $context["page_offcanvas"] : null))) {
            // line 54
            echo "            <div class=\"g-offcanvas-hide g-offcanvas-toggle\" data-offcanvas-toggle><i class=\"fa fa-fw fa-bars\"></i></div>
            ";
        }
        // line 56
        echo "            ";
        echo (isset($context["page_top"]) ? $context["page_top"] : null);
        echo "
            ";
        // line 57
        echo (isset($context["page_layout"]) ? $context["page_layout"] : null);
        echo "
            ";
        // line 58
        echo (isset($context["page_bottom"]) ? $context["page_bottom"] : null);
        echo "
        </div>
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc("gantry-assets://js/main.js"), "html", null, true);
        echo "\"></script>
    </body>";
    }

    public function getTemplateName()
    {
        return "@nucleus/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 60,  212 => 58,  208 => 57,  203 => 56,  199 => 54,  197 => 53,  192 => 51,  187 => 50,  184 => 49,  180 => 47,  177 => 46,  171 => 63,  168 => 49,  166 => 46,  162 => 45,  157 => 44,  154 => 43,  146 => 39,  143 => 38,  139 => 34,  136 => 33,  132 => 29,  122 => 28,  119 => 27,  107 => 26,  104 => 25,  100 => 18,  96 => 16,  93 => 15,  90 => 14,  86 => 5,  83 => 4,  79 => 66,  77 => 43,  73 => 38,  71 => 37,  67 => 33,  65 => 32,  61 => 25,  59 => 24,  57 => 22,  55 => 21,  51 => 14,  49 => 13,  42 => 10,  37 => 9,  35 => 8,  31 => 4,  29 => 3,  27 => 1,);
    }
}
