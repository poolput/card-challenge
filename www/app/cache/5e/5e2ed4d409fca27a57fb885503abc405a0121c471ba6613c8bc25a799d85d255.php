<?php

/* pages/summary/passing/view.twig */
class __TwigTemplate_75461d14b77e8c307b2b86c2a507bcc8edae313da1c7e1357fadcb69de88578a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/summary/passing/view.twig", 1);
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
        echo "/theme/assets/css/p-loader.css\">
<style type=\"text/css\">
#branch_select_div{
    float: right;
    padding-top: 36px;
}
</style>";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 30
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
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
        // line 48
        $this->displayBlock('criteria', $context, $blocks);
        // line 51
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
\t\t\t\t\t<div id=\"page-content\" style=\"display:none;\">
                        <div id=\"top-card-div\">

                    \t</div>
    \t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"location-title\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapse_location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"location-selected\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"period-selected\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                            <div class=\"col-md-4\" id=\"branch_select_div\">
                                                <select class=\"form-control\" id=\"branch_select\"></select>
                                            </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row btn-option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"line\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"pdfButton\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>Line
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"area\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"pdfButton\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>Area
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"column\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"pdfButton\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-product-hunt\"></i>Bar
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-secondary btn-mini waves-effect waves-light\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"excelButton\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-excel-o\"></i>Excel
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-secondary btn-mini waves-effect waves-light\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"pdfButton\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-pdf-o\"></i>PDF
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-block chart-div\">

                                    </div>
    \t\t\t\t\t\t\t</div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t</div>
    \t\t\t\t\t<div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"card\">
                                     <div class=\"card-block table-div\">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    // line 48
    public function block_criteria($context, array $blocks = array())
    {
        // line 49
        $this->loadTemplate("filter/criteria.twig", "pages/summary/passing/view.twig", 49)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 139
    public function block_footer($context, array $blocks = array())
    {
        // line 140
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/highcharts.js\"></script>
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js\"></script>
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js\"></script>
<script src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js\"></script>
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js\"></script>
<!-- datatable -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

 <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/moment-with-locales.min.js\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/js/custom/popup-menu-form.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/common-pages.js\"></script>

<!-- custom js -->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_location.js\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_group.js\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_date.js\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_event.js\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/passing.js\"></script>

<script>

// fnPassing.renderChart();

// fnService.getStaff();
// fnService.getLocation();
// fnService.getPeriod();

</script>";
    }

    public function getTemplateName()
    {
        return "pages/summary/passing/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 177,  325 => 176,  321 => 175,  317 => 174,  313 => 173,  309 => 172,  305 => 171,  299 => 168,  295 => 167,  290 => 165,  286 => 164,  282 => 163,  278 => 162,  274 => 161,  269 => 159,  265 => 158,  261 => 157,  257 => 156,  252 => 154,  248 => 153,  244 => 152,  240 => 151,  236 => 150,  232 => 149,  228 => 148,  223 => 146,  219 => 145,  215 => 144,  211 => 143,  207 => 142,  202 => 140,  199 => 139,  195 => 49,  192 => 48,  103 => 51,  101 => 48,  88 => 37,  79 => 30,  69 => 21,  66 => 20,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/pages/j-pro/css/j-forms.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/p-loader.css">*/
/* <style type="text/css">*/
/* #branch_select_div{*/
/*     float: right;*/
/*     padding-top: 36px;*/
/* }*/
/* </style>*/
/* */
/* {% endblock %}*/
/* */
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
/* 										 {{ page_title }}*/
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
/* 								{% include 'filter/criteria.twig' with { 'base_url': base_url } %}*/
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
/* 					<div id="page-content" style="display:none;">*/
/*                         <div id="top-card-div">*/
/* */
/*                     	</div>*/
/*     					<div class="row">*/
/*     						<div class="col-sm-12">*/
/*     							<div class="card">*/
/* 									<div class="card-header">*/
/* 										<div class="row">*/
/* 											<div class="col-sm-8 ">*/
/* 												<div class="location-title"></div>*/
/* 												<div class="collapse" id="collapse_location">*/
/* 													<div class="location-selected"></div>*/
/* 												</div>*/
/* 												<div class="period-selected"></div>*/
/* 											</div>*/
/*                                             <div class="col-md-4" id="branch_select_div">*/
/*                                                 <select class="form-control" id="branch_select"></select>*/
/*                                             </div>*/
/* 										</div>*/
/* 										<div class="row btn-option">*/
/* 											<div class="col-sm-12">*/
/* 												<div class="float-right">*/
/* 													<button data-type="line" type="button"*/
/* 														class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 														id="pdfButton">*/
/* 														<i class="fa fa-minus"></i>Line*/
/* 													</button>*/
/* 													<button data-type="area" type="button"*/
/* 														class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 														id="pdfButton">*/
/* 														<i class="fa fa-picture-o"></i>Area*/
/* 													</button>*/
/* 													<button data-type="column" type="button"*/
/* 														class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 														id="pdfButton">*/
/* 														<i class="fa fa-product-hunt"></i>Bar*/
/* 													</button>*/
/* 													<button type="button"*/
/* 														class="btn btn-secondary btn-mini waves-effect waves-light"*/
/* 														id="excelButton">*/
/* 														<i class="fa fa-file-excel-o"></i>Excel*/
/* 													</button>*/
/* 													<button type="button"*/
/* 														class="btn btn-secondary btn-mini waves-effect waves-light"*/
/* 														id="pdfButton">*/
/* 														<i class="fa fa-file-pdf-o"></i>PDF*/
/* 													</button>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="card-block chart-div">*/
/* */
/*                                     </div>*/
/*     							</div>*/
/*     						</div>*/
/*     					</div>*/
/*     					<div class="row">*/
/*                             <div class="col-sm-12">*/
/*                                 <div class="card">*/
/*                                      <div class="card-block table-div">*/
/*                                         */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
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
/* */
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
/* <!-- custom js -->*/
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_location.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_group.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_date.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_event.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/passing.js"></script>*/
/* */
/* <script>*/
/* */
/* // fnPassing.renderChart();*/
/* */
/* // fnService.getStaff();*/
/* // fnService.getLocation();*/
/* // fnService.getPeriod();*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
