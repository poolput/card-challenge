<?php

/* pages/company/information/form.twig */
class __TwigTemplate_cebf400c92d149d2c775ec6c61b6167bddf3ebcd4fa25d6adf89ab6c7456a63d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/company/information/form.twig", 1);
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
\t\t\t\t\t\t\t\t\t<!--<div class=\"alert alert-warning background-warning\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-close-line-circled text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<strong>Warning!</strong> Add Class
\t\t\t\t\t\t\t\t\t\t<code>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(0 => "email"), "method"), "html", null, true);
        echo "</code>
\t\t\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t\t\t<h4 class=\"sub-title\">Company Profile Inputs</h4>
\t\t\t\t\t\t\t\t\t<form action=\"\" method=\"post\" autocomplete=\"on\" id=\"form_inform\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"company_id\" id=\"company_id\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_id", array()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Company Name<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_name\" id=\"company_name\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Owner<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_owner\" id=\"company_owner\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_owner", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Website<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_website\" id=\"company_website\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_website", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Email<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_email\" id=\"company_email\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_email", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Phone<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_phone\" id=\"company_phone\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_phone1", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                    <div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Phone2</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_phone2\" id=\"company_phone2\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_phone2", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Fax</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_fax\" id=\"company_fax\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_fax", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                    <br>
                    <h4 class=\"sub-title\">Company Address Inputs</h4>
                    <div class=\"form-group row\">
