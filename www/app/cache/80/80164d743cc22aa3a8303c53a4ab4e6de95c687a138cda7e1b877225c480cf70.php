<?php

/* pages/summary/visitor/view.twig */
class __TwigTemplate_0436200b83fe3779b731aa3eaa9e3665cf49a95072db3ff849eb9f4f4edd73e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/summary/visitor/view.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'criteria' => array($this, 'block_criteria'),
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("head", $context, $blocks);
        echo "

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/css/j-forms.css\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/feather/css/feather.css\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/p-loader.css\">";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<input type=\"hidden\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "categories", array()), "html", null, true);
        echo "\" id=\"categories\">
<input type=\"hidden\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "data_in", array()), "html", null, true);
        echo "\" id=\"data_in\">
<input type=\"hidden\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "data_out", array()), "html", null, true);
        echo "\" id=\"data_out\">

<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 28
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["title_body"]) ? $context["title_body"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card\">";
        // line 46
        $this->displayBlock('criteria', $context, $blocks);
        // line 49
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"loader animation-start d-none\">
                        <span class=\"circle delay-1 size-2\"></span>
                        <span class=\"circle delay-2 size-4\"></span>
                        <span class=\"circle delay-3 size-6\"></span>
                        <span class=\"circle delay-4 size-7\"></span>
                        <span class=\"circle delay-5 size-7\"></span>
                        <span class=\"circle delay-6 size-6\"></span>
                        <span class=\"circle delay-7 size-4\"></span>
                        <span class=\"circle delay-8 size-2\"></span>
                    </div>
\t\t\t\t\t<div id=\"page-content\">
                         
    \t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t<div class=\"card\">
    
    \t\t\t\t\t\t\t\t<div class=\"card-header\">
    \t\t\t\t\t\t\t\t\t<h5> Visitor Summary </h5>
    \t\t\t\t\t\t\t\t\t   <div style=\"float:right;\">
        \t\t\t\t\t\t\t\t\t   <button data-type=\"line\" type=\"button\" class=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \" id=\"pdfButton\"><i class=\"fa fa-minus\"></i>Line</button>
        \t\t\t\t\t\t\t\t\t   <button data-type=\"area\"  type=\"button\" class=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \" id=\"pdfButton\"><i class=\"fa fa-picture-o\"></i>Area</button>
        \t\t\t\t\t\t\t\t\t   <button data-type=\"column\" type=\"button\" class=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \" id=\"pdfButton\"><i class=\"fa fa-product-hunt\"></i>Bar</button>
        \t\t\t\t\t\t\t\t\t   <button type=\"button\" class=\"btn btn-secondary btn-mini waves-effect waves-light\" id=\"excelButton\"><i class=\"fa fa-file-excel-o\"></i>Excel</button>
        \t\t\t\t\t\t\t\t\t   <button type=\"button\" class=\"btn btn-secondary btn-mini waves-effect waves-light\" id=\"pdfButton\"><i class=\"fa fa-file-pdf-o\"></i>PDF</button>
    \t\t\t\t\t\t              </div>
    \t\t\t\t\t\t\t\t\t<hr>
    
                                        <span><b>Location :</b> Super sports - Central World,Skechers - Central Ladprao,Fit sports - Seacon Square,Super Sports - Central Rama 9
    \t\t\t\t\t\t\t\t\t<span><b>Period Date :</b> 26 August 2020</span>
    \t\t\t\t\t\t\t\t\t<span><b>Staff Diff :</b> 0</span>
    
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t<div class=\"card-block\">
                                        <figure class=\"highcharts-figure\">
                                            <div id=\"highcharts-line\"></div>
                                        </figure>
    \t\t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t<div class=\"card\">
    \t\t\t\t\t\t\t     <div class=\"card-block\">
                                        <div class=\"dt-responsive table-responsive col-sm-12\"  >
                                            <table id=\"visitor_table\" class=\"table compact table-striped table-bordered nowrap dataTable\" >
                                                <thead>
                                                    <tr>
                                                        <th class=\"text-center\" class=\"col-md-3\">Time</th>
                                                        <th class=\"text-center\" >IN</th>
                                                        <th class=\"text-center\" >OUT</th>
                                                        <th class=\"text-center\" >Inside</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    // line 46
    public function block_criteria($context, array $blocks = array())
    {
        // line 47
        $this->loadTemplate("component/criteria.twig", "pages/summary/visitor/view.twig", 47)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 120
    public function block_footer($context, array $blocks = array())
    {
        // line 121
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/highcharts.js\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js\"></script>
<!-- datatable -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

 <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/moment-with-locales.min.js\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/js/custom/popup-menu-form.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/common-pages.js\"></script>


<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/visitor.js\"></script>";
    }

    public function getTemplateName()
    {
        return "pages/summary/visitor/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 153,  298 => 152,  294 => 151,  288 => 148,  284 => 147,  279 => 145,  275 => 144,  271 => 143,  267 => 142,  263 => 141,  258 => 139,  254 => 138,  250 => 137,  246 => 136,  241 => 134,  237 => 133,  233 => 132,  229 => 131,  225 => 130,  221 => 129,  217 => 128,  212 => 126,  208 => 125,  204 => 124,  200 => 123,  196 => 122,  192 => 121,  189 => 120,  185 => 47,  182 => 46,  110 => 49,  108 => 46,  95 => 35,  86 => 28,  74 => 18,  70 => 17,  66 => 16,  63 => 15,  60 => 14,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/pages/j-pro/css/j-forms.css">*/
/*  <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/*  <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/p-loader.css">*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <input type="hidden" value="{{ result.categories }}" id="categories">*/
/* <input type="hidden" value="{{ result.data_in }}" id="data_in">*/
/* <input type="hidden" value="{{ result.data_out }}" id="data_out">*/
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
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							<div class="card">*/
/* 								{% block criteria %}*/
/* 								{% include 'component/criteria.twig' with { 'base_url': base_url } %}*/
/* 								{% endblock %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="loader animation-start d-none">*/
/*                         <span class="circle delay-1 size-2"></span>*/
/*                         <span class="circle delay-2 size-4"></span>*/
/*                         <span class="circle delay-3 size-6"></span>*/
/*                         <span class="circle delay-4 size-7"></span>*/
/*                         <span class="circle delay-5 size-7"></span>*/
/*                         <span class="circle delay-6 size-6"></span>*/
/*                         <span class="circle delay-7 size-4"></span>*/
/*                         <span class="circle delay-8 size-2"></span>*/
/*                     </div>*/
/* 					<div id="page-content">*/
/*                          */
/*     					<div class="row">*/
/*     						<div class="col-sm-12">*/
/*     							<div class="card">*/
/*     */
/*     								<div class="card-header">*/
/*     									<h5> Visitor Summary </h5>*/
/*     									   <div style="float:right;">*/
/*         									   <button data-type="line" type="button" class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light " id="pdfButton"><i class="fa fa-minus"></i>Line</button>*/
/*         									   <button data-type="area"  type="button" class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light " id="pdfButton"><i class="fa fa-picture-o"></i>Area</button>*/
/*         									   <button data-type="column" type="button" class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light " id="pdfButton"><i class="fa fa-product-hunt"></i>Bar</button>*/
/*         									   <button type="button" class="btn btn-secondary btn-mini waves-effect waves-light" id="excelButton"><i class="fa fa-file-excel-o"></i>Excel</button>*/
/*         									   <button type="button" class="btn btn-secondary btn-mini waves-effect waves-light" id="pdfButton"><i class="fa fa-file-pdf-o"></i>PDF</button>*/
/*     						              </div>*/
/*     									<hr>*/
/*     */
/*                                         <span><b>Location :</b> Super sports - Central World,Skechers - Central Ladprao,Fit sports - Seacon Square,Super Sports - Central Rama 9*/
/*     									<span><b>Period Date :</b> 26 August 2020</span>*/
/*     									<span><b>Staff Diff :</b> 0</span>*/
/*     */
/*     								</div>*/
/*     								<div class="card-block">*/
/*                                         <figure class="highcharts-figure">*/
/*                                             <div id="highcharts-line"></div>*/
/*                                         </figure>*/
/*     								</div>*/
/*     							</div>*/
/*     						</div>*/
/*     					</div>*/
/*     					<div class="row">*/
/*     						<div class="col-sm-12">*/
/*     							<div class="card">*/
/*     							     <div class="card-block">*/
/*                                         <div class="dt-responsive table-responsive col-sm-12"  >*/
/*                                             <table id="visitor_table" class="table compact table-striped table-bordered nowrap dataTable" >*/
/*                                                 <thead>*/
/*                                                     <tr>*/
/*                                                         <th class="text-center" class="col-md-3">Time</th>*/
/*                                                         <th class="text-center" >IN</th>*/
/*                                                         <th class="text-center" >OUT</th>*/
/*                                                         <th class="text-center" >Inside</th>*/
/*                                                     </tr>*/
/*                                                 </thead>*/
/*                                             </table>*/
/*                                         </div>*/
/*                                     </div>*/
/*     							</div>*/
/*     						</div>*/
/*     					</div>*/
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
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/highcharts.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js"></script>*/
/* <!-- datatable -->*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net/js/jquery.dataTables.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" ></script>*/
/* */
/*  <script src="{{ base_url }}/theme/assets/pages/advance-elements/moment-with-locales.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/SmoothScroll.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/pages/j-pro/js/custom/popup-menu-form.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/common-pages.js"></script>*/
/* */
/* */
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/visitor.js"></script>*/
/* */
/* */
/* {% endblock %}*/
/* */
