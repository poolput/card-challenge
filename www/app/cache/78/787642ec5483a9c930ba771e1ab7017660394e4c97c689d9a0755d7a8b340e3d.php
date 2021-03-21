<?php

/* pages/company/branchs/form.twig */
class __TwigTemplate_3a236354b33a423f36173db4c3918378a927caf117471655ca8a3fed5a8603e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/company/branchs/form.twig", 1);
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
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Company Profile Inputs</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"off\" id=\"form_branch\" >
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"branch_id\" id=\"branch_id\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "branch_id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Branch Name<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"branch_name\" id=\"branch_name\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "branch_name", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Code</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"branch_code\" id=\"branch_code\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "branch_code", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Company<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"company_id\" id=\"company_id\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">---select---</option>";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 72
            $context["selected"] = "";
            // line 73
            if (($this->getAttribute($context["company"], "company_id", array()) == $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "company_id", array()))) {
                // line 74
                $context["selected"] = " selected=\"selected\" ";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "company_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "company_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Country<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"country_code\" id=\"country_code\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">---select---</option>";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 89
            $context["selected"] = "";
            // line 90
            if (($this->getAttribute($context["country"], "country_code", array()) == $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "country_code", array()))) {
                // line 91
                $context["selected"] = " selected=\"selected\" ";
            }
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Phone<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"branch_phone\" id=\"branch_phone\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "branch_phone", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                    \t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Province<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"province_id\" id=\"province_id\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">---select---</option>";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provinces"]) ? $context["provinces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 114
            $context["selected"] = "";
            // line 115
            if (($this->getAttribute($context["province"], "province_id", array()) == $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "province_id", array()))) {
                // line 116
                $context["selected"] = " selected=\"selected\" ";
            }
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_name_eng", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Module</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-checkbox-group border-checkbox-group-primary col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"border-checkbox\" name=\"module_heatmap\" id=\"module_heatmap\" value=\"1\">";
        // line 130
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"border-checkbox-label\" for=\"module_heatmap\">Heatmap</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>";
        // line 137
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Remark</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" name=\"branch_remark\" id=\"branch_remark\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "remark", array()), "html", null, true);
        echo "\"></textarea> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 142
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
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

    // line 163
    public function block_footer($context, array $blocks = array())
    {
        // line 164
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
<!--<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/select2-custom.js\"></script>-->


<script>

\tif(";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["branch"]) ? $context["branch"] : null), "module_heatmap", array()), "html", null, true);
        echo " == 1){
\t\t\$( \"#module_heatmap\" ).prop( \"checked\", true );
\t}else{
\t\t\$( \"#module_heatmap\" ).prop( \"checked\", false );
\t}

     function validate(){
        \t\$('.messages').hide();
    \t\tvar branch_name = \$('#branch_name').val();
\t\t\tvar branch_code = \$('#branch_code').val();
    \t\tvar company_id = \$('#company_id').val();
    \t\tvar country_code = \$('#country_code').val();
    \t\tvar branch_phone = \$('#branch_phone').val();
    \t\tvar province_id = \$('#province_id').val();
\t\t\tvar heatmap = \$('#module_heatmap').val();
\t\t\tvar remark = \$('#remark').val();
    \t\tvar valid = 0;
\t\t\tif(!branch_name){
\t\t\t\t\$('#branch_name').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!company_id){
\t\t\t\t\$('#company_id').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!country_code){
\t\t\t\t\$('#country_code').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!branch_phone){
\t\t\t\t\$('#branch_phone').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!province_id){
\t\t\t\t\$('#province_id').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tvar type = '";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "';
\t\t\tif(type == 'edit'){
\t\t\t\tvar url = '";
        // line 219
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/get-user';
\t\t\t\tvar current_password = \$('#user_password_current').val();
\t\t\t\tvar user_id = '";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "user_id", array()), "html", null, true);
        echo "';
    \t\t\t\tif (valid != 1) {
    \t\t\t\t\t\$('#form_branch').submit();
    \t\t\t\t}
    \t\t} else {
    \t\t\tif (valid != 1) {
    \t\t\t\treturn true;
    \t\t\t} else {
    \t\t\t\treturn false;
    \t\t\t}
    \t\t}
    \t}
\t\t
\t\t
\t\t\$('.btn-cancel').click(function() {
    \t\twindow.history.back();
    \t\treturn false;
    \t});
    \t
    \t\$('.btn-save').click(function() {
    \t\treturn validate();
    \t});

</script>";
    }

    public function getTemplateName()
    {
        return "pages/company/branchs/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 221,  378 => 219,  373 => 217,  333 => 180,  325 => 175,  321 => 174,  317 => 173,  313 => 172,  309 => 171,  304 => 169,  300 => 168,  296 => 167,  292 => 166,  288 => 165,  284 => 164,  281 => 163,  259 => 142,  256 => 140,  251 => 137,  247 => 130,  237 => 121,  235 => 120,  223 => 118,  220 => 116,  218 => 115,  216 => 114,  212 => 113,  201 => 104,  198 => 103,  188 => 96,  186 => 95,  174 => 93,  171 => 91,  169 => 90,  167 => 89,  163 => 88,  152 => 79,  150 => 78,  138 => 76,  135 => 74,  133 => 73,  131 => 72,  127 => 71,  116 => 62,  113 => 61,  103 => 54,  100 => 53,  93 => 49,  73 => 32,  64 => 25,  54 => 16,  51 => 15,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
/* 								*/
/* 									<h4 class="sub-title">Company Profile Inputs</h4>*/
/* 									<form action="" method="post" autocomplete="off" id="form_branch" >*/
/* 										<input type="hidden" name="branch_id" id="branch_id" value="{{ branch.branch_id }}">*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Branch Name<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="branch_name" id="branch_name" value="{{ branch.branch_name }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Code</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="branch_code" id="branch_code" value="{{ branch.branch_code }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Company<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<select class="form-control" name="company_id" id="company_id">*/
/* 													<option value="">---select---</option>*/
/* 													{% for company in companies %}*/
/*     													{% set selected = '' %}*/
/*     													{%  if company.company_id == branch.company_id %}*/
/*     													    {% set selected = ' selected="selected" ' %}*/
/*     													{%  endif %}*/
/* 														<option {{ selected }} value="{{ company.company_id }}">{{ company.company_name }}</option>*/
/* 													{% endfor %}*/
/* 												</select> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Country<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<select class="form-control" name="country_code" id="country_code">*/
/* 													<option value="">---select---</option>*/
/* 													{% for country in countries %}*/
/*     													{% set selected = '' %}*/
/*     													{%  if country.country_code == branch.country_code %}*/
/*     													    {% set selected = ' selected="selected" ' %}*/
/*     													{%  endif %}*/
/* 														<option {{ selected }} value="{{ country.country_code }}">{{ country.country_name }}</option>*/
/* 													{% endfor %}*/
/* 												</select> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Phone<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="branch_phone" id="branch_phone" value="{{ branch.branch_phone }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/*                     						<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Province<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<select class="form-control" name="province_id" id="province_id">*/
/* 													<option value="">---select---</option>*/
/* 													{% for province in provinces %}*/
/*     													{% set selected = '' %}*/
/*     													{%  if province.province_id == branch.province_id %}*/
/*     													    {% set selected = ' selected="selected" ' %}*/
/*     													{%  endif %}*/
/* 														<option {{ selected }} value="{{ province.province_id }}">{{ province.province_name_eng }}</option>*/
/* 													{% endfor %}*/
/* 												</select> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Module</label>*/
/* 											<div class="border-checkbox-group border-checkbox-group-primary col-sm-10">*/
/* 												<input type="checkbox" class="border-checkbox" name="module_heatmap" id="module_heatmap" value="1">*/
/* 														{#{ incurrect_message }#}*/
/* 												<label class="border-checkbox-label" for="module_heatmap">Heatmap</label>*/
/* 											</div>*/
/* 										</div>*/
/* 										{# <div class="border-checkbox-group border-checkbox-group-primary pl-2">*/
/*                                                                         <input class="border-checkbox" type="checkbox" id="heatmap">*/
/*                                                                         <label class="border-checkbox-label" for="checkbox1">Heatmap</label>*/
/*                                                                     </div> #}*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Remark</label>*/
/* 											<div class="col-sm-10">*/
/* 												<textarea class="form-control" name="branch_remark" id="branch_remark" value="{{ branch.remark }}"></textarea> <span class="messages"><p class="text-danger error">*/
/* 														{#{ incurrect_message }#}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="row">*/
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
/* <script src="{{ base_url }}/theme/bower_components/select2/js/select2.full.min.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* <!--<script src="{{ base_url }}/theme/assets/pages/advance-elements/select2-custom.js"></script>-->*/
/* */
/* */
/* <script>*/
/* */
/* 	if({{ branch.module_heatmap }} == 1){*/
/* 		$( "#module_heatmap" ).prop( "checked", true );*/
/* 	}else{*/
/* 		$( "#module_heatmap" ).prop( "checked", false );*/
/* 	}*/
/* */
/*      function validate(){*/
/*         	$('.messages').hide();*/
/*     		var branch_name = $('#branch_name').val();*/
/* 			var branch_code = $('#branch_code').val();*/
/*     		var company_id = $('#company_id').val();*/
/*     		var country_code = $('#country_code').val();*/
/*     		var branch_phone = $('#branch_phone').val();*/
/*     		var province_id = $('#province_id').val();*/
/* 			var heatmap = $('#module_heatmap').val();*/
/* 			var remark = $('#remark').val();*/
/*     		var valid = 0;*/
/* 			if(!branch_name){*/
/* 				$('#branch_name').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!company_id){*/
/* 				$('#company_id').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!country_code){*/
/* 				$('#country_code').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!branch_phone){*/
/* 				$('#branch_phone').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!province_id){*/
/* 				$('#province_id').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			var type = '{{ type }}';*/
/* 			if(type == 'edit'){*/
/* 				var url = '{{ base_url }}/get-user';*/
/* 				var current_password = $('#user_password_current').val();*/
/* 				var user_id = '{{ user.user_id }}';*/
/*     				if (valid != 1) {*/
/*     					$('#form_branch').submit();*/
/*     				}*/
/*     		} else {*/
/*     			if (valid != 1) {*/
/*     				return true;*/
/*     			} else {*/
/*     				return false;*/
/*     			}*/
/*     		}*/
/*     	}*/
/* 		*/
/* 		*/
/* 		$('.btn-cancel').click(function() {*/
/*     		window.history.back();*/
/*     		return false;*/
/*     	});*/
/*     	*/
/*     	$('.btn-save').click(function() {*/
/*     		return validate();*/
/*     	});*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
