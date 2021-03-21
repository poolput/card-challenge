<?php

/* pages/company/branchgroup/block.twig */
class __TwigTemplate_6a27505b1c6a86ea763ead0cd45b13369221ac2e4139027fb90a82ef1b72cad6 extends Twig_Template
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
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo " menu-item-bar mt-2 bar-child-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "level", array()), "html", null, true);
        echo " \" id=\"";
        echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
        echo "\">
\t<div class=\"menu-item-handle ui-sortable-handle\">
\t\t<span class=\"item-title\">";
        // line 4
        if ( !twig_test_empty((isset($context["parent_id"]) ? $context["parent_id"] : null))) {
            // line 5
            echo "\t\t\t<input type=\"text\" name=\"name[";
            echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
            echo "]\"  placeholder=\"Group name\" id=\"input-";
            echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
            echo "\"></span>";
        } else {
            // line 7
            echo "\t\t\t<input type=\"text\" name=\"name[";
            echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
            echo "]\"  placeholder=\"Group name\" id=\"input-";
            echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
            echo "\"></span>";
        }
        // line 9
        echo "\t\t<span class=\"item-controls\">
\t\t\t<span class=\"item-order\">
\t\t\t\t<a href=\"javascript:void(0);\" data-id=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo "\" data-level=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "owner", array()), "html", null, true);
        echo "\" class=\"bar-item add-owner\" aria-label=\"Move up\" title=\"Insert this level\"><i class=\"fa fa-plus-square-o\"></i></a>  
\t\t\t\t<a href=\"javascript:void(0);\" data-id=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo "\" data-level=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "child", array()), "html", null, true);
        echo "\" class=\"bar-item add-child\" aria-label=\"Move down\" title=\"Insert sub level\"><i class=\"fa fa-plus-square\"></i></a>
\t\t\t\t<a href=\"javascript;\" data-id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
        echo "\" class=\"bar-item delete-owner\" aria-label=\"Move down\" title=\"Delete this level\"><i class=\"fa fa-minus-square-o\"></i></a>
\t\t\t\t<a href=\"javascript;\" data-id=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["group_id"]) ? $context["group_id"] : null), "html", null, true);
        echo "\" data-ref-id=\"";
        echo twig_escape_filter($this->env, (isset($context["parent_id"]) ? $context["parent_id"] : null), "html", null, true);
        echo "\" class=\"bar-item add-branch\" aria-label=\"Move down\" title=\"Mapping Branch\" data-toggle=\"modal\" data-target=\"#add-branch-modal\"><i class=\"fa fa-th-list\"></i></a>
\t\t\t</span>
\t\t</span>
\t</div>
 
</div>";
    }

    public function getTemplateName()
    {
        return "pages/company/branchgroup/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 13,  61 => 12,  53 => 11,  49 => 9,  40 => 7,  31 => 5,  29 => 4,  19 => 1,);
    }
}
/* <div class="{{ parent_id }} menu-item-bar mt-2 bar-child-{{ params.level }} " id="{{ group_id }}">*/
/* 	<div class="menu-item-handle ui-sortable-handle">*/
/* 		<span class="item-title">*/
/* 		{% if parent_id is not empty %}*/
/* 			<input type="text" name="name[{{ parent_id }}][{{ group_id }}]"  placeholder="Group name" id="input-{{ group_id }}"></span>*/
/* 		{% else %}*/
/* 			<input type="text" name="name[{{ group_id }}][{{ group_id }}]"  placeholder="Group name" id="input-{{ group_id }}"></span>*/
/* 		{% endif %}*/
/* 		<span class="item-controls">*/
/* 			<span class="item-order">*/
/* 				<a href="javascript:void(0);" data-id="{{ group_id }}" data-parent-id="{{ parent_id }}" data-level="{{ params.owner }}" class="bar-item add-owner" aria-label="Move up" title="Insert this level"><i class="fa fa-plus-square-o"></i></a>  */
/* 				<a href="javascript:void(0);" data-id="{{ group_id }}" data-parent-id="{{ parent_id }}" data-level="{{ params.child }}" class="bar-item add-child" aria-label="Move down" title="Insert sub level"><i class="fa fa-plus-square"></i></a>*/
/* 				<a href="javascript;" data-id="{{ group_id }}" class="bar-item delete-owner" aria-label="Move down" title="Delete this level"><i class="fa fa-minus-square-o"></i></a>*/
/* 				<a href="javascript;" data-id="{{ group_id }}" data-ref-id="{{ parent_id }}" class="bar-item add-branch" aria-label="Move down" title="Mapping Branch" data-toggle="modal" data-target="#add-branch-modal"><i class="fa fa-th-list"></i></a>*/
/* 			</span>*/
/* 		</span>*/
/* 	</div>*/
/*  */
/* </div>*/
