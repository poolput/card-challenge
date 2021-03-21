<?php

/* pages/configuration/form.twig */
class __TwigTemplate_9e339edffee47b73be7470679131f554557402abca9f873e3d9fc8c6c9fdc4fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/configuration/form.twig", 1);
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
        echo "/theme/bower_components/select2/css/select2.min.css\">
<style>
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    background-color: #fff !important;
  }
  .select2-container .select2-selection--single {
    height: auto !important;
  }
</style>";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 25
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["title_body"]) ? $context["title_body"] : null), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["company_id"]) ? $context["company_id"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">";
        // line 43
        if (((isset($context["is_root"]) ? $context["is_root"] : null) == 1)) {
            // line 44
            echo "              <div class=\"col-sm-12\">
                <div class=\"card\">
                  <div class=\"card-block\">
                    <h4 class=\"sub-title\">Company Setting (Root Only)</h4>
                    <form action=\"\" method=\"post\" autocomplete=\"on\" id=\"configuration\" enctype=\"multipart/form-data\">
                      <div class=\"form-group row\">
                        <div class=\"col-sm-1\"></div>
  \t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Company</label>
  \t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
                          <select class=\"form-control\" name=\"company_list\" id=\"company_list\">
                            <option value=\"\">---Please Select Company---</option>";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                // line 56
                if (($this->getAttribute($context["company"], "company_id", array()) == $this->getAttribute((isset($context["company_data"]) ? $context["company_data"] : null), "company_id", array()))) {
                    // line 57
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "company_id", array()), "html", null, true);
                    echo "\" selected>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "company_name", array()), "html", null, true);
                    echo "</option>";
                } else {
                    // line 59
                    echo "                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "company_id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "company_name", array()), "html", null, true);
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                          </select>
                          <span class=\"messages\"><p class=\"text-danger error\">";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
            echo "</p></span>
  \t\t\t\t\t\t\t\t\t\t\t</div>
                        <div class=\"col-sm-1\"></div>
  \t\t\t\t\t\t\t\t\t\t</div>
                    </form>
                  </div>
                </div>
              </div>";
        }
        // line 72
        echo "
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<!--<div class=\"alert alert-warning background-warning\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-close-line-circled text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<strong>Warning!</strong> Add Class
\t\t\t\t\t\t\t\t\t\t<code>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(0 => "email"), "method"), "html", null, true);
        echo "</code>
