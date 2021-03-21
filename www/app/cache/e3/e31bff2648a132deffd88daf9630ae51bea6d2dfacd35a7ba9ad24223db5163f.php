<?php

/* pages/camera/group/list.twig */
class __TwigTemplate_bce33d068d20b29392f1b5976215b1cd325895b509be9b1c3702357595e28183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/camera/group/list.twig", 1);
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
       font-size: 13px;
    }
    .center {
       text-align: center;
    }
    .left {
       text-align: left !important;
    }

</style>";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "
<div class=\"pcoded-content\">
    <div class=\"pcoded-inner-content\">

        <div class=\"main-body\">
            <div class=\"page-wrapper\">

                <div class=\"page-header\">
                    <div class=\"row align-items-end\">
                        <div class=\"col-lg-4\">
                            <div class=\"page-header-breadcrumb\">";
        // line 38
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-8 text-right\">
                            <div class=\"page-header-title\">
                                <div class=\"d-inline\">
                                    <h4>";
        // line 45
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
                                        <table id=\"camera-data\" class=\"table table-striped table-bordered Compact nowrap\" width=\"100%\">
                                            <thead>
                                                <tr>
                                                    <th class=\"center\" style=\"width: 1%;white-space:nowrap !important;\">#</th>
                                                    <th class=\"left\">Camera Group</th>     
                                                    <th class=\"left\">Branch Name</th>                            
                                                    <th class=\"center\" style=\"width: 1%;white-space:nowrap !important;\">Amount</th>                     
                                                    <th class=\"left\">Description</th>       
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Transportation</th>
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Location</th>
                                                    <th class=\"center\"  style=\"width: 1%;white-space:nowrap !important;\">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cameragroups"]) ? $context["cameragroups"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cameragroup"]) {
            echo "                                                    
                                                    <tr>
                                                        <td class=\"center\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "camera_group_name", array()), "html", null, true);
            echo "</td>          
                                                        <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "branch_name", array()), "html", null, true);
            echo "</td> 
                                                        <td class=\"center\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "amount", array()), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "camera_group_desc", array()), "html", null, true);
            echo "</td> 
                                                        <td  class=\"center\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "transportation", array()), "html", null, true);
            echo "</td> 
                                                        <td  class=\"center\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "location", array()), "html", null, true);
            echo "</td>                                                                                                                                
                                                        <td class=\"center\">
                                                            <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/camera/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "camera_group_id", array()), "html", null, true);
            echo "\"><span>Edit</span></a>
                                                            <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
            echo "/camera/delete/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cameragroup"], "camera_group_id", array()), "html", null, true);
            echo "\"><span>Delete</span></a>
                                                        </td>
                                                    </tr>";
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
             
            \$('#camera-data').DataTable({
                dom : 'Bfrtip',
                buttons : [{
                    text : '+ Add Camera Group',
                    className : 'btn btn-secondary',
                    action : function(e, dt, node, config) {
                        window.location.href=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/camera-group/add\";
                    }    
                }]
            });
            \$('.dt-button').removeClass('dt-button');
            
        });
 
        function delitem(cid) {             
          var url = '";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/camera-group/delete/'+cid;
           \$.post(url, function(response) {                    
                alert(response); 
                window.location.href=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/camera-group\";      
            });     
       }
       
    </script>";
    }

    public function getTemplateName()
    {
        return "pages/camera/group/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 167,  356 => 164,  344 => 155,  330 => 144,  326 => 143,  322 => 142,  318 => 141,  314 => 140,  309 => 138,  305 => 137,  301 => 136,  297 => 135,  291 => 132,  287 => 131,  283 => 130,  279 => 129,  274 => 127,  270 => 126,  266 => 125,  262 => 124,  258 => 123,  253 => 121,  249 => 120,  245 => 119,  241 => 118,  237 => 117,  233 => 116,  229 => 115,  225 => 114,  221 => 113,  216 => 111,  212 => 110,  208 => 109,  205 => 108,  187 => 91,  168 => 87,  162 => 86,  157 => 84,  153 => 83,  149 => 82,  145 => 81,  141 => 80,  137 => 79,  133 => 78,  113 => 76,  80 => 45,  71 => 38,  59 => 27,  56 => 26,  33 => 4,  30 => 3,  11 => 1,);
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
/*        font-size: 13px;*/
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
/*                                         <table id="camera-data" class="table table-striped table-bordered Compact nowrap" width="100%">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <th class="center" style="width: 1%;white-space:nowrap !important;">#</th>*/
/*                                                     <th class="left">Camera Group</th>     */
/*                                                     <th class="left">Branch Name</th>                            */
/*                                                     <th class="center" style="width: 1%;white-space:nowrap !important;">Amount</th>                     */
/*                                                     <th class="left">Description</th>       */
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Transportation</th>*/
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Location</th>*/
/*                                                     <th class="center"  style="width: 1%;white-space:nowrap !important;">Option</th>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/*                                                  {% for cameragroup in cameragroups %}                                                    */
/*                                                     <tr>*/
/*                                                         <td class="center">{{ loop.index }}</td>*/
/*                                                         <td>{{ cameragroup.camera_group_name }}</td>          */
/*                                                         <td>{{ cameragroup.branch_name }}</td> */
/*                                                         <td class="center">{{ cameragroup.amount }}</td>*/
/*                                                         <td>{{ cameragroup.camera_group_desc }}</td> */
/*                                                         <td  class="center">{{ cameragroup.transportation }}</td> */
/*                                                         <td  class="center">{{ cameragroup.location }}</td>                                                                                                                                */
/*                                                         <td class="center">*/
/*                                                             <a class="btn btn-primary btn-sm" href="{{ base_url }}/camera/edit/{{ cameragroup.camera_group_id }}"><span>Edit</span></a>*/
/*                                                             <a class="btn btn-secondary btn-sm" href="{{ base_url }}/camera/delete/{{ cameragroup.camera_group_id }}"><span>Delete</span></a>*/
/*                                                         </td>*/
/*                                                     </tr>                                                  */
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
/*             $('#camera-data').DataTable({*/
/*                 dom : 'Bfrtip',*/
/*                 buttons : [{*/
/*                     text : '+ Add Camera Group',*/
/*                     className : 'btn btn-secondary',*/
/*                     action : function(e, dt, node, config) {*/
/*                         window.location.href="{{ base_url }}/camera-group/add";*/
/*                     }    */
/*                 }]*/
/*             });*/
/*             $('.dt-button').removeClass('dt-button');*/
/*             */
/*         });*/
/*  */
/*         function delitem(cid) {             */
/*           var url = '{{ base_url }}/camera-group/delete/'+cid;*/
/*            $.post(url, function(response) {                    */
/*                 alert(response); */
/*                 window.location.href="{{ base_url }}/camera-group";      */
/*             });     */
/*        }*/
/*        */
/*     </script>*/
/* {% endblock %}*/
