<?php

/* pages/floorplan/list.twig */
class __TwigTemplate_24625b43ea03461004df46196f5b15ee2aad0e3a5d41633b295c73803a910856 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/floorplan/list.twig", 1);
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
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t    <div class=\"card-block\">

\t\t\t\t\t\t     \t<div class=\"form-group row col\">
\t\t\t\t\t\t     \t\t<label class=\"col-form-label\">Branch : </label>
\t\t\t\t\t\t     \t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t     \t\t\t<select class=\"form-control\" id=\"branch_id\" name=\"branch_id\">";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t     \t\t\t</select>
\t\t\t\t\t\t     \t\t</div>
\t\t\t\t\t\t     \t</div>   

\t                        </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">

\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"dt-responsive table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table id=\"floorpan_table\" class=\"table table-striped table-bordered nowrap\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"5%\">ID</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Floorplan Name</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"15%\">Group Count</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th width=\"15%\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tbody>
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

    // line 92
    public function block_footer($context, array $blocks = array())
    {
        // line 93
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>

<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/jszip.min.js\" ></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/pdfmake.min.js\" ></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/vfs_fonts.js\" ></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js\" ></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js\" ></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js\" ></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js\" ></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js\" ></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js\" ></script>

<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js\" ></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\" ></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\" ></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\" ></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
\t
<script>

\tvar dataset = {
\t\tbranch_id : \$(\"#branch_id\").val()
\t}

\t\$(\"#branch_id\").change(function(){
\t\tdataset = {
\t\t\tbranch_id : \$(this).val()
\t\t}
\t\tgenTable(dataset);\t\t\t
\t});


\tgenTable(dataset);

\tfunction genTable(dataset){
\t\t\$('#floorpan_table').DataTable({
    \t\tdom : 'Bfrtip',
    \t\tbuttons : [
    \t\t\t{
\t    \t\t\ttext : '+ Add',
\t    \t\t\tclassName : 'btn btn-secondary',
\t    \t\t\taction : function(e, dt, node, config) {
\t    \t\t\t\twindow.location.href=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/floorplan/add/\"+\$(\"#branch_id\").val();
\t    \t\t\t}
\t    \t\t}
    \t\t],
    \t\tbDestroy: true,
    \t\tserverSide: true,  
    \t\tajax: {
    \t\t\turl: \"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/floorplan_table\",
    \t\t\ttype: \"POST\",
    \t\t\tdata: dataset
    \t\t},
    \t\tcolumnDefs : [
    \t\t\t{
    \t\t\t\ttargets : [3],
    \t\t\t\torderable : false
    \t\t\t},
    \t\t\t{
    \t\t\t\ttargets : [2],
    \t\t\t\tclassName : \"text-center\"
    \t\t\t}
    \t\t]
    \t});

    \t\$('.dt-button').removeClass('dt-button');
\t}
\t
</script>";
    }

    public function getTemplateName()
    {
        return "pages/floorplan/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 155,  275 => 148,  246 => 122,  242 => 121,  238 => 120,  234 => 119,  230 => 118,  225 => 116,  221 => 115,  217 => 114,  213 => 113,  208 => 111,  204 => 110,  200 => 109,  196 => 108,  192 => 107,  187 => 105,  183 => 104,  179 => 103,  175 => 102,  171 => 101,  167 => 100,  163 => 99,  159 => 98,  155 => 97,  150 => 95,  146 => 94,  142 => 93,  139 => 92,  94 => 47,  84 => 45,  80 => 44,  61 => 27,  52 => 20,  40 => 9,  37 => 8,  33 => 4,  30 => 3,  11 => 1,);
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
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="row">*/
/* 					<div class="col-sm-12">*/
/* 						<div class="card">*/
/* 						    <div class="card-block">*/
/* */
/* 						     	<div class="form-group row col">*/
/* 						     		<label class="col-form-label">Branch : </label>*/
/* 						     		<div class="col-sm-4">*/
/* 						     			<select class="form-control" id="branch_id" name="branch_id">*/
/* 						     				{% for branch in branchs %}*/
/* 												<option value="{{ branch.branch_id }}">{{ branch.branch_name }}</option>*/
/* 											{% endfor %}*/
/* 						     			</select>*/
/* 						     		</div>*/
/* 						     	</div>   */
/* */
/* 	                        </div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* */
/* 							<div class="card">*/
/* 								<div class="card-block">*/
/* 									<div class="dt-responsive table-responsive">*/
/* 										<table id="floorpan_table" class="table table-striped table-bordered nowrap">*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th width="5%">ID</th>*/
/* 													<th>Floorplan Name</th>*/
/* 													<th width="15%">Group Count</th>*/
/* 													<th width="15%"></th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody>*/
/* 												*/
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
/* <script src="{{ base_url }}/theme/bower_components/datatables.net/js/jquery.dataTables.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" ></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/pages/data-table/js/jszip.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/js/pdfmake.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/js/vfs_fonts.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js" ></script>*/
/* */
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" ></script>*/
/* */
/* <script src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* 	*/
/* <script>*/
/* */
/* 	var dataset = {*/
/* 		branch_id : $("#branch_id").val()*/
/* 	}*/
/* */
/* 	$("#branch_id").change(function(){*/
/* 		dataset = {*/
/* 			branch_id : $(this).val()*/
/* 		}*/
/* 		genTable(dataset);			*/
/* 	});*/
/* */
/* */
/* 	genTable(dataset);*/
/* */
/* 	function genTable(dataset){*/
/* 		$('#floorpan_table').DataTable({*/
/*     		dom : 'Bfrtip',*/
/*     		buttons : [*/
/*     			{*/
/* 	    			text : '+ Add',*/
/* 	    			className : 'btn btn-secondary',*/
/* 	    			action : function(e, dt, node, config) {*/
/* 	    				window.location.href="{{ base_url }}/floorplan/add/"+$("#branch_id").val();*/
/* 	    			}*/
/* 	    		}*/
/*     		],*/
/*     		bDestroy: true,*/
/*     		serverSide: true,  */
/*     		ajax: {*/
/*     			url: "{{ base_url }}/floorplan_table",*/
/*     			type: "POST",*/
/*     			data: dataset*/
/*     		},*/
/*     		columnDefs : [*/
/*     			{*/
/*     				targets : [3],*/
/*     				orderable : false*/
/*     			},*/
/*     			{*/
/*     				targets : [2],*/
/*     				className : "text-center"*/
/*     			}*/
/*     		]*/
/*     	});*/
/* */
/*     	$('.dt-button').removeClass('dt-button');*/
/* 	}*/
/* 	*/
/* </script>*/
/* */
/* {% endblock %}*/
