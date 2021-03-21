<?php

/* templates/header.html */
class __TwigTemplate_12642fd89f42a3ef98e3af1edcf3ff2002dd4f20afd3a99287cbd227698774a3 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array(
                $this,
                'block_header'
            )
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Thailand Boxing Associations</title>
    
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

";
    }

    public function getTemplateName()
    {
        return "templates/header.html";
    }

    public function getDebugInfo()
    {
        return array(
            73 => 23,
            69 => 22,
            65 => 21,
            61 => 20,
            57 => 19,
            53 => 18,
            49 => 17,
            45 => 16,
            40 => 14,
            26 => 2,
            20 => 1
        );
    }
}
/* {% block header %}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <title>Thailand Boxing Associations</title>*/
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
/* */
/* */
/* </head>*/
/* */
/* {% endblock %}*/
/* */
