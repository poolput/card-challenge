<?php

/* pages/role/form.twig */
class __TwigTemplate_be589b161ce2e3c6b9c37bd06c17678e7272d221da3cac58a98c97cd402fc75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/role/form.twig", 1);
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
\t\t\t\t<div class=\"page-body\">
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
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"role_name\" id=\"role_name\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "role_name", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p> </span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Description </label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"description\" id=\"description\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : null), "description", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p> </span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row list-item pt-2 \">
\t\t\t\t\t\t\t\t\t\t\t<div class=\" col-md-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"border-top pt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAccession Branch ( <span class=\"branch-select\">0</span> /&nbsp;";
        // line 73
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["branchs"]) ? $context["branchs"] : null)), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t) <span class=\"check pointer\">Check All</span> / <span class=\"uncheck pointer\">Uncheck All</span>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 pt-2\">";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 79
            $context["checked"] = "";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["role_branchs"]) ? $context["role_branchs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["role_branch"]) {
                // line 81
                if (($this->getAttribute($context["role_branch"], "branch_id", array()) == $this->getAttribute($context["branch"], "branch_id", array()))) {
                    // line 82
                    $context["checked"] = " checked=\"checked\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role_branch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 float-left\">
    \t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["checked"]) ? $context["checked"] : null), "html", null, true);
            echo " name=\"branch[]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_id", array()), "html", null, true);
            echo "\" class=\"branch\"> &nbsp;";
            // line 87
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["branch"], "branch_name", array())), "html", null, true);
            echo "
    \t\t\t\t\t\t\t\t\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
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

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script>
\$(function(){
      var total = 0;
      \$('.branch').each(function(){
        \tvar checked = \$(this).is(':checked');
        \tif(checked == true){
        \t\ttotal = total + 1;
          \t}
      });
      \$('.branch-select').html(total);
    \t
      \$('.branch').click(function(){
    \t  total = 0;
    \t  \t\$('.branch').each(function(){
    \t  \t\tvar checked = \$(this).is(':checked');
    \t  \t\tif(checked == true){
    \t  \t\t\ttotal = total + 1;
    \t\t  \t}
    \t\t});
    \t\t\$('.branch-select').html(total);
      });
      \$('.check').click(function(){
    \t  \t\$('.branch').each(function(){
    \t  \t\t\$(this).prop('checked', true);
    \t\t});
    \t\t\$('.branch-select').html(";
        // line 148
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["branchs"]) ? $context["branchs"] : null)), "html", null, true);
        echo ");
    \t});
      \$('.uncheck').click(function(){
          \t\$('.branch').each(function(){
          \t\t\$(this).prop('checked', false);
        \t});
          \t\$('.branch-select').html(0);
      });
  \t\$('.btn-cancel').click(function() {
\t\twindow.history.back();
\t\treturn false;
\t});
\t\$('.btn-save').click(function() {
\t\treturn validate();
\t});
});\t

function validate(){
  \t\$('.messages').hide();

\tvar role_name = \$('#role_name').val();
\tvar valid = 0;
\t
\tif(!role_name){
\t\t\$('#role_name').parent('div').find('.messages').show();
\t\tvalid = 1;
\t}
\tif (valid != 1) {
\t\treturn true;
\t} else {
\t\treturn false;
\t}
}
</script>";
    }

    public function getTemplateName()
    {
        return "pages/role/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 148,  232 => 121,  228 => 120,  224 => 119,  220 => 118,  215 => 116,  211 => 115,  207 => 114,  203 => 113,  199 => 112,  196 => 111,  174 => 90,  166 => 87,  161 => 86,  158 => 85,  151 => 82,  149 => 81,  145 => 80,  143 => 79,  139 => 78,  132 => 73,  121 => 64,  118 => 63,  108 => 56,  105 => 55,  97 => 50,  93 => 48,  87 => 44,  83 => 42,  77 => 37,  75 => 36,  59 => 22,  50 => 15,  40 => 6,  37 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
/* 				<div class="page-body">*/
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
/* 												<input type="text" class="form-control" name="role_name" id="role_name" value="{{ role.role_name }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p> </span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Description </label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="description" id="description" value="{{ role.description }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p> </span>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div class="row list-item pt-2 ">*/
/* 											<div class=" col-md-12 ">*/
/* 												<p class="border-top pt-2">*/
/* 													Accession Branch ( <span class="branch-select">0</span> /&nbsp;*/
/* 													{{ branchs|length }}*/
/* 													) <span class="check pointer">Check All</span> / <span class="uncheck pointer">Uncheck All</span>*/
/* 												</p>*/
/* 											</div>*/
/* 											<div class="col-md-12 pt-2">*/
/* 												{% for branch in branchs %}*/
/* 													{% set checked = '' %}*/
/*                                                     {% for role_branch in role_branchs %}*/
/*     													{% if role_branch.branch_id == branch.branch_id %}*/
/*     														{% set checked = ' checked="checked"' %}*/
/*     													{% endif %}*/
/*     												{% endfor %}*/
/*     												<div class="col-md-3 float-left">*/
/*     													<input type="checkbox" {{ checked }} name="branch[]" value="{{ branch.branch_id }}" class="branch"> &nbsp;*/
/*     													{{ branch.branch_name|capitalize }}*/
/*     												</div>*/
/* 												{% endfor %}*/
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
/*       var total = 0;*/
/*       $('.branch').each(function(){*/
/*         	var checked = $(this).is(':checked');*/
/*         	if(checked == true){*/
/*         		total = total + 1;*/
/*           	}*/
/*       });*/
/*       $('.branch-select').html(total);*/
/*     	*/
/*       $('.branch').click(function(){*/
/*     	  total = 0;*/
/*     	  	$('.branch').each(function(){*/
/*     	  		var checked = $(this).is(':checked');*/
/*     	  		if(checked == true){*/
/*     	  			total = total + 1;*/
/*     		  	}*/
/*     		});*/
/*     		$('.branch-select').html(total);*/
/*       });*/
/*       $('.check').click(function(){*/
/*     	  	$('.branch').each(function(){*/
/*     	  		$(this).prop('checked', true);*/
/*     		});*/
/*     		$('.branch-select').html({{ branchs|length }});*/
/*     	});*/
/*       $('.uncheck').click(function(){*/
/*           	$('.branch').each(function(){*/
/*           		$(this).prop('checked', false);*/
/*         	});*/
/*           	$('.branch-select').html(0);*/
/*       });*/
/*   	$('.btn-cancel').click(function() {*/
/* 		window.history.back();*/
/* 		return false;*/
/* 	});*/
/* 	$('.btn-save').click(function() {*/
/* 		return validate();*/
/* 	});*/
/* });	*/
/* */
/* function validate(){*/
/*   	$('.messages').hide();*/
/* */
/* 	var role_name = $('#role_name').val();*/
/* 	var valid = 0;*/
/* 	*/
/* 	if(!role_name){*/
/* 		$('#role_name').parent('div').find('.messages').show();*/
/* 		valid = 1;*/
/* 	}*/
/* 	if (valid != 1) {*/
/* 		return true;*/
/* 	} else {*/
/* 		return false;*/
/* 	}*/
/* }*/
/* </script>*/
/* {% endblock %}*/
