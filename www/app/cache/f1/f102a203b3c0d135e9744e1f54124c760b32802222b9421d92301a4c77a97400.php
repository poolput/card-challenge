<?php

/* pages/users/form.twig */
class __TwigTemplate_2846019f0e3e578d6c299447d243440799ea36cd7075ab31bb360022e758cbc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/users/form.twig", 1);
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
            echo "    \t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning background-warning\">
    \t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    \t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-close-line-circled text-white\"></i>
    \t\t\t\t\t\t\t\t\t\t</button>
    \t\t\t\t\t\t\t\t\t\t<strong> </strong>";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["warning_exist"]) ? $context["warning_exist"] : null), "html", null, true);
            echo " 
    \t\t\t\t\t\t\t\t\t\t<code>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "email", array()), "html", null, true);
            echo "</code>
    \t\t\t\t\t\t\t\t\t</div>";
        }
        // line 45
        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">User Profile Inputs</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"on\" id=\"form_user\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"user_id\" id=\"user_id\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "user_id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Company <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"company_id\" id=\"company_id\">";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 53
            $context["selected"] = "";
            // line 54
            if (($this->getAttribute($context["company"], "company_id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "company_id", array()))) {
                // line 55
                $context["selected"] = " selected=\"selected\" ";
            }
            // line 57
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
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Branch <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"branch_id\" id=\"branch_id\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">---select---</option>";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 70
            $context["selected"] = "";
            // line 71
            if (($this->getAttribute($context["branch"], "branch_id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "branch_id", array()))) {
                // line 72
                $context["selected"] = " selected=\"selected\" ";
            }
            // line 74
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<option";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Role <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"role_id\" id=\"role_id\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">---select---</option>";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 87
            $context["selected"] = "";
            // line 88
            if (($this->getAttribute($context["role"], "role_id", array()) == $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role_id", array()))) {
                // line 89
                $context["selected"] = " selected=\"selected\" ";
            }
            // line 91
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t\t<option";
            echo twig_escape_filter($this->env, (isset($context["selected"]) ? $context["selected"] : null), "html", null, true);
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Username <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"user_name\" id=\"user_name\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "user_name", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["current_password"]) ? $context["current_password"] : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Current password <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"user_password_current\" id=\"user_password_current\" value=\"\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : null), "html", null, true);
        echo " <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"user_password\" id=\"user_password\" value=\"\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Confirm password <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"user_password_confirm\" id=\"user_password_confirm\" value=\"\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">First name</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" id=\"first_name\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "first_name", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Last name</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\" id=\"last_name\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "last_name", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Email <span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
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

    // line 169
    public function block_footer($context, array $blocks = array())
    {
        // line 170
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script>
    \t\$('#company_id').change(function(){
    \t\tvar company_id = \$(this).val();
    \t\tvar url = '";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/get-branch';
    
    \t\t\$.post(url, {'company_id' : company_id,'type' : 'select'}, function(response) {
    \t\t\t\$('#branch_id').html(response);
    \t\t\ttriggerElementBranch();
    \t\t});
    \t});
    \tfunction triggerElementBranch(){
    \t\t\$('#branch_id').change(function(){
    \t\t\tvar branch_id = \$(this).val();
    \t\t\tvar url = '";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/get-role';
    \t\t\t
    \t\t\t\$.post(url, {'branch_id' : branch_id}, function(response) {
    \t\t\t\t\$('#role_id').html(response);
    \t\t\t});
    \t\t});
    \t}
    \tfunction validate(){
        \t\$('.messages').hide();
        \t
    \t\tvar company_id = \$('#company_id').val();
    \t\tvar branch_id = \$('#branch_id').val();
    \t\tvar role_id = \$('#role_id').val();
    \t\tvar user_name = \$('#user_name').val();
    \t\tvar user_password = \$('#user_password').val();
    \t\tvar user_password_confirm = \$('#user_password_confirm').val();
 
    \t\tvar email = \$('#email').val();
    \t\tvar valid = 0;
    \t\t
\t\t\tif(!company_id){
\t\t\t\t\$('#company_id').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!branch_id){
\t\t\t\t\$('#branch_id').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!role_id){
\t\t\t\t\$('#role_id').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!user_name){
\t\t\t\t\$('#user_name').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!user_password){
\t\t\t\t\$('#user_password').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!user_password_confirm){
\t\t\t\t\$('#user_password_confirm').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(user_password != user_password_confirm){
\t\t\t\t\$('#user_password_confirm').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tif(!email){
\t\t\t\t\$('#email').parent('div').find('.messages').show();
\t\t\t\tvalid = 1;
\t\t\t}
\t\t\tvar type = '";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "';
\t\t\tif(type == 'edit'){
\t\t\t\t
\t\t\t\tvar url = '";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/get-user';
\t\t\t\tvar current_password = \$('#user_password_current').val();
\t\t\t\tvar user_id = '";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "user_id", array()), "html", null, true);
        echo "';
    \t\t\t\$.post(url, {
    \t\t\t\t'user_id' : user_id,
    \t\t\t\t'password' : current_password
    \t\t\t}, function(response) {
    \t\t\t\tif (!response) {
    \t\t\t\t\t\$('#user_password_current').parent('div').find('.messages')
    \t\t\t\t\t\t\t.show();
    \t\t\t\t\tvalid = 1;
    \t\t\t\t}
    \t\t\t\tif (valid != 1) {
    \t\t\t\t\t\$('#form_user').submit();
    \t\t\t\t}
    \t\t\t});
    \t\t\treturn false;
    \t\t} else {
    \t\t\tif (valid != 1) {
    \t\t\t\treturn true;
    \t\t\t} else {
    \t\t\t\treturn false;
    \t\t\t}
    \t\t}
    \t}
    \t\$('.btn-cancel').click(function() {
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
        return "pages/users/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 251,  423 => 249,  417 => 246,  362 => 194,  349 => 184,  341 => 179,  337 => 178,  333 => 177,  329 => 176,  324 => 174,  320 => 173,  316 => 172,  312 => 171,  308 => 170,  305 => 169,  281 => 147,  278 => 146,  269 => 140,  260 => 134,  250 => 127,  240 => 119,  235 => 116,  227 => 111,  221 => 107,  213 => 102,  210 => 101,  200 => 94,  198 => 93,  186 => 91,  183 => 89,  181 => 88,  179 => 87,  175 => 86,  164 => 77,  162 => 76,  150 => 74,  147 => 72,  145 => 71,  143 => 70,  139 => 69,  128 => 60,  126 => 59,  114 => 57,  111 => 55,  109 => 54,  107 => 53,  103 => 52,  96 => 47,  92 => 45,  87 => 42,  83 => 41,  77 => 37,  75 => 36,  59 => 22,  50 => 15,  40 => 6,  37 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
/*     									<div class="alert alert-warning background-warning">*/
/*     										<button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*     											<i class="icofont icofont-close-line-circled text-white"></i>*/
/*     										</button>*/
/*     										<strong> </strong> {{ warning_exist }} */
/*     										<code>{{ post.email }}</code>*/
/*     									</div>*/
/* 									{% endif %}*/
/* 									<h4 class="sub-title">User Profile Inputs</h4>*/
/* 									<form action="" method="post" autocomplete="on" id="form_user">*/
/* 										<input type="hidden" name="user_id" id="user_id" value="{{ user.user_id }}">*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Company <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<select class="form-control" name="company_id" id="company_id">*/
/* 													{% for company in companies %}*/
/*     													{% set selected = '' %}*/
/*     													{%  if company.company_id == user.company_id %}*/
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
/* 											<label class="col-sm-2 col-form-label">Branch <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<select class="form-control" name="branch_id" id="branch_id">*/
/* 													<option value="">---select---</option>*/
/* 													{% for branch in branchs %}*/
/*     													{% set selected = '' %}*/
/*     													{%  if branch.branch_id == user.branch_id %}*/
/*     													    {% set selected = ' selected="selected" ' %}*/
/*     													{%  endif %}*/
/*     													<option {{ selected }} value="{{ branch.branch_id }}">{{ branch.branch_name }}</option>*/
/* 													{% endfor %}*/
/* 												</select> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Role <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<select class="form-control" name="role_id" id="role_id">*/
/* 													<option value="">---select---</option>*/
/* 													{% for role in roles %}*/
/*     													{% set selected = '' %}*/
/*     													{%  if role.role_id == user.role_id %}*/
/*     													    {% set selected = ' selected="selected" ' %}*/
/*     													{%  endif %}*/
/*     													<option {{ selected }} value="{{ role.role_id }}">{{ role.role_name }}</option>*/
/* 													{% endfor %}*/
/* 												</select> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Username <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="user_name" id="user_name" value="{{ user.user_name }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* */
/* 										<div class="form-group row {{ current_password }}">*/
/* 											<label class="col-sm-2 col-form-label">Current password <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="password" class="form-control" name="user_password_current" id="user_password_current" value=""> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label"> {{ password }} <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="password" class="form-control" name="user_password" id="user_password" value=""> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Confirm password <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="password" class="form-control" name="user_password_confirm" id="user_password_confirm" value=""> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">First name</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="first_name" id="first_name" value="{{ user.first_name }}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Last name</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="last_name" id="last_name" value="{{ user.last_name }}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Email <span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="email" id="email" value="{{ user.email }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
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
/* */
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* <script>*/
/*     	$('#company_id').change(function(){*/
/*     		var company_id = $(this).val();*/
/*     		var url = '{{ base_url }}/get-branch';*/
/*     */
/*     		$.post(url, {'company_id' : company_id,'type' : 'select'}, function(response) {*/
/*     			$('#branch_id').html(response);*/
/*     			triggerElementBranch();*/
/*     		});*/
/*     	});*/
/*     	function triggerElementBranch(){*/
/*     		$('#branch_id').change(function(){*/
/*     			var branch_id = $(this).val();*/
/*     			var url = '{{ base_url }}/get-role';*/
/*     			*/
/*     			$.post(url, {'branch_id' : branch_id}, function(response) {*/
/*     				$('#role_id').html(response);*/
/*     			});*/
/*     		});*/
/*     	}*/
/*     	function validate(){*/
/*         	$('.messages').hide();*/
/*         	*/
/*     		var company_id = $('#company_id').val();*/
/*     		var branch_id = $('#branch_id').val();*/
/*     		var role_id = $('#role_id').val();*/
/*     		var user_name = $('#user_name').val();*/
/*     		var user_password = $('#user_password').val();*/
/*     		var user_password_confirm = $('#user_password_confirm').val();*/
/*  */
/*     		var email = $('#email').val();*/
/*     		var valid = 0;*/
/*     		*/
/* 			if(!company_id){*/
/* 				$('#company_id').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!branch_id){*/
/* 				$('#branch_id').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!role_id){*/
/* 				$('#role_id').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!user_name){*/
/* 				$('#user_name').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!user_password){*/
/* 				$('#user_password').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!user_password_confirm){*/
/* 				$('#user_password_confirm').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(user_password != user_password_confirm){*/
/* 				$('#user_password_confirm').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			if(!email){*/
/* 				$('#email').parent('div').find('.messages').show();*/
/* 				valid = 1;*/
/* 			}*/
/* 			var type = '{{ type }}';*/
/* 			if(type == 'edit'){*/
/* 				*/
/* 				var url = '{{ base_url }}/get-user';*/
/* 				var current_password = $('#user_password_current').val();*/
/* 				var user_id = '{{ user.user_id }}';*/
/*     			$.post(url, {*/
/*     				'user_id' : user_id,*/
/*     				'password' : current_password*/
/*     			}, function(response) {*/
/*     				if (!response) {*/
/*     					$('#user_password_current').parent('div').find('.messages')*/
/*     							.show();*/
/*     					valid = 1;*/
/*     				}*/
/*     				if (valid != 1) {*/
/*     					$('#form_user').submit();*/
/*     				}*/
/*     			});*/
/*     			return false;*/
/*     		} else {*/
/*     			if (valid != 1) {*/
/*     				return true;*/
/*     			} else {*/
/*     				return false;*/
/*     			}*/
/*     		}*/
/*     	}*/
/*     	$('.btn-cancel').click(function() {*/
/*     		window.history.back();*/
/*     		return false;*/
/*     	});*/
/*     	*/
/*     	$('.btn-save').click(function() {*/
/*     		return validate();*/
/*     	});*/
/* </script>*/
/* {% endblock %}*/
