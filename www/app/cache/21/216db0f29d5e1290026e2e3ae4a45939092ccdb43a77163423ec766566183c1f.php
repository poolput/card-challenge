<?php

/* layout/footer.html */
class __TwigTemplate_d7746fe3f7f805ba22a7eeb8cbb14212cdad4b159c1c517593548d5af120bd3a extends Twig_Template
{

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array(
                $this,
                'block_footer'
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
        // line 21
        echo "
";
    }

    // line 1
    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo " 
\t<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery/js/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/popper.js/js/popper.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/excanvas.js\"></script>
\t<!-- jquery slimscroll js -->
\t<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>
\t<!-- modernizr js -->
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/modernizr/js/modernizr.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
\t<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
\t<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mousewheel.min.js\"></script>
\t<!-- Custom js -->
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>";
    }

    public function getTemplateName()
    {
        return "layout/footer.html";
    }

    public function getDebugInfo()
    {
        return array(
            84 => 18,
            80 => 17,
            76 => 16,
            71 => 14,
            67 => 13,
            63 => 12,
            59 => 11,
            54 => 9,
            49 => 7,
            45 => 6,
            41 => 5,
            37 => 4,
            33 => 3,
            30 => 2,
            27 => 1,
            22 => 21,
            20 => 1
        );
    }
}
/* {% block footer %}*/
/*  */
/* 	<script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery/js/jquery.min.js"></script>*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery-ui/js/jquery-ui.min.js"></script>*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/bower_components/popper.js/js/popper.min.js"></script>*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/bower_components/bootstrap/js/bootstrap.min.js"></script>*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/assets/pages/widget/excanvas.js"></script>*/
/* 	<!-- jquery slimscroll js -->*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>*/
/* 	<!-- modernizr js -->*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/bower_components/modernizr/js/modernizr.js"></script>*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/assets/js/SmoothScroll.js"></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/jquery.mousewheel.min.js"></script>*/
/* 	<!-- Custom js -->*/
/* 	<script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* 	<script type="text/javascript" src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* {% endblock %}*/
/* */
/* */
