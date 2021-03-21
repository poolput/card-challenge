<?php

/* pages/permission/form.twig */
class __TwigTemplate_b582731d47ab4f4e584696ffc541bc63dcab0b701a843c38d494ad19b569ffad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/permission/form.twig", 1);
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
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 15
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title_body"]) ? $context["title_body"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body permission\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">";
        // line 36
        if ( !twig_test_empty((isset($context["warning_exist"]) ? $context["warning_exist"] : null))) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning background-warning\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-close-line-circled text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<strong> </strong>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["warning_exist"]) ? $context["warning_exist"] : null), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<code>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "email", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</code>
\t\t\t\t\t\t\t\t\t</div>";
        }
        // line 48
        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Role Setting</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"on\" id=\"form_role\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"role_id\" id=\"role_id\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "role_id", array()), "html", null, true);
        echo "\">

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Role Name <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 55
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "role_name", array())), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Description </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "description", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row   pt-2 \">
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs md-tabs\" role=\"tablist\">";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages_all"]) ? $context["pages_all"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 70
            $context["isactive"] = "";
            // line 71
            if (($context["key"] == 1)) {
                // line 72
                $context["isactive"] = " active";
            }
            // line 74
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
            echo " name=\"page[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" class=\"hide\" checked=\"checked\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["isactive"]) ? $context["isactive"] : null), "html", null, true);
            echo "\" data-id=\"tab-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\" href=\"#tab-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" role=\"tab\" aria-expanded=\"true\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["page"], "name", array())), "html", null, true);
            echo "</a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slide\"></div>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content card-block\">";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages_all"]) ? $context["pages_all"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["page"]) {
            // line 83
            $context["isactive"] = "";
            // line 84
            if (($context["key"] == 1)) {
                // line 85
                $context["isactive"] = " active";
            }
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\" tab-pane";
            echo twig_escape_filter($this->env, (isset($context["isactive"]) ? $context["isactive"] : null), "html", null, true);
            echo "\" id=\"tab-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\" role=\"tabpanel\" aria-expanded=\"true\">";
            // line 88
            if ( !twig_test_empty($this->getAttribute($context["page"], "sub", array()))) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-item\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"  pt-2 pb-2\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\tAccession Branch ( <span class=\"page-select\">0</span> /&nbsp;<span class=\"page-all\">0</span>) 
                    \t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"check pointer\">Check All</span> / <span class=\"uncheck pointer\">Uncheck All</span>
                    \t\t\t\t\t\t\t\t\t\t\t\t</p>";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["page"], "sub", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_page"]) {
                    // line 95
                    echo "                \t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row pb-3\">
                \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 page-group\">
                \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
                \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"page-group-main\" type=\"checkbox\"";
                    // line 98
                    echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
                    echo " name=\"page[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub_page"], "id", array()), "html", null, true);
                    echo "\">&nbsp;";
                    // line 99
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["sub_page"], "alias", array())), "html", null, true);
                    echo "
                        \t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>";
                    // line 101
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub_page"], "sub", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_sub_page"]) {
                        // line 102
                        echo "                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 float-left  pb-2 pl-5\">
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"page-group-sub\" type=\"checkbox\"";
                        // line 103
                        echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
                        echo " name=\"page[]\" value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub_sub_page"], "id", array()), "html", null, true);
                        echo "\">&nbsp;";
                        // line 104
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["sub_sub_page"], "alias", array())), "html", null, true);
                        echo "
                    \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_sub_page'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 107
                    echo "                \t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
            } else {
                // line 112
                echo "        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-blod\">
        \t\t\t\t\t\t\t\t\t\t\t\t\t\tWhat is&nbsp;";
                // line 113
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["page"], "alias", array())), "html", null, true);
                echo "?
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
        \t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                                                    It has survived not only five centuries, but also the leap into electronic typesetting, 
                                                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                                                                    sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
                                                                    like Aldus PageMaker including versions of Lorem Ipsum.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>";
            }
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row pt-3 pb-3\">
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
    }

    // line 149
    public function block_footer($context, array $blocks = array())
    {
        // line 150
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script>
\$(function(){
\tvar total = 0;
\t\$('.nav-link').click(function(){
\t\tvar id = \$(this).data('id');
        total = 0;
        \$('#'+id).find('.page-item').find('input').each(function(){
        \ttotal = total + 1;
        });
        \$('#'+id).find('.page-item').find('.page-all').html(total);
\t});
\t
    \$('.check').click(function(){
    \ttotal = 0;
    \t\$(this).parents('.page-item').find('input').each(function(){
\t  \t\t\$(this).prop('checked', true);
\t  \t\ttotal = total + 1;
\t\t});
\t\t\$(this).parents('.page-item').find('.page-select').html(total);
\t});
\t
  \t\$('.uncheck').click(function(){
  \t\t\$(this).parents('.page-item').find('input').each(function(){
      \t\t\$(this).prop('checked', false);
    \t});
      \t\$(this).parents('.page-item').find('.page-select').html(0);
  \t});

  \t\$('.page-group-main').click(function(){
    \ttotal = 0;
    \tvar checked = \$(this).is(':checked');
    \tif(checked == true){
    \t\t\$(this).parents('.page-group').find('input').each(function(){
    \t  \t\t\$(this).prop('checked', true);
    \t  \t\ttotal = total + 1;
    \t\t});
    \t\t\$(this).parents('.page-item').find('.page-select').html(total);
      \t}else{
    \t\t\$(this).parents('.page-group').find('input').each(function(){
    \t  \t\t\$(this).prop('checked', false);
    \t\t});
    \t\t\$(this).parents('.page-item').find('.page-select').html(0);
        }
  \t});

\t\$('.page-group-sub').click(function(){
\t\tvar all = true;
\t\t\$(this).parents('.page-group').find('.page-group-sub').each(function(){
\t\t\tvar checked = \$(this).is(':checked');
\t\t\tif(checked != true){
\t\t\t\tall = false;
\t\t\t}
\t\t});
\t\t\$(this).parents('.page-group').find('.page-group-main').each(function(){
\t\t\t\$(this).prop('checked', all);
\t\t});\t
\t});

\t\$('.permission').find('input').each(function(){
\t\tvar page_item = \$(this).val();
\t\tvar page_select = '';";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 223
            echo "\t\t\tpage_select = '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "';
\t\t\tif(page_item == page_select){
\t\t\t\t\$(this).prop('checked', true);
\t\t\t}";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "\t});\t
  \t
});\t
 
</script>";
    }

    public function getTemplateName()
    {
        return "pages/permission/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 228,  385 => 223,  381 => 222,  316 => 159,  312 => 158,  308 => 157,  304 => 156,  299 => 154,  295 => 153,  291 => 152,  287 => 151,  283 => 150,  280 => 149,  257 => 127,  251 => 125,  237 => 113,  234 => 112,  231 => 110,  224 => 107,  216 => 104,  211 => 103,  208 => 102,  204 => 101,  200 => 99,  195 => 98,  190 => 95,  186 => 94,  180 => 89,  178 => 88,  172 => 87,  169 => 85,  167 => 84,  165 => 83,  161 => 82,  158 => 80,  143 => 76,  137 => 75,  134 => 74,  131 => 72,  129 => 71,  127 => 70,  123 => 69,  113 => 61,  105 => 55,  97 => 50,  93 => 48,  87 => 44,  83 => 42,  77 => 37,  75 => 36,  59 => 22,  50 => 15,  40 => 6,  37 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* {% block head %}*/
/* {{ parent() }}*/
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
/* 				<div class="page-body permission">*/
/* 					<div class="row">*/
/* */
/* 						<div class="col-sm-12">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									{% if warning_exist is not empty %}*/
/* 									<div class="alert alert-warning background-warning">*/
/* 										<button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/* 											<i class="icofont icofont-close-line-circled text-white"></i>*/
/* 										</button>*/
/* 										<strong> </strong>*/
/* 										{{ warning_exist }}*/
/* 										<code>*/
/* 											{{ post.email }}*/
/* 										</code>*/
/* 									</div>*/
/* 									{% endif %}*/
/* 									<h4 class="sub-title">Role Setting</h4>*/
/* 									<form action="" method="post" autocomplete="on" id="form_role">*/
/* 										<input type="hidden" name="role_id" id="role_id" value="{{ role.role_id }}">*/
/* */
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Role Name <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<p>{{ role.role_name|capitalize }}</p>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Description </label>*/
/* 											<div class="col-sm-10">*/
/* 												{{ role.description }}*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div class="row   pt-2 ">*/
/* 										 */
/* 											<div class="col-md-12 pt-2">*/
/* 												<ul class="nav nav-tabs md-tabs" role="tablist">*/
/*     												{% for key,page in pages_all %}*/
/*     													{% set isactive = '' %}*/
/*     													{% if key == 1 %}*/
/*     													    {% set isactive = ' active' %}*/
/*     													{% endif %}*/
/*     													<li class="nav-item">*/
/*     														<input type="checkbox" {{ checked }} name="page[]" value="{{ page.id }}" class="hide" checked="checked">*/
/*     														<a class="nav-link  {{ isactive }}" data-id="tab-{{ page.id }}" data-toggle="tab" href="#tab-{{ page.id }}" role="tab" aria-expanded="true">{{ page.name|capitalize }}</a>*/
/*     														<div class="slide"></div>*/
/*     													</li>*/
/*     												{% endfor %}*/
/* 												</ul>*/
/* 												<div class="tab-content card-block">*/
/*     												{% for key,page in pages_all %}*/
/*     												    {% set isactive = '' %}*/
/*     													{% if key == 1 %}*/
/*     													    {% set isactive = ' active' %}*/
/*     													{% endif %}*/
/* 														<div class=" tab-pane {{ isactive }}" id="tab-{{ page.id }}" role="tabpanel" aria-expanded="true">*/
/* 															{% if page.sub is not empty %}*/
/* 																<div class="page-item">*/
/*         															<p class="  pt-2 pb-2">*/
/*                     													Accession Branch ( <span class="page-select">0</span> /&nbsp;<span class="page-all">0</span>) */
/*                     													<span class="check pointer">Check All</span> / <span class="uncheck pointer">Uncheck All</span>*/
/*                     												</p>*/
/*     															    {% for sub_page in page.sub %}*/
/*                 														<div class="row pb-3">*/
/*                 															<div class="col-md-12 page-group">*/
/*                 																<p>*/
/*                 																	<input class="page-group-main" type="checkbox" {{ checked }} name="page[]" value="{{ sub_page.id }}">&nbsp;*/
/*                         															{{ sub_page.alias|capitalize }}*/
/*                         														</p>*/
/*                 																{% for sub_sub_page in sub_page.sub %}*/
/*                     																<div class="col-md-3 float-left  pb-2 pl-5">*/
/*                     																	<input class="page-group-sub" type="checkbox" {{ checked }} name="page[]" value="{{ sub_sub_page.id }}">&nbsp;*/
/*                     																	{{ sub_sub_page.alias|capitalize }}*/
/*                     																</div>*/
/*                 																{% endfor %}*/
/*                 															</div>*/
/*                 														</div>*/
/*             														{% endfor %}*/
/*         														</div>*/
/*         													{% else %}*/
/*         														<p class="font-weight-blod">*/
/*         														What is&nbsp;{{ page.alias|lower }}?*/
/*         														</p>*/
/*         														<p class="m-0">*/
/*                                                                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. */
/*                                                                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, */
/*                                                                     when an unknown printer took a galley of type and scrambled it to make a type specimen book. */
/*                                                                     It has survived not only five centuries, but also the leap into electronic typesetting, */
/*                                                                     remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset */
/*                                                                     sheets containing Lorem Ipsum passages, and more recently with desktop publishing software */
/*                                                                     like Aldus PageMaker including versions of Lorem Ipsum.*/
/* 																</p>*/
/*     														{% endif %}*/
/* 														</div>*/
/*     												{% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div class="row pt-3 pb-3">*/
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
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* <script src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* <script>*/
/* $(function(){*/
/* 	var total = 0;*/
/* 	$('.nav-link').click(function(){*/
/* 		var id = $(this).data('id');*/
/*         total = 0;*/
/*         $('#'+id).find('.page-item').find('input').each(function(){*/
/*         	total = total + 1;*/
/*         });*/
/*         $('#'+id).find('.page-item').find('.page-all').html(total);*/
/* 	});*/
/* 	*/
/*     $('.check').click(function(){*/
/*     	total = 0;*/
/*     	$(this).parents('.page-item').find('input').each(function(){*/
/* 	  		$(this).prop('checked', true);*/
/* 	  		total = total + 1;*/
/* 		});*/
/* 		$(this).parents('.page-item').find('.page-select').html(total);*/
/* 	});*/
/* 	*/
/*   	$('.uncheck').click(function(){*/
/*   		$(this).parents('.page-item').find('input').each(function(){*/
/*       		$(this).prop('checked', false);*/
/*     	});*/
/*       	$(this).parents('.page-item').find('.page-select').html(0);*/
/*   	});*/
/* */
/*   	$('.page-group-main').click(function(){*/
/*     	total = 0;*/
/*     	var checked = $(this).is(':checked');*/
/*     	if(checked == true){*/
/*     		$(this).parents('.page-group').find('input').each(function(){*/
/*     	  		$(this).prop('checked', true);*/
/*     	  		total = total + 1;*/
/*     		});*/
/*     		$(this).parents('.page-item').find('.page-select').html(total);*/
/*       	}else{*/
/*     		$(this).parents('.page-group').find('input').each(function(){*/
/*     	  		$(this).prop('checked', false);*/
/*     		});*/
/*     		$(this).parents('.page-item').find('.page-select').html(0);*/
/*         }*/
/*   	});*/
/* */
/* 	$('.page-group-sub').click(function(){*/
/* 		var all = true;*/
/* 		$(this).parents('.page-group').find('.page-group-sub').each(function(){*/
/* 			var checked = $(this).is(':checked');*/
/* 			if(checked != true){*/
/* 				all = false;*/
/* 			}*/
/* 		});*/
/* 		$(this).parents('.page-group').find('.page-group-main').each(function(){*/
/* 			$(this).prop('checked', all);*/
/* 		});	*/
/* 	});*/
/* */
/* 	$('.permission').find('input').each(function(){*/
/* 		var page_item = $(this).val();*/
/* 		var page_select = '';*/
/* 		{% for page in pages %}*/
/* 			page_select = '{{ page.id }}';*/
/* 			if(page_item == page_select){*/
/* 				$(this).prop('checked', true);*/
/* 			}*/
/* 		{% endfor %}*/
/* 	});	*/
/*   	*/
/* });	*/
/*  */
/* </script>*/
/* {% endblock %}*/
