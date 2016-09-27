<?php

/* forms/fields/collection/list.html.twig */
class __TwigTemplate_06646afda6153733b867a042daa2e2a4fae95a8ddbf5c34ca2be73115f12ba6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/collection/list.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
            'collection_fields' => array($this, 'block_collection_fields'),
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

    // line 4
    public function block_field($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "is_current", array())) {
            // line 6
            echo "        <div class=\"g-grid\">
            ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 8
                echo "                <div class=\"card settings-block\">
                    <h4>
                        <span data-title-editable=\"";
                // line 10
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array"))));
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter((((((isset($context["prefix"]) ? $context["prefix"] : null) . ".") . $context["key"]) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()))));
                echo "\" class=\"title\">";
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array"))));
                echo "</span> <i class=\"fa fa-pencil font-small\" data-title-edit></i>
                    </h4>
                    <div class=\"inner-params\">
                        ";
                // line 13
                $this->displayBlock("collection_fields", $context, $blocks);
                echo "
                    </div>
                </div>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
    ";
        } else {
            // line 19
            echo "        <div class=\"settings-param ";
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), ".", "-"));
            echo "\">
            ";
            // line 20
            if ((((isset($context["overrideable"]) ? $context["overrideable"] : null) && ( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array(), "any", true, true) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array()) == true))) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) != "container.set"))) {
                // line 21
                echo "                <input type=\"checkbox\" class=\"settings-param-toggle\" id=\"of-";
                echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
                echo "\"";
                echo ((((isset($context["value"]) ? $context["value"] : null) != (isset($context["default_value"]) ? $context["default_value"] : null))) ? (" checked=\"checked\"") : (""));
                echo " />
                <label class=\"settings-param-override\" for=\"of-";
                // line 22
                echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
                echo "\"></label>
            ";
            }
            // line 24
            echo "            ";
            $this->displayBlock('contents', $context, $blocks);
            // line 96
            echo "        </div>
    ";
        }
    }

    // line 24
    public function block_contents($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        $context["field_route"] = strtr((((((isset($context["route"]) ? $context["route"] : null) . ".") . (isset($context["scope"]) ? $context["scope"] : null)) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), ".", "/");
        // line 26
        echo "                    <span class=\"settings-param-title float-left\">
                    ";
        // line 27
        $this->displayBlock('label', $context, $blocks);
        // line 35
        echo "                </span>
                <div class=\"settings-param-field\" data-field-name=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\">
                    ";
        // line 37
        $this->displayBlock('input', $context, $blocks);
        // line 94
        echo "                </div>
            ";
    }

    // line 27
    public function block_label($context, array $blocks = array())
    {
        // line 28
        echo "                        ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 29
            echo "                            <span class=\"g-tooltip\" data-asTooltip-position=\"w\" data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "</span>
                        ";
        } else {
            // line 31
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()));
            echo "
                        ";
        }
        // line 33
        echo "                        ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 37
    public function block_input($context, array $blocks = array())
    {
        // line 38
        echo "                        <ul>
                        ";
        // line 39
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 40
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 41
                echo "                                    ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "ajax", array()) == true)) {
                    // line 42
                    echo "                                        <li data-collection-item=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()));
                    echo "\">
                                            ";
                    // line 43
                    $context["itemValue"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array")));
                    // line 44
                    echo "                                            <i class=\"fa fa-reorder font-small item-reorder\"></i>
                                            <a class=\"config-cog\" href=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (((isset($context["field_route"]) ? $context["field_route"] : null) . "/") . $context["key"])), "method"));
                    echo "\"><span data-title-editable=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null));
                    echo "\" class=\"title\">";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null));
                    echo "</span></a>
                                            <i class=\"fa fa-fw fa-trash font-small\" data-collection-remove=\"\"></i>
                                            <i class=\"fa fa-fw fa-pencil font-small\" data-title-edit=\"\"></i>
                                        </li>
                                    ";
                } else {
                    // line 50
                    echo "                                        ";
                    $this->displayBlock('collection_fields', $context, $blocks);
                    // line 76
                    echo "                                    ";
                }
                // line 77
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                        ";
        }
        // line 79
        echo "                    </ul>
                    <div>
                        <ul style=\"display: none\">
                            <li data-collection-nosort data-collection-template=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()));
        echo "\" style=\"display: none;\">
                                <i class=\"fa fa-reorder font-small item-reorder\"></i>
                                <a class=\"config-cog\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => ((isset($context["field_route"]) ? $context["field_route"] : null) . "/%id%")), "method"));
        echo "\"><span data-title-editable=\"New item\" class=\"title\">New item</span></a>
                                <i class=\"fa fa-fw fa-trash font-small\" data-collection-remove=\"\"></i>
                                <i class=\"fa fa-fw fa-pencil font-small\" data-title-edit=\"\"></i>
                            </li>
                        </ul>
                        <span class=\"collection-addnew button button-simple\" data-collection-addnew=\"\" title=\"Add new item\"><i class=\"fa fa-plus font-small\"></i></span>
                        <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["field_route"]) ? $context["field_route"] : null)), "method"));
        echo "\" class=\"collection-editall button button-simple\" data-collection-editall=\"\" title=\"Edit all items\" ";
        if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) == 0)) {
            echo "style=\"display: none;\"";
        }
        echo "><i class=\"fa fa-th-large font-small\"></i></a>
                    </div>
                    <input data-collection-data=\"\" name=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->fieldNameFilter((((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)) . "._json")));
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), array())) : (array())), twig_constant("JSON_UNESCAPED_SLASHES")), "html_attr");
        echo "\"/>
                    ";
    }

    // line 50
    public function block_collection_fields($context, array $blocks = array())
    {
        // line 51
        echo "                                            <div data-g5-collections=\"\">
                                                ";
        // line 52
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
            // line 53
            echo "                                                    ";
            if ((is_string($__internal_31084e27adba4f8be2f173cd5beb0e787c313b91c69f3c6b78bf825393d173c7 = $context["childName"]) && is_string($__internal_8ccdc2998138bfd616dd4a7b81293eae31627988b3f19b5d099e4677eaafb4c7 = ".") && ('' === $__internal_8ccdc2998138bfd616dd4a7b81293eae31627988b3f19b5d099e4677eaafb4c7 || 0 === strpos($__internal_31084e27adba4f8be2f173cd5beb0e787c313b91c69f3c6b78bf825393d173c7, $__internal_8ccdc2998138bfd616dd4a7b81293eae31627988b3f19b5d099e4677eaafb4c7)))) {
                // line 54
                echo "                                                        ";
                $context["childKey"] = trim($context["childName"], ".");
                // line 55
                echo "                                                        ";
                $context["childValue"] = $this->getAttribute((isset($context["val"]) ? $context["val"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                // line 56
                echo "                                                        ";
                $context["childDefault"] = $this->getAttribute((isset($context["default_value"]) ? $context["default_value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                // line 57
                echo "                                                        ";
                $context["childName"] = ((((isset($context["name"]) ? $context["name"] : null) . ".") . (isset($context["key"]) ? $context["key"] : null)) . $context["childName"]);
                // line 58
                echo "                                                    ";
            } else {
                // line 59
                echo "                                                        ";
                $context["childKey"] = $context["childName"];
                // line 60
                echo "                                                        ";
                $context["childValue"] = $this->env->getExtension('UrlExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                // line 61
                echo "                                                        ";
                $context["childDefault"] = $this->env->getExtension('UrlExtension')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                // line 62
                echo "                                                        ";
                $context["childName"] = strtr($context["childName"], array("*" => (isset($context["key"]) ? $context["key"] : null)));
                // line 63
                echo "                                                    ";
            }
            // line 64
            echo "                                                    ";
            if (((!twig_in_filter($context["childName"], (isset($context["skip"]) ? $context["skip"] : null)) &&  !$this->getAttribute($context["child"], "skip", array())) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) != (isset($context["childKey"]) ? $context["childKey"] : null)))) {
                // line 65
                echo "                                                         ";
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 66
                    echo "                                                             ";
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/collection/list.html.twig", 66)->display(array_merge($context, array("name" =>                     // line 67
$context["childName"], "field" => $context["child"], "value" => (isset($context["key"]) ? $context["key"] : null))));
                    // line 68
                    echo "                                                         ";
                } elseif ($this->getAttribute($context["child"], "type", array())) {
                    // line 69
                    echo "                                                             ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . strtr($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/collection/list.html.twig", 69)->display(array_merge($context, array("name" =>                     // line 70
$context["childName"], "field" => $context["child"], "value" => (isset($context["childValue"]) ? $context["childValue"] : null), "default_value" => (isset($context["childDefault"]) ? $context["childDefault"] : null))));
                    // line 71
                    echo "                                                        ";
                }
                // line 72
                echo "                                                    ";
            }
            // line 73
            echo "                                                ";
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
        // line 74
        echo "                                            </div>
                                        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/collection/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 74,  363 => 73,  360 => 72,  357 => 71,  355 => 70,  353 => 69,  350 => 68,  348 => 67,  346 => 66,  343 => 65,  340 => 64,  337 => 63,  334 => 62,  331 => 61,  328 => 60,  325 => 59,  322 => 58,  319 => 57,  316 => 56,  313 => 55,  310 => 54,  307 => 53,  290 => 52,  287 => 51,  284 => 50,  276 => 92,  267 => 90,  258 => 84,  253 => 82,  248 => 79,  245 => 78,  231 => 77,  228 => 76,  225 => 50,  213 => 45,  210 => 44,  208 => 43,  203 => 42,  200 => 41,  182 => 40,  180 => 39,  177 => 38,  174 => 37,  167 => 33,  161 => 31,  153 => 29,  150 => 28,  147 => 27,  142 => 94,  140 => 37,  136 => 36,  133 => 35,  131 => 27,  128 => 26,  125 => 25,  122 => 24,  116 => 96,  113 => 24,  108 => 22,  101 => 21,  99 => 20,  94 => 19,  90 => 17,  72 => 13,  62 => 10,  58 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  11 => 1,);
    }
}
