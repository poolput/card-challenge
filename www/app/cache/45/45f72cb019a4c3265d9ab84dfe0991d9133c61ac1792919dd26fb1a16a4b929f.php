<?php

/* layout/index.html */
class __TwigTemplate_85bc5e1b5c94f5fdc7efb559dacfbfe9e7674eacfbddd29cd63ae7cc34511c00 extends Twig_Template
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
<html lang=\"en\">

";
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
\t\t<div class=\"pcoded-container navbar-wrapper\">
\t\t\t\t";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo " 
\t\t\t\t";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "\t\t</div>
\t</div>

\t";
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
        echo " 
";
        // line 5
        $this->loadTemplate("layout/header.html", "layout/index.html", 5)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
        echo " 
";
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        echo " 
\t\t\t\t\t<!-- ";
        // line 15
        $this->loadTemplate("layout/menu.html", "layout/index.html", 15)->display($context);
        echo "  -->
\t\t\t\t";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t\t\t\t
\t\t\t\t";
    }

    // line 23
    public function block_footer($context, array $blocks = array())
    {
        echo " 
\t\t";
        // line 24
        $this->loadTemplate("layout/footer.html", "layout/index.html", 24)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
        echo " 
\t";
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
        return array (  97 => 24,  92 => 23,  84 => 17,  78 => 15,  73 => 14,  67 => 5,  62 => 4,  56 => 26,  54 => 23,  49 => 20,  47 => 17,  44 => 16,  42 => 14,  34 => 9,  30 => 7,  28 => 4,  23 => 1,);
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