\t\t\t\t\t\t          <label class=\"col-sm-2 col-form-label\">Address<span class=\"text-danger error\">*</span></label>
          \t\t\t\t\t\t<div class=\"col-sm-10\">
          \t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"5\" class=\"form-control\" name=\"company_address\" id=\"company_address\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_address", array()), "html", null, true);
        echo "</textarea>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
          \t\t\t\t\t\t</div>
          \t\t\t\t\t</div>

                    <div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Country<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
                        <select class=\"form-control\" name=\"company_country\" id=\"company_country\">
                            <option value=\"\">---Please Select Country---</option>";
        // line 127
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_country", array()) == "THA")) {
            // line 128
            echo "                                <option value=\"THA\" selected>Thailand</option>";
        } else {
            // line 130
            echo "                                <option value=\"THA\">Thailand</option>";
        }
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 134
            if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_country", array()) == $this->getAttribute($context["country"], "country_code", array()))) {
                // line 135
                echo "                              <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_code", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()), "html", null, true);
                echo "</option>";
            } else {
                // line 137
                echo "                              <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                        </select>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

                    <div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Province<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
                        <select class=\"form-control\" name=\"company_province\" id=\"company_province\" disabled>
                            <option value=\"\">---Please Select Province---</option>";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provinces"]) ? $context["provinces"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 151
            if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "province_id", array()) == $this->getAttribute($context["province"], "province_id", array()))) {
                // line 152
                echo "                              <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_id", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_name_eng", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_name_th", array()), "html", null, true);
                echo ")</option>";
            } else {
                // line 154
                echo "                              <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_name_eng", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "province_name_th", array()), "html", null, true);
                echo ")</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                        </select>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

                    <div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">City / State<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_state\" id=\"company_state\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_city", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

                    <div class=\"form-group row\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Zip Code<span class=\"text-danger error\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company_zipcode\" id=\"company_zipcode\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_zip", array()), "html", null, true);
        echo "\"> <span class=\"messages\"><p class=\"text-danger error\">";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

                    <div class=\"form-group row\">
          \t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">Active Status</label>
          \t\t\t\t\t\t<div class=\"col-sm-10\">
          \t\t\t\t\t\t\t<div class=\"form-radio\">
          \t\t\t\t\t\t\t\t<div class=\"radio radiofill radio-inverse radio-inline\">
          \t\t\t\t\t\t\t\t\t<label>
          \t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"company_status\" value=\"1\"";
        // line 186
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_active", array()) >= 1)) {
            echo " checked";
        } else {
            echo " checked";
        }
        echo ">
          \t\t\t\t\t\t\t\t\t\t<i class=\"helper\"></i>Active
          \t\t\t\t\t\t\t\t\t</label>
          \t\t\t\t\t\t\t\t</div>
          \t\t\t\t\t\t\t\t<div class=\"radio radiofill radio-inverse  radio-inline\">
          \t\t\t\t\t\t\t\t\t<label>
          \t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"company_status\" value=\"0\"";
        // line 192
        if ((((isset($context["type"]) ? $context["type"] : null) == "edit") && ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_active", array()) == 0))) {
            echo " checked";
        }
        echo ">
          \t\t\t\t\t\t\t\t\t\t<i class=\"helper\"></i>Inactivate
          \t\t\t\t\t\t\t\t\t</label>
          \t\t\t\t\t\t\t\t</div>
          \t\t\t\t\t\t\t</div>
                        <span class=\"messages\"><p class=\"text-danger error\">";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "</p></span>
          \t\t\t\t\t\t</div>
          \t\t\t\t\t</div>

                    <br>
                    <h4 class=\"sub-title\">Company Logo Inputs</h4>
                    <div class=\"row\">
                      <div class=\"col-6\">
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\">Logo</label>
                          <div class=\"col-sm-10\">
                            <input type=\"file\" name=\"company_logo\" id=\"company_logo\" style=\"display:none;\" accept=\"image/jpeg, image/jpg, image/png\">
                            <label for=\"company_logo\" class=\"btn btn-inverse\" style=\"cursor:pointer;\">Choose a logo</label>
                          </div>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\"></label>
                          <label class=\"col-sm-10 col-form-label\"><span class=\"text-danger error\">*Support image jpeg, jpg, png (100x40)</span></label>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\"></label>
                          <div class=\"col-sm-10\">
                            <img class=\"company_logo_img\" id=\"company_logo_img\" height=\"150\" width=\"250\" style=\"display:none;\">
                          </div>
                        </div>
                      </div>

                      <div class=\"col-6\">
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\">Mobile Logo</label>
                          <div class=\"col-sm-10\">
                            <input type=\"file\" name=\"company_mobile_logo\" id=\"company_mobile_logo\" style=\"display:none;\" accept=\"image/jpeg, image/jpg, image/png\">
                            <label for=\"company_mobile_logo\" class=\"btn btn-inverse\" style=\"cursor:pointer;\">Choose a logo</label>
                          </div>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\"></label>
                          <label class=\"col-sm-10 col-form-label\"><span class=\"text-danger error\">*Support image jpeg, jpg, png (190x190)</span></label>
                        </div>
                        <div class=\"form-group row\">
                          <label class=\"col-sm-2 col-form-label\"></label>
                          <div class=\"col-sm-10\">
                            <img class=\"company_mobile_logo_img\" id=\"company_mobile_logo_img\" height=\"150\" width=\"250\" style=\"display:none;\">
                          </div>
                        </div>
                      </div>

                    </div>

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

    // line 264
    public function block_footer($context, array $blocks = array())
    {
        // line 265
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script>
      \$(document).ready(function(){

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

              reader.onload = function(e) {
                if(input.id == 'company_logo'){
                  \$('#company_logo_img').attr('src', e.target.result);
                }else if(input.id == 'company_mobile_logo'){
                  \$('#company_mobile_logo_img').attr('src', e.target.result);
                }
              }
              reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
          }

        function validate(){

        }

          \$(\"#company_country\").select2();
          \$(\"#company_province\").select2();";
        // line 302
        if (((isset($context["type"]) ? $context["type"] : null) == "edit")) {
            // line 303
            echo "            \$('#company_province').removeAttr('disabled');
            \$('#company_logo_img').attr(\"src\",'";
            // line 304
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "'+\"/writable/uploads/company/information/webbrowser/\"+'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_logo", array()), "html", null, true);
            echo "');
            \$('#company_mobile_logo_img').attr(\"src\",'";
            // line 305
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "'+\"/writable/uploads/company/information/mobile/\"+'";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_logo_phone", array()), "html", null, true);
            echo "');
            \$('#company_logo_img').show();
            \$('#company_mobile_logo_img').show();";
        }
        // line 309
        echo "
          \$(\"#company_logo\").change(function() {
            readURL(this);
            setTimeout(function(){
              \$(\"#company_logo_img\").show();
            },300);
          });

          \$(\"#company_mobile_logo\").change(function() {
            readURL(this);
            setTimeout(function(){
              \$(\"#company_mobile_logo_img\").show();
            },300);
          });

          \$(\"#company_country\").change(function(){
            var company_country = \$(\"#company_country\").val();

            \$.ajax({
  \t\t\t\t\t\ttype: \"POST\",
  \t\t\t\t\t\turl: \"";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/information/getProvinces\",
  \t\t\t\t\t\tdata: {company_country: company_country},
  \t\t\t\t\t\tcache: false,
  \t\t\t\t\t\tsuccess: function(data){
                var obj = JSON.parse(data);
                var html = '<option value=\"\">---Please Select Province---</option>';
                \$.each(obj, function(key,value){
                    html += '<option value=\"'+value.province_id+'\">'+value.province_name_eng+'('+value.province_name_th+')'+'</option>';
                });

                \$('#company_province').empty();
                \$('#company_province').html(html);
                \$('#company_province').removeAttr('disabled');
  \t\t\t\t\t\t}
  \t\t\t\t\t});
          });

          \$('.btn-cancel').click(function() {
            window.history.back();
          });

          \$('.btn-save').click(function() {
            \$('.messages').hide();

            var company_chk = 0;
            var company_name = \$(\"#company_name\").val();
            var company_owner = \$(\"#company_owner\").val();
            var company_website = \$(\"#company_website\").val();
            var company_email = \$(\"#company_email\").val();
            var company_phone = \$(\"#company_phone\").val();
            var company_address = \$(\"#company_address\").val();
            var company_country = \$(\"#company_country\").val();
            var company_province = \$(\"#company_province\").val();
            var company_state = \$(\"#company_state\").val();
            var company_zipcode = \$(\"#company_zipcode\").val();

            if(company_name == ''){
              \$('#company_name').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_owner == ''){
              \$('#company_owner').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_website == ''){
              \$('#company_website').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_email == ''){
              \$('#company_email').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_phone == ''){
              \$('#company_phone').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_address == ''){
              \$('#company_address').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_country == ''){
              \$('#company_country').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_province == ''){
              \$('#company_province').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_state == ''){
              \$('#company_state').parent('div').find('.messages').show();
              company_chk = 1;
            }
            if(company_zipcode == ''){
              \$('#company_zipcode').parent('div').find('.messages').show();
              company_chk = 1;
            }

            if(company_chk == 1){
              return false;
            }
          });

      });
</script>";
    }

    public function getTemplateName()
    {
        return "pages/company/information/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 329,  514 => 309,  506 => 305,  500 => 304,  497 => 303,  495 => 302,  467 => 275,  463 => 274,  459 => 273,  455 => 272,  450 => 270,  446 => 269,  442 => 268,  438 => 267,  434 => 266,  430 => 265,  427 => 264,  358 => 197,  348 => 192,  335 => 186,  321 => 175,  318 => 174,  307 => 166,  304 => 165,  294 => 158,  291 => 157,  278 => 154,  269 => 152,  267 => 151,  263 => 150,  252 => 141,  249 => 140,  238 => 137,  231 => 135,  229 => 134,  225 => 133,  222 => 130,  219 => 128,  217 => 127,  206 => 118,  202 => 117,  190 => 108,  187 => 107,  177 => 100,  174 => 99,  164 => 92,  161 => 91,  151 => 84,  148 => 83,  138 => 76,  135 => 75,  125 => 68,  122 => 67,  112 => 60,  109 => 59,  102 => 55,  95 => 51,  73 => 32,  64 => 25,  54 => 16,  51 => 15,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
/* 									<!--<div class="alert alert-warning background-warning">*/
/* 										<button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/* 											<i class="icofont icofont-close-line-circled text-white"></i>*/
/* 										</button>*/
/* 										<strong>Warning!</strong> Add Class*/
/* 										<code>{{ app.request('email')}}</code>*/
/* 									</div>-->*/
/* 									<h4 class="sub-title">Company Profile Inputs</h4>*/
/* 									<form action="" method="post" autocomplete="on" id="form_inform" enctype="multipart/form-data">*/
/* 										<input type="hidden" name="company_id" id="company_id" value="{{ company.company_id }}">*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Company Name<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_name" id="company_name" value="{{ company.company_name }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Owner<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_owner" id="company_owner" value="{{ company.company_owner }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Website<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_website" id="company_website" value="{{ company.company_website }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Email<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_email" id="company_email" value="{{ company.company_email }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Phone<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_phone" id="company_phone" value="{{ company.company_phone1 }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/*                     <div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Phone2</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_phone2" id="company_phone2" value="{{ company.company_phone2 }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Fax</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_fax" id="company_fax" value="{{ company.company_fax }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/*                     <br>*/
/*                     <h4 class="sub-title">Company Address Inputs</h4>*/
/*                     <div class="form-group row">*/
/* 						          <label class="col-sm-2 col-form-label">Address<span class="text-danger error">*</span></label>*/
/*           						<div class="col-sm-10">*/
/*           							<textarea rows="5" cols="5" class="form-control" name="company_address" id="company_address">{{ company.company_address }}</textarea>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/*           						</div>*/
/*           					</div>*/
/* */
/*                     <div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Country<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/*                         <select class="form-control" name="company_country" id="company_country">*/
/*                             <option value="">---Please Select Country---</option>*/
/*                             {% if company.company_country == 'THA' %}*/
/*                                 <option value="THA" selected>Thailand</option>*/
/*                             {% else %}*/
/*                                 <option value="THA">Thailand</option>*/
/*                             {% endif %}*/
/* */
/*                           {% for country in countries %}*/
/*                             {% if company.company_country == country.country_code %}*/
/*                               <option value="{{ country.country_code }}" selected>{{country.country_name}}</option>*/
/*                             {% else %}*/
/*                               <option value="{{ country.country_code }}">{{country.country_name}}</option>*/
/*                             {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* */
/*                     <div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Province<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/*                         <select class="form-control" name="company_province" id="company_province" disabled>*/
/*                             <option value="">---Please Select Province---</option>*/
/*                           {% for province in provinces %}*/
/*                             {% if company.province_id == province.province_id %}*/
/*                               <option value="{{ province.province_id }}" selected>{{province.province_name_eng}} ({{province.province_name_th}})</option>*/
/*                             {% else %}*/
/*                               <option value="{{ province.province_id }}">{{province.province_name_eng}} ({{province.province_name_th}})</option>*/
/*                             {% endif %}*/
/*                           {% endfor %}*/
/*                         </select>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* */
/*                     <div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">City / State<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_state" id="company_state" value="{{ company.company_city }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* */
/*                     <div class="form-group row">*/
/* 											<label class="col-sm-2 col-form-label">Zip Code<span class="text-danger error">*</span></label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="company_zipcode" id="company_zipcode" value="{{ company.company_zip }}"> <span class="messages"><p class="text-danger error">*/
/* 														{{ incurrect_message }}*/
/* 													</p></span>*/
/* 											</div>*/
/* 										</div>*/
/* */
/*                     <div class="form-group row">*/
/*           						<label class="col-sm-2 col-form-label">Active Status</label>*/
/*           						<div class="col-sm-10">*/
/*           							<div class="form-radio">*/
/*           								<div class="radio radiofill radio-inverse radio-inline">*/
/*           									<label>*/
/*           										<input type="radio" name="company_status" value="1" {% if( company.company_active >= 1 ) %} checked {%else%} checked {% endif %}>*/
/*           										<i class="helper"></i>Active*/
/*           									</label>*/
/*           								</div>*/
/*           								<div class="radio radiofill radio-inverse  radio-inline">*/
/*           									<label>*/
/*           										<input type="radio" name="company_status" value="0" {% if( type == 'edit' and company.company_active == 0 ) %} checked {% endif %}>*/
/*           										<i class="helper"></i>Inactivate*/
/*           									</label>*/
/*           								</div>*/
/*           							</div>*/
/*                         <span class="messages"><p class="text-danger error">{{ incurrect_message }}</p></span>*/
/*           						</div>*/
/*           					</div>*/
/* */
/*                     <br>*/
/*                     <h4 class="sub-title">Company Logo Inputs</h4>*/
/*                     <div class="row">*/
/*                       <div class="col-6">*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label">Logo</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="file" name="company_logo" id="company_logo" style="display:none;" accept="image/jpeg, image/jpg, image/png">*/
/*                             <label for="company_logo" class="btn btn-inverse" style="cursor:pointer;">Choose a logo</label>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label"></label>*/
/*                           <label class="col-sm-10 col-form-label"><span class="text-danger error">*Support image jpeg, jpg, png (100x40)</span></label>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label"></label>*/
/*                           <div class="col-sm-10">*/
/*                             <img class="company_logo_img" id="company_logo_img" height="150" width="250" style="display:none;">*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                       <div class="col-6">*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label">Mobile Logo</label>*/
/*                           <div class="col-sm-10">*/
/*                             <input type="file" name="company_mobile_logo" id="company_mobile_logo" style="display:none;" accept="image/jpeg, image/jpg, image/png">*/
/*                             <label for="company_mobile_logo" class="btn btn-inverse" style="cursor:pointer;">Choose a logo</label>*/
/*                           </div>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label"></label>*/
/*                           <label class="col-sm-10 col-form-label"><span class="text-danger error">*Support image jpeg, jpg, png (190x190)</span></label>*/
/*                         </div>*/
/*                         <div class="form-group row">*/
/*                           <label class="col-sm-2 col-form-label"></label>*/
/*                           <div class="col-sm-10">*/
/*                             <img class="company_mobile_logo_img" id="company_mobile_logo_img" height="150" width="250" style="display:none;">*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </div>*/
/* */
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
/*         function readURL(input) {*/
/*           if (input.files && input.files[0]) {*/
/*             var reader = new FileReader();*/
/* */
/*               reader.onload = function(e) {*/
/*                 if(input.id == 'company_logo'){*/
/*                   $('#company_logo_img').attr('src', e.target.result);*/
/*                 }else if(input.id == 'company_mobile_logo'){*/
/*                   $('#company_mobile_logo_img').attr('src', e.target.result);*/
/*                 }*/
/*               }*/
/*               reader.readAsDataURL(input.files[0]); // convert to base64 string*/
/*             }*/
/*           }*/
/* */
/*         function validate(){*/
/* */
/*         }*/
/* */
/*           $("#company_country").select2();*/
/*           $("#company_province").select2();*/
/* */
/*           {% if type == 'edit' %}*/
/*             $('#company_province').removeAttr('disabled');*/
/*             $('#company_logo_img').attr("src",'{{base_url}}'+"/writable/uploads/company/information/webbrowser/"+'{{ company.company_logo }}');*/
/*             $('#company_mobile_logo_img').attr("src",'{{base_url}}'+"/writable/uploads/company/information/mobile/"+'{{ company.company_logo_phone }}');*/
/*             $('#company_logo_img').show();*/
/*             $('#company_mobile_logo_img').show();*/
/*           {% endif %}*/
/* */
/*           $("#company_logo").change(function() {*/
/*             readURL(this);*/
/*             setTimeout(function(){*/
/*               $("#company_logo_img").show();*/
/*             },300);*/
/*           });*/
/* */
/*           $("#company_mobile_logo").change(function() {*/
/*             readURL(this);*/
/*             setTimeout(function(){*/
/*               $("#company_mobile_logo_img").show();*/
/*             },300);*/
/*           });*/
/* */
/*           $("#company_country").change(function(){*/
/*             var company_country = $("#company_country").val();*/
/* */
/*             $.ajax({*/
/*   						type: "POST",*/
/*   						url: "{{ base_url }}/information/getProvinces",*/
/*   						data: {company_country: company_country},*/
/*   						cache: false,*/
/*   						success: function(data){*/
/*                 var obj = JSON.parse(data);*/
/*                 var html = '<option value="">---Please Select Province---</option>';*/
/*                 $.each(obj, function(key,value){*/
/*                     html += '<option value="'+value.province_id+'">'+value.province_name_eng+'('+value.province_name_th+')'+'</option>';*/
/*                 });*/
/* */
/*                 $('#company_province').empty();*/
/*                 $('#company_province').html(html);*/
/*                 $('#company_province').removeAttr('disabled');*/
/*   						}*/
/*   					});*/
/*           });*/
/* */
/*           $('.btn-cancel').click(function() {*/
/*             window.history.back();*/
/*           });*/
/* */
/*           $('.btn-save').click(function() {*/
/*             $('.messages').hide();*/
/* */
/*             var company_chk = 0;*/
/*             var company_name = $("#company_name").val();*/
/*             var company_owner = $("#company_owner").val();*/
/*             var company_website = $("#company_website").val();*/
/*             var company_email = $("#company_email").val();*/
/*             var company_phone = $("#company_phone").val();*/
/*             var company_address = $("#company_address").val();*/
/*             var company_country = $("#company_country").val();*/
/*             var company_province = $("#company_province").val();*/
/*             var company_state = $("#company_state").val();*/
/*             var company_zipcode = $("#company_zipcode").val();*/
/* */
/*             if(company_name == ''){*/
/*               $('#company_name').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_owner == ''){*/
/*               $('#company_owner').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_website == ''){*/
/*               $('#company_website').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_email == ''){*/
/*               $('#company_email').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_phone == ''){*/
/*               $('#company_phone').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_address == ''){*/
/*               $('#company_address').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_country == ''){*/
/*               $('#company_country').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_province == ''){*/
/*               $('#company_province').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_state == ''){*/
/*               $('#company_state').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/*             if(company_zipcode == ''){*/
/*               $('#company_zipcode').parent('div').find('.messages').show();*/
/*               company_chk = 1;*/
/*             }*/
/* */
/*             if(company_chk == 1){*/
/*               return false;*/
/*             }*/
/*           });*/
/* */
/*       });*/
/* </script>*/
/* {% endblock %}*/
/* */
