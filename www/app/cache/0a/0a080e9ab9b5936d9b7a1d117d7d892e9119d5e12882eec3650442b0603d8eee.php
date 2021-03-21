<?php

/* layout/header.html */
class __TwigTemplate_55d78573218b4cc1b716fa735fb07915157d0e2c7e65827a7267084ad39da68b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<head>
<title>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 10]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
      <![endif]-->
<!-- Meta -->
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "\">
<!-- Favicon icon -->
<link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/images/favicon.ico\" type=\"image/x-icon\">
<!-- Google font-->
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,600\" rel=\"stylesheet\">
<!-- Required Fremwork -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap/css/bootstrap.min.css\">
<!-- feather Awesome -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/feather/css/feather.css\">
<!-- radial chart -->
<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/radial/css/radial.css\" type=\"text/css\" media=\"all\">
<!-- Style.css -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/style.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/jquery.mCustomScrollbar.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/custom.css\">
</head>";
    }

    public function getTemplateName()
    {
        return "layout/header.html";
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  78 => 28,  74 => 27,  69 => 25,  64 => 23,  59 => 21,  52 => 17,  47 => 15,  43 => 14,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block header %}*/
/* <head>*/
/* <title>{{ title }}</title>*/
/* <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->*/
/* <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* <!--[if lt IE 10]>*/
/*       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*       <![endif]-->*/
/* <!-- Meta -->*/
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="description" content="{{ description }}">*/
/* <meta name="keywords" content="{{ keyword }}">*/
/* <!-- Favicon icon -->*/
/* <link rel="icon" href="{{ base_url }}/theme/assets/images/favicon.ico" type="image/x-icon">*/
/* <!-- Google font-->*/
/* <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">*/
/* <!-- Required Fremwork -->*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/bootstrap/css/bootstrap.min.css">*/
/* <!-- feather Awesome -->*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/* <!-- radial chart -->*/
/* <link rel="stylesheet" href="{{ base_url }}/theme/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">*/
/* <!-- Style.css -->*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/style.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/jquery.mCustomScrollbar.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/custom.css">*/
/* </head>*/
/* {% endblock %}*/
/* */
