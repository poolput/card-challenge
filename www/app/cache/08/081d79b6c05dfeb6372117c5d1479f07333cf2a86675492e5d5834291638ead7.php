<?php

/* layout/index.html */
class __TwigTemplate_f2775ba346ae46a4f0dcc91ed08655f762cfa3846dc2e7178acf965a59fff591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 7
        echo "
<body class=\"\">
\t<input type=\"hidden\" id=\"base_url\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\">
\t 
\t<div id=\"pcoded\" class=\"pcoded\">
\t\t<div class=\"pcoded-overlay-box\"></div>
\t\t<div class=\"pcoded-container navbar-wrapper\">";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "\t\t</div>
\t</div>";
        // line 23
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "
</body>
</html>";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("layout/header.html", "layout/index.html", 5)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        echo " 
\t\t\t\t\t<!--";
        // line 15
        $this->loadTemplate("layout/menu.html", "layout/index.html", 15)->display($context);
        echo "  -->";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        // line 24
        $this->loadTemplate("layout/footer.html", "layout/index.html", 24)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    public function getTemplateName()
    {
        return "layout/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  76 => 23,  71 => 17,  66 => 15,  61 => 14,  57 => 5,  54 => 4,  48 => 26,  46 => 23,  43 => 20,  41 => 17,  39 => 14,  32 => 9,  28 => 7,  26 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* {% block header %} */
/* {% include 'layout/header.html' with { 'base_url': base_url } %} */
/* {% endblock %}*/
/* */
/* <body class="">*/
/* 	<input type="hidden" id="base_url" value="{{ base_url }}">*/
/* 	 */
/* 	<div id="pcoded" class="pcoded">*/
/* 		<div class="pcoded-overlay-box"></div>*/
/* 		<div class="pcoded-container navbar-wrapper">*/
/* 				{% block head %} */
/* 					<!-- {% include 'layout/menu.html' %}  -->*/
/* 				{% endblock %} */
/* 				{% block content %} */
/* 				*/
/* 				{% endblock %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% block footer %} */
/* 		{% include 'layout/footer.html' with { 'base_url': base_url } %} */
/* 	{% endblock %}*/
/* */
/* </body>*/
/* </html>*/
