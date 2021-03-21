<?php

/* pages/dashboard.php */
class __TwigTemplate_f12941266b0bf78b62f8070f8d663a9915fb1899a97c1b1720395aad413b5c9c extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
        echo " Thailand Boxing Associations</title>
    
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"description\" content=\"Thailand Boxing Associations\">
    <meta name=\"keywords\" content=\"Thailand Boxing Associations\">
    <meta name=\"author\" content=\"Thailand Boxing Associations\">
    
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/img/boxing_icon_blue.png\" type=\"image/x-icon\">
    
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/themify-icons/themify-icons.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/icofont/css/icofont.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/feather/css/feather.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/jquery.mCustomScrollbar.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/scss/partials/menu/_pcmenu.scss\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/custom.css\">
    
</head>
<body>

\t<div class=\"theme-loader\">
\t\t<div class=\"ball-scale\">
\t\t\t<div class='contain'>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ring\">
\t\t\t\t\t<div class=\"frame\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"pcoded\" class=\"pcoded\">
\t\t<div class=\"pcoded-overlay-box\"></div>
\t\t<div class=\"pcoded-container navbar-wrapper\">
\t\t\t<nav class=\"navbar header-navbar pcoded-header\">
\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t<div class=\"navbar-logo\"  style=\"background-color: #fff;\">
\t\t\t\t\t\t<a class=\"mobile-menu\" id=\"mobile-collapse\" href=\"#!\"> <i class=\"feather icon-menu\" style=\"color: #000;\"></i></a> 
\t\t\t\t\t\t<a href=\"./\"> <img class=\"img-fluid\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/img/logo.png\" alt=\"Thailand Boxing Associations\"  style=\"height:45px;\" /></a> 
\t\t\t\t\t\t<a class=\"mobile-options\"> <i class=\"feather icon-more-horizontal\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-container container-fluid\">
\t
\t\t\t\t\t\t<ul class=\"nav-right\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"user-profile header-notification\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-primary dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/avatar-4.jpg\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-radius\" alt=\"User-Profile-Image\"> <span>Administrator</span>
\t\t\t\t\t\t\t\t\t\t<i class=\"feather icon-chevron-down\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\tclass=\"show-notification profile-notification dropdown-menu\"
\t\t\t\t\t\t\t\t\t\tdata-dropdown-in=\"fadeIn\" data-dropdown-out=\"fadeOut\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#!\"> <i class=\"feather icon-settings\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"user-profile.html\"> <i class=\"feather icon-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"auth-normal-sign-in.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"feather icon-log-out\"></i> Logout
\t\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>

\t\t\t<div class=\"pcoded-main-container\">
\t\t\t\t<div class=\"pcoded-wrapper\">
\t\t\t\t\t<nav class=\"pcoded-navbar\">
\t\t\t\t\t\t<div class=\"pcoded-inner-navbar main-menu\">
\t\t\t\t\t\t\t<div class=\"pcoded-navigatio-lavel\">Navigation</div>
\t\t\t\t\t\t\t<ul class=\"pcoded-item pcoded-left-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"> 
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-micon\"><i class=\"feather icon-home\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">Dashboard</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"pcoded-hasmenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"> 
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-micon\"><i class=\"feather icon-sidebar\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">News</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"pcoded-submenu\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"menu-bottom.html\"> <span class=\"pcoded-mtext\">News Category</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"box-layout.html\"> <span class=\"pcoded-mtext\">News Detail</span></a></li>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-airplay\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">Banner</span>
\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-video\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">Video</span>
\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-monitor\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">Live</span>
\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"\"><a href=\"navbar-light.html\"> <span
\t\t\t\t\t\t\t\t\t\tclass=\"pcoded-micon\"><i class=\"feather icon-image\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pcoded-mtext\">Gallery</span>
\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t\t\t\t<div class=\"pcoded-content\">
\t\t\t\t\t\t<div class=\"pcoded-inner-content\">

\t\t\t\t\t\t\t<div class=\"main-body\">
\t\t\t\t\t\t\t\t<div class=\"page-wrapper\">

