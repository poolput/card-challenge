<?php

/* pages/task/list.twig */
class __TwigTemplate_457c50c2a9c157562fae606a5e6fdc4b91077997de5bda4920b56b64a210afaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/task/list.twig", 1);
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
 
    .square {
        border-radius:0 !important;
    }
    table tr th, table tr td {
       vertical-align: middle !important;
    }
    .center {
       text-align: center;
    }
    .left {
       text-align: left !important;
    }

</style>";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "
<div class=\"pcoded-content\">
    <div class=\"pcoded-inner-content\">

        <div class=\"main-body\">
            <div class=\"page-wrapper\">

                <div class=\"page-header\">
                    <div class=\"row align-items-end\">
                        <div class=\"col-lg-4\">
                            <div class=\"page-header-breadcrumb\">";
        // line 37
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-8 text-right\">
                            <div class=\"page-header-title\">
                                <div class=\"d-inline\">
                                    <h4>";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["title_body"]) ? $context["title_body"] : null), "html", null, true);
        echo "
                                    </h4>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"page-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">

                            <div class=\"card\">
                          
                                <div class=\"card-block\">
                                    <div class=\"dt-responsive table-responsive\">
                                        <table id=\"task-data\" class=\"table compact table-striped table-bordered nowrap dataTable\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th class=\"center\" style=\"width: 1%;white-space:nowrap !important;\">#</th>
                                                    <th class=\"left\">Name</th>     
                                                    <th class=\"left\">Role</th>                            
                                                    <th class=\"left\">Report Name</th>                     
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Period</th>
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Type</th>
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Next Run</th>
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Last Run</th>
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cameragroups"]) ? $context["cameragroups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cameragroup"]) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cameragroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>";
    }

    // line 108
    public function block_footer($context, array $blocks = array())
    {
        // line 109
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
    
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/jszip.min.js\" ></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/pdfmake.min.js\" ></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/js/vfs_fonts.js\" ></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js\" ></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js\" ></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js\" ></script>
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js\" ></script>
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js\" ></script>
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js\" ></script>
    
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

    <script  src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
    <script  src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
    <script  src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
    <script  src=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>

    <!-- multiselect 2 -->
     <script  src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/lib/google-code-prettify/prettify.css\"></script>
    <script  src=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/css/style.css\"></script>
    <script  src=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/dist/js/prettify.min.js\"></script>
    <script  src=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/multiselect2/dist/js/multiselect.min.js\"></script>

    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js\" ></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\" ></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\" ></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\" ></script>
    <script  src=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
    
    <script>
         \$(function() {         
             
            \$('#task-data').DataTable({
                \"lengthMenu\": [[15,30, 50, 100], [15,30, 50, 100]],
                \"columnDefs\": [ {
                    \"targets\":8, \"orderable\": false
                } ],
                dom : 'Bfrtip',
                buttons : [{
                    text : '+ Add',
                    className : 'btn btn-secondary',
                    action : function(e, dt, node, config) {
                        window.location.href=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/task-scheduler/add\";
                    }    
                }]
            });
            \$('.dt-button').removeClass('dt-button');            
        });
 
        function delitem(task_id) {             
           var url = '";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/camera-group/delete/'+task_id;
           \$.post(url, function(response) {                    
                alert(response); 
                window.location.href=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/task-scheduler\";      
            });     
       }
       
    </script>";
    }

    public function getTemplateName()
    {
        return "pages/task/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 170,  293 => 167,  282 => 159,  264 => 144,  260 => 143,  256 => 142,  252 => 141,  248 => 140,  243 => 138,  239 => 137,  235 => 136,  231 => 135,  225 => 132,  221 => 131,  217 => 130,  213 => 129,  208 => 127,  204 => 126,  200 => 125,  196 => 124,  192 => 123,  187 => 121,  183 => 120,  179 => 119,  175 => 118,  171 => 117,  167 => 116,  163 => 115,  159 => 114,  155 => 113,  150 => 111,  146 => 110,  142 => 109,  139 => 108,  121 => 91,  113 => 76,  79 => 44,  70 => 37,  58 => 26,  55 => 25,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* <style>*/
/*  */
/*     .square {*/
/*         border-radius:0 !important;*/
/*     }*/
/*     table tr th, table tr td {*/
/*        vertical-align: middle !important;*/
/*     }*/
/*     .center {*/
/*        text-align: center;*/
/*     }*/
/*     .left {*/
/*        text-align: left !important;*/
/*     }*/
/* */
/* </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/*     <div class="pcoded-inner-content">*/
/* */
/*         <div class="main-body">*/
/*             <div class="page-wrapper">*/
/* */
/*                 <div class="page-header">*/
/*                     <div class="row align-items-end">*/
/*                         <div class="col-lg-4">*/
/*                             <div class="page-header-breadcrumb">*/
/*                                 {{ breadcrumb|raw }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-lg-8 text-right">*/
/*                             <div class="page-header-title">*/
/*                                 <div class="d-inline">*/
/*                                     <h4>*/
/*                                         {{ title_body }}*/
/*                                     </h4>*/
/*                                     </span>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="page-body">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-12">*/
/* */
/*                             <div class="card">*/
/*                           */
/*                                 <div class="card-block">*/
/*                                     <div class="dt-responsive table-responsive">*/
/*                                         <table id="task-data" class="table compact table-striped table-bordered nowrap dataTable" width="100%">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th class="center" style="width: 1%;white-space:nowrap !important;">#</th>*/
/*                                                     <th class="left">Name</th>     */
/*                                                     <th class="left">Role</th>                            */
/*                                                     <th class="left">Report Name</th>                     */
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Period</th>*/
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Type</th>*/
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Next Run</th>*/
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Last Run</th>*/
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Option</th>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/*                                                  {% for cameragroup in cameragroups %}                                                    */
/* {#                                                     <tr>#}*/
/* {#                                                         <td class="center">{{ loop.index }}</td>#}*/
/* {#                                                         <td>{{ cameragroup.camera_group_name }}</td>          #}*/
/* {#                                                         <td>{{ cameragroup.branch_name }}</td> #}*/
/* {#                                                         <td class="center">{{ cameragroup.amount }}</td>#}*/
/* {#                                                         <td>{{ cameragroup.camera_group_desc }}</td> #}*/
/* {#                                                         <td  class="center">{{ cameragroup.transportation }}</td> #}*/
/* {#                                                         <td  class="center">{{ cameragroup.location }}</td>                                                                                                                                #}*/
/* {#                                                         <td class="center">#}*/
/* {#                                                             <a class="btn btn-primary btn-sm" href="{{ base_url }}/camera-group/edit/{{ cameragroup.camera_group_id }}"><span>Edit</span></a>#}*/
/* {#                                                             <a class="btn btn-secondary btn-sm" href="{{ base_url }}/camera-group/delete/{{ cameragroup.camera_group_id }}"><span>Delete</span></a>#}*/
/* {#                                                         </td>#}*/
/* {#                                                     </tr>                                                  #}*/
/*                                                 {%  endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/*     <script src="{{ base_url }}/theme/bower_components/datatables.net/js/jquery.dataTables.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" ></script>*/
/*     */
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/js/jszip.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/js/pdfmake.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/js/vfs_fonts.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/jszip.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js" ></script>*/
/*     */
/*     <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" ></script>*/
/* */
/*     <script  src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* */
/*     <!-- multiselect 2 -->*/
/*      <script  src="{{ base_url }}/theme/bower_components/multiselect2/lib/google-code-prettify/prettify.css"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/multiselect2/css/style.css"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/multiselect2/dist/js/prettify.min.js"></script>*/
/*     <script  src="{{ base_url }}/theme/bower_components/multiselect2/dist/js/multiselect.min.js"></script>*/
/* */
/*     <script src="{{ base_url }}/theme/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/pcoded.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js" ></script>*/
/*     <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js" ></script>*/
/*     <script  src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/*     */
/*     <script>*/
/*          $(function() {         */
/*              */
/*             $('#task-data').DataTable({*/
/*                 "lengthMenu": [[15,30, 50, 100], [15,30, 50, 100]],*/
/*                 "columnDefs": [ {*/
/*                     "targets":8, "orderable": false*/
/*                 } ],*/
/*                 dom : 'Bfrtip',*/
/*                 buttons : [{*/
/*                     text : '+ Add',*/
/*                     className : 'btn btn-secondary',*/
/*                     action : function(e, dt, node, config) {*/
/*                         window.location.href="{{ base_url }}/task-scheduler/add";*/
/*                     }    */
/*                 }]*/
/*             });*/
/*             $('.dt-button').removeClass('dt-button');            */
/*         });*/
/*  */
/*         function delitem(task_id) {             */
/*            var url = '{{ base_url }}/camera-group/delete/'+task_id;*/
/*            $.post(url, function(response) {                    */
/*                 alert(response); */
/*                 window.location.href="{{ base_url }}/task-scheduler";      */
/*             });     */
/*        }*/
/*        */
/*     </script>*/
/* {% endblock %}*/
