<?php

/* templates/menu.html */
class __TwigTemplate_7756a949a3109bdecd5686c020419a440f27ceef6ad53a67975c17b949efe620 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array(
                $this,
                'block_head'
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"pcoded-main-container\">
\t<div class=\"pcoded-wrapper\">
\t\t<nav class=\"pcoded-navbar\">
\t\t\t<div class=\"pcoded-inner-navbar main-menu\">
\t\t\t\t<div class=\"pcoded-navigatio-lavel\">Navigation</div>
\t\t\t\t<ul class=\"pcoded-item pcoded-left-item\">

\t\t\t\t\t<li class=\"\"><a href=\"javascript:void(0)\"> <span
\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span> <span
\t\t\t\t\t\t\tclass=\"pcoded-mtext\">Dashboard</span>
\t\t\t\t\t</a></li>

\t\t\t\t\t<li class=\"pcoded-hasmenu\"><a href=\"javascript:void(0)\"> <span
\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-sidebar\"></i></span>
\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">News</span>
\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"pcoded-submenu\">
\t\t\t\t\t\t\t<li class=\"\"><a href=\"menu-bottom.html\"> <span
\t\t\t\t\t\t\t\t\tclass=\"pcoded-mtext\">News Category</span></a></li>
\t\t\t\t\t\t\t<li class=\"\"><a href=\"box-layout.html\"> <span
\t\t\t\t\t\t\t\t\tclass=\"pcoded-mtext\">News Detail</span></a></li>
\t\t\t\t\t\t</ul></li>

\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-airplay\"></i></span>
\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">Banner</span>
\t\t\t\t\t</a></li>

\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-video\"></i></span> <span
\t\t\t\t\t\t\tclass=\"pcoded-mtext\">Video</span>
\t\t\t\t\t</a></li>

\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-monitor\"></i></span>
\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">Live</span>
\t\t\t\t\t</a></li>

\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-image\"></i></span> <span
\t\t\t\t\t\t\tclass=\"pcoded-mtext\">Gallery</span>
\t\t\t\t\t</a></li>

\t\t\t\t</ul>

\t\t\t</div>
\t\t</nav>
\t";
    }

    public function getTemplateName()
    {
        return "templates/menu.html";
    }

    public function getDebugInfo()
    {
        return array(
            26 => 2,
            20 => 1
        );
    }
}
/* {% block head %}*/
/* <div class="pcoded-main-container">*/
/* 	<div class="pcoded-wrapper">*/
/* 		<nav class="pcoded-navbar">*/
/* 			<div class="pcoded-inner-navbar main-menu">*/
/* 				<div class="pcoded-navigatio-lavel">Navigation</div>*/
/* 				<ul class="pcoded-item pcoded-left-item">*/
/* */
/* 					<li class=""><a href="javascript:void(0)"> <span*/
/* 							class="pcoded-micon"><i class="feather icon-home"></i></span> <span*/
/* 							class="pcoded-mtext">Dashboard</span>*/
/* 					</a></li>*/
/* */
/* 					<li class="pcoded-hasmenu"><a href="javascript:void(0)"> <span*/
/* 							class="pcoded-micon"><i class="feather icon-sidebar"></i></span>*/
/* 							<span class="pcoded-mtext">News</span>*/
/* 					</a>*/
/* */
/* 						<ul class="pcoded-submenu">*/
/* 							<li class=""><a href="menu-bottom.html"> <span*/
/* 									class="pcoded-mtext">News Category</span></a></li>*/
/* 							<li class=""><a href="box-layout.html"> <span*/
/* 									class="pcoded-mtext">News Detail</span></a></li>*/
/* 						</ul></li>*/
/* */
/* 					<li class=""><a href="navbar-light.html"> <span*/
/* 							class="pcoded-micon"><i class="feather icon-airplay"></i></span>*/
/* 							<span class="pcoded-mtext">Banner</span>*/
/* 					</a></li>*/
/* */
/* 					<li class=""><a href="navbar-light.html"> <span*/
/* 							class="pcoded-micon"><i class="feather icon-video"></i></span> <span*/
/* 							class="pcoded-mtext">Video</span>*/
/* 					</a></li>*/
/* */
/* 					<li class=""><a href="navbar-light.html"> <span*/
/* 							class="pcoded-micon"><i class="feather icon-monitor"></i></span>*/
/* 							<span class="pcoded-mtext">Live</span>*/
/* 					</a></li>*/
/* */
/* 					<li class=""><a href="navbar-light.html"> <span*/
/* 							class="pcoded-micon"><i class="feather icon-image"></i></span> <span*/
/* 							class="pcoded-mtext">Gallery</span>*/
/* 					</a></li>*/
/* */
/* 				</ul>*/
/* */
/* 			</div>*/
/* 		</nav>*/
/* 	{% endblock %}*/
