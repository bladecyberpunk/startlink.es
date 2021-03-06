<?php

/* @gantry-admin/ajax/filepicker.html.twig */
class __TwigTemplate_f4c4b87eb574fd42f944ff50561d3e34eba65ef59a8f4ed482cb02041fe360b2 extends Twig_Template
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
        echo "<div class=\"g-particles-header filepicker-header settings-block clearfix\">
    ";
        // line 3
        echo "    <div class=\"float-right files-mode\">
        <div class=\"file-mode active\" data-files-mode=\"thumbnails\"><i class=\"fa fa-th-large\"></i></div>
        <div class=\"file-mode\" data-files-mode=\"list\"><i class=\"fa fa-th-list\"></i></div>
    </div>
</div>

<div class=\"g-particles-main icons-wrapper g-grid\">
    <div class=\"folders g-block size-30\">
        <ul class=\"g-bookmarks\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookmarks"]) ? $context["bookmarks"] : null));
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
        foreach ($context['_seq'] as $context["index"] => $context["bookmark"]) {
            // line 13
            echo "                <li class=\"g-bookmark";
            echo ((twig_in_filter($context["index"], (isset($context["active"]) ? $context["active"] : null))) ? (" selected") : (""));
            echo "\">
                    <span class=\"g-bookmark-title\" title=\"";
            // line 14
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo " <i class=\"g-bookmark-collapse fa fa-fw fa-minus\"></i></span>
                    <ul class=\"g-folders fa-ul\">
                        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["bookmark"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 17
                echo "                            <li";
                echo ((twig_in_filter($context["index"], (isset($context["active"]) ? $context["active"] : null))) ? (" class=\"selected active\"") : (""));
                echo " data-folder=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("pathname" => $context["folder"])), "html_attr");
                echo "\"><i class=\"fa-li fa fa-folder-o\"></i> <span class=\"path\" title=\"";
                echo twig_escape_filter($this->env, $context["folder"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["folder"], "html", null, true);
                echo "</span></li>
                            ";
                // line 18
                $this->loadTemplate("ajax/filepicker/subfolders.html.twig", "@gantry-admin/ajax/filepicker.html.twig", 18)->display(array_merge($context, array("folder" => $this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), $context["index"]), $context["folder"]))));
                // line 19
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                    </ul>
                </li>
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
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['bookmark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        // line 26
        echo "        </ul>
    </div>
    <div class=\"g-files g-block g-filemode-thumbnails\">
        ";
        // line 29
        $this->loadTemplate("ajax/filepicker/files.html.twig", "@gantry-admin/ajax/filepicker.html.twig", 29)->display(array_merge($context, array("files" => (isset($context["files"]) ? $context["files"] : null))));
        // line 30
        echo "    </div>
</div>
";
        // line 33
        echo "<div class=\"g-particles-footer settings-block clearfix\">
    <div class=\"float-right\">
        <a href=\"#\" class=\"button button-primary\" data-select>Select</a>
        <a href=\"#\" class=\"button g5-dialog-close\">Cancel</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  131 => 30,  129 => 29,  124 => 26,  122 => 23,  106 => 20,  92 => 19,  90 => 18,  79 => 17,  62 => 16,  55 => 14,  50 => 13,  33 => 12,  22 => 3,  19 => 1,);
    }
}
