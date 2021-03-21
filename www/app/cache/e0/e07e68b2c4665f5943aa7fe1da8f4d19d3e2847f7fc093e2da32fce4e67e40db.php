<?php

/* pages/users/list.twig */
class __TwigTemplate_daa9d07a79bf1e053ed24677e9a24d4d6326fd49125456412276d3da9c2464a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/users/list.twig", 1);
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

\t\t\t\t<div class=\"page-body\" id=\"user\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">

\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Custom Button</h5>
\t\t\t\t\t\t\t\t\t<span>Fundamentally, each button is described by an object - this object is read by Buttons and displayed as appropriate. There are a number of parameters that Buttons will automatically look for in the button description object such as buttons.buttons.text and buttons.buttons.action
\t\t\t\t\t\t\t\t\t\twhich are the two fundamental parameters (button text and the action to take when activated).</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"dt-responsive table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table id=\"users-btn\" class=\"table table-striped table-bordered nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Company</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Role</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 10px;\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 62
            echo "    \t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "user_id", array()), "html", null, true);
            echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "user_name", array()), "html", null, true);
            echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo $this->getAttribute($context["user"], "company_name", array());
            echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "role_name", array()), "html", null, true);
            echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-secondary\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/users/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "user_id", array()), "html", null, true);
            echo "\"><span>Edit</span></a>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('Are you sure to delete?')\" class=\"btn btn-outline-secondary\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/users/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "user_id", array()), "html", null, true);
            echo "\"><span>Del</span></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
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

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        // line 94
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
\t
\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/jszip.min.js\" ></script>
\t<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/pdfmake.min.js\" ></script>
\t<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/vfs_fonts.js\" ></script>
\t<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js\" ></script>
\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js\" ></script>
\t<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js\" ></script>
\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js\" ></script>
\t<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js\" ></script>
\t<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js\" ></script>
\t
\t<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
\t<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
\t<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
\t<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
\t<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

\t<script  src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
\t<script  src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
\t<script  src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
\t<script  src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

\t<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js\" ></script>
\t<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\" ></script>
\t<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\" ></script>
\t<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\" ></script>
\t<script  src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
\t
\t<script>
    \t\$('#users-btn').DataTable({
    \t\tdom : 'Bfrtip',
    \t\tbuttons : [{
    \t\t\ttext : '+ Add',
    \t\t\tclassName : 'btn btn-secondary',
    \t\t\taction : function(e, dt, node, config) {
    \t\t\t\twindow.location.href=\"";
        // line 132
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
        return "pages/users/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 132,  271 => 123,  267 => 122,  263 => 121,  259 => 120,  255 => 119,  250 => 117,  246 => 116,  242 => 115,  238 => 114,  233 => 112,  229 => 111,  225 => 110,  221 => 109,  217 => 108,  212 => 106,  208 => 105,  204 => 104,  200 => 103,  196 => 102,  192 => 101,  188 => 100,  184 => 99,  180 => 98,  175 => 96,  171 => 95,  167 => 94,  164 => 93,  146 => 75,  135 => 71,  129 => 70,  124 => 68,  120 => 67,  116 => 66,  112 => 65,  108 => 64,  104 => 63,  101 => 62,  97 => 61,  61 => 27,  52 => 20,  40 => 9,  37 => 8,  33 => 4,  30 => 3,  11 => 1,);
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
/* 				<div class="page-body" id="user">*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* */
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									<h5>Custom Button</h5>*/
/* 									<span>Fundamentally, each button is described by an object - this object is read by Buttons and displayed as appropriate. There are a number of parameters that Buttons will automatically look for in the button description object such as buttons.buttons.text and buttons.buttons.action*/
/* 										which are the two fundamental parameters (button text and the action to take when activated).</span>*/
/* 								</div>*/
/* 								<div class="card-block">*/
/* 									<div class="dt-responsive table-responsive">*/
/* 										<table id="users-btn" class="table table-striped table-bordered nowrap">*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th>Id</th>*/
/* 													<th>Username</th>*/
/* 													<th>Name</th>*/
/* 													<th>Email</th>*/
/* 													<th>Company</th>*/
/* 													<th>Role</th>*/
/* 													<th style="width: 10px;"></th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody>*/
/* 											    {% for user in users %}*/
/*     												<tr>*/
/*     													<td>{{ user.user_id }}</td>*/
/*     													<td>{{ user.user_name }}</td>*/
/*     													<td>{{ user.name }}</td>*/
/*     													<td>{{ user.email }}</td>*/
/*     													<td>{{ user.company_name|raw }}</td>*/
/*     													<td>{{ user.role_name }}</td>*/
/*     													<td>*/
/*         													<a class="btn btn-secondary" href="{{ base_url }}/users/edit/{{ user.user_id }}"><span>Edit</span></a>*/
/*         													<a onclick="return confirm('Are you sure to delete?')" class="btn btn-outline-secondary" href="{{ base_url }}/users/delete/{{ user.user_id }}"><span>Del</span></a>*/
/*     													</td>*/
/*     												</tr>*/
/* 												{%  endfor %}*/
/* 											</tbody>*/
/* 										</table>*/
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
/*     			text : '+ Add',*/
/*     			className : 'btn btn-secondary',*/
/*     			action : function(e, dt, node, config) {*/
/*     				window.location.href="{{ base_url }}/users/add";*/
/*     			}*/
/*     		}]*/
/*     	});*/
/*     	$('.dt-button').removeClass('dt-button');*/
/* 	</script>*/
/* {% endblock %}*/
