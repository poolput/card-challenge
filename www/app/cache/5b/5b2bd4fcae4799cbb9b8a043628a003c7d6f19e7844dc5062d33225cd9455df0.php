<?php

/* pages/heatmap/range/form.twig */
class __TwigTemplate_4d18be2a9bb18bdb8bd9988262e2c68e99c771d70a3228f0bd9f04ff057164cc extends Twig_Template
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
        echo "/theme/bower_components/select2/css/select2.min.css\">";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 18
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 25
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
\t\t\t\t\t\t\t\t\t<!--<div class=\"alert alert-warning background-warning\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-close-line-circled text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<strong>Warning!</strong> Add Class
\t\t\t\t\t\t\t\t\t\t<code>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(0 => "email"), "method"), "html", null, true);
        echo "</code>
\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Heatmap Range Setting</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"on\" id=\"form_range_setting\" enctype=\"multipart/form-data\">
                    <div class=\"form-group row\">
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Branch<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
                        <select class=\"form-control\" name=\"branch\" id=\"branch\">
                            <option value=\"\">---Please Select Branch---</option>";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 54
            echo "                              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </select>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Less than<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
                        <input type=\"text\" class=\"form-control\" name=\"min_value\" id=\"min_value\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "camera_group_name", array()), "html", null, true);
        echo "\">
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
                        <span class=\"min-message\"><p class=\"text-danger error\">Please enter value more than below this input</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <label class=\"col-sm-2 col-form-label\">Show with Color</label>
                      <div class=\"col-sm-1\">
                        <input type=\"text\" class=\"form-control bg_green context_cursor\" readonly>
                      </div>
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
                    <div class=\"form-group row\">
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">More than<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5\">
                        <input type=\"text\" class=\"form-control\" name=\"max_value\" id=\"max_value\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "camera_group_name", array()), "html", null, true);
        echo "\">
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
                        <span class=\"max-message\"><p class=\"text-danger error\">Please enter value more than above this input</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <label class=\"col-sm-2 col-form-label\">Show with Color</label>
                      <div class=\"col-sm-1\">
                        <input type=\"text\" class=\"form-control bg_red context_cursor\" readonly>
                      </div>
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
                    <div class=\"form-group row\">
                      <div class=\"col-sm-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Between</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
                        <input type=\"text\" class=\"form-control context_cursor\" name=\"min_between\" id=\"min_between\" readonly>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <div class=\"col-sm-1\">
                        <label class=\"col-sm-1 col-form-label\">-</label>
                      </div>
                      <div class=\"col-sm-2\">
                        <input type=\"text\" class=\"form-control context_cursor\" name=\"max_between\" id=\"max_between\" readonly>
\t\t\t\t\t\t\t\t\t\t\t</div>
                      <label class=\"col-sm-2 col-form-label\">Show with Color</label>
                      <div class=\"col-sm-1\">
                        <input type=\"text\" class=\"form-control bg_yellow context_cursor\" readonly>
                      </div>
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

    // line 129
    public function block_footer($context, array $blocks = array())
    {
        // line 130
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 140
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
        // line 206
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
        return array (  308 => 206,  239 => 140,  235 => 139,  231 => 138,  227 => 137,  222 => 135,  218 => 134,  214 => 133,  210 => 132,  206 => 131,  202 => 130,  199 => 129,  151 => 83,  147 => 81,  130 => 67,  126 => 65,  115 => 57,  112 => 56,  102 => 54,  98 => 53,  86 => 43,  65 => 25,  56 => 18,  46 => 9,  43 => 8,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/select2/css/select2.min.css">*/
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
/* 									<h4 class="sub-title">Heatmap Range Setting</h4>*/
/* 									<form action="" method="post" autocomplete="on" id="form_range_setting" enctype="multipart/form-data">*/
/*                     <div class="form-group row">*/
/*                       <div class="col-sm-1"></div>*/
/* 											<label class="col-sm-2 col-form-label">Branch<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-8">*/
/*                         <select class="form-control" name="branch" id="branch">*/
/*                             <option value="">---Please Select Branch---</option>*/
/*                           {% for branch in branchs %}*/
/*                               <option value="{{ branch.branch_id }}">{{branch.branch_name}}</option>*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/* 											</div>*/
/*                       <div class="col-sm-1"></div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/*                       <div class="col-sm-1"></div>*/
/* 											<label class="col-sm-2 col-form-label">Less than<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-5">*/
/*                         <input type="text" class="form-control" name="min_value" id="min_value" value="{{ group.camera_group_name }}">*/
/*                         <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/*                         <span class="min-message"><p class="text-danger error">Please enter value more than below this input</p></span>*/
/* 											</div>*/
/*                       <label class="col-sm-2 col-form-label">Show with Color</label>*/
/*                       <div class="col-sm-1">*/
/*                         <input type="text" class="form-control bg_green context_cursor" readonly>*/
/*                       </div>*/
/*                       <div class="col-sm-1"></div>*/
/* 										</div>*/
/*                     <div class="form-group row">*/
/*                       <div class="col-sm-1"></div>*/
/* 											<label class="col-sm-2 col-form-label">More than<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-5">*/
/*                         <input type="text" class="form-control" name="max_value" id="max_value" value="{{ group.camera_group_name }}">*/
/*                         <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/*                         <span class="max-message"><p class="text-danger error">Please enter value more than above this input</p></span>*/
/* 											</div>*/
/*                       <label class="col-sm-2 col-form-label">Show with Color</label>*/
/*                       <div class="col-sm-1">*/
/*                         <input type="text" class="form-control bg_red context_cursor" readonly>*/
/*                       </div>*/
/*                       <div class="col-sm-1"></div>*/
/* 										</div>*/
/*                     <div class="form-group row">*/
/*                       <div class="col-sm-1"></div>*/
/* 											<label class="col-sm-2 col-form-label">Between</label>*/
/* 											<div class="col-sm-2">*/
/*                         <input type="text" class="form-control context_cursor" name="min_between" id="min_between" readonly>*/
/* 											</div>*/
/*                       <div class="col-sm-1">*/
/*                         <label class="col-sm-1 col-form-label">-</label>*/
/*                       </div>*/
/*                       <div class="col-sm-2">*/
/*                         <input type="text" class="form-control context_cursor" name="max_between" id="max_between" readonly>*/
/* 											</div>*/
/*                       <label class="col-sm-2 col-form-label">Show with Color</label>*/
/*                       <div class="col-sm-1">*/
/*                         <input type="text" class="form-control bg_yellow context_cursor" readonly>*/
/*                       </div>*/
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
/*                     */
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
