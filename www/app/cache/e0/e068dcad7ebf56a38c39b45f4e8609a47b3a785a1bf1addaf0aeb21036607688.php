<?php

/* pages/summary/compare/view.twig */
class __TwigTemplate_e25f3a79720e4d77a26899dcbf56936fcdce612043965fe2f64f423ea027aac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/summary/compare/view.twig", 1);
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
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 24
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 31
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
        // line 42
        $this->displayBlock('criteria', $context, $blocks);
        // line 45
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
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-block\">
                                        <div class=\"row align-items-center m-l-0\">
                                            <div class=\"col-auto\">
                                                <i class=\"wi wi-day-haze f-30 text-c-yellow\"></i>
                                            </div>
                                            <div class=\"col-auto\">
                                                <h6 class=\"text-muted m-b-10\">Visitor In</h6>
                                                <h2 class=\"m-b-0 number-total-in\">0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"card\">
                                    <div class=\"card-block\">
                                        <div class=\"row align-items-center m-l-0\">
                                            <div class=\"col-auto\">
                                                <i class=\"wi wi-day-cloudy f-30 text-c-pink\"></i>
                                            </div>
                                            <div class=\"col-auto\">
                                                <h6 class=\"text-muted m-b-10\">Visitor Out</h6>
                                                <h2 class=\"m-b-0 number-total-out\">0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
 
                        <div class=\"col\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <div class=\"row align-items-center m-l-0\">
                                        <div class=\"col-auto\">
                                            <i class=\"fa fa-history f-30 text-c-blue\"></i>
                                        </div>
                                        <div class=\"col-auto\">
                                            <h6 class=\"text-muted m-b-10\">Staff</h6>
                                            <h2 class=\"m-b-0 number-total-staff\">0</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <div class=\"row align-items-center m-l-0\">
                                        <div class=\"col-auto\">
                                            <i class=\"wi wi-day-haze f-30 text-c-yellow\"></i>
                                        </div>
                                        <div class=\"col-auto\">
                                            <h6 class=\"text-muted m-b-10\">Average</h6>
                                            <h2 class=\"m-b-0 number-total-avgerage\">0</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
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
                                                        <th class=\"text-center\" >Time</th>
                                                        <th class=\"text-center\" >Visitor In</th>
                                                        <th class=\"text-center\" >Visitor In Trend</th>
                                                        <th class=\"text-center\" >Visitor Out</th>
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

    // line 42
    public function block_criteria($context, array $blocks = array())
    {
        // line 43
        $this->loadTemplate("component/criteria_compare.twig", "pages/summary/compare/view.twig", 43)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 203
    public function block_footer($context, array $blocks = array())
    {
        // line 204
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/highcharts.js\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js\"></script>
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js\"></script>
<!-- datatable -->
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

 <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/moment-with-locales.min.js\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js\"></script>
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/js/custom/popup-menu-form.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/common-pages.js\"></script>

<!-- custom js -->
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/visitor.js\"></script>

<script>
var categories = '";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "categories", array()), "html", null, true);
        echo "';
var data_in = '";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "data_in", array()), "html", null, true);
        echo "';
var data_out = '";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "data_out", array()), "html", null, true);
        echo "';
var data_trend = '";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "data_trend", array()), "html", null, true);
        echo "';

fnVisitor.categories = categories.split(\",\");
fnVisitor.data_1 = JSON.parse(\"[\" + data_in + \"]\");
fnVisitor.data_2 = JSON.parse(\"[\" + data_out + \"]\");
fnVisitor.data_3 = JSON.parse(\"[\" + data_trend + \"]\");
fnVisitor.renderChart();

fnService.getStaff();
fnService.getLocation();
fnService.getPeriod();

\$('.series-type').click(function(){
\tfnVisitor.updateChart(\$(this).data('type'));
});

</script>";
    }

    public function getTemplateName()
    {
        return "pages/summary/compare/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 243,  391 => 242,  387 => 241,  383 => 240,  377 => 237,  373 => 236,  369 => 235,  363 => 232,  359 => 231,  354 => 229,  350 => 228,  346 => 227,  342 => 226,  338 => 225,  333 => 223,  329 => 222,  325 => 221,  321 => 220,  316 => 218,  312 => 217,  308 => 216,  304 => 215,  300 => 214,  296 => 213,  292 => 212,  287 => 210,  283 => 209,  279 => 208,  275 => 207,  271 => 206,  266 => 204,  263 => 203,  259 => 43,  256 => 42,  97 => 45,  95 => 42,  82 => 31,  73 => 24,  63 => 15,  60 => 14,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
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
/* 								{% include 'component/criteria_compare.twig' with { 'base_url': base_url } %}*/
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
/*                         <div class="row">*/
/*                             <div class="col">*/
/*                                 <div class="card">*/
/*                                     <div class="card-block">*/
/*                                         <div class="row align-items-center m-l-0">*/
/*                                             <div class="col-auto">*/
/*                                                 <i class="wi wi-day-haze f-30 text-c-yellow"></i>*/
/*                                             </div>*/
/*                                             <div class="col-auto">*/
/*                                                 <h6 class="text-muted m-b-10">Visitor In</h6>*/
/*                                                 <h2 class="m-b-0 number-total-in">0</h2>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col">*/
/*                                 <div class="card">*/
/*                                     <div class="card-block">*/
/*                                         <div class="row align-items-center m-l-0">*/
/*                                             <div class="col-auto">*/
/*                                                 <i class="wi wi-day-cloudy f-30 text-c-pink"></i>*/
/*                                             </div>*/
/*                                             <div class="col-auto">*/
/*                                                 <h6 class="text-muted m-b-10">Visitor Out</h6>*/
/*                                                 <h2 class="m-b-0 number-total-out">0</h2>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*  */
/*                         <div class="col">*/
/*                             <div class="card">*/
/*                                 <div class="card-block">*/
/*                                     <div class="row align-items-center m-l-0">*/
/*                                         <div class="col-auto">*/
/*                                             <i class="fa fa-history f-30 text-c-blue"></i>*/
/*                                         </div>*/
/*                                         <div class="col-auto">*/
/*                                             <h6 class="text-muted m-b-10">Staff</h6>*/
/*                                             <h2 class="m-b-0 number-total-staff">0</h2>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col">*/
/*                             <div class="card">*/
/*                                 <div class="card-block">*/
/*                                     <div class="row align-items-center m-l-0">*/
/*                                         <div class="col-auto">*/
/*                                             <i class="wi wi-day-haze f-30 text-c-yellow"></i>*/
/*                                         </div>*/
/*                                         <div class="col-auto">*/
/*                                             <h6 class="text-muted m-b-10">Average</h6>*/
/*                                             <h2 class="m-b-0 number-total-avgerage">0</h2>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
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
/* 									<div class="card-block">*/
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
/*                                                         <th class="text-center" >Time</th>*/
/*                                                         <th class="text-center" >Visitor In</th>*/
/*                                                         <th class="text-center" >Visitor In Trend</th>*/
/*                                                         <th class="text-center" >Visitor Out</th>*/
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
/* <script src="{{ base_url }}/theme/assets/js/visitor.js"></script>*/
/* */
/* <script>*/
/* var categories = '{{ result.categories }}';*/
/* var data_in = '{{ result.data_in }}';*/
/* var data_out = '{{ result.data_out }}';*/
/* var data_trend = '{{ result.data_trend }}';*/
/* */
/* fnVisitor.categories = categories.split(",");*/
/* fnVisitor.data_1 = JSON.parse("[" + data_in + "]");*/
/* fnVisitor.data_2 = JSON.parse("[" + data_out + "]");*/
/* fnVisitor.data_3 = JSON.parse("[" + data_trend + "]");*/
/* fnVisitor.renderChart();*/
/* */
/* fnService.getStaff();*/
/* fnService.getLocation();*/
/* fnService.getPeriod();*/
/* */
/* $('.series-type').click(function(){*/
/* 	fnVisitor.updateChart($(this).data('type'));*/
/* });*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
