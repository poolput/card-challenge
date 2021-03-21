<?php

/* pages/heatmap/range/form.twig */
class __TwigTemplate_3df65798f2981adfb7c1817c91a771ad1e8cb3a6a4993c3a5fa925dcf5550b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/heatmap/range/form.twig", 1);
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
</style>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 19
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 26
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
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Heatmap Range Setting</h4>
\t\t\t\t\t\t\t\t\t<form id=\"heatmap_range_form\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\" style=\"text-align: center; font-size: 14px;\">Range Setitng</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Hour Setting</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 bg_green\" style=\"text-align: center; height: 30px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 bg_yellow\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 bg_red\" style=\"text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6 col-form-label\">Less than<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6 col-form-label\">More than<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t    \t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"min_value\" id=\"min_value\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "camera_group_name", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"min_value\" id=\"min_value\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "camera_group_name", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</br></br>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Day Setting</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6 col-form-label\">Less than<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-6 col-form-label\">More than<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t    \t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"min_value\" id=\"min_value\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "camera_group_name", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"min_value\" id=\"min_value\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "camera_group_name", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
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

    // line 119
    public function block_footer($context, array $blocks = array())
    {
        // line 120
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script>
      \$(document).ready(function(){
          \$('.min-message').hide();
          \$('.max-message').hide();

          \$('#branch').select2();

          function checkMinMax(min,max){
            if(min != '' && max != ''){
              if(min >= max){
                \$('#max_value').addClass('form-control-danger');
                \$('#min_value').addClass('form-control-danger');
                \$('.min-message').show();
                \$('.max-message').show();
              }else if(min < max){
                \$('#min_value').removeClass('form-control-danger');
                \$('#max_value').removeClass('form-control-danger');
                \$('.min-message').hide();
                \$('.max-message').hide();
              }
            }
          }

          function setInputFilter(textbox, inputFilter) {
            [\"input\", \"keydown\", \"keyup\", \"mousedown\", \"mouseup\", \"select\", \"contextmenu\", \"drop\"].forEach(function(event) {
              textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                  this.oldValue = this.value;
                  this.oldSelectionStart = this.selectionStart;
                  this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty(\"oldValue\")) {
                  this.value = this.oldValue;
                  this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                  this.value = \"\";
                }
              });
            });
          }

          setInputFilter(document.getElementById(\"min_value\"), function(value) {
                          return /^-?\\d*\$/.test(value); });

          setInputFilter(document.getElementById(\"max_value\"), function(value) {
                          return /^-?\\d*\$/.test(value); });

          \$('#min_value').keyup(function(){
            var min = \$('#min_value').val();
            var max = \$('#max_value').val();
            checkMinMax(min,max);
            \$('#min_between').val(min);
          });

          \$('#max_value').keyup(function(){
            var min = \$('#min_value').val();
            var max = \$('#max_value').val();
            checkMinMax(min,max);
            \$('#max_between').val(max);
          });

          \$('#branch').change(function(){
            var branch_id = \$('#branch').val();
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/heatmap/get-range-branch\",
                data: {branch_id: branch_id},
                cache: false,
                success: function(data){
                  var obj = JSON.parse(data);

                  \$('#min_value').val(obj.min_value);
                  \$('#max_value').val(obj.max_value);
                  \$('#min_between').val(obj.min_value);
                  \$('#max_between').val(obj.max_value);
                }
              });
            });

          \$('.btn-cancel').click(function() {
            window.history.back();
          });

          \$('.btn-save').click(function() {
            \$('.messages').hide();

            var group_chk = 0;
            var branch = \$(\"#branch\").val();
            var min_value = \$(\"#min_value\").val();
            var max_value = \$(\"#max_value\").val();

            if(branch == ''){
              \$('#branch').parent('div').find('.messages').show();
              group_chk = 1;
            }

            if(min_value != '' && max_value != ''){
              if(min_value >= max_value){
                \$('#min_value').parent('div').find('.min-message').show();
                \$('#max_value').parent('div').find('.max-message').show();
                group_chk = 1;
              }
            }

            if(min_value == ''){
              \$('#min_value').parent('div').find('.messages').show();
              group_chk = 1;
            }
            if(max_value == ''){
              \$('#max_value').parent('div').find('.messages').show();
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
        return "pages/heatmap/range/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 196,  214 => 130,  210 => 129,  206 => 128,  202 => 127,  197 => 125,  193 => 124,  189 => 123,  185 => 122,  181 => 121,  177 => 120,  174 => 119,  153 => 100,  147 => 97,  126 => 79,  120 => 76,  67 => 26,  58 => 19,  48 => 10,  45 => 9,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/select2/css/select2.min.css">*/
/* <style>*/
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
/* 						<div class="col-sm-12">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<h4 class="sub-title">Heatmap Range Setting</h4>*/
/* 									<form id="heatmap_range_form">*/
/* 										<div class="row">*/
/* 											<div class="col-sm-12">*/
/* 												<div class="row">*/
/* 													<div class="col-sm-5">*/
/* */
/* 													</div>*/
/* 													<div class="col-sm-7">*/
/* 														<h4 class="sub-title" style="text-align: center; font-size: 14px;">Range Setitng</h4>*/
/* 														<h4 class="sub-title">Hour Setting</h4>*/
/* 														<div class="row">*/
/* 															<div class="col-sm-12">*/
/* 																<div class="row">*/
/* 																	<div class="col-sm-4 bg_green" style="text-align: center; height: 30px;">*/
/* 																		<span></span>*/
/* 																	</div>*/
/* 																	<div class="col-sm-4 bg_yellow" style="text-align: center;">*/
/* 																		<span></span>*/
/* 																	</div>*/
/* 																	<div class="col-sm-4 bg_red" style="text-align: center;">*/
/* 																		<span></span>*/
/* 																	</div>*/
/* 																</div>*/
/* 															</div>*/
/* 														</div>*/
/* 														<div class="row">*/
/* 															<div class="col-sm-6">*/
/* 																<label class="col-sm-6 col-form-label">Less than<span class="text-danger error">*</span></label>*/
/* 															</div>*/
/* 															<div class="col-sm-6">*/
/* 																<label class="col-sm-6 col-form-label">More than<span class="text-danger error">*</span></label>*/
/* 															</div>*/
/* 														</div>*/
/* */
/* 														<div class="row">*/
/* 															<div class="col-sm-6">*/
/* 					    										<input type="text" class="form-control" name="min_value" id="min_value" value="{{ group.camera_group_name }}">*/
/* 															</div>*/
/* 															<div class="col-sm-6">*/
/* 																<input type="text" class="form-control" name="min_value" id="min_value" value="{{ group.camera_group_name }}">*/
/* 															</div>*/
/* 														</div>*/
/* */
/* 														</br></br>*/
/* */
/* 														<h4 class="sub-title">Day Setting</h4>*/
/* 														<div class="row">*/
/* 															<div class="col-sm-6">*/
/* 																<label class="col-sm-6 col-form-label">Less than<span class="text-danger error">*</span></label>*/
/* 															</div>*/
/* 															<div class="col-sm-6">*/
/* 																<label class="col-sm-6 col-form-label">More than<span class="text-danger error">*</span></label>*/
/* 															</div>*/
/* 														</div>*/
/* */
/* 														<div class="row">*/
/* 															<div class="col-sm-6">*/
/* 					    										<input type="text" class="form-control" name="min_value" id="min_value" value="{{ group.camera_group_name }}">*/
/* 															</div>*/
/* 															<div class="col-sm-6">*/
/* 																<input type="text" class="form-control" name="min_value" id="min_value" value="{{ group.camera_group_name }}">*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
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
/*           $('.min-message').hide();*/
/*           $('.max-message').hide();*/
/* */
/*           $('#branch').select2();*/
/* */
/*           function checkMinMax(min,max){*/
/*             if(min != '' && max != ''){*/
/*               if(min >= max){*/
/*                 $('#max_value').addClass('form-control-danger');*/
/*                 $('#min_value').addClass('form-control-danger');*/
/*                 $('.min-message').show();*/
/*                 $('.max-message').show();*/
/*               }else if(min < max){*/
/*                 $('#min_value').removeClass('form-control-danger');*/
/*                 $('#max_value').removeClass('form-control-danger');*/
/*                 $('.min-message').hide();*/
/*                 $('.max-message').hide();*/
/*               }*/
/*             }*/
/*           }*/
/* */
/*           function setInputFilter(textbox, inputFilter) {*/
/*             ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {*/
/*               textbox.addEventListener(event, function() {*/
/*                 if (inputFilter(this.value)) {*/
/*                   this.oldValue = this.value;*/
/*                   this.oldSelectionStart = this.selectionStart;*/
/*                   this.oldSelectionEnd = this.selectionEnd;*/
/*                 } else if (this.hasOwnProperty("oldValue")) {*/
/*                   this.value = this.oldValue;*/
/*                   this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);*/
/*                 } else {*/
/*                   this.value = "";*/
/*                 }*/
/*               });*/
/*             });*/
/*           }*/
/* */
/*           setInputFilter(document.getElementById("min_value"), function(value) {*/
/*                           return /^-?\d*$/.test(value); });*/
/* */
/*           setInputFilter(document.getElementById("max_value"), function(value) {*/
/*                           return /^-?\d*$/.test(value); });*/
/* */
/*           $('#min_value').keyup(function(){*/
/*             var min = $('#min_value').val();*/
/*             var max = $('#max_value').val();*/
/*             checkMinMax(min,max);*/
/*             $('#min_between').val(min);*/
/*           });*/
/* */
/*           $('#max_value').keyup(function(){*/
/*             var min = $('#min_value').val();*/
/*             var max = $('#max_value').val();*/
/*             checkMinMax(min,max);*/
/*             $('#max_between').val(max);*/
/*           });*/
/* */
/*           $('#branch').change(function(){*/
/*             var branch_id = $('#branch').val();*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: "{{ base_url }}/heatmap/get-range-branch",*/
/*                 data: {branch_id: branch_id},*/
/*                 cache: false,*/
/*                 success: function(data){*/
/*                   var obj = JSON.parse(data);*/
/* */
/*                   $('#min_value').val(obj.min_value);*/
/*                   $('#max_value').val(obj.max_value);*/
/*                   $('#min_between').val(obj.min_value);*/
/*                   $('#max_between').val(obj.max_value);*/
/*                 }*/
/*               });*/
/*             });*/
/* */
/*           $('.btn-cancel').click(function() {*/
/*             window.history.back();*/
/*           });*/
/* */
/*           $('.btn-save').click(function() {*/
/*             $('.messages').hide();*/
/* */
/*             var group_chk = 0;*/
/*             var branch = $("#branch").val();*/
/*             var min_value = $("#min_value").val();*/
/*             var max_value = $("#max_value").val();*/
/* */
/*             if(branch == ''){*/
/*               $('#branch').parent('div').find('.messages').show();*/
/*               group_chk = 1;*/
/*             }*/
/* */
/*             if(min_value != '' && max_value != ''){*/
/*               if(min_value >= max_value){*/
/*                 $('#min_value').parent('div').find('.min-message').show();*/
/*                 $('#max_value').parent('div').find('.max-message').show();*/
/*                 group_chk = 1;*/
/*               }*/
/*             }*/
/* */
/*             if(min_value == ''){*/
/*               $('#min_value').parent('div').find('.messages').show();*/
/*               group_chk = 1;*/
/*             }*/
/*             if(max_value == ''){*/
/*               $('#max_value').parent('div').find('.messages').show();*/
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
