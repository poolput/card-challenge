<?php

/* pages/dashboard/view.twig */
class __TwigTemplate_578495bfb03a7c83e17a74b5522b1da018af8d1174c895cd236287155fc6bcf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/dashboard/view.twig", 1);
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
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/css/j-forms.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/feather/css/feather.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/p-loader.css\">


<style type=\"text/css\">
.hidden{
\tdisplay: none;
}

.export-row-btn{
\tmargin-bottom: 15px;
}
</style>";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<!-- Main-body start -->
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<!-- Page-header start -->
\t\t\t\t<!-- <div class=\"page-header mt-2\">
\t\t\t\t\t<div class=\"row align-items-end\"></div>
\t\t\t\t</div> -->
\t\t\t\t<div class=\"hidden\">";
        // line 36
        $this->displayBlock('criteria', $context, $blocks);
        // line 39
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-right export-row-btn\">
\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\tclass=\"btn btn-secondary btn-mini waves-effect waves-light\"
\t\t\t\t\t\t\tid=\"excelButton\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-excel-o\"></i>Excel
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"button\"
\t\t\t\t\t\t\tclass=\"btn btn-secondary btn-mini waves-effect waves-light\"
\t\t\t\t\t\t\tid=\"pdfButton\">
\t\t\t\t\t\t\t<i class=\"fa fa-file-pdf-o\"></i>PDF
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<!-- customar project  start -->
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-chart-flow-alt-2 f-30 text-c-pink\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Branchs</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["total_branchs"]) ? $context["total_branchs"] : null), "html", null, true);
        echo "</h2>
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
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-people f-30 text-c-green\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Staffs</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["total_staffs"]) ? $context["total_staffs"] : null), "html", null, true);
        echo "</h2>
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
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-ui-user-group f-30 text-c-blue\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Users</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["total_users"]) ? $context["total_users"] : null), "html", null, true);
        echo "</h2>
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
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-video-camera f-30 text-c-lite-green\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Cameras</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["total_cameras"]) ? $context["total_cameras"] : null), "html", null, true);
        echo "</h2>
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
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"row btn-option\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"line\" type=\"button\" data-chartref=\"visitor-summary\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>Line
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"area\" type=\"button\" data-chartref=\"visitor-summary\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>Area
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"column\" type=\"button\" data-chartref=\"visitor-summary\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-product-hunt\"></i>Bar
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div id=\"visitor-summary-chart\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"row btn-option\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"pie\" type=\"button\" data-chartref=\"location-breakdown\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-pie-chart \"></i>Pie
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"line\" type=\"button\" data-chartref=\"location-breakdown\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>Line
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div id=\"breakdown-chart\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"row btn-option\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"line\" type=\"button\" data-chartref=\"visitor-7day\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>Line
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"area\" type=\"button\" data-chartref=\"visitor-7day\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>Area
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"column\" type=\"button\" data-chartref=\"visitor-7day\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light \"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-product-hunt\"></i>Bar
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div id=\"visitor7day-chart\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"row btn-option\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div id=\"conversion-rate-chart\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"row btn-option\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"float-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"line\" type=\"button\" data-chartref=\"top-event\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light\"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus\"></i>Line
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"area\" type=\"button\" data-chartref=\"top-event\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light\"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>Area
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button data-type=\"column\" type=\"button\" data-chartref=\"top-event\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"series-type btn btn-outline-secondary btn-mini waves-effect waves-light\"
\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-product-hunt\"></i>Bar
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div id=\"top-event-chart\"></div>
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

    // line 36
    public function block_criteria($context, array $blocks = array())
    {
        // line 37
        $this->loadTemplate("filter/criteria.twig", "pages/dashboard/view.twig", 37)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 357
    public function block_footer($context, array $blocks = array())
    {
        // line 358
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<!-- highchart -->
<script src=\"";
        // line 360
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/highcharts.js\"></script>
<script src=\"";
        // line 361
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js\"></script>
<script src=\"";
        // line 362
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js\"></script>
<script src=\"";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js\"></script>
<script src=\"";
        // line 364
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js\"></script>
<!-- Chartlist charts -->
<script src=\"";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/chartist/js/chartist.js\"></script>
<script src=\"";
        // line 367
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/chartlist/js/chartist-plugin-threshold.js\"></script>
<!-- Morris Chart js -->
<script src=\"";
        // line 369
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/raphael/js/raphael.min.js\"></script>
<script src=\"";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/morris.js/js/morris.js\"></script>
<!-- i18next.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 373
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 375
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 376
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/chart.js/js/Chart.js\"></script>
<!-- amchart js -->
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/amcharts.js\"></script>
<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/serial.js\"></script>
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/light.js\"></script>


<script type=\"text/javascript\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 388
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_location.js\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_group.js\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_date.js\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_event.js\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/dashboard.js\"></script>

<script>
\t// \$('#search').trigger(\"click\");
</script>";
    }

    public function getTemplateName()
    {
        return "pages/dashboard/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 395,  548 => 394,  544 => 393,  540 => 392,  536 => 391,  532 => 390,  528 => 389,  524 => 388,  519 => 386,  515 => 385,  511 => 384,  507 => 383,  501 => 380,  497 => 379,  493 => 378,  488 => 376,  484 => 375,  480 => 374,  476 => 373,  472 => 372,  467 => 370,  463 => 369,  458 => 367,  454 => 366,  449 => 364,  445 => 363,  441 => 362,  437 => 361,  433 => 360,  428 => 358,  425 => 357,  421 => 37,  418 => 36,  171 => 111,  153 => 96,  135 => 81,  117 => 66,  88 => 39,  86 => 36,  74 => 25,  71 => 24,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  34 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* */
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/pages/j-pro/css/j-forms.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/p-loader.css">*/
/* */
/* */
/* <style type="text/css">*/
/* .hidden{*/
/* 	display: none;*/
/* }*/
/* */
/* .export-row-btn{*/
/* 	margin-bottom: 15px;*/
/* }*/
/* </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/* 	<div class="pcoded-inner-content">*/
/* 		<!-- Main-body start -->*/
/* 		<div class="main-body">*/
/* 			<div class="page-wrapper">*/
/* 				<!-- Page-header start -->*/
/* 				<!-- <div class="page-header mt-2">*/
/* 					<div class="row align-items-end"></div>*/
/* 				</div> -->*/
/* 				<div class="hidden">*/
/* 					{% block criteria %}*/
/* 					{% include 'filter/criteria.twig' with { 'base_url': base_url } %}*/
/* 					{% endblock %}*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="col-md-12 text-right export-row-btn">*/
/* 						<button type="button"*/
/* 							class="btn btn-secondary btn-mini waves-effect waves-light"*/
/* 							id="excelButton">*/
/* 							<i class="fa fa-file-excel-o"></i>Excel*/
/* 						</button>*/
/* 						<button type="button"*/
/* 							class="btn btn-secondary btn-mini waves-effect waves-light"*/
/* 							id="pdfButton">*/
/* 							<i class="fa fa-file-pdf-o"></i>PDF*/
/* 						</button>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* 						<!-- customar project  start -->*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="icofont icofont-chart-flow-alt-2 f-30 text-c-pink"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Branchs</h6>*/
/* 											<h2 class="m-b-0">{{ total_branchs }}</h2>*/
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
/* 											<i class="icofont icofont-people f-30 text-c-green"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Staffs</h6>*/
/* 											<h2 class="m-b-0">{{ total_staffs }}</h2>*/
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
/* 											<i class="icofont icofont-ui-user-group f-30 text-c-blue"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Users</h6>*/
/* 											<h2 class="m-b-0">{{ total_users }}</h2>*/
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
/* 											<i class="ti-video-camera f-30 text-c-lite-green"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Cameras</h6>*/
/* 											<h2 class="m-b-0">{{ total_cameras }}</h2>*/
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
/* 					</div>*/
/* */
/* 					*/
/* 					<div class="row">*/
/* 						<div class="col">*/
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									<div class="row btn-option">*/
/* 										<div class="col-sm-12">*/
/* 											<div class="float-right">*/
/* 												<button data-type="line" type="button" data-chartref="visitor-summary"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="fa fa-minus"></i>Line*/
/* 												</button>*/
/* 												<button data-type="area" type="button" data-chartref="visitor-summary"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="fa fa-picture-o"></i>Area*/
/* 												</button>*/
/* 												<button data-type="column" type="button" data-chartref="visitor-summary"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="fa fa-product-hunt"></i>Bar*/
/* 												</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div id="visitor-summary-chart"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 						<div class="col">*/
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									<div class="row btn-option">*/
/* 										<div class="col-sm-12">*/
/* 											<div class="float-right">*/
/* 												<button data-type="pie" type="button" data-chartref="location-breakdown"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="icofont icofont-pie-chart "></i>Pie*/
/* 												</button>*/
/* 												<button data-type="line" type="button" data-chartref="location-breakdown"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="fa fa-minus"></i>Line*/
/* 												</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div id="breakdown-chart"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="col">*/
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									<div class="row btn-option">*/
/* 										<div class="col-sm-12">*/
/* 											<div class="float-right">*/
/* 												<button data-type="line" type="button" data-chartref="visitor-7day"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="fa fa-minus"></i>Line*/
/* 												</button>*/
/* 												<button data-type="area" type="button" data-chartref="visitor-7day"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="fa fa-picture-o"></i>Area*/
/* 												</button>*/
/* 												<button data-type="column" type="button" data-chartref="visitor-7day"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light "*/
/* 													id="">*/
/* 													<i class="fa fa-product-hunt"></i>Bar*/
/* 												</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div id="visitor7day-chart"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 						<div class="col">*/
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									<div class="row btn-option">*/
/* 										<div class="col-sm-12">*/
/* 											<div class="float-right">*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div id="conversion-rate-chart"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="col">*/
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									<div class="row btn-option">*/
/* 										<div class="col-sm-12">*/
/* 											<div class="float-right">*/
/* 												<button data-type="line" type="button" data-chartref="top-event"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light"*/
/* 													id="">*/
/* 													<i class="fa fa-minus"></i>Line*/
/* 												</button>*/
/* 												<button data-type="area" type="button" data-chartref="top-event"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light"*/
/* 													id="">*/
/* 													<i class="fa fa-picture-o"></i>Area*/
/* 												</button>*/
/* 												<button data-type="column" type="button" data-chartref="top-event"*/
/* 													class="series-type btn btn-outline-secondary btn-mini waves-effect waves-light"*/
/* 													id="">*/
/* 													<i class="fa fa-product-hunt"></i>Bar*/
/* 												</button>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div id="top-event-chart"></div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
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
/* <!-- highchart -->*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/highcharts.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/series-label.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/exporting.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/export-data.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/highcharts-8.2.0/code/modules/accessibility.js"></script>*/
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
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/SmoothScroll.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_location.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_group.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_date.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_event.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/dashboard.js"></script>*/
/* */
/* <script>*/
/* 	// $('#search').trigger("click");*/
/* </script>*/
/* */
/* {% endblock %}*/
