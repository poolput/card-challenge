<?php

/* pages/summary/heatmap/view.twig */
class __TwigTemplate_4900d1542bd9c8b7964e69da0ffa9b8b1348389cca7d08b1dd67b8657917506f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/summary/heatmap/view.twig", 1);
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/css/fixedColumns.dataTables.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/css/select2.min.css\" />";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 26
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 33
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
        // line 44
        $this->displayBlock('criteria', $context, $blocks);
        // line 47
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
\t\t\t\t\t<div id=\"page-content\" class=\"heatmap-density\">
                         
    \t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"location-title\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapse_location\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"location-selected\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"period-selected\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row btn-option\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
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
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
    \t\t\t\t\t\t\t\t\t
                                        <div class=\"row\">
                    \t\t\t\t\t\t<div class=\"col-sm-12\" id=\"heatmap-content\">
                                                 
                    \t\t\t\t\t\t</div>
                    \t\t\t\t\t</div>
    \t\t\t\t\t\t\t\t</div>
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

    // line 44
    public function block_criteria($context, array $blocks = array())
    {
        // line 45
        $this->loadTemplate("filter/criteria.twig", "pages/summary/heatmap/view.twig", 45)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/highcharts.js\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/heatmap.js\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js\"></script>

<!-- datatable -->
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/dataTables.fixedColumns.min.js\" ></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/moment-with-locales.min.js\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/js/custom/popup-menu-form.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/common-pages.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<!-- custom js -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_location.js\"></script>
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_group.js\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_date.js\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_event.js\"></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/heatmap.js\"></script>";
    }

    public function getTemplateName()
    {
        return "pages/summary/heatmap/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 154,  317 => 153,  313 => 152,  309 => 151,  305 => 150,  301 => 149,  297 => 148,  291 => 145,  286 => 143,  282 => 142,  277 => 140,  273 => 139,  269 => 138,  265 => 137,  261 => 136,  256 => 134,  252 => 133,  248 => 132,  244 => 131,  239 => 129,  235 => 128,  231 => 127,  227 => 126,  223 => 125,  219 => 124,  215 => 123,  211 => 122,  205 => 119,  201 => 118,  197 => 117,  193 => 116,  189 => 115,  185 => 114,  180 => 112,  177 => 111,  173 => 45,  170 => 44,  105 => 47,  103 => 44,  90 => 33,  81 => 26,  71 => 17,  68 => 16,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
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
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/datatables.net/css/fixedColumns.dataTables.min.css">*/
/* <link rel="stylesheet" href="{{ base_url }}/theme/bower_components/select2/css/select2.min.css" /> */
/*  */
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
/* 								{% include 'filter/criteria.twig' with { 'base_url': base_url} %}*/
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
/* 					<div id="page-content" class="heatmap-density">*/
/*                          */
/*     					<div class="row">*/
/*     						<div class="col-sm-12">*/
/*     							<div class="card">*/
/* 									<div class="card-header">*/
/* 										<div class="row">*/
/* 											<div class="col-sm-12 ">*/
/* 												<div class="location-title"></div>*/
/* 												<div class="collapse" id="collapse_location">*/
/* 													<div class="location-selected"></div>*/
/* 												</div>*/
/* 												<div class="period-selected"></div>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="row btn-option">*/
/* 											<div class="col-sm-12">*/
/* 												<div class="float-right">*/
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
/* 									<div class="card-block">*/
/*     									*/
/*                                         <div class="row">*/
/*                     						<div class="col-sm-12" id="heatmap-content">*/
/*                                                  */
/*                     						</div>*/
/*                     					</div>*/
/*     								</div>*/
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
/* */
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/highcharts.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/heatmap.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js"></script>*/
/* */
/* <!-- datatable -->*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net/js/jquery.dataTables.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net/js/dataTables.fixedColumns.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" ></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/pages/advance-elements/moment-with-locales.min.js"></script>*/
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
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/select2/js/select2.full.min.js"></script>*/
/* */
/* <!-- custom js -->*/
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_location.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_group.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_date.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_event.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/heatmap.js"></script>*/
/* */
/* {% endblock %}*/
/* */
