<?php

/* pages/company/branchgroup/form.twig */
class __TwigTemplate_19d17ecfe0842ae8688219609b044a5f86b026b464dfe9dd7e318880a3e6755d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/company/branchgroup/form.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("head", $context, $blocks);
        echo "

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jstree/css/style.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/treeview/treeview.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/tree.css\">";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 20
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["title_body"]) ? $context["title_body"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">";
        // line 41
        if ( !twig_test_empty((isset($context["warning_exist"]) ? $context["warning_exist"] : null))) {
            // line 42
            echo "    \t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning background-warning\">
    \t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-close-line-circled text-white\"></i>
    \t\t\t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t\t\t\t<strong> </strong>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["warning_exist"]) ? $context["warning_exist"] : null), "html", null, true);
            echo " 
    \t\t\t\t\t\t\t\t\t\t<code>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "email", array()), "html", null, true);
            echo "</code>
    \t\t\t\t\t\t\t\t\t</div>";
        }
        // line 50
        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Group Branch Inputs</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"on\" id=\"form_branch_group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"branch_group_id\" id=\"branch_group_id\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Name <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" name=\"branch_group_name\" id=\"branch_group_name\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>";
        // line 86
        echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
        \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Level <span class=\"text-danger error\">*</span></label>
        \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 group-body\">";
        // line 90
        if ( !twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group_branch", array()))) {
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "group_branch", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 92
                echo "                            \t\t\t\t\t\t\t\t\t\t
                    \t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "reference_id", array()), "html", null, true);
                echo " menu-item-bar \" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" >
                    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item-handle ui-sortable-handle\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-title\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"input-";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                echo "\" placeholder=\"Group name\" name=\"name[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "reference_id", array()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "reference_id", array()), "html", null, true);
                echo "]\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-controls\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-order\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-level=\"0\" class=\"bar-item add-owner\" aria-label=\"Move up\" title=\"Insert this level\"><i class=\"fa fa-plus-square-o\"></i></a>  
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-level=\"1\"  class=\"bar-item add-child\" aria-label=\"Move down\" title=\"Insert sub level\"><i class=\"fa fa-plus-square\"></i></a>
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" class=\"bar-item delete-owner\" aria-label=\"Move down\" title=\"Delete this level\"><i class=\"fa fa-minus-square-o\"></i></a>
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-ref-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "reference_id", array()), "html", null, true);
                echo "\" class=\"bar-item add-branch\" data-toggle=\"modal\" data-target=\"#add-branch-modal\" data-backdrop=\"static\" data-keyboard=\"false\" aria-label=\"Move down\" title=\"Mapping Branch\"><i class=\"fa fa-th-list\"></i></a>
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    \t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                    \t\t\t\t\t\t\t\t\t\t\t\t</div>";
                // line 108
                if ( !twig_test_empty($this->getAttribute($context["group"], "group_branch", array()))) {
                    // line 109
                    $context["macros"] = $this;
                    // line 110
                    echo $context["macros"]->getrender_group($this->getAttribute($context["group"], "group_branch", array()), 1);
                }
                // line 112
                echo "                        \t\t\t\t\t\t\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 116
            echo "        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo " menu-item-bar \" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" >
            \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item-handle ui-sortable-handle\">
            \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-title\"><input id=\"input-";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name", array()), "html", null, true);
            echo "\" placeholder=\"Group name\" name=\"name[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "]\"></span>
            \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-controls\">
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-order\">
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" data-level=\"0\" class=\"bar-item add-owner\" aria-label=\"Move up\" title=\"Insert this level\"><i class=\"fa fa-plus-square-o\"></i></a>  
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" data-level=\"1\"  class=\"bar-item add-child\" aria-label=\"Move down\" title=\"Insert sub level\"><i class=\"fa fa-plus-square\"></i></a>
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" class=\"bar-item delete-owner\" aria-label=\"Move down\" title=\"Delete this level\"><i class=\"fa fa-minus-square-o\"></i></a>
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" data-ref-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" class=\"bar-item add-branch\" data-toggle=\"modal\" data-target=\"#add-branch-modal\" data-backdrop=\"static\" data-keyboard=\"false\" aria-label=\"Move down\" title=\"Mapping Branch\"><i class=\"fa fa-th-list\"></i></a>
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
            \t\t\t\t\t\t\t\t\t\t\t\t\t</span>
            \t\t\t\t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t\t\t\t</div>";
        }
        // line 130
        echo "        \t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary btn-cancel\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary btn-save\">&nbsp; Save &nbsp;</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        // line 149
        $this->displayBlock('modal', $context, $blocks);
    }

    public function block_modal($context, array $blocks = array())
    {
        // line 150
        $this->loadTemplate("pages/company/branchgroup/modal.twig", "pages/company/branchgroup/form.twig", 150)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jstree/js/jstree.min.js\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/treeview/jquery.tree.js\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/branch-group.js\"></script>";
    }

    // line 63
    public function getrender_group($__groups__ = null, $__i__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "groups" => $__groups__,
            "i" => $__i__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 64
            $context["macros"] = $this;
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reclusive_group"]) {
                // line 66
                echo "                                        \t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "reference_id", array()), "html", null, true);
                echo " menu-item-bar mt-2 bar-child-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo " \">
                                        \t\t\t<div class=\"menu-item-handle ui-sortable-handle\">
                                        \t\t\t\t<span class=\"item-title\">
                                        \t\t\t\t\t\t<input id=\"input-";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "name", array()), "html", null, true);
                echo "\" placeholder=\"Group name\" name=\"name[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "parent_id", array()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "reference_id", array()), "html", null, true);
                echo "]\">
                                        \t\t\t\t</span>
                                        \t\t\t\t<span class=\"item-controls\">
                                        \t\t\t\t\t<span class=\"item-order\">
                                        \t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "parent_id", array()), "html", null, true);
                echo "\" data-level=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" class=\"bar-item add-owner\" aria-label=\"Move up\" title=\"Insert this level\"><i class=\"fa fa-plus-square-o\"></i></a>  
                                        \t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "parent_id", array()), "html", null, true);
                echo "\" data-level=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\"  class=\"bar-item add-child\" aria-label=\"Move down\" title=\"Insert sub level\"><i class=\"fa fa-plus-square\"></i></a>
                                        \t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\"  class=\"bar-item delete-owner\" aria-label=\"Move down\" title=\"Delete this level\"><i class=\"fa fa-minus-square-o\"></i></a>
                                        \t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\"  data-ref-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "parent_id", array()), "html", null, true);
                echo "\" class=\"bar-item add-branch\" data-toggle=\"modal\" data-target=\"#add-branch-modal\" data-backdrop=\"static\" data-keyboard=\"false\" aria-label=\"Move down\" title=\"Mapping Branch\"><i class=\"fa fa-th-list\"></i></a>
                                        \t\t\t\t\t</span>
                                        \t\t\t\t</span>
                                        \t\t\t</div>";
                // line 80
                if ( !twig_test_empty($this->getAttribute($context["reclusive_group"], "group_branch", array()))) {
                    // line 81
                    echo $context["macros"]->getrender_group($this->getAttribute($context["reclusive_group"], "group_branch", array()), ((isset($context["i"]) ? $context["i"] : null) + 1));
                }
                // line 83
                echo "                                        \t    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclusive_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages/company/branchgroup/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 83,  398 => 81,  396 => 80,  388 => 76,  384 => 75,  376 => 74,  368 => 73,  355 => 69,  344 => 66,  340 => 65,  338 => 64,  325 => 63,  320 => 168,  316 => 167,  311 => 165,  307 => 164,  303 => 163,  299 => 162,  295 => 161,  291 => 160,  287 => 159,  283 => 158,  279 => 157,  275 => 156,  271 => 155,  268 => 154,  264 => 150,  258 => 149,  239 => 130,  229 => 124,  225 => 123,  221 => 122,  217 => 121,  205 => 118,  197 => 116,  190 => 112,  187 => 110,  185 => 109,  183 => 108,  175 => 103,  171 => 102,  167 => 101,  163 => 100,  150 => 96,  142 => 93,  139 => 92,  135 => 91,  133 => 90,  128 => 86,  122 => 58,  119 => 57,  111 => 52,  107 => 50,  102 => 47,  98 => 46,  92 => 42,  90 => 41,  74 => 27,  65 => 20,  55 => 11,  52 => 10,  47 => 7,  43 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/jstree/css/style.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/pages/treeview/treeview.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/tree.css">*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/* 	<div class="pcoded-inner-content">*/
