<?php

/* pages/company/branchgroup/branch_group.twig */
class __TwigTemplate_72dc842d7293ac75be140e78c01dcdc8b33e400057fb338075249d237d2cd3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/company/branchgroup/branch_group.twig", 1);
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
        echo "

<style>
\t.addNewBranchGroup{
\t\tfont-size: 13px !important;
\t}
\t#addModalLabel {
\t\tfont-size: 13px;
\t}
\t.modal-footer .btn {
\t\tfont-size: 13px;
\t}
\t.square {
\t\tborder-radius:0 !important;
\t}
\ttable tr th, table tr td {
\t   vertical-align: middle !important;
\t   font-size: 13px;
\t}
\t.center {
\t   text-align: center;
\t}

</style>";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">

\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">

\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 43
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 50
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
\t\t\t\t\t\t\t\t<!-- <div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5>Custom Button</h5>
\t\t\t\t\t\t\t\t\t<span>Fundamentally, each button is described by an object - this object is read by Buttons and displayed as appropriate. There are a number of parameters that Buttons will automatically look for in the button description object such as buttons.buttons.text and buttons.buttons.action
\t\t\t\t\t\t\t\t\t\twhich are the two fundamental parameters (button text and the action to take when activated).</span>
\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t<div class=\"card-block\">
\t\t\t\t\t\t\t\t\t<div class=\"dt-responsive table-responsive\">
\t\t\t\t\t\t\t\t\t\t<table id=\"users-btn\" class=\"table table-striped table-bordered Compact nowrap\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"center\" style=\"width: 1%;white-space:nowrap !important;\">#</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Branch Group</th>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 1%;white-space:nowrap !important;\"></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchgroups"]) ? $context["branchgroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branchgroup"]) {
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["branchgroup"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group_name"]) {
                // line 82
                echo "    \t\t\t\t\t\t\t\t\t\t\t\t<tr>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                // line 84
                echo twig_escape_filter($this->env, $context["group_name"], "html", null, true);
                echo "</td>    \t\t\t\t\t\t\t\t\t\t\t\t
    \t\t\t\t\t\t\t\t\t\t\t\t\t<td>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-secondary btn-sm\" href=\"#\"><span>Edit</span></a>
        \t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-outline-secondary btn-sm\" href=\"";
                // line 87
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/branch-group/delete/";
                echo twig_escape_filter($this->env, $context["group_name"], "html", null, true);
                echo "\"><span>Delete</span></a>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t\t\t\t\t\t\t</tr>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branchgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
</div>

<div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h5 class=\"modal-title\" id=\"addModalLabel\">New Branch Group</h5>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t
\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t<label class=\"col-sm-3 col-form-label\">Branch Group Name</label>
\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control square\" id=\"bg_name\" name=\"bg_name\" placeholder=\"Enter branch group name.\">
\t\t\t\t\t</div>
\t\t\t\t</div>
<hr>
                <div class=\"form-group row\">
                    <div class=\"col-md-5\">
                        <select name=\"from[]\" id=\"search\" class=\"form-control\" size=\"8\" multiple=\"multiple\" style=\"height:250px;\">";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["branchs"]) ? $context["branchs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            echo "                                                                  
                                <option value=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_id", array()), "html", null, true);
            echo "\" data-position=\"1\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "branch_name", array()), "html", null, true);
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                        </select>
                    </div>
                    
                    <div class=\"col-md-2\">
                        <button type=\"button\" id=\"search_rightAll\" class=\"btn btn-block btn-secondary\"> >> </button>
                        <button type=\"button\" id=\"search_rightSelected\" class=\"btn btn-block btn-secondary\"> > </button>
                        <button type=\"button\" id=\"search_leftSelected\" class=\"btn btn-block btn-secondary\"> < </button>
                        <button type=\"button\" id=\"search_leftAll\" class=\"btn btn-block btn-secondary\"> << </button>
                    </div>
                    
                     <div class=\"col-md-5\">
                        <select name=\"to[]\" id=\"search_to\" class=\"form-control\" size=\"8\" multiple=\"multiple\" style=\"height:250px;\"></select>
                    </div>
                    
               </div>
               
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary btn-sm\" data-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm\">Save</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    // line 159
    public function block_footer($context, array $blocks = array())
    {
        // line 160
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
\t
\t<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/jszip.min.js\" ></script>
\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/pdfmake.min.js\" ></script>
\t<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/vfs_fonts.js\" ></script>
\t<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js\" ></script>
\t<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js\" ></script>
\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js\" ></script>
\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js\" ></script>
\t<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js\" ></script>
\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js\" ></script>
\t
\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
\t<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
\t<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
\t<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
\t<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

\t<script  src=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
\t<script  src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
\t<script  src=\"";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
\t<script  src=\"";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

    <!-- multiselect 2 -->
     <script  src=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/lib/google-code-prettify/prettify.css\"></script>
    <script  src=\"";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/css/style.css\"></script>
    <script  src=\"";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/dist/js/prettify.min.js\"></script>
    <script  src=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/dist/js/multiselect.min.js\"></script>

\t<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js\" ></script>
\t<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\" ></script>
\t<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\" ></script>
\t<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\" ></script>
\t<script  src=\"";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
\t
\t<script>
         \$(document).ready(function() {
            \$('#users-btn').DataTable({
                dom : 'Bfrtip',
                buttons : [{
                    text : '+ Add Branch Group',
                    className : 'addNewBranchGroup btn btn btn-primary'     
                }]
            });
            
            \$('.addNewBranchGroup').click(function(){
                \$('#branch-data').DataTable();
                \$('#addModal').modal();
            });
    
 
            \$('#search').multiselect({
                search: {
                    left: '<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\" />',
                    right: '<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\" />',
                },
                fireSearch: function(value) {
                    return value.length > 3;
                }
            });
      
            
            
        });
\t\t

\t</script>";
    }

    public function getTemplateName()
    {
        return "pages/company/branchgroup/branch_group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 195,  375 => 194,  371 => 193,  367 => 192,  363 => 191,  358 => 189,  354 => 188,  350 => 187,  346 => 186,  340 => 183,  336 => 182,  332 => 181,  328 => 180,  323 => 178,  319 => 177,  315 => 176,  311 => 175,  307 => 174,  302 => 172,  298 => 171,  294 => 170,  290 => 169,  286 => 168,  282 => 167,  278 => 166,  274 => 165,  270 => 164,  265 => 162,  261 => 161,  257 => 160,  254 => 159,  227 => 132,  218 => 130,  212 => 129,  174 => 92,  151 => 87,  145 => 84,  141 => 83,  138 => 82,  121 => 81,  117 => 80,  85 => 50,  76 => 43,  64 => 32,  61 => 31,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <style>*/
/* 	.addNewBranchGroup{*/
/* 		font-size: 13px !important;*/
/* 	}*/
/* 	#addModalLabel {*/
/* 		font-size: 13px;*/
/* 	}*/
/* 	.modal-footer .btn {*/
/* 		font-size: 13px;*/
/* 	}*/
/* 	.square {*/
/* 		border-radius:0 !important;*/
/* 	}*/
/* 	table tr th, table tr td {*/
/* 	   vertical-align: middle !important;*/
/* 	   font-size: 13px;*/
/* 	}*/
/* 	.center {*/
/* 	   text-align: center;*/
/* 	}*/
/* */
/* </style>*/
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
/* 								<!-- <div class="card-header">*/
/* 									<h5>Custom Button</h5>*/
/* 									<span>Fundamentally, each button is described by an object - this object is read by Buttons and displayed as appropriate. There are a number of parameters that Buttons will automatically look for in the button description object such as buttons.buttons.text and buttons.buttons.action*/
/* 										which are the two fundamental parameters (button text and the action to take when activated).</span>*/
/* 								</div> -->*/
/* 								<div class="card-block">*/
/* 									<div class="dt-responsive table-responsive">*/
/* 										<table id="users-btn" class="table table-striped table-bordered Compact nowrap" width="100%">*/
/* 											<thead>*/
/* 												<tr>*/
/* 													<th class="center" style="width: 1%;white-space:nowrap !important;">#</th>*/
/* 													<th>Branch Group</th>					*/
/* 													<th style="width: 1%;white-space:nowrap !important;"></th>*/
/* 												</tr>*/
/* 											</thead>*/
/* 											<tbody>*/
/* 											    {% for branchgroup in branchgroups %}*/
/* 											          {% for group_name in branchgroup %}*/
/*     												<tr>*/
/*     													<td class="center">{{ loop.index }}</td>*/
/*     													<td>{{ group_name }}</td>    												*/
/*     													<td>*/
/*         													<a class="btn btn-secondary btn-sm" href="#"><span>Edit</span></a>*/
/*         													<a class="btn btn-outline-secondary btn-sm" href="{{ base_url }}/branch-group/delete/{{ group_name }}"><span>Delete</span></a>*/
/*     													</td>*/
/*     												</tr>*/
/* 												    {%  endfor %}*/
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
/* <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">*/
/* 	<div class="modal-dialog modal-lg" role="document">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<h5 class="modal-title" id="addModalLabel">New Branch Group</h5>*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/* 					<span aria-hidden="true">&times;</span>*/
/* 				</button>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 				*/
/* 				<div class="form-group row">*/
/* 					<label class="col-sm-3 col-form-label">Branch Group Name</label>*/
/* 					<div class="col-sm-9">*/
/* 						<input type="text" class="form-control square" id="bg_name" name="bg_name" placeholder="Enter branch group name.">*/
/* 					</div>*/
/* 				</div>*/
/* <hr>*/
/*                 <div class="form-group row">*/
/*                     <div class="col-md-5">*/
/*                         <select name="from[]" id="search" class="form-control" size="8" multiple="multiple" style="height:250px;">                            */
/*                             {% for branch in branchs %}                                                                  */
/*                                 <option value="{{ branch.branch_id }}" data-position="1">{{ branch.branch_name }}</option>                          */
/*                             {%  endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                     */
/*                     <div class="col-md-2">*/
/*                         <button type="button" id="search_rightAll" class="btn btn-block btn-secondary"> >> </button>*/
/*                         <button type="button" id="search_rightSelected" class="btn btn-block btn-secondary"> > </button>*/
/*                         <button type="button" id="search_leftSelected" class="btn btn-block btn-secondary"> < </button>*/
/*                         <button type="button" id="search_leftAll" class="btn btn-block btn-secondary"> << </button>*/
/*                     </div>*/
/*                     */
/*                      <div class="col-md-5">*/
/*                         <select name="to[]" id="search_to" class="form-control" size="8" multiple="multiple" style="height:250px;"></select>*/
/*                     </div>*/
/*                     */
/*                </div>*/
/*                */
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>*/
/* 				<button type="button" class="btn btn-primary btn-sm">Save</button>*/
/* 			</div>*/
/* 		</div>*/
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
/*     <!-- multiselect 2 -->*/
/*      <script  src="{{ base_url }}/theme/bower_components/multiselect2/lib/google-code-prettify/prettify.css"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/multiselect2/css/style.css"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/multiselect2/dist/js/prettify.min.js"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/multiselect2/dist/js/multiselect.min.js"></script>*/
/* */
/* 	<script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/pcoded.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js" ></script>*/
/* 	<script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js" ></script>*/
/* 	<script  src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* 	*/
/* 	<script>*/
/*          $(document).ready(function() {*/
/*             $('#users-btn').DataTable({*/
/*                 dom : 'Bfrtip',*/
/*                 buttons : [{*/
/*                     text : '+ Add Branch Group',*/
/*                     className : 'addNewBranchGroup btn btn btn-primary'     */
/*                 }]*/
/*             });*/
/*             */
/*             $('.addNewBranchGroup').click(function(){*/
/*                 $('#branch-data').DataTable();*/
/*                 $('#addModal').modal();*/
/*             });*/
/*     */
/*  */
/*             $('#search').multiselect({*/
/*                 search: {*/
/*                     left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',*/
/*                     right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',*/
/*                 },*/
/*                 fireSearch: function(value) {*/
/*                     return value.length > 3;*/
/*                 }*/
/*             });*/
/*       */
/*             */
/*             */
/*         });*/
/* 		*/
/* */
/* 	</script>*/
/* {% endblock %}*/
