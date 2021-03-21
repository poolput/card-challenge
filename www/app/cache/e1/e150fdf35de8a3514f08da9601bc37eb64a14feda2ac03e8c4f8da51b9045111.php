<?php

/* pages/summary/location/view.twig */
class __TwigTemplate_3a8c47f78d01c622278311d3011eaf6acd07e8fd082c168d6d50befd9cf9c5c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/summary/location/view.twig", 1);
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
        echo "/theme/bower_components/datatables.net/css/fixedColumns.dataTables.min.css\">";
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
\t\t\t\t\t<div id=\"page-content\" >
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"card\" >
                                    <div class=\"card-block\">
                                        <div class=\"row align-items-center m-l-0\">
                                            <div class=\"col-auto\">
                                                <i class=\"wi wi-day-haze f-30 text-c-yellow\"></i>
                                            </div>
                                            <div class=\"col-auto\">
                                                <h6 class=\"text-muted m-b-10\">Branch</h6>
                                                <h4 class=\"m-b-0 branch-total\">0</h4>
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
                                                <h6 class=\"text-muted m-b-10\">Visitor In</h6>
                                                <h4 class=\"m-b-0 sum-in\">0</h4>
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
                                            <h6 class=\"text-muted m-b-10\">Visitor Out</h6>
                                            <h4 class=\"m-b-0 sum-out\">0</h4>
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
                                            <h6 class=\"text-muted m-b-10\">Staff</h6>
                                            <h4 class=\"m-b-0 number-total-avgerage\">0</h4>
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
                                            <h6 class=\"text-muted m-b-10\"><small>Average Per Branch</small></h6>
                                            <h4 class=\"m-b-0 avgerage-branch\">0</h4>
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
                                            <h6 class=\"text-muted m-b-10\"><small>Average Per Period</small></h6>
                                            <h4 class=\"m-b-0 avgerage-period\">0</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    \t\t\t\t\t<div class=\"row\">
    \t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t<div class=\"card\" id=\"location-content\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"pie\" type=\"button\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"pdfButton\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>Pie
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
    \t\t\t\t\t<div class=\"row location-table-content d-none\">
    \t\t\t\t\t\t<div class=\"col-sm-12\">
    \t\t\t\t\t\t\t<div class=\"card\">
    \t\t\t\t\t\t\t     <div class=\"card-block\">
                                        <div class=\"dt-responsive table-responsive col-sm-12\"  >
                                            <table id=\"location_table\" class=\"table compact table-striped table-bordered order-column nowrap dataTable\" class=\"stripe row-border order-column\" style=\"width:100%\">
                                                
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

    // line 44
    public function block_criteria($context, array $blocks = array())
    {
        // line 45
        $this->loadTemplate("filter/criteria.twig", "pages/summary/location/view.twig", 45)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 223
    public function block_footer($context, array $blocks = array())
    {
        // line 224
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/highcharts.js\"></script>
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js\"></script>
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js\"></script>
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js\"></script>
<!-- datatable -->
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/dataTables.fixedColumns.min.js\" ></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/moment-with-locales.min.js\"></script>
<script src=\"";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js\"></script>
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/js/custom/popup-menu-form.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/common-pages.js\"></script>

<!-- custom js -->
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_location.js\"></script>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_group.js\"></script>
<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_date.js\"></script>
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_event.js\"></script>
<script src=\"";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/location.js\"></script>

<script>


</script>";
    }

    public function getTemplateName()
    {
        return "pages/summary/location/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 262,  415 => 261,  411 => 260,  407 => 259,  403 => 258,  399 => 257,  395 => 256,  389 => 253,  385 => 252,  380 => 250,  376 => 249,  372 => 248,  368 => 247,  364 => 246,  359 => 244,  355 => 243,  351 => 242,  347 => 241,  342 => 239,  338 => 238,  334 => 237,  330 => 236,  326 => 235,  322 => 234,  318 => 233,  314 => 232,  309 => 230,  305 => 229,  301 => 228,  297 => 227,  293 => 226,  288 => 224,  285 => 223,  281 => 45,  278 => 44,  101 => 47,  99 => 44,  86 => 33,  77 => 26,  67 => 17,  64 => 16,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
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
/* */
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
/* 					<div id="page-content" >*/
/*                         <div class="row">*/
/*                             <div class="col">*/
/*                                 <div class="card" >*/
/*                                     <div class="card-block">*/
/*                                         <div class="row align-items-center m-l-0">*/
/*                                             <div class="col-auto">*/
/*                                                 <i class="wi wi-day-haze f-30 text-c-yellow"></i>*/
/*                                             </div>*/
/*                                             <div class="col-auto">*/
/*                                                 <h6 class="text-muted m-b-10">Branch</h6>*/
/*                                                 <h4 class="m-b-0 branch-total">0</h4>*/
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
/*                                                 <h6 class="text-muted m-b-10">Visitor In</h6>*/
/*                                                 <h4 class="m-b-0 sum-in">0</h4>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         <div class="col">*/
/*                             <div class="card">*/
/*                                 <div class="card-block">*/
/*                                     <div class="row align-items-center m-l-0">*/
/*                                         <div class="col-auto">*/
/*                                             <i class="fa fa-history f-30 text-c-blue"></i>*/
/*                                         </div>*/
/*                                         <div class="col-auto">*/
/*                                             <h6 class="text-muted m-b-10">Visitor Out</h6>*/
/*                                             <h4 class="m-b-0 sum-out">0</h4>*/
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
/*                                             <h6 class="text-muted m-b-10">Staff</h6>*/
/*                                             <h4 class="m-b-0 number-total-avgerage">0</h4>*/
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
/*                                             <h6 class="text-muted m-b-10"><small>Average Per Branch</small></h6>*/
/*                                             <h4 class="m-b-0 avgerage-branch">0</h4>*/
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
/*                                             <h6 class="text-muted m-b-10"><small>Average Per Period</small></h6>*/
/*                                             <h4 class="m-b-0 avgerage-period">0</h4>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*     					<div class="row">*/
/*     						<div class="col-sm-12">*/
/*     							<div class="card" id="location-content">*/
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
/* 													<button data-type="pie" type="button"*/
/* 														class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 														id="pdfButton">*/
/* 														<i class="fa fa-picture-o"></i>Pie*/
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
/*     					<div class="row location-table-content d-none">*/
/*     						<div class="col-sm-12">*/
/*     							<div class="card">*/
/*     							     <div class="card-block">*/
/*                                         <div class="dt-responsive table-responsive col-sm-12"  >*/
/*                                             <table id="location_table" class="table compact table-striped table-bordered order-column nowrap dataTable" class="stripe row-border order-column" style="width:100%">*/
/*                                                 */
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
/* <!-- custom js -->*/
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_location.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_group.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_date.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_event.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/location.js"></script>*/
/* */
/* <script>*/
/* */
/* */
/* </script>*/
/* {% endblock %}*/
/* */
