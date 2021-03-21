<?php

/* pages/company/branchgroup/form.twig */
class __TwigTemplate_39e563ecf121ded86e53105ed5b18cac95f855808cf0eedd432d22b3d6ff048c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/company/branchgroup/form.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
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
        // line 42
        if ( !twig_test_empty((isset($context["warning_exist"]) ? $context["warning_exist"] : null))) {
            // line 43
            echo "    \t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning background-warning\">
    \t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-close-line-circled text-white\"></i>
    \t\t\t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t\t\t\t<strong> </strong>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["warning_exist"]) ? $context["warning_exist"] : null), "html", null, true);
            echo " 
    \t\t\t\t\t\t\t\t\t\t<code>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "email", array()), "html", null, true);
            echo "</code>
    \t\t\t\t\t\t\t\t\t</div>";
        }
        // line 51
        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Group Branch Inputs</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"on\" id=\"form_branch_group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"branch_group_id\" id=\"branch_group_id\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Name <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control w-50\" name=\"branch_group_name\" id=\"branch_group_name\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>";
        // line 85
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
    \t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Level <span class=\"text-danger error\">*</span></label>
    \t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10 group-body\">";
        // line 88
        if ( !twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "group_branch", array()))) {
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "group_branch", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 90
                echo "            \t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "reference_id", array()), "html", null, true);
                echo " menu-item-bar \" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" >
            \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item-handle ui-sortable-handle\">
            \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-title\"><input id=\"input-";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                echo "\" placeholder=\"Group name\" name=\"name[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "reference_id", array()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "reference_id", array()), "html", null, true);
                echo "]\"></span>
            \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-controls\">
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-order\">
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-level=\"0\" class=\"bar-item add-owner\" aria-label=\"Move up\" title=\"Insert this level\"><i class=\"fa fa-plus-square-o\"></i></a>  
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-level=\"1\"  class=\"bar-item add-child\" aria-label=\"Move down\" title=\"Insert sub level\"><i class=\"fa fa-plus-square\"></i></a>
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" class=\"bar-item delete-owner\" aria-label=\"Move down\" title=\"Delete this level\"><i class=\"fa fa-minus-square-o\"></i></a>
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" class=\"bar-item add-branch\" data-toggle=\"modal\" data-target=\"#add-branch-Modal\" aria-label=\"Move down\" title=\"Mapping Branch\"><i class=\"fa fa-th-list\"></i></a>
            \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
            \t\t\t\t\t\t\t\t\t\t\t\t\t</span>
            \t\t\t\t\t\t\t\t\t\t\t\t</div>
            \t\t\t\t\t\t\t\t\t\t\t</div>";
                // line 103
                if ( !twig_test_empty($this->getAttribute($context["group"], "group_branch", array()))) {
                    // line 104
                    $context["macros"] = $this;
                    // line 105
                    echo $context["macros"]->getrender_group($this->getAttribute($context["group"], "group_branch", array()), 1);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 109
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo " menu-item-bar \" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" >
        \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item-handle ui-sortable-handle\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-title\"><input id=\"input-";
            // line 111
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
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" data-level=\"0\" class=\"bar-item add-owner\" aria-label=\"Move up\" title=\"Insert this level\"><i class=\"fa fa-plus-square-o\"></i></a>  
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" data-level=\"1\"  class=\"bar-item add-child\" aria-label=\"Move down\" title=\"Insert sub level\"><i class=\"fa fa-plus-square\"></i></a>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" class=\"bar-item delete-owner\" aria-label=\"Move down\" title=\"Delete this level\"><i class=\"fa fa-minus-square-o\"></i></a>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "reference_id", array()), "html", null, true);
            echo "\" class=\"bar-item add-branch\" data-toggle=\"modal\" data-target=\"#add-branch-Modal\" aria-label=\"Move down\" title=\"Mapping Branch\"><i class=\"fa fa-th-list\"></i></a>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
        \t\t\t\t\t\t\t\t\t\t\t\t\t</span>
        \t\t\t\t\t\t\t\t\t\t\t\t</div>
        \t\t\t\t\t\t\t\t\t\t\t</div>";
        }
        // line 123
        echo "    \t\t\t\t\t\t\t\t\t\t</div>
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
</div>
<div class=\"modal fade\" id=\"add-branch-Modal\" data-id=\"\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\" modal-dialog branch-Modal\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h4 class=\"modal-title\">Choose Branch for \"<span class=\"group-name-selected\"></span>\"</h4>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"col-md-12 pt-2\">";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 153
            echo "\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1 block-province\">
\t\t\t\t\t\t\t<div class=\"col-md-12 float-left pb-1\">
    \t\t\t\t\t\t\t<input type=\"checkbox\" name=\"province-";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" id=\"province-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\"  class=\"province\"> &nbsp;";
            // line 156
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["province"], "name", array())), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["province"], "branch", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
                // line 159
                echo "        \t\t\t\t\t\t<div class=\"col-md-12 float-left ml-4 pt-1 block-branch\">
        \t\t\t\t\t\t\t<input type=\"checkbox\"";
                // line 160
                echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
                echo " name=\"branch[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
                echo "\" data-branch-name=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["branch"], "name", array())), "html", null, true);
                echo "\" data-province-id=\"province-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
                echo "\" class=\"branch province-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
                echo "\"> &nbsp;";
                // line 161
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["branch"], "name", array())), "html", null, true);
                echo "
        \t\t\t\t\t\t</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "    \t\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary  \" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary save-branch \">Save</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    // line 178
    public function block_footer($context, array $blocks = array())
    {
        // line 179
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jstree/js/jstree.min.js\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/treeview/jquery.tree.js\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/branch-group.js\"></script>";
    }

    // line 64
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
            // line 65
            $context["macros"] = $this;
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reclusive_group"]) {
                // line 67
                echo "    \t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "reference_id", array()), "html", null, true);
                echo " menu-item-bar mt-2 bar-child-";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo " \">
    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu-item-handle ui-sortable-handle\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-title\"><input id=\"input-";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" type=\"text\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "name", array()), "html", null, true);
                echo "\" placeholder=\"Group name\" name=\"name[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "parent_id", array()), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "reference_id", array()), "html", null, true);
                echo "]\"></span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-controls\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"item-order\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" data-level=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" class=\"bar-item add-owner\" aria-label=\"Move up\" title=\"Insert this level\"><i class=\"fa fa-plus-square-o\"></i></a>  
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" data-level=\"";
                echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
                echo "\"  class=\"bar-item add-child\" aria-label=\"Move down\" title=\"Insert sub level\"><i class=\"fa fa-plus-square\"></i></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" class=\"bar-item delete-owner\" aria-label=\"Move down\" title=\"Delete this level\"><i class=\"fa fa-minus-square-o\"></i></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript;\" data-id=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["reclusive_group"], "id", array()), "html", null, true);
                echo "\" class=\"bar-item add-branch\" data-toggle=\"modal\" data-target=\"#add-branch-Modal\" aria-label=\"Move down\" title=\"Mapping Branch\"><i class=\"fa fa-th-list\"></i></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</span>
    \t\t\t\t\t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t\t\t\t</div>";
                // line 80
                if ( !twig_test_empty($this->getAttribute($context["reclusive_group"], "group_branch", array()))) {
                    // line 81
                    echo $context["macros"]->getrender_group($this->getAttribute($context["reclusive_group"], "group_branch", array()), ((isset($context["i"]) ? $context["i"] : null) + 1));
                }
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
        return array (  440 => 81,  438 => 80,  431 => 75,  427 => 74,  421 => 73,  415 => 72,  403 => 69,  393 => 67,  389 => 66,  387 => 65,  374 => 64,  369 => 190,  365 => 189,  361 => 188,  357 => 187,  353 => 186,  349 => 185,  345 => 184,  341 => 183,  337 => 182,  333 => 181,  329 => 180,  325 => 179,  322 => 178,  310 => 166,  304 => 164,  296 => 161,  285 => 160,  282 => 159,  278 => 158,  274 => 156,  267 => 155,  263 => 153,  259 => 152,  229 => 123,  221 => 117,  217 => 116,  213 => 115,  209 => 114,  197 => 111,  189 => 109,  181 => 105,  179 => 104,  177 => 103,  170 => 98,  166 => 97,  162 => 96,  158 => 95,  146 => 92,  138 => 90,  134 => 89,  132 => 88,  128 => 85,  122 => 59,  119 => 58,  111 => 53,  107 => 51,  102 => 48,  98 => 47,  92 => 43,  90 => 42,  73 => 27,  64 => 20,  54 => 11,  51 => 10,  46 => 7,  42 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
/* */
/*                                         {% macro render_group(groups, i) %}*/
/*         									{% import _self as macros %}*/
/*         									{% for reclusive_group in groups %}*/
/*     											<div id="{{ reclusive_group.id }}" class="{{ reclusive_group.reference_id }} menu-item-bar mt-2 bar-child-{{ i }} ">*/
/*     												<div class="menu-item-handle ui-sortable-handle">*/
/*     													<span class="item-title"><input id="input-{{ reclusive_group.id }}" type="text" value="{{ reclusive_group.name }}" placeholder="Group name" name="name[{{ reclusive_group.parent_id }}][{{ reclusive_group.reference_id }}]"></span>*/
/*     													<span class="item-controls">*/
/*     														<span class="item-order">*/
/*     															<a href="javascript;" data-id="{{ reclusive_group.id }}" data-level="{{ i }}" class="bar-item add-owner" aria-label="Move up" title="Insert this level"><i class="fa fa-plus-square-o"></i></a>  */
/*     															<a href="javascript;" data-id="{{ reclusive_group.id }}" data-level="{{ i+1 }}"  class="bar-item add-child" aria-label="Move down" title="Insert sub level"><i class="fa fa-plus-square"></i></a>*/
/*     															<a href="javascript;" data-id="{{ reclusive_group.id }}" class="bar-item delete-owner" aria-label="Move down" title="Delete this level"><i class="fa fa-minus-square-o"></i></a>*/
/*     															<a href="javascript;" data-id="{{ reclusive_group.id }}" class="bar-item add-branch" data-toggle="modal" data-target="#add-branch-Modal" aria-label="Move down" title="Mapping Branch"><i class="fa fa-th-list"></i></a>*/
/*     														</span>*/
/*     													</span>*/
/*     												</div>*/
/*     											</div>*/
/*         										{% if reclusive_group.group_branch is not empty %}*/
/*         										    {{ macros.render_group(reclusive_group.group_branch, i+1) }}*/
/*         									    {% endif %}*/
/*         									{% endfor %}*/
/*         								{% endmacro %}*/
/* 										<div class="form-group row">*/
/*     										<label class="col-sm-2 col-form-label">Level <span class="text-danger error">*</span></label>*/
/*     										<div class="col-sm-10 group-body">*/
/*     											{% if group.group_branch is not empty %}*/
/*         											{% for group in group.group_branch %}*/
/*             											<div class="{{ group.reference_id }} menu-item-bar " id="{{ group.id }}" >*/
/*             												<div class="menu-item-handle ui-sortable-handle">*/
/*             													<span class="item-title"><input id="input-{{ group.id }}" type="text" value="{{ group.name }}" placeholder="Group name" name="name[{{ group.reference_id }}][{{ group.reference_id }}]"></span>*/
/*             													<span class="item-controls">*/
/*             														<span class="item-order">*/
/*             															<a href="javascript;" data-id="{{ group.id }}" data-level="0" class="bar-item add-owner" aria-label="Move up" title="Insert this level"><i class="fa fa-plus-square-o"></i></a>  */
/*             															<a href="javascript;" data-id="{{ group.id }}" data-level="1"  class="bar-item add-child" aria-label="Move down" title="Insert sub level"><i class="fa fa-plus-square"></i></a>*/
/*             															<a href="javascript;" data-id="{{ group.id }}" class="bar-item delete-owner" aria-label="Move down" title="Delete this level"><i class="fa fa-minus-square-o"></i></a>*/
/*             															<a href="javascript;" data-id="{{ group.id }}" class="bar-item add-branch" data-toggle="modal" data-target="#add-branch-Modal" aria-label="Move down" title="Mapping Branch"><i class="fa fa-th-list"></i></a>*/
/*             														</span>*/
/*             													</span>*/
/*             												</div>*/
/*             											</div>*/
/*             											{% if group.group_branch is not empty %}*/
/*                 											{% import _self as macros %}*/
/*                 											{{ macros.render_group(group.group_branch, 1) }}*/
/*                 										{% endif %}*/
/*             										{% endfor %}*/
/*         										{% else %}*/
/*     												<div class="{{ group.reference_id }} menu-item-bar " id="{{ group.reference_id }}" >*/
/*         												<div class="menu-item-handle ui-sortable-handle">*/
/*         													<span class="item-title"><input id="input-{{ group.reference_id }}" type="text" value="{{ group.name }}" placeholder="Group name" name="name[{{ group.reference_id }}][{{ group.reference_id }}]"></span>*/
/*         													<span class="item-controls">*/
/*         														<span class="item-order">*/
/*         															<a href="javascript;" data-id="{{ group.reference_id }}" data-level="0" class="bar-item add-owner" aria-label="Move up" title="Insert this level"><i class="fa fa-plus-square-o"></i></a>  */
/*         															<a href="javascript;" data-id="{{ group.reference_id }}" data-level="1"  class="bar-item add-child" aria-label="Move down" title="Insert sub level"><i class="fa fa-plus-square"></i></a>*/
/*         															<a href="javascript;" data-id="{{ group.reference_id }}" class="bar-item delete-owner" aria-label="Move down" title="Delete this level"><i class="fa fa-minus-square-o"></i></a>*/
/*         															<a href="javascript;" data-id="{{ group.reference_id }}" class="bar-item add-branch" data-toggle="modal" data-target="#add-branch-Modal" aria-label="Move down" title="Mapping Branch"><i class="fa fa-th-list"></i></a>*/
/*         														</span>*/
/*         													</span>*/
/*         												</div>*/
/*         											</div>*/
/*         										{% endif %}*/
/*     										</div>*/
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
/* <div class="modal fade" id="add-branch-Modal" data-id="" tabindex="-1" role="dialog">*/
/* 	<div class=" modal-dialog branch-Modal" role="document">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<h4 class="modal-title">Choose Branch for "<span class="group-name-selected"></span>"</h4>*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/* 					<span aria-hidden="true">&times;</span>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				<div class="col-md-12 pt-2">*/
/* 					{% for province in branchs %}*/
/* 						<div class="col-md-12 float-left pb-1 block-province">*/
/* 							<div class="col-md-12 float-left pb-1">*/
/*     							<input type="checkbox" name="province-{{ province.id }}" id="province-{{ province.id }}" value="{{ province.id }}"  class="province"> &nbsp;*/
/*     							{{ province.name|capitalize }}*/
/* 							</div>*/
/*     						{% for branch in province.branch %}*/
/*         						<div class="col-md-12 float-left ml-4 pt-1 block-branch">*/
/*         							<input type="checkbox" {{ checked }} name="branch[]" value="{{ branch.id }}" data-branch-name="{{ branch.name|capitalize }}" data-province-id="province-{{ province.id }}" class="branch province-{{ province.id }}"> &nbsp;*/
/*         							{{ branch.name|capitalize }}*/
/*         						</div>*/
/*         					{% endfor %}*/
/*     					</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-outline-secondary  " data-dismiss="modal">Close</button>*/
/* 				<button type="button" class="btn btn-secondary save-branch ">Save</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
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
/* <script src="{{ base_url }}/theme/assets/js/branch-group.js"></script>*/
/*  */
/* {% endblock %}*/
