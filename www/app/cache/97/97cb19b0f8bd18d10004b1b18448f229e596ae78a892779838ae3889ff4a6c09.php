<?php

/* layout/index.html */
class __TwigTemplate_9fc474dbafa5a520425fb875ef6d7a6e969da4e490c2c9bf83cfa21b493ffd5e extends Twig_Template
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
\t<!-- Pre-loader start -->
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
\t\t<div class=\"pcoded-container navbar-wrapper\">";
        // line 50
        $this->displayBlock('head', $context, $blocks);
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "\t\t</div>
\t</div>";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
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

    // line 50
    public function block_head($context, array $blocks = array())
    {
        // line 51
        $this->loadTemplate("layout/menu.html", "layout/index.html", 51)->display($context);
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        $this->loadTemplate("layout/footer.html", "layout/index.html", 60)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
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
        return array (  112 => 60,  109 => 59,  104 => 53,  100 => 51,  97 => 50,  93 => 5,  90 => 4,  84 => 62,  82 => 59,  79 => 56,  77 => 53,  75 => 50,  32 => 9,  28 => 7,  26 => 4,  23 => 1,);
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
/* 	<!-- Pre-loader start -->*/
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
/* 	<div id="pcoded" class="pcoded">*/
/* 		<div class="pcoded-overlay-box"></div>*/
/* 		<div class="pcoded-container navbar-wrapper">*/
/* 		{% block head %} */
/* 			{% include 'layout/menu.html' %} */
/* 		{% endblock %} */
/* 		{% block content %} */
/* 		*/
/* 		{% endblock %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{% block footer %} */
/* 		{% include 'layout/footer.html' with { 'base_url': base_url } %} */
/* 	{% endblock %}*/
/* */
/* </body>*/
/* </html>*/