\t\t\t\t\t\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>Dashboard</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumb-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"index.html\"> <i
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"feather icon-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#!\">Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--  edit here
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Hello Card</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>\"Lorem ipsum dolor sit amet, consectetur adipiscing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\telit, sed do eiusmod tempor incididunt ut labore et
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdolore magna aliqua. Ut enim ad minim veniam, quis
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnostrud exercitation ullamco laboris nisi ut aliquip ex
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tea commodo consequat. Duis aute irure dolor in
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\treprehenderit in voluptate velit esse cillum dolore eu
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfugiat nulla pariatur. Excepteur sint occaecat cupidatat
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tnon proident, sunt in culpa qui officia deserunt mollit
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tanim id est laborum.\"</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery/js/jquery.min.js\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/popper.js/js/popper.min.js\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/modernizr/js/modernizr.js\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/modernizr/js/css-scrollbars.js\"></script>
    <script src=\"";
        // line 236
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/rocket-loader.min.js\"></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "pages/dashboard.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(
            345 => 244,
            341 => 243,
            337 => 242,
            333 => 241,
            329 => 240,
            325 => 239,
            321 => 238,
            317 => 237,
            313 => 236,
            309 => 235,
            305 => 234,
            301 => 233,
            297 => 232,
            293 => 231,
            289 => 230,
            285 => 229,
            136 => 83,
            122 => 72,
            70 => 23,
            66 => 22,
            62 => 21,
            58 => 20,
            54 => 19,
            50 => 18,
            46 => 17,
            42 => 16,
            37 => 14,
            25 => 5,
            19 => 1
        );
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>{{ x }} Thailand Boxing Associations</title>*/
/*     */
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/*     <meta name="description" content="Thailand Boxing Associations">*/
/*     <meta name="keywords" content="Thailand Boxing Associations">*/
/*     <meta name="author" content="Thailand Boxing Associations">*/
/*     */
/*     <link rel="icon" href="{{ base_url }}/theme/assets/img/boxing_icon_blue.png" type="image/x-icon">*/
/*     */
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/bootstrap/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/themify-icons/themify-icons.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/icofont/css/icofont.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/style.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/jquery.mCustomScrollbar.css">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/scss/partials/menu/_pcmenu.scss">*/
/*     <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/custom.css">*/
/*     */
/* </head>*/
/* <body>*/
/* */
/* 	<div class="theme-loader">*/
/* 		<div class="ball-scale">*/
/* 			<div class='contain'>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 				<div class="ring">*/
/* 					<div class="frame"></div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="pcoded" class="pcoded">*/
/* 		<div class="pcoded-overlay-box"></div>*/
/* 		<div class="pcoded-container navbar-wrapper">*/
/* 			<nav class="navbar header-navbar pcoded-header">*/
/* 				<div class="navbar-wrapper">*/
/* 					<div class="navbar-logo"  style="background-color: #fff;">*/
/* 						<a class="mobile-menu" id="mobile-collapse" href="#!"> <i class="feather icon-menu" style="color: #000;"></i></a> */
/* 						<a href="./"> <img class="img-fluid" src="{{ base_url }}/theme/assets/img/logo.png" alt="Thailand Boxing Associations"  style="height:45px;" /></a> */
/* 						<a class="mobile-options"> <i class="feather icon-more-horizontal"></i></a>*/
/* 					</div>*/
/* 					<div class="navbar-container container-fluid">*/
/* 	*/
/* 						<ul class="nav-right">*/
/* 							*/
/* 							<li class="user-profile header-notification">*/
/* 								<div class="dropdown-primary dropdown">*/
/* 									<div class="dropdown-toggle" data-toggle="dropdown">*/
/* 										<img*/
/* 											src="{{ base_url }}/theme/assets/images/avatar-4.jpg"*/
/* 											class="img-radius" alt="User-Profile-Image"> <span>Administrator</span>*/
/* 										<i class="feather icon-chevron-down"></i>*/
/* 									</div>*/
/* 									<ul*/
/* 										class="show-notification profile-notification dropdown-menu"*/
/* 										data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">*/
/* 										<li><a href="#!"> <i class="feather icon-settings"></i>*/
/* 												Settings*/
/* 										</a></li>*/
/* 										<li><a href="user-profile.html"> <i class="feather icon-user"></i>*/
/* 												Profile*/
/* 										</a></li>*/
/* 										<li><a href="auth-normal-sign-in.html"> <i*/
/* 												class="feather icon-log-out"></i> Logout*/
/* 										</a></li>*/
/* 									</ul>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</nav>*/
/* */
/* 			<div class="pcoded-main-container">*/
/* 				<div class="pcoded-wrapper">*/
/* 					<nav class="pcoded-navbar">*/
/* 						<div class="pcoded-inner-navbar main-menu">*/
/* 							<div class="pcoded-navigatio-lavel">Navigation</div>*/
/* 							<ul class="pcoded-item pcoded-left-item">*/
/* 														*/
/* 								<li class="">*/
/* 									<a href="javascript:void(0)"> */
/* 										<span class="pcoded-micon"><i class="feather icon-home"></i></span>*/
/* 										<span class="pcoded-mtext">Dashboard</span>*/
/* 									</a>*/
/* 								</li>*/
/* 											*/
/* 								<li class="pcoded-hasmenu">*/
/* 									<a href="javascript:void(0)"> */
/* 										<span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>*/
/* 										<span class="pcoded-mtext">News</span>*/
/* 									</a>*/
/* 									*/
/* 									<ul class="pcoded-submenu">									*/
/* 										<li class=""><a href="menu-bottom.html"> <span class="pcoded-mtext">News Category</span></a></li>*/
/* 										<li class=""><a href="box-layout.html"> <span class="pcoded-mtext">News Detail</span></a></li>										*/
/* 									</ul>*/
/* 								</li>*/
/* 								*/
/* 								<li class=""><a href="navbar-light.html"> <span*/
/* 										class="pcoded-micon"><i class="feather icon-airplay"></i></span>*/
/* 										<span class="pcoded-mtext">Banner</span>*/
/* 								</a></li>*/
/* 								*/
/* 								<li class=""><a href="navbar-light.html"> <span*/
/* 										class="pcoded-micon"><i class="feather icon-video"></i></span>*/
/* 										<span class="pcoded-mtext">Video</span>*/
/* 								</a></li>*/
/* 																*/
/* 								<li class=""><a href="navbar-light.html"> <span*/
/* 										class="pcoded-micon"><i class="feather icon-monitor"></i></span>*/
/* 										<span class="pcoded-mtext">Live</span>*/
/* 								</a></li>*/
/* 								*/
/* 								<li class=""><a href="navbar-light.html"> <span*/
/* 										class="pcoded-micon"><i class="feather icon-image"></i></span>*/
/* 										<span class="pcoded-mtext">Gallery</span>*/
/* 								</a></li>*/
/* 								*/
/* 							</ul>*/
/* */
/* 						</div>*/
/* 					</nav>*/
/* 					*/
/* 					<div class="pcoded-content">*/
/* 						<div class="pcoded-inner-content">*/
/* */
/* 							<div class="main-body">*/
/* 								<div class="page-wrapper">*/
/* */
/* 									<div class="page-header">*/
/* 										<div class="row align-items-end">*/
/* 											<div class="col-lg-8">*/
/* 												<div class="page-header-title">*/
/* 													<div class="d-inline">*/
/* 														<h4>Dashboard</h4>*/
/* 														<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="col-lg-4">*/
/* 												<div class="page-header-breadcrumb">*/
/* 													<ul class="breadcrumb-title">*/
/* 														<li class="breadcrumb-item"><a href="index.html"> <i*/
/* 																class="feather icon-home"></i>*/
/* 														</a></li>*/
/* 														<li class="breadcrumb-item"><a href="#!">Dashboard</a></li>*/
/* 													</ul>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* */
/* 									<div class="page-body">*/
/* 										<div class="row">*/
/* 											<div class="col-sm-12">*/
/* 																							*/
/* 												<div class="card">*/
/* 													<!--  edit here*/
/* 													<div class="card-header">*/
/* 													*/
/* 														<h5>Hello Card</h5>*/
/* 														<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>*/
/* 													*/
/* 													</div>*/
/* 													*/
/* 													<div class="card-block">*/
/* 														<p>"Lorem ipsum dolor sit amet, consectetur adipiscing*/
/* 															elit, sed do eiusmod tempor incididunt ut labore et*/
/* 															dolore magna aliqua. Ut enim ad minim veniam, quis*/
/* 															nostrud exercitation ullamco laboris nisi ut aliquip ex*/
/* 															ea commodo consequat. Duis aute irure dolor in*/
/* 															reprehenderit in voluptate velit esse cillum dolore eu*/
/* 															fugiat nulla pariatur. Excepteur sint occaecat cupidatat*/
/* 															non proident, sunt in culpa qui officia deserunt mollit*/
/* 															anim id est laborum."</p>*/
/* 													</div>*/
/* 													-->*/
/* 												</div>*/
/* 												*/
/* 												*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 						*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/*     <script src="{{ base_url }}/theme/bower_components/jquery/js/jquery.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/jquery-ui/js/jquery-ui.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/popper.js/js/popper.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/bootstrap/js/bootstrap.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/modernizr/js/modernizr.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/modernizr/js/css-scrollbars.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/rocket-loader.min.js"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
