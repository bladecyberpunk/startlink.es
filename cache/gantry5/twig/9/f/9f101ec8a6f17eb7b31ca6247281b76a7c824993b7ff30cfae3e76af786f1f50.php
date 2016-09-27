<?php

/* ajax/filepicker/files.html.twig */
class __TwigTemplate_9f101ec8a6f17eb7b31ca6247281b76a7c824993b7ff30cfae3e76af786f1f50 extends Twig_Template
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
        // line 21
        echo "
<ul class=\"g-list-labels\">
    <li>
        <span class=\"g-file-name\">Name</span>
        <span class=\"g-file-size\">Size</span>
        <span class=\"g-file-mtime\">Last Modified</span>
    </li>
</ul>
<ul>
    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["file"]) {
            // line 31
            echo "        <li data-file=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["file"]), "html_attr");
            echo "\" data-file-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "pathname", array()));
            echo "\">
            ";
            // line 32
            if ($this->getAttribute($context["file"], "isImage", array())) {
                // line 33
                echo "                <div class=\"g-thumb g-image\" style=\"background-image:url(";
                echo twig_escape_filter($this->env, $this->env->getExtension('UrlExtension')->urlFunc($this->getAttribute($context["file"], "pathname", array())), "html", null, true);
                echo ")\"></div>
            ";
            } else {
                // line 35
                echo "                <div class=\"g-thumb\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "extension", array()), "html", null, true);
                echo "</div>
            ";
            }
            // line 37
            echo "
            <span class=\"g-file-name\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
            echo "</span>
            <span class=\"g-file-size\">";
            // line 39
            echo $this->getAttribute($this, "bytesToSize", array(0 => $this->getAttribute($context["file"], "size", array())), "method");
            echo "</span>
            <span class=\"g-file-mtime\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "mtime", array()), "j M o"), "html", null, true);
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</ul>
";
    }

    // line 1
    public function getbytesToSize($__bytes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 4
            echo "        ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : null) * 1024);
            // line 5
            echo "        ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : null) * 1024);
            // line 6
            echo "        ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : null) * 1024);
            // line 7
            echo "
        ";
            // line 8
            if (((isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["kilobyte"]) ? $context["kilobyte"] : null))) {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 10
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["megabyte"]) ? $context["megabyte"] : null))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["kilobyte"]) ? $context["kilobyte"] : null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 12
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["gigabyte"]) ? $context["gigabyte"] : null))) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["megabyte"]) ? $context["megabyte"] : null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 14
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["terabyte"]) ? $context["terabyte"] : null))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["gigabyte"]) ? $context["gigabyte"] : null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["terabyte"]) ? $context["terabyte"] : null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 19
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ajax/filepicker/files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 19,  137 => 17,  131 => 15,  129 => 14,  124 => 13,  122 => 12,  117 => 11,  115 => 10,  110 => 9,  108 => 8,  105 => 7,  102 => 6,  99 => 5,  96 => 4,  93 => 3,  91 => 2,  80 => 1,  75 => 43,  66 => 40,  62 => 39,  58 => 38,  55 => 37,  49 => 35,  43 => 33,  41 => 32,  34 => 31,  30 => 30,  19 => 21,);
    }
}