\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Chart Setting</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"on\" id=\"form_chart_setting\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Date Format<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
                        <select class=\"form-control\" name=\"date_format\" id=\"date_format\">
                          <option value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["date_format"]) ? $context["date_format"] : null), "html", null, true);
        echo "\">---Please Select Date Format---</option>";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["date_formats"]) ? $context["date_formats"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["date_format"]) {
            // line 92
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), 1, array()) == $this->getAttribute($context["loop"], "index0", array()))) {
                // line 93
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["date_format"], "format", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["date_format"], "convertFormat", array()), "html", null, true);
                echo "</option>";
            } else {
                // line 95
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["date_format"], "format", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["date_format"], "convertFormat", array()), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date_format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                        </select>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
                    <div class=\"form-group row\">
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Time Format<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
                        <select class=\"form-control\" name=\"time_format\" id=\"time_format\">
                            <option value=\"\">---Please Select Time Format---</option>";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["time_formats"]) ? $context["time_formats"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["time_format"]) {
            // line 111
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), 5, array()) == $this->getAttribute($context["loop"], "index0", array()))) {
                // line 112
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["time_format"], "time", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["time_format"], "convertTime", array()), "html", null, true);
                echo "</option>";
            } else {
                // line 114
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["time_format"], "time", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["time_format"], "convertTime", array()), "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time_format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                        </select>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
                    <div class=\"form-group row\">
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Week Start<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
                        <select class=\"form-control\" name=\"week_start\" id=\"week_start\">
                            <option value=\"\">---Please Select Week Start---</option>";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weeks"]) ? $context["weeks"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 129
            if (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), 7, array()) == $this->getAttribute($context["loop"], "index0", array()))) {
                // line 130
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $context["week"], "html", null, true);
                echo "</option>";
            } else {
                // line 132
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["week"], "html", null, true);
                echo "</option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                        </select>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary btn-cancel\">Cancel</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-secondary btn-save\">&nbsp; Save &nbsp;</button>
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

    // line 158
    public function block_footer($context, array $blocks = array())
    {
        // line 159
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script>
      \$(document).ready(function(){

          \$('#company_list').change(function(){
            var company_id = \$('#company_list').val();

            \$.ajax({
              type: \"POST\",
              url: \"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/configuration/changeCompany\",
              data: {company_id: company_id},
              cache: false,
              success: function(data){
                var obj = JSON.parse(data);

                window.location.reload(false);
              }
            });
          });

          \$('.btn-cancel').click(function() {
            window.history.back();
          });

          \$('.btn-save').click(function() {
            \$('.messages').hide();

            var group_chk = 0;
            var date_format = \$(\"#date_format\").val();
            var time_format = \$(\"#time_format\").val();
            var week_start = \$(\"#week_start\").val();

            if(date_format == ''){
              \$('#date_format').parent('div').find('.messages').show();
              group_chk = 1;
            }
            if(time_format == ''){
              \$('#time_format').parent('div').find('.messages').show();
              group_chk = 1;
            }
            if(week_start == ''){
              \$('#week_start').parent('div').find('.messages').show();
              group_chk = 1;
            }

            if(group_chk == 1){
              return false;
            }
          });

      });
</script>";
    }

    public function getTemplateName()
    {
        return "pages/configuration/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 179,  396 => 169,  392 => 168,  388 => 167,  384 => 166,  379 => 164,  375 => 163,  371 => 162,  367 => 161,  363 => 160,  359 => 159,  356 => 158,  332 => 136,  329 => 135,  310 => 132,  303 => 130,  301 => 129,  284 => 128,  272 => 118,  269 => 117,  250 => 114,  243 => 112,  241 => 111,  224 => 110,  212 => 100,  209 => 99,  190 => 95,  183 => 93,  181 => 92,  164 => 91,  161 => 90,  149 => 81,  138 => 72,  127 => 63,  124 => 62,  113 => 59,  106 => 57,  104 => 56,  100 => 55,  88 => 44,  86 => 43,  73 => 32,  64 => 25,  54 => 16,  51 => 15,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/select2/css/select2.min.css">*/
/* <style>*/
/*   .select2-container--default .select2-selection--single .select2-selection__rendered {*/
/*     background-color: #fff !important;*/
/*   }*/
/*   .select2-container .select2-selection--single {*/
/*     height: auto !important;*/
/*   }*/
/* </style>*/
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
/* 										{{ title_body }} {{ company_id }}*/
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
/*             {% if is_root == 1 %}*/
/*               <div class="col-sm-12">*/
/*                 <div class="card">*/
/*                   <div class="card-block">*/
/*                     <h4 class="sub-title">Company Setting (Root Only)</h4>*/
/*                     <form action="" method="post" autocomplete="on" id="configuration" enctype="multipart/form-data">*/
/*                       <div class="form-group row">*/
/*                         <div class="col-sm-1"></div>*/
/*   											<label class="col-sm-2 col-form-label">Company</label>*/
/*   											<div class="col-sm-8">*/
/*                           <select class="form-control" name="company_list" id="company_list">*/
/*                             <option value="">---Please Select Company---</option>*/
/*                             {% for company in companies %}*/
/*                               {% if company.company_id ==  company_data.company_id %}*/
/*                                 <option value="{{ company.company_id }}" selected>{{ company.company_name }}</option>*/
/*                               {% else %}*/
/*                                 <option value="{{ company.company_id }}">{{ company.company_name }}</option>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/*   											</div>*/
/*                         <div class="col-sm-1"></div>*/
/*   										</div>*/
/*                     </form>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/* */
/* 						<div class="col-sm-12">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<!--<div class="alert alert-warning background-warning">*/
/* 										<button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/* 											<i class="icofont icofont-close-line-circled text-white"></i>*/
/* 										</button>*/
/* 										<strong>Warning!</strong> Add Class*/
/* 										<code>{{ app.request('email')}}</code>*/
/* 									</div>-->*/
/* 									<h4 class="sub-title">Chart Setting</h4>*/
/* 									<form action="" method="post" autocomplete="on" id="form_chart_setting" enctype="multipart/form-data">*/
/* 										<div class="form-group row">*/
/*                       <div class="col-sm-1"></div>*/
/* 											<label class="col-sm-2 col-form-label">Date Format<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-8">*/
/*                         <select class="form-control" name="date_format" id="date_format">*/
/*                           <option value="{{ date_format }}">---Please Select Date Format---</option>*/
/*                             {% for date_format in date_formats %}*/
/*                               {% if setting.1 == loop.index0 %}*/
/*                                 <option value="{{ date_format.format }}" selected>{{ date_format.convertFormat }}</option>*/
/*                               {% else %}*/
/*                                 <option value="{{ date_format.format }}">{{ date_format.convertFormat }}</option>*/
/*                               {% endif %}*/
/* */
/*                             {% endfor %}*/
/*                         </select>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/* 											</div>*/
/*                       <div class="col-sm-1"></div>*/
/* 										</div>*/
/*                     <div class="form-group row">*/
/*                       <div class="col-sm-1"></div>*/
/* 											<label class="col-sm-2 col-form-label">Time Format<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-8">*/
/*                         <select class="form-control" name="time_format" id="time_format">*/
/*                             <option value="">---Please Select Time Format---</option>*/
/*                             {% for time_format in time_formats %}*/
/*                               {% if setting.5 == loop.index0 %}*/
/*                                 <option value="{{ time_format.time }}" selected>{{ time_format.convertTime }}</option>*/
/*                               {% else %}*/
/*                                 <option value="{{ time_format.time }}">{{ time_format.convertTime }}</option>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/* 											</div>*/
/*                       <div class="col-sm-1"></div>*/
/* 										</div>*/
/*                     <div class="form-group row">*/
/*                       <div class="col-sm-1"></div>*/
/* 											<label class="col-sm-2 col-form-label">Week Start<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-8">*/
/*                         <select class="form-control" name="week_start" id="week_start">*/
/*                             <option value="">---Please Select Week Start---</option>*/
/*                             {% for week in weeks %}*/
/*                               {% if setting.7 == loop.index0 %}*/
/*                                 <option value="{{ loop.index }}" selected>{{ week }}</option>*/
/*                               {% else %}*/
/*                                 <option value="{{ loop.index }}">{{ week }}</option>*/
/*                               {% endif %}*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/* 											</div>*/
/*                       <div class="col-sm-1"></div>*/
/* 										</div>*/
/* 										<div class="row">*/
/* 											<div class="col-md-12 text-right">*/
/* 												<button type="button" class="btn btn-outline-secondary btn-cancel">Cancel</button>*/
/* 												<button type="submit" class="btn btn-secondary btn-save">&nbsp; Save &nbsp;</button>*/
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
/* <script src="{{ base_url }}/theme/bower_components/select2/js/select2.full.min.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* <script>*/
/*       $(document).ready(function(){*/
/* */
/*           $('#company_list').change(function(){*/
/*             var company_id = $('#company_list').val();*/
/* */
/*             $.ajax({*/
/*               type: "POST",*/
/*               url: "{{ base_url }}/configuration/changeCompany",*/
/*               data: {company_id: company_id},*/
/*               cache: false,*/
/*               success: function(data){*/
/*                 var obj = JSON.parse(data);*/
/* */
/*                 window.location.reload(false);*/
/*               }*/
/*             });*/
/*           });*/
/* */
/*           $('.btn-cancel').click(function() {*/
/*             window.history.back();*/
/*           });*/
/* */
/*           $('.btn-save').click(function() {*/
/*             $('.messages').hide();*/
/* */
/*             var group_chk = 0;*/
/*             var date_format = $("#date_format").val();*/
/*             var time_format = $("#time_format").val();*/
/*             var week_start = $("#week_start").val();*/
/* */
/*             if(date_format == ''){*/
/*               $('#date_format').parent('div').find('.messages').show();*/
/*               group_chk = 1;*/
/*             }*/
/*             if(time_format == ''){*/
/*               $('#time_format').parent('div').find('.messages').show();*/
/*               group_chk = 1;*/
/*             }*/
/*             if(week_start == ''){*/
/*               $('#week_start').parent('div').find('.messages').show();*/
/*               group_chk = 1;*/
/*             }*/
/* */
/*             if(group_chk == 1){*/
/*               return false;*/
/*             }*/
/*           });*/
/* */
/*       });*/
/* </script>*/
/* {% endblock %}*/
/* */
