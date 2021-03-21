<?php

/* layout/index.html */
class __TwigTemplate_124350109961026ee11426b9b09ddbdf9d4f5f4d69d1625e469eabb1ecbb6cc6 extends Twig_Template
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
        // line 5
        echo "
<body class=\"\">
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
        // line 46
        $this->displayBlock('head', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t</div>
\t</div>";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "
</body>
</html>";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $this->loadTemplate("layout/header.html", "layout/index.html", 4)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 46
    public function block_head($context, array $blocks = array())
    {
        $this->loadTemplate("layout/menu.html", "layout/index.html", 46)->display($context);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $this->loadTemplate("layout/footer.html", "layout/index.html", 50)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    public function getTemplateName()
    {
        return "layout/index.html";
    }

    public function getDebugInfo()
    {
        return array (  101 => 50,  91 => 46,  85 => 4,  79 => 51,  77 => 50,  71 => 46,  28 => 5,  26 => 4,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* {% block header %} {% include 'layout/header.html' with { 'base_url': base_url } %} {% endblock %}*/
/* */
/* <body class="">*/
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
/* 		<div class="pcoded-container navbar-wrapper">{% block head %} {% include 'layout/menu.html' %} {% endblock %} {% block content %} {% endblock %}</div>*/
/* 	</div>*/
/* 	</div>*/
/* */
/* 	{% block footer %} {% include 'layout/footer.html' with { 'base_url': base_url } %} {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
