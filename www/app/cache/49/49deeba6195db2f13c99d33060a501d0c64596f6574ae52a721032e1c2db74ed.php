<?php

/* pages/dashboard.twig */
class __TwigTemplate_1585a1d1e29cbf4a8f4b8c56e74edc78b26167003402892d38d60247bb456156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/dashboard.twig", 1);
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
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<!-- Main-body start -->
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<!-- Page-header start -->
\t\t\t\t<div class=\"page-header mt-2\">
\t\t\t\t\t<div class=\"row align-items-end\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- customar project  start -->
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-users f-30 text-c-pink\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Branch</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">95</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-feather f-30 text-c-green\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Staff</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">205</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-battery-charging f-30 text-c-blue\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Users</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">15</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-book f-30 text-c-lite-green\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Camera</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">128</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- statustic with progressbar  start -->
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Passing</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-success\"> 35% <i class=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">35</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-green\" style=\"width: 35%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>In</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label bg-c-lite-green\"> 35% <i class=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">28</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-lite-green\" style=\"width: 28%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Out</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-danger\"> 35% <i class=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">87</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-pink\" style=\"width: 87%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card statustic-progress-card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Inside</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-warning\"> 35% <i class=\"m-l-10 feather icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col text-right\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"\">32</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"progress m-t-15\">
\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-c-yellow\" style=\"width: 32%\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- statustic with progressbar  end -->


\t\t\t\t\t\t<!-- Main-body start -->
\t\t\t\t\t\t<div class=\"  col-md-12\">
\t\t\t\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t<!-- Area Chart start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Visitors</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">For more details about usage, please refer <a href=\"https://www.amcharts.com/online-store/\" target=\"_blank\">amCharts</a> licences.
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled card-option\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"feather icon-maximize full-card\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"feather icon-minus minimize-card\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"feather icon-trash-2 close-card\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"visitor\" style=\"height: 400px\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- LINE CHART start -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Time Inside</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"line-inside\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<!-- Donut chart Ends -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Page-body end -->


\t\t\t</div>
\t\t</div>
\t</div>
</div>


";
    }

    // line 222
    public function block_footer($context, array $blocks = array())
    {
        // line 223
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<!-- Chartlist charts -->
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/chartist/js/chartist.js\"></script>
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/chartlist/js/chartist-plugin-threshold.js\"></script>
<!-- Morris Chart js -->
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/raphael/js/raphael.min.js\"></script>
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/morris.js/js/morris.js\"></script>
<!-- i18next.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/chart.js/js/Chart.js\"></script>
<!-- amchart js -->
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/amcharts.js\"></script>
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/serial.js\"></script>
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/light.js\"></script>

<script src=\"";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/morris/morris-custom-chart.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/chartjs/chartjs-custom.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/dashboard/analytic-dashboard.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "pages/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 250,  347 => 249,  343 => 248,  339 => 247,  335 => 246,  331 => 245,  326 => 243,  321 => 241,  316 => 239,  312 => 238,  308 => 237,  303 => 235,  299 => 234,  295 => 233,  291 => 232,  287 => 231,  282 => 229,  278 => 228,  273 => 226,  269 => 225,  264 => 223,  261 => 222,  42 => 6,  39 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
/* 		<!-- Main-body start -->*/
/* 		<div class="main-body">*/
/* 			<div class="page-wrapper">*/
/* 				<!-- Page-header start -->*/
/* 				<div class="page-header mt-2">*/
/* 					<div class="row align-items-end"></div>*/
/* 				</div>*/
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* 						<!-- customar project  start -->*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-users f-30 text-c-pink"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Branch</h6>*/
/* 											<h2 class="m-b-0">95</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-feather f-30 text-c-green"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Staff</h6>*/
/* 											<h2 class="m-b-0">205</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-battery-charging f-30 text-c-blue"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Users</h6>*/
/* 											<h2 class="m-b-0">15</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="feather icon-book f-30 text-c-lite-green"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Camera</h6>*/
/* 											<h2 class="m-b-0">128</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- statustic with progressbar  start -->*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Passing</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label label-success"> 35% <i class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">35</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-green" style="width: 35%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>In</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label bg-c-lite-green"> 35% <i class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">28</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-lite-green" style="width: 28%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Out</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label label-danger"> 35% <i class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">87</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-pink" style="width: 87%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card statustic-progress-card">*/
/* 								<div class="card-header">*/
/* 									<h5>Inside</h5>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center">*/
/* 										<div class="col">*/
/* 											<label class="label label-warning"> 35% <i class="m-l-10 feather icon-arrow-up"></i>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="col text-right">*/
/* 											<h5 class="">32</h5>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="progress m-t-15">*/
/* 										<div class="progress-bar bg-c-yellow" style="width: 32%"></div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- statustic with progressbar  end -->*/
/* */
/* */
/* 						<!-- Main-body start -->*/
/* 						<div class="  col-md-12">*/
/* 							<div class="page-body">*/
/* 								<div class="row">*/
/* */
/* 									<!-- Area Chart start -->*/
/* 									<div class="col-lg-12">*/
/* 										<div class="card">*/
/* 											<div class="card-header">*/
/* 												<h5>Visitors</h5>*/
/* 												<span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.*/
/* 												</span>*/
/* 												<div class="card-header-right">*/
/* 													<ul class="list-unstyled card-option">*/
/* 														<li><i class="feather icon-maximize full-card"></i></li>*/
/* 														<li><i class="feather icon-minus minimize-card"></i></li>*/
/* 														<li><i class="feather icon-trash-2 close-card"></i></li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="card-block">*/
/* 												<div id="visitor" style="height: 400px"></div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- LINE CHART start -->*/
/* 									<div class="col-md-12 col-lg-12">*/
/* 										<div class="card">*/
/* 											<div class="card-header">*/
/* 												<h5>Time Inside</h5>*/
/* 												<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>*/
/* 											</div>*/
/* 											<div class="card-block">*/
/* 												<div id="line-inside"></div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									 */
/* 									<!-- Donut chart Ends -->*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 				</div>*/
/* 				<!-- Page-body end -->*/
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* <!-- Chartlist charts -->*/
/* <script src="{{ base_url }}/theme/bower_components/chartist/js/chartist.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/chart/chartlist/js/chartist-plugin-threshold.js"></script>*/
/* <!-- Morris Chart js -->*/
/* <script src="{{ base_url }}/theme/bower_components/raphael/js/raphael.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/morris.js/js/morris.js"></script>*/
/* <!-- i18next.min.js -->*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/chart.js/js/Chart.js"></script>*/
/* <!-- amchart js -->*/
/* <script src="{{ base_url }}/theme/assets/pages/widget/amchart/amcharts.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/widget/amchart/serial.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/widget/amchart/light.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/pages/chart/morris/morris-custom-chart.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/pages/chart/chartjs/chartjs-custom.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/SmoothScroll.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/pages/dashboard/analytic-dashboard.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* {% endblock %}*/
