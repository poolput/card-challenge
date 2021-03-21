<?php

/* pages/authentication/reset_password.twig */
class __TwigTemplate_b06aa2924862e51d3f349fa14c3eaf14bfab59bb9b89e4ea8d8599ed9e924611 extends Twig_Template
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
<title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        echo "\">

<link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/favicon.ico\" type=\"image/x-icon\">
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600,800\" rel=\"stylesheet\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/bootstrap/css/bootstrap.min.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/icon/themify-icons/themify-icons.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/icon/icofont/css/icofont.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/css/style.css\">

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//assets/css/custom.css\">
</head>
<body class=\"fix-menu\">

\t<section class=\"login-block\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<form class=\"md-float-material form-material\" action=\"\" method=\"post\">
\t\t\t\t\t\t<div class=\"auth-box card\">
\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t<div class=\"row m-b-20\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-center\">New Password</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t<div class=\"form-group form-primary\">
\t\t\t\t\t\t\t\t\t<input pattern=\".{6,10}\" title=\"6 to 10 characters\" type=\"text\" name=\"password\" class=\"form-control\" required placeholder=\"Password\"> 
\t\t\t\t\t\t\t\t\t<span class=\"form-bar\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t 
\t\t\t\t\t\t\t\t<div class=\"row m-t-30\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20 blue-da\">Submit</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t \t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/login\">Return to login</a>
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
        // line 67
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery/js/jquery.min.js\"></script>
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/popper.js/js/popper.min.js\"></script>
\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/bootstrap/js/bootstrap.min.js\"></script>

\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>

\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/modernizr/js/modernizr.js\"></script>
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/modernizr/js/css-scrollbars.js\"></script>

\t<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/i18next/js/i18next.min.js\"></script>
\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme//bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
\t<script src=\"";
        // line 81
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
        return "pages/authentication/reset_password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 81,  160 => 80,  156 => 79,  152 => 78,  148 => 77,  143 => 75,  139 => 74,  134 => 72,  129 => 70,  125 => 69,  121 => 68,  117 => 67,  102 => 55,  67 => 23,  62 => 21,  57 => 19,  52 => 17,  47 => 15,  41 => 12,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <title>{{ title }}</title>*/
/* */
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/* <meta name="description" content="{{ description }}">*/
/* <meta name="keywords" content="{{ keywords }}">*/
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
/* 	<section class="login-block">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12">*/
/* 					<form class="md-float-material form-material" action="" method="post">*/
/* 						<div class="auth-box card">*/
/* 							<div class="card-block">*/
/* 								<div class="row m-b-20">*/
/* 									<div class="col-md-12">*/
/* 										<h4 class="text-center">New Password</h4>*/
/* 									</div>*/
/* 								</div>*/
/* 								*/
/* */
/* */
/* 								<div class="form-group form-primary">*/
/* 									<input pattern=".{6,10}" title="6 to 10 characters" type="text" name="password" class="form-control" required placeholder="Password"> */
/* 									<span class="form-bar"></span>*/
/* 								</div>*/
/* 				 */
/* 								<div class="row m-t-30">*/
/* 									<div class="col-md-12">*/
/* 										<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20 blue-da">Submit</button>*/
/* 									</div>*/
/* 								</div>*/
/* 				 				<hr />*/
/* 								<div class="row">*/
/* 									<div class="col-md-12 text-center">*/
/* 										<a href="{{ base_url }}/login">Return to login</a>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
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
