<?php

/* pages/analysis/comparison/view.twig */
class __TwigTemplate_813b80cf8c7748cc024928f54b15fbed4442f5a9eae7a3e58dc18883c358dac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/analysis/comparison/view.twig", 1);
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

<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/css/j-forms.css\">
<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/feather/css/feather.css\">
<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons.min.css\">
<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css\">
<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/p-loader.css\">
<link rel=\"stylesheet\" type=\"text/css\"
\thref=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/css/fixedColumns.dataTables.min.css\">
<link rel=\"stylesheet\"
\thref=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/css/select2.min.css\" />";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 33
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 40
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
        // line 51
        $this->displayBlock('criteria', $context, $blocks);
        // line 54
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"loader animation-start d-none\">
\t\t\t\t\t\t<span class=\"circle delay-1 size-2\"></span> <span
\t\t\t\t\t\t\tclass=\"circle delay-2 size-4\"></span> <span
\t\t\t\t\t\t\tclass=\"circle delay-3 size-6\"></span> <span
\t\t\t\t\t\t\tclass=\"circle delay-4 size-7\"></span> <span
\t\t\t\t\t\t\tclass=\"circle delay-5 size-7\"></span> <span
\t\t\t\t\t\t\tclass=\"circle delay-6 size-6\"></span> <span
\t\t\t\t\t\t\tclass=\"circle delay-7 size-4\"></span> <span
\t\t\t\t\t\t\tclass=\"circle delay-8 size-2\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"page-content\" class=\"comparison-content\">

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
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
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" id=\"comparision-content\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"  \" id=\"comparision-table\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    // line 51
    public function block_criteria($context, array $blocks = array())
    {
        // line 52
        $this->loadTemplate("filter/criteria_comparison.twig", "pages/analysis/comparison/view.twig", 52)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 117
    public function block_footer($context, array $blocks = array())
    {
        // line 118
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

<script
\tsrc=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/highcharts.js\"></script>
<script
\tsrc=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js\"></script>
<script
\tsrc=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/heatmap.js\"></script>
<script
\tsrc=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js\"></script>
<script
\tsrc=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js\"></script>
<script
\tsrc=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js\"></script>

<!-- datatable -->
<script
\tsrc=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\"></script>
<script
\tsrc=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/dataTables.fixedColumns.min.js\"></script>
<script
\tsrc=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script
\tsrc=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\"></script>
<script
\tsrc=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\"></script>
<script
\tsrc=\"";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
<script
\tsrc=\"";
        // line 147
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
<script
\tsrc=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\"></script>

<script
\tsrc=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/moment-with-locales.min.js\"></script>
<script
\tsrc=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script
\tsrc=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js\"></script>
<script
\tsrc=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js\"></script>

<script type=\"text/javascript\"
\tsrc=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script
\tsrc=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\"
\tsrc=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script type=\"text/javascript\"
\tsrc=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/js/custom/popup-menu-form.js\"></script>
<script type=\"text/javascript\"
\tsrc=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/common-pages.js\"></script>

<script type=\"text/javascript\"
\tsrc=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<!-- custom js -->
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_location.js\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_group.js\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_date_comparison.js\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/comparison.js\"></script>";
    }

    public function getTemplateName()
    {
        return "pages/analysis/comparison/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 183,  343 => 182,  339 => 181,  335 => 180,  331 => 179,  327 => 178,  321 => 175,  315 => 172,  310 => 170,  304 => 167,  299 => 165,  295 => 164,  290 => 162,  286 => 161,  280 => 158,  275 => 156,  270 => 154,  265 => 152,  259 => 149,  254 => 147,  249 => 145,  244 => 143,  239 => 141,  234 => 139,  229 => 137,  224 => 135,  217 => 131,  212 => 129,  207 => 127,  202 => 125,  197 => 123,  192 => 121,  186 => 118,  183 => 117,  179 => 52,  176 => 51,  112 => 54,  110 => 51,  97 => 40,  88 => 33,  78 => 24,  75 => 23,  70 => 19,  65 => 17,  60 => 15,  55 => 13,  50 => 11,  45 => 9,  40 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css"*/
/* 	href="{{ base_url }}/theme/assets/pages/j-pro/css/j-forms.css">*/
/* <link rel="stylesheet" type="text/css"*/
/* 	href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/* <link rel="stylesheet" type="text/css"*/
/* 	href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons.min.css">*/
/* <link rel="stylesheet" type="text/css"*/
/* 	href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css">*/
/* <link rel="stylesheet" type="text/css"*/
/* 	href="{{ base_url }}/theme/assets/css/p-loader.css">*/
/* <link rel="stylesheet" type="text/css"*/
/* 	href="{{ base_url }}/theme/bower_components/datatables.net/css/fixedColumns.dataTables.min.css">*/
/* <link rel="stylesheet"*/
/* 	href="{{ base_url }}/theme/bower_components/select2/css/select2.min.css" />*/
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
/* 										{{ page_title }}*/
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
/* 								{% include 'filter/criteria_comparison.twig' with { 'base_url': base_url} %}*/
/* 								{% endblock %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="loader animation-start d-none">*/
/* 						<span class="circle delay-1 size-2"></span> <span*/
/* 							class="circle delay-2 size-4"></span> <span*/
/* 							class="circle delay-3 size-6"></span> <span*/
/* 							class="circle delay-4 size-7"></span> <span*/
/* 							class="circle delay-5 size-7"></span> <span*/
/* 							class="circle delay-6 size-6"></span> <span*/
/* 							class="circle delay-7 size-4"></span> <span*/
/* 							class="circle delay-8 size-2"></span>*/
/* 					</div>*/
/* 					<div id="page-content" class="comparison-content">*/
/* */
/* 						<div class="row">*/
/* 							<div class="col-sm-12">*/
/* 								<div class="card">*/
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
/* 										<div class="row">*/
/* 											<div class="col-sm-12" id="comparision-content"></div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 								</div>*/
/* 								<div class="  " id="comparision-table"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/*  */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* */
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/highcharts.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/heatmap.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js"></script>*/
/* */
/* <!-- datatable -->*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net/js/dataTables.fixedColumns.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>*/
/* */
/* <script*/
/* 	src="{{ base_url }}/theme/assets/pages/advance-elements/moment-with-locales.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>*/
/* */
/* <script type="text/javascript"*/
/* 	src="{{ base_url }}/theme/assets/js/SmoothScroll.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script*/
/* 	src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script type="text/javascript"*/
/* 	src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* <script type="text/javascript"*/
/* 	src="{{ base_url }}/theme/assets/pages/j-pro/js/custom/popup-menu-form.js"></script>*/
/* <script type="text/javascript"*/
/* 	src="{{ base_url }}/theme/assets/js/common-pages.js"></script>*/
/* */
/* <script type="text/javascript"*/
/* 	src="{{ base_url }}/theme/bower_components/select2/js/select2.full.min.js"></script>*/
/* */
/* <!-- custom js -->*/
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_location.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_group.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_date_comparison.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/comparison.js"></script>*/
/* */
/* */
/* {% endblock %}*/
/* */
