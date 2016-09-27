<?php

/* @gantry-admin/ajax/unsaved.html.twig */
class __TwigTemplate_ff74a740930bb1fbdb8c702411d60673c9f9f1d0d6f9c9ab32f0cf26008340c5 extends Twig_Template
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
        echo "<div class=\"card settings-block\">
    <h4>Are you sure you want to leave this Page?</h4>
    <div class=\"inner-params\">
        You haven't saved your changes and by leaving the page they will be lost.
        Do you want to leave without saving?
    </div>
</div>

<div class=\"g-modal-actions\">
    <a class=\"button button-primary\" data-g-unsaved-save>Save Before Leaving</a>
    <a class=\"button g5-dialog-close\" data-g-unsaved-discard>Discard Changes</a>
    <a class=\"button g5-dialog-close\" data-g-unsaved-stay>Remain on This Page</a>
</div>";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/unsaved.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