/* 		<div class="main-body">*/
/* 			<div class="page-wrapper">*/
/* 				<div class="page-header">*/
/* 					<div class="row align-items-end">*/
/* 						<div class="col-lg-4">*/
/* 							<div class="page-header-breadcrumb">*/
/* 								{{ breadcrumb|raw }}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-lg-8 text-right">*/
/* 							<div class="page-header-title">*/
/* 								<div class="d-inline">*/
/* 									<h4>*/
/* 										{{ title_body }}*/
/* 									</h4>*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* */
/* 						<div class="col-sm-12">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									{% if warning_exist is not empty %}*/
/*     									<div class="alert alert-warning background-warning">*/
/*     										<button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*     											<i class="icofont icofont-close-line-circled text-white"></i>*/
/*     										</button>*/
/*     										<strong> </strong> {{ warning_exist }} */
/*     										<code>{{ post.email }}</code>*/
/*     									</div>*/
/* 									{% endif %}*/
/* 									<h4 class="sub-title">Group Branch Inputs</h4>*/
/* 									<form action="" method="post" autocomplete="on" id="form_branch_group">*/
/* 										<input type="hidden" name="branch_group_id" id="branch_group_id" value="{{ group.id }}">*/
/* 										 */
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Name <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control w-50" name="branch_group_name" id="branch_group_name" value="{{ group.name }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/*         								*/
/*                                         {% macro render_group(groups, i) %}*/
/*                                         	{% import _self as macros %}*/
/*                                         	{% for reclusive_group in groups %}*/
/*                                         		<div id="{{ reclusive_group.id }}" class="{{ reclusive_group.reference_id }} menu-item-bar mt-2 bar-child-{{ i }} ">*/
/*                                         			<div class="menu-item-handle ui-sortable-handle">*/
/*                                         				<span class="item-title">*/
/*                                         						<input id="input-{{ reclusive_group.id }}" type="text" value="{{ reclusive_group.name }}" placeholder="Group name" name="name[{{ reclusive_group.parent_id }}][{{ reclusive_group.reference_id }}]">*/
/*                                         				</span>*/
/*                                         				<span class="item-controls">*/
/*                                         					<span class="item-order">*/
/*                                         						<a href="javascript;" data-id="{{ reclusive_group.id }}" data-parent-id="{{ reclusive_group.parent_id }}" data-level="{{ i }}" class="bar-item add-owner" aria-label="Move up" title="Insert this level"><i class="fa fa-plus-square-o"></i></a>  */
/*                                         						<a href="javascript;" data-id="{{ reclusive_group.id }}" data-parent-id="{{ reclusive_group.parent_id }}" data-level="{{ i }}"  class="bar-item add-child" aria-label="Move down" title="Insert sub level"><i class="fa fa-plus-square"></i></a>*/
/*                                         						<a href="javascript;" data-id="{{ reclusive_group.id }}"  class="bar-item delete-owner" aria-label="Move down" title="Delete this level"><i class="fa fa-minus-square-o"></i></a>*/
/*                                         						<a href="javascript;" data-id="{{ reclusive_group.id }}"  data-ref-id="{{ reclusive_group.parent_id }}" class="bar-item add-branch" data-toggle="modal" data-target="#add-branch-modal" data-backdrop="static" data-keyboard="false" aria-label="Move down" title="Mapping Branch"><i class="fa fa-th-list"></i></a>*/
/*                                         					</span>*/
/*                                         				</span>*/
/*                                         			</div>*/
/*                                             		{% if reclusive_group.group_branch is not empty %}*/
/*                                             		    {{ macros.render_group(reclusive_group.group_branch, i+1) }}*/
/*                                             	    {% endif %}*/
/*                                         	    </div>*/
/*                                         	{% endfor %}*/
/*                                         {% endmacro %}*/
/* */
/* 										<div class="form-group row">*/
/*         										<label class="col-sm-2 col-form-label">Level <span class="text-danger error">*</span></label>*/
/*         										<div class="col-sm-10 group-body">*/
/*         											{% if group.group_branch is not empty %}*/
/*         											       {% for group in group.group_branch %}*/
/*                             										*/
/*                     											<div class="{{ group.reference_id }} menu-item-bar " id="{{ group.id }}" >*/
/*                     												<div class="menu-item-handle ui-sortable-handle">*/
/*                     													<span class="item-title">*/
/*                     														<input id="input-{{ group.id }}" type="text" value="{{ group.name }}" placeholder="Group name" name="name[{{ group.reference_id }}][{{ group.reference_id }}]">*/
/*                     													</span>*/
/*                     													<span class="item-controls">*/
/*                     														<span class="item-order">*/
/*                     															<a href="javascript;" data-id="{{ group.id }}" data-level="0" class="bar-item add-owner" aria-label="Move up" title="Insert this level"><i class="fa fa-plus-square-o"></i></a>  */
/*                     															<a href="javascript;" data-id="{{ group.id }}" data-level="1"  class="bar-item add-child" aria-label="Move down" title="Insert sub level"><i class="fa fa-plus-square"></i></a>*/
/*                     															<a href="javascript;" data-id="{{ group.id }}" class="bar-item delete-owner" aria-label="Move down" title="Delete this level"><i class="fa fa-minus-square-o"></i></a>*/
/*                     															<a href="javascript;" data-id="{{ group.id }}" data-ref-id="{{ group.reference_id }}" class="bar-item add-branch" data-toggle="modal" data-target="#add-branch-modal" data-backdrop="static" data-keyboard="false" aria-label="Move down" title="Mapping Branch"><i class="fa fa-th-list"></i></a>*/
/*                     														</span>*/
/*                     													</span>*/
/*                     												</div>*/
/*                     											*/
/*                         											{% if group.group_branch is not empty %}*/
/*                             											{% import _self as macros %}*/
/*                             											{{ macros.render_group(group.group_branch, 1) }}*/
/*                             										{% endif %}*/
/*                         										</div>*/
/*                                 										*/
/*                 										   {% endfor %}*/
/*             										{% else %}*/
/*         												<div class="{{ group.reference_id }} menu-item-bar " id="{{ group.reference_id }}" >*/
/*             												<div class="menu-item-handle ui-sortable-handle">*/
/*             													<span class="item-title"><input id="input-{{ group.reference_id }}" type="text" value="{{ group.name }}" placeholder="Group name" name="name[{{ group.reference_id }}][{{ group.reference_id }}]"></span>*/
/*             													<span class="item-controls">*/
/*             														<span class="item-order">*/
/*             															<a href="javascript;" data-id="{{ group.reference_id }}" data-level="0" class="bar-item add-owner" aria-label="Move up" title="Insert this level"><i class="fa fa-plus-square-o"></i></a>  */
/*             															<a href="javascript;" data-id="{{ group.reference_id }}" data-level="1"  class="bar-item add-child" aria-label="Move down" title="Insert sub level"><i class="fa fa-plus-square"></i></a>*/
/*             															<a href="javascript;" data-id="{{ group.reference_id }}" class="bar-item delete-owner" aria-label="Move down" title="Delete this level"><i class="fa fa-minus-square-o"></i></a>*/
/*             															<a href="javascript;" data-id="{{ group.reference_id }}" data-ref-id="{{ group.reference_id }}" class="bar-item add-branch" data-toggle="modal" data-target="#add-branch-modal" data-backdrop="static" data-keyboard="false" aria-label="Move down" title="Mapping Branch"><i class="fa fa-th-list"></i></a>*/
/*             														</span>*/
/*             													</span>*/
/*             												</div>*/
/*             											</div>*/
/*             										{% endif %}*/
/*         										</div>*/
/* 										</div>*/
/* 										<div class="row ">*/
/* 											<div class="col-md-12 text-right">*/
/* 												<button type="button" class="btn btn-outline-secondary btn-cancel">Cancel</button>*/
/* 												<button class="btn btn-secondary btn-save">&nbsp; Save &nbsp;</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</form>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% block modal %}*/
/* {% include 'pages/company/branchgroup/modal.twig' with { 'base_url': base_url } %} 			*/
/* {% endblock %}					*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* <script src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/jstree/js/jstree.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/treeview/jquery.tree.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/branch-group.js"></script>*/
/*  */
/* {% endblock %}*/
