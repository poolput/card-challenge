<?php

/* layout/footer.html */
class __TwigTemplate_c594bb2c83385d4afd522342eaa470a928fbe8759307afef0d675dc552f8f86a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
        // line 42
        echo "
";
    }

    // line 1
    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "
<script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery/js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-ui/js/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/popper.js/js/popper.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap/js/bootstrap.min.js\"></script>
<!-- jquery slimscroll js -->
<script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js\"></script>
<!-- modernizr js -->
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/modernizr/js/modernizr.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/modernizr/js/css-scrollbars.js\"></script>

<!-- Chartlist charts -->
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/chartist/js/chartist.js\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/chartlist/js/chartist-plugin-threshold.js\"></script>
<!-- Morris Chart js -->
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/raphael/js/raphael.min.js\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/morris.js/js/morris.js\"></script>
<!-- i18next.min.js -->
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/chart.js/js/Chart.js\"></script>
<!-- amchart js -->
<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/amcharts.js\"></script>
<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/serial.js\"></script>
<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/widget/amchart/light.js\"></script>

<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/morris/morris-custom-chart.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/chart/chartjs/chartjs-custom.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/dashboard/analytic-dashboard.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>";
    }

    public function getTemplateName()
    {
        return "layout/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  122 => 32,  117 => 30,  112 => 28,  108 => 27,  104 => 26,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  78 => 18,  74 => 17,  69 => 15,  65 => 14,  59 => 11,  55 => 10,  50 => 8,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  30 => 2,  27 => 1,  22 => 42,  20 => 1,);
    }
}
/* {% block footer %}*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery/js/jquery.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery-ui/js/jquery-ui.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/popper.js/js/popper.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/bootstrap/js/bootstrap.min.js"></script>*/
/* <!-- jquery slimscroll js -->*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>*/
/* <!-- modernizr js -->*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/modernizr/js/modernizr.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/modernizr/js/css-scrollbars.js"></script>*/
/* */
/* <!-- Chartlist charts -->*/
/* <script src="{{ base_url }}/theme/bower_components/chartist/js/chartist.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/chart/chartlist/js/chartist-plugin-threshold.js"></script>*/
/* <!-- Morris Chart js -->*/
/* <script src="{{ base_url }}/theme/bower_components/raphael/js/raphael.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/morris.js/js/morris.js"></script>*/
/* <!-- i18next.min.js -->*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/bower_components/chart.js/js/Chart.js"></script>*/
/* <!-- amchart js -->*/
/* <script src="{{ base_url }}/theme/assets/pages/widget/amchart/amcharts.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/widget/amchart/serial.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/widget/amchart/light.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/pages/chart/morris/morris-custom-chart.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/pages/chart/chartjs/chartjs-custom.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/SmoothScroll.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/pages/dashboard/analytic-dashboard.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* {% endblock %}*/
/* */
/* */
