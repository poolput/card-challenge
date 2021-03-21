<?php

/* pages/login.twig */
class __TwigTemplate_5faa02f781f6313d1e5c655284fa74a1e0f8d20527a279ff067a2e31446471bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Adminty - Premium Admin Template by Colorlib</title>

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"description\" content=\"#\">
<meta name=\"keywords\" content=\"\">
<meta name=\"author\" content=\"#\">

<link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/favicon.ico\" type=\"image/x-icon\">
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,800\" rel=\"stylesheet\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/bootstrap/css/bootstrap.min.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/icon/themify-icons/themify-icons.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/icon/icofont/css/icofont.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/css/style.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/css/custom.css\">
</head>
<body class=\"fix-menu\">

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

\t<section class=\"login-block\">

\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">

\t\t\t\t\t<form class=\"md-float-material form-material\" action=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/login\" method=\"post\">
\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/logo.png\" alt=\"logo.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"auth-box card\">
\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t<div class=\"row m-b-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-center\">Sign In</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group form-primary\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" required=\"\" placeholder=\"Username/Email\"> <span class=\"form-bar\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group form-primary\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" required=\"\" placeholder=\"Password\"> <span class=\"form-bar\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row m-t-25 text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox-fade fade-in-primary d-\">
\t\t\t\t\t\t\t\t\t\t\t<label> <input type=\"checkbox\" value=\"\" class=\"blue-da\"> <span class=\"cr\"><i class=\"cr-icon icofont icofont-ui-check txt-primary\"></i></span> <span class=\"text-inverse\">Remember me</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"forgot-phone text-right f-right\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"auth-reset-password.html\" class=\"text-right\"> Forgot Password?</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row m-t-30\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20 blue-da\">Submit</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-inverse text-center \">Digital Associates Co., Ltd.</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-inverse text-left\">
\t\t\t\t\t\t\t\t\t\t\t<small> 3/24 Soi Phaholyothin 13, Phaholyothin Rd. Phayatai, Phayatai, Bangkok 10400 Telephone: </small> <a href=\"tel:02-6182-266\"><small>02-6182-266</small></a> <small>Fax: 02-6182-260 Website: </small> <a href=\"http://www.da.co.th/\" target=\"_blank\"><small>http://www.da.co.th</small></a>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</section>


\t<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
\t<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/popper.js/js/popper.min.js\"></script>
\t<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/bootstrap/js/bootstrap.min.js\"></script>

\t<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

\t<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/modernizr/js/modernizr.js\"></script>
\t<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/modernizr/js/css-scrollbars.js\"></script>

\t<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/i18next/js/i18next.min.js\"></script>
\t<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
\t<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
\t<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
\t<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/js/common-pages.js\"></script>

\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23581568-13\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag() {
\t\t\tdataLayer.push(arguments);
\t\t}
\t\tgtag('js', new Date());

\t\tgtag('config', 'UA-23581568-13');
\t</script>
\t<script src=\"https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js\" data-cf-settings=\"56e98a584eb7d76947167454-|49\" defer=\"\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "pages/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 141,  214 => 140,  210 => 139,  206 => 138,  202 => 137,  197 => 135,  193 => 134,  188 => 132,  183 => 130,  179 => 129,  175 => 128,  171 => 127,  114 => 73,  109 => 71,  59 => 24,  54 => 22,  49 => 20,  44 => 18,  39 => 16,  33 => 13,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <title>Adminty - Premium Admin Template by Colorlib</title>*/
/* */
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/* <meta name="description" content="#">*/
/* <meta name="keywords" content="">*/
/* <meta name="author" content="#">*/
/* */
/* <link rel="icon" href="{{ base_url }}/theme/assets/images/favicon.ico" type="image/x-icon">*/
/* <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme//bower_components/bootstrap/css/bootstrap.min.css">*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme//assets/icon/themify-icons/themify-icons.css">*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme//assets/icon/icofont/css/icofont.css">*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme//assets/css/style.css">*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme//assets/css/custom.css">*/
/* </head>*/
/* <body class="fix-menu">*/
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
/* 	<section class="login-block">*/
/* */
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* */
/* 					<form class="md-float-material form-material" action="{{ base_url }}/login" method="post">*/
/* 						<div class="text-center">*/
/* 							<img src="{{ base_url }}/theme/assets/images/logo.png" alt="logo.png">*/
/* 						</div>*/
/* 						<div class="auth-box card">*/
/* 							<div class="card-block">*/
/* 								<div class="row m-b-20">*/
/* 									<div class="col-md-12">*/
/* 										<h4 class="text-center">Sign In</h4>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group form-primary">*/
/* 									<input type="text" name="email" class="form-control" required="" placeholder="Username/Email"> <span class="form-bar"></span>*/
/* 								</div>*/
/* 								<div class="form-group form-primary">*/
/* 									<input type="password" name="password" class="form-control" required="" placeholder="Password"> <span class="form-bar"></span>*/
/* 								</div>*/
/* 								<div class="row m-t-25 text-left">*/
/* 									<div class="col-12">*/
/* 										<div class="checkbox-fade fade-in-primary d-">*/
/* 											<label> <input type="checkbox" value="" class="blue-da"> <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span> <span class="text-inverse">Remember me</span>*/
/* 											</label>*/
/* 										</div>*/
/* 										<div class="forgot-phone text-right f-right">*/
/* 											<a href="auth-reset-password.html" class="text-right"> Forgot Password?</a>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="row m-t-30">*/
/* 									<div class="col-md-12">*/
/* 										<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20 blue-da">Submit</button>*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="row">*/
/* 									<div class="col-md-12">*/
/* 										<p class="text-inverse text-center ">Digital Associates Co., Ltd.</p>*/
/* 										<p class="text-inverse text-left">*/
/* 											<small> 3/24 Soi Phaholyothin 13, Phaholyothin Rd. Phayatai, Phayatai, Bangkok 10400 Telephone: </small> <a href="tel:02-6182-266"><small>02-6182-266</small></a> <small>Fax: 02-6182-260 Website: </small> <a href="http://www.da.co.th/" target="_blank"><small>http://www.da.co.th</small></a>*/
/* 										</p>*/
/* 									</div>*/
/* */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</form>*/
/* */
/* 				</div>*/
/* */
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 	</section>*/
/* */
/* */
/* 	<script src="{{ base_url }}/theme//bower_components/jquery/js/jquery.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme//bower_components/jquery-ui/js/jquery-ui.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme//bower_components/popper.js/js/popper.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme//bower_components/bootstrap/js/bootstrap.min.js"></script>*/
/* */
/* 	<script src="{{ base_url }}/theme//bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>*/
/* */
/* 	<script src="{{ base_url }}/theme//bower_components/modernizr/js/modernizr.js"></script>*/
/* 	<script src="{{ base_url }}/theme//bower_components/modernizr/js/css-scrollbars.js"></script>*/
/* */
/* 	<script src="{{ base_url }}/theme//bower_components/i18next/js/i18next.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme//bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme//bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme//bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme//assets/js/common-pages.js"></script>*/
/* */
/* 	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>*/
/* 	<script>*/
/* 		window.dataLayer = window.dataLayer || [];*/
/* 		function gtag() {*/
/* 			dataLayer.push(arguments);*/
/* 		}*/
/* 		gtag('js', new Date());*/
/* */
/* 		gtag('config', 'UA-23581568-13');*/
/* 	</script>*/
/* 	<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="56e98a584eb7d76947167454-|49" defer=""></script>*/
/* </body>*/
/* </html>*/
/* */
