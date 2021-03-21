<?php

/* pages/summary/view.twig */
class __TwigTemplate_9a5fa2000f33859736c7b6aa91eb9b2cb6c4752c859fb91cd5bfca75f00af103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/summary/view.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">

\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">

\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 20
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["title_body"]) ? $context["title_body"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">

\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">";
        // line 42
        $this->loadTemplate("layout/option.html", "pages/summary/view.twig", 42)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
        // line 43
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"dt-responsive table-responsive\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>

\t</div>
</div>";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
\t<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
\t
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/jszip.min.js\" ></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/pdfmake.min.js\" ></script>
\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/vfs_fonts.js\" ></script>
\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js\" ></script>
\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js\" ></script>
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js\" ></script>
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js\" ></script>
\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js\" ></script>
\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js\" ></script>
\t
\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
\t<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
\t<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
\t<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

\t<script  src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
\t<script  src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
\t<script  src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
\t<script  src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js\" ></script>
\t<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\" ></script>
\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\" ></script>
\t<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\" ></script>
\t<script  src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
\t
\t<script>
    \t\$('#users-btn').DataTable({
    \t\tdom : 'Bfrtip',
    \t\tbuttons : [{
    \t\t\ttext : '+ Add Row',
    \t\t\tclassName : 'btn btn-secondary',
    \t\t\taction : function(e, dt, node, config) {
    \t\t\t\twindow.location.href=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/users/add\";
    \t\t\t}
    \t\t}]
    \t});
    \t\$('.dt-button').removeClass('dt-button');
\t</script>";
    }

    public function getTemplateName()
    {
        return "pages/summary/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 102,  207 => 93,  203 => 92,  199 => 91,  195 => 90,  191 => 89,  186 => 87,  182 => 86,  178 => 85,  174 => 84,  169 => 82,  165 => 81,  161 => 80,  157 => 79,  153 => 78,  148 => 76,  144 => 75,  140 => 74,  136 => 73,  132 => 72,  128 => 71,  124 => 70,  120 => 69,  116 => 68,  111 => 66,  107 => 65,  103 => 64,  100 => 63,  80 => 43,  78 => 42,  61 => 27,  52 => 20,  40 => 9,  37 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/* 	<div class="pcoded-inner-content">*/
/* */
/* 		<div class="main-body">*/
/* 			<div class="page-wrapper">*/
/* */
/* 				<div class="page-header">*/
/* 					<div class="row align-items-end">*/
/* 						<div class="col-lg-4">*/
/* 							<div class="page-header-breadcrumb">*/
/* 								{{ breadcrumb|raw }}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-lg-8 text-right">*/
/* 							<div class="page-header-title">*/
/* 								<div class="d-inline">*/
/* 									<h4>*/
/* 										{{ title_body }}*/
/* 									</h4>*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* */
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									{% include 'layout/option.html' with { 'base_url': base_url } %}*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="dt-responsive table-responsive">*/
/* 									*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* */
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* 	<script src="{{ base_url }}/theme/bower_components/datatables.net/js/jquery.dataTables.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" ></script>*/
/* 	*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/js/jszip.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/js/pdfmake.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/js/vfs_fonts.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js" ></script>*/
/* 	*/
/* 	<script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" ></script>*/
/* */
/* 	<script  src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/* 	<script  src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* 	<script  src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* 	<script  src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* */
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/pcoded.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js" ></script>*/
/* 	<script  src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* 	*/
/* 	<script>*/
/*     	$('#users-btn').DataTable({*/
/*     		dom : 'Bfrtip',*/
/*     		buttons : [{*/
/*     			text : '+ Add Row',*/
/*     			className : 'btn btn-secondary',*/
/*     			action : function(e, dt, node, config) {*/
/*     				window.location.href="{{ base_url }}/users/add";*/
/*     			}*/
/*     		}]*/
/*     	});*/
/*     	$('.dt-button').removeClass('dt-button');*/
/* 	</script>*/
/* {% endblock %}*/
