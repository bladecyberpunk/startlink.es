<?php

/* @particles/menu.html.twig */
class __TwigTemplate_1928be42ba7c8b4f13742d2ac92c4a980d1037b630958257a8a8db2330facbcb extends Twig_Template
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
        $context["menu"] = $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "menu", array()), "instance", array(0 => (isset($context["particle"]) ? $context["particle"] : null)), "method");
        // line 2
        echo "
";
        // line 12
        echo "
";
        // line 21
        echo "
";
        // line 64
        echo "
";
        // line 80
        echo "
";
        // line 86
        echo "
";
        // line 94
        echo "
<nav class=\"g-main-nav\" role=\"navigation\">
    <ul class=\"g-toplevel\">
        ";
        // line 97
        echo $this->getAttribute($this, "displayItems", array(0 => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "root", array()), 1 => (isset($context["menu"]) ? $context["menu"] : null), 2 => (isset($context["gantry"]) ? $context["gantry"] : null)), "method");
        echo "
    </ul>
</nav>
";
    }

    // line 3
    public function getdisplayParticle($__item__ = null, $__gantry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "gantry" => $__gantry__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            if (((null === $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "particle", array()), "enabled", array())) || $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "particle", array()), "enabled", array()))) {
                // line 5
                echo "        ";
                $context["classes"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "options", array()), "block", array()), "class", array());
                // line 6
                echo "        <div class=\"menu-item-particle";
                echo twig_escape_filter($this->env, (((isset($context["classes"]) ? $context["classes"] : null)) ? ((" " . (isset($context["classes"]) ? $context["classes"] : null))) : ("")), "html", null, true);
                echo "\">
        ";
                // line 7
                try {
                    $this->loadTemplate(array(0 => (("particles/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "particle", array())) . ".html.twig"), 1 => (("@particles/" . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "particle", array())) . ".html.twig")), "@particles/menu.html.twig", 7)->display(array("gantry" =>                     // line 8
(isset($context["gantry"]) ? $context["gantry"] : null), "particle" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "options", array()), "particle", array())));
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 9
                echo "        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getdisplayTitle($__item__ = null, $__gantry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "gantry" => $__gantry__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 14
            echo "    ";
            if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon_only", array()) ||  !($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array()) || $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array())))) {
                // line 15
                echo "        <span class=\"g-menu-item-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()));
                echo "</span>
        ";
                // line 16
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "subtitle", array())) {
                    // line 17
                    echo "            <span class=\"g-menu-item-subtitle\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "subtitle", array()));
                    echo "</span>
        ";
                }
                // line 19
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getdisplayItem($__item__ = null, $__menu__ = null, $__gantry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "menu" => $__menu__,
            "gantry" => $__gantry__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    ";
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "visible", array())) {
                // line 24
                echo "        ";
                $context["title"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon_only", array())) ? (((" title=\"" . twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()))) . "\"")) : (""));
                // line 25
                echo "        ";
                $context["active"] = (($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "isActive", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method")) ? (" active") : (""));
                // line 26
                echo "        ";
                $context["dropdown"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()) == 1)) ? ((" g-" . twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "dropdown", array())))) : (""));
                // line 27
                echo "        ";
                $context["parent"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())) ? (" g-parent") : (""));
                // line 28
                echo "        ";
                $context["target"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()) != "_self")) ? (((" target=\"" . twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()))) . "\"")) : (""));
                // line 29
                echo "        <li id=\"g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
                echo "\" class=\"g-menu-item g-menu-item-type-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()));
                echo " g-menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
                echo (isset($context["parent"]) ? $context["parent"] : null);
                echo (isset($context["active"]) ? $context["active"] : null);
                echo (isset($context["dropdown"]) ? $context["dropdown"] : null);
                echo " ";
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()))) {
                    echo "g-menu-item-link-parent";
                }
                echo "\">
            ";
                // line 30
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array())) {
                    echo "<a class=\"g-menu-item-container\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array()));
                    echo "\"";
                    echo ((isset($context["title"]) ? $context["title"] : null) . (isset($context["target"]) ? $context["target"] : null));
                    echo ">
            ";
                } else {
                    // line 31
                    echo "<div class=\"g-menu-item-container\" data-g-menuparent=\"\">";
                }
                // line 32
                echo "                ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array())) {
                    // line 33
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "image", array())));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()));
                    echo "\" />
                ";
                } elseif ($this->getAttribute(                // line 34
(isset($context["item"]) ? $context["item"] : null), "icon", array())) {
                    // line 35
                    echo "                    <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()));
                    echo "\"></i>
                ";
                }
                // line 37
                echo "                ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array())) {
                    // line 38
                    echo "                    <span class=\"g-menu-item-content\">
                        ";
                    // line 39
                    echo $this->getAttribute($this, "displayTitle", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => (isset($context["gantry"]) ? $context["gantry"] : null)), "method");
                    echo "
                    </span>
                    ";
                    // line 41
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())) {
                        // line 42
                        echo "<span class=\"g-menu-parent-indicator\" data-g-menuparent=\"\"></span>";
                    }
                    // line 44
                    echo "                ";
                } else {
                    // line 45
                    echo "                    ";
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "particle")) {
                        // line 46
                        echo "                        ";
                        echo $this->getAttribute($this, "displayParticle", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => (isset($context["gantry"]) ? $context["gantry"] : null)), "method");
                        echo "
                    ";
                    } elseif (($this->getAttribute(                    // line 47
(isset($context["item"]) ? $context["item"] : null), "type", array()) == "heading")) {
                        // line 48
                        echo "                        <span class=\"g-nav-header g-menu-item-content\"";
                        echo (isset($context["title"]) ? $context["title"] : null);
                        echo ">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()));
                        echo "</span>
                    ";
                    } else {
                        // line 50
                        echo "                        <span class=\"g-separator g-menu-item-content\"";
                        echo (isset($context["title"]) ? $context["title"] : null);
                        echo ">";
                        echo $this->getAttribute($this, "displayTitle", array(0 => (isset($context["item"]) ? $context["item"] : null)), "method");
                        echo "</span>
                    ";
                    }
                    // line 52
                    echo "                        ";
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())) {
                        // line 53
                        echo "<span class=\"g-menu-parent-indicator\"></span>";
                    }
                    // line 55
                    echo "                ";
                }
                // line 56
                echo "            ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url", array())) {
                    echo "</a>
            ";
                } else {
                    // line 57
                    echo "</div>";
                }
                // line 58
                echo "            ";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array())) {
                    // line 59
                    echo $this->getAttribute($this, "displaySubmenu", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => (isset($context["menu"]) ? $context["menu"] : null), 2 => (isset($context["gantry"]) ? $context["gantry"] : null)), "method");
                }
                // line 61
                echo "        </li>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 65
    public function getdisplayContainers($__item__ = null, $__menu__ = null, $__gantry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "menu" => $__menu__,
            "gantry" => $__gantry__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 66
            echo "    <div class=\"g-grid\">
        ";
            // line 67
            $context["groups"] = ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "dropdown", array()) == "standard")) ? (array(0 => (isset($context["item"]) ? $context["item"] : null))) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "groups", array())));
            // line 68
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["column"] => $context["items"]) {
                // line 69
                echo "        <div class=\"g-block ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('toGrid')->getCallable(), array($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "columnWidth", array(0 => $context["column"]), "method"))));
                echo "\">
            <ul class=\"g-sublevel\">
                <li class=\"g-level-";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "level", array()));
                echo " g-go-back\">
                    <a class=\"g-menu-item-container\" href=\"#\" data-g-menuparent=\"\"><span>Back</span></a>
                </li>
                ";
                // line 74
                echo $this->getAttribute($this, "displayItems", array(0 => $context["items"], 1 => (isset($context["menu"]) ? $context["menu"] : null), 2 => (isset($context["gantry"]) ? $context["gantry"] : null)), "method");
                echo "
            </ul>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['column'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getdisplayItems($__items__ = null, $__menu__ = null, $__gantry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "menu" => $__menu__,
            "gantry" => $__gantry__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 83
                echo "        ";
                echo $this->getAttribute($this, "displayItem", array(0 => $context["item"], 1 => (isset($context["menu"]) ? $context["menu"] : null), 2 => (isset($context["gantry"]) ? $context["gantry"] : null)), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function getdisplaySubmenu($__item__ = null, $__menu__ = null, $__gantry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "menu" => $__menu__,
            "gantry" => $__gantry__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    <ul class=\"g-dropdown g-inactive\">
        <li class=\"g-dropdown-column\">
            ";
            // line 90
            echo $this->getAttribute($this, "displayContainers", array(0 => (isset($context["item"]) ? $context["item"] : null), 1 => (isset($context["menu"]) ? $context["menu"] : null), 2 => (isset($context["gantry"]) ? $context["gantry"] : null)), "method");
            echo "
        </li>
    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@particles/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 90,  401 => 88,  388 => 87,  370 => 83,  365 => 82,  352 => 81,  340 => 78,  330 => 74,  324 => 71,  318 => 69,  313 => 68,  311 => 67,  308 => 66,  295 => 65,  282 => 61,  279 => 59,  276 => 58,  273 => 57,  267 => 56,  264 => 55,  261 => 53,  258 => 52,  250 => 50,  242 => 48,  240 => 47,  235 => 46,  232 => 45,  229 => 44,  226 => 42,  224 => 41,  219 => 39,  216 => 38,  213 => 37,  207 => 35,  205 => 34,  198 => 33,  195 => 32,  192 => 31,  183 => 30,  167 => 29,  164 => 28,  161 => 27,  158 => 26,  155 => 25,  152 => 24,  149 => 23,  136 => 22,  124 => 19,  118 => 17,  116 => 16,  111 => 15,  108 => 14,  96 => 13,  83 => 9,  77 => 8,  75 => 7,  70 => 6,  67 => 5,  64 => 4,  52 => 3,  44 => 97,  39 => 94,  36 => 86,  33 => 80,  30 => 64,  27 => 21,  24 => 12,  21 => 2,  19 => 1,);
    }
}
