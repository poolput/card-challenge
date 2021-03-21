<?php

/* layout/index.html */
class __TwigTemplate_24e340efb2acb33063fb71f9964366fc9d22abd34d412b0e5852e28cdb118971 extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array(
                $this,
                'block_header'
            ),
            'head' => array(
                $this,
                'block_head'
            ),
            'content' => array(
                $this,
                'block_content'
            ),
            'footer' => array(
                $this,
                'block_footer'
            )
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
    <!-- Pre-loader start -->
    <div class=\"theme-loader\">
        <div class=\"ball-scale\">
            <div class='contain'>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
                <div class=\"ring\">
                    <div class=\"frame\"></div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"pcoded\" class=\"pcoded\">
\t\t<div class=\"pcoded-overlay-box\"></div>
\t\t<div class=\"pcoded-container navbar-wrapper\">";
        // line 49
        $this->displayBlock('head', $context, $blocks);
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "\t\t\t</div>
\t\t</div>\t
\t</div>";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "\t
</body>
</html>";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        $this->loadTemplate("layout/header.html", "layout/index.html", 5)->display(array_merge($context, array(
            "base_url" => (isset($context["base_url"]) ? $context["base_url"] : null)
        )));
    }

    // line 49
    public function block_head($context, array $blocks = array())
    {
        // line 50
        $this->loadTemplate("layout/menu.html", "layout/index.html", 50)->display($context);
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {}

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        $this->loadTemplate("layout/footer.html", "layout/index.html", 61)->display(array_merge($context, array(
            "base_url" => (isset($context["base_url"]) ? $context["base_url"] : null)
        )));
    }

    public function getTemplateName()
    {
        return "layout/index.html";
    }

    public function getDebugInfo()
    {
        return array(
            109 => 61,
            106 => 60,
            101 => 53,
            97 => 50,
            94 => 49,
            90 => 5,
            87 => 4,
            81 => 63,
            79 => 60,
            75 => 56,
            73 => 53,
            71 => 49,
            28 => 7,
            26 => 4,
            23 => 1
        );
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* {% block header %}*/
/* 	{% include 'layout/header.html' with { 'base_url': base_url } %}*/
/* {% endblock %}*/
/* */
/* <body class="">*/
/*     <!-- Pre-loader start -->*/
/*     <div class="theme-loader">*/
/*         <div class="ball-scale">*/
/*             <div class='contain'>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*                 <div class="ring">*/
/*                     <div class="frame"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div id="pcoded" class="pcoded">*/
/* 		<div class="pcoded-overlay-box"></div>*/
/* 		<div class="pcoded-container navbar-wrapper">*/
/* 			{% block head %}*/
/* 				{% include 'layout/menu.html' %}*/
/* 			{% endblock %}*/
/* 			*/
/* 			{% block content %}*/
/* 				*/
/* 			{% endblock %}*/
/* 			</div>*/
/* 		</div>	*/
/* 	</div>*/
/* 	*/
/* 	{% block footer %}*/
/* 		{% include 'layout/footer.html' with { 'base_url': base_url } %}*/
/* 	{% endblock %}*/
/* 	*/
/* </body>*/
/* </html>*/
