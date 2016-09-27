<?php

/* @gantry-admin//pages/menu/menu.html.twig */
class __TwigTemplate_2ad09f0c7976d313c52afe64dbf2e200774b10b18e26797cd463f85ce29c4c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin//pages/menu/menu.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu", 1 => (isset($context["id"]) ? $context["id"] : null)), "method"), "html", null, true);
        echo "\">
    <div class=\"menu-header\">
        <span class=\"float-right\">
            <button class=\"button button-back-to-conf\"><i class=\"fa fa-fw fa-arrow-left\"></i> <span>Back to Configuration</span></button>
            <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Menu\"><i class=\"fa fa-fw fa-check\"></i> <span>Save Menu</span></button>
        </span>
        <h2 class=\"page-title\">Menu Editor</h2>
        <select placeholder=\"Select...\" data-selectize-ajaxify data-selectize data-g5-ajaxify-target=\"[data-g5-content]\" class=\"menu-select-wrap\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_name"]) {
            // line 13
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["menu_name"]);
            echo "\"
                    ";
            // line 14
            if (((isset($context["id"]) ? $context["id"] : null) == $context["menu_name"])) {
                echo "selected=\"selected\"";
            }
            // line 15
            echo "                    data-data=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("url" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu", 1 => $context["menu_name"]), "method"))), "html_attr");
            echo "\">
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["menu_name"]));
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select>
    </div>

    <div class=\"g5-mm-particles-picker\">
        <ul class=\"g-menu-addblock\">
            <li data-mm-blocktype=\"module\" data-mm-id=\"__module\"><span class=\"menu-item\"><i class=\"fa fa-fw fa-arrows-alt\"></i> <span class=\"title\">Module</span></span> <a class=\"config-cog\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/select/module"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-cog\"></i></a></li>
            <li data-mm-blocktype=\"particle\" data-mm-id=\"__particle\"><span class=\"menu-item\"><i class=\"fa fa-fw fa-arrows-alt\"></i> <span class=\"title\">Particle</span></span></span> <a class=\"config-cog\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => "menu/select/particle"), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-cog\"></i></a></li>
        </ul>
    </div>
    <div id=\"menu-editor\"
         data-menu-ordering=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "ordering", array())), "html_attr");
        echo "\"
         data-menu-items=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "items", array())), "html_attr");
        echo "\"
         data-menu-settings=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "settings", array())), "html_attr");
        echo "\">
        ";
        // line 32
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "items", array()))) {
            // line 33
            echo "            ";
            $this->loadTemplate("menu/base.html.twig", "@gantry-admin//pages/menu/menu.html.twig", 33)->display(array_merge($context, array("item" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "root", array()))));
            // line 34
            echo "        ";
        } else {
            // line 35
            echo "            ";
            $this->loadTemplate("menu/empty.html.twig", "@gantry-admin//pages/menu/menu.html.twig", 35)->display(array_merge($context, array("item" => $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "root", array()))));
            // line 36
            echo "        ";
        }
        // line 37
        echo "    </div>

    <div id=\"trash\" data-mm-eraseparticle><div class=\"trash-zone\">&times;</div><span>Drop here to delete</span></div>
</form>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin//pages/menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  80 => 25,  76 => 24,  69 => 19,  60 => 16,  55 => 15,  51 => 14,  46 => 13,  42 => 12,  30 => 4,  27 => 3,  18 => 1,);
    }
}
