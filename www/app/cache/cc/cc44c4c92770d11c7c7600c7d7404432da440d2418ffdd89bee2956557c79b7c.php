<?php

/* pages/dashboard/view.twig */
class __TwigTemplate_e18cdad06f37d27b5e597f90f060a81f0c1ec49284da5de52a60062cec7300a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/dashboard/view.twig", 1);
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
        echo "/theme/assets/pages/j-pro/css/j-forms.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/feather/css/feather.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/p-loader.css\">

";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<!-- Main-body start -->
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<!-- row start -->
\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t<div class=\"col-xl-9 col-md-12 h6 mb-5\">
\t\t\t\t\t\t\t<span class=\"pr-1\">Click:</span> <span class=\"font-weight-bold\">10</span>
\t\t\t\t\t\t\t<span class=\"pr-1 pl-3\">My Best:</span><span class=\"font-weight-bold\">15</span>
\t\t\t\t\t\t\t<span class=\"pr-1 pl-3\">Global Best:</span><span class=\"font-weight-bold\">12</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-12 text-right\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block p-t-15 p-b-15\">New Game</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center m-l-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icofont icofont-chart-flow-alt-2 f-30 text-c-pink\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted m-b-10\">Branchs</h6>
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["total_branchs"]) ? $context["total_branchs"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</h2>
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
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["total_staffs"]) ? $context["total_staffs"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</h2>
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
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["total_users"]) ? $context["total_users"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</h2>
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
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"m-b-0\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["total_cameras"]) ? $context["total_cameras"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    // line 109
    public function block_footer($context, array $blocks = array())
    {
        // line 110
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
 
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/dashboard.js\"></script>

";
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
        return array (  191 => 114,  187 => 113,  183 => 112,  178 => 110,  175 => 109,  155 => 93,  135 => 76,  115 => 59,  95 => 42,  64 => 13,  61 => 12,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/pages/j-pro/css/j-forms.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/p-loader.css">*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/* 	<div class="pcoded-inner-content">*/
/* 		<!-- Main-body start -->*/
/* 		<div class="main-body">*/
/* 			<div class="page-wrapper">*/
/* 				<div class="page-body">*/
/* 					<!-- row start -->*/
/* 					<div class="row mb-5">*/
/* 						<div class="col-xl-9 col-md-12 h6 mb-5">*/
/* 							<span class="pr-1">Click:</span> <span class="font-weight-bold">10</span>*/
/* 							<span class="pr-1 pl-3">My Best:</span><span class="font-weight-bold">15</span>*/
/* 							<span class="pr-1 pl-3">Global Best:</span><span class="font-weight-bold">12</span>*/
/* 						</div>*/
/* 						<div class="col-xl-3 col-md-12 text-right">*/
/* 							<button class="btn btn-primary btn-block p-t-15 p-b-15">New Game</button>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-xl-3 col-md-6">*/
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="row align-items-center m-l-0">*/
/* 										<div class="col-auto">*/
/* 											<i class="icofont icofont-chart-flow-alt-2 f-30 text-c-pink"></i>*/
/* 										</div>*/
/* 										<div class="col-auto">*/
/* 											<h6 class="text-muted m-b-10">Branchs</h6>*/
/* 											<h2 class="m-b-0">*/
/* 												{{ total_branchs }}*/
/* 											</h2>*/
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
/* 											<h2 class="m-b-0">*/
/* 												{{ total_staffs }}*/
/* 											</h2>*/
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
/* 											<h2 class="m-b-0">*/
/* 												{{ total_users }}*/
/* 											</h2>*/
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
/* 											<h2 class="m-b-0">*/
/* 												{{ total_cameras }}*/
/* 											</h2>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/*  */
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/dashboard.js"></script>*/
/* */
/* {% endblock %}*/
