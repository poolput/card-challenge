<?php

/* pages/camera/group/form.twig */
class __TwigTemplate_277fd790b751d578e9ac1e8e5eed492753a50afffaf14fd7e2867af25e97275a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/camera/group/form.twig", 1);
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("head", $context, $blocks);
        echo "
<style>
    .square {
        border-radius:0 !important;
    }
</style>";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"pcoded-content\">
    <div class=\"pcoded-inner-content\">
        <div class=\"main-body\">
            <div class=\"page-wrapper\">
                <div class=\"page-header\">
                    <div class=\"row align-items-end\">
                        <div class=\"col-lg-4\">
                            <div class=\"page-header-breadcrumb\">";
        // line 20
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-8 text-right\">
                            <div class=\"page-header-title\">
                                <div class=\"d-inline\">
                                    <h4>";
        // line 27
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
                                <div class=\"card-block\">";
        // line 42
        if ( !twig_test_empty((isset($context["warning_exist"]) ? $context["warning_exist"] : null))) {
            // line 43
            echo "                                        <div class=\"alert alert-warning background-warning\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                                <i class=\"icofont icofont-close-line-circled text-white\"></i>
                                            </button>
                                            <strong>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["warning_exist"]) ? $context["warning_exist"] : null), "html", null, true);
            echo "  </strong>
                                            <code></code>
                                        </div>";
        }
        // line 51
        echo "                                    
                                    <h4 class=\"sub-title\">Camera Setting : Group</h4>
                                    <form action=\"\" method=\"post\" autocomplete=\"on\" id=\"frmmain\" name=\"frmmain\">
                                        <input type=\"hidden\" name=\"camera_id\" id=\"camera_id\"    value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camera"]) ? $context["camera"] : null), "camera_id", array()), "html", null, true);
        echo "\">
                                        <div class=\"form-group row\">
                                            <div class=\"col-sm-1\"></div>
                                            <label class=\"col-sm-2 col-form-label\">Group Name<span class=\"text-danger error\"> *</span></label>
                                            <div class=\"col-sm-8\">
                                                <input type=\"text\" class=\"form-control square\" name=\"group_name\" id=\"group_name\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camera"]) ? $context["camera"] : null), "group_name", array()), "html", null, true);
        echo "\" placeholder=\"\" required >           
                                                 <span class=\"messages\"><p class=\"text-danger error\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["incurrect_message"]) ? $context["incurrect_message"] : null), "html", null, true);
        echo "
                                                    </p></span>                              
                                            </div>
                                            <div class=\"col-sm-1\"></div>
                                        </div>
                                        
                                        <div class=\"form-group row\">
                                            <div class=\"col-sm-1\"></div>
                                            <label class=\"col-sm-2 col-form-label\">Branch<span class=\"text-danger error\"> *</span></label>
                                            <div class=\"col-sm-8\">                                                                                                                                      
                                                <input type=\"text\" class=\"form-control square\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["branch_name"]) ? $context["branch_name"] : null), "html", null, true);
        echo "\" readonly >                                                                                                                                             
                                            </div>
                                             <div class=\"col-sm-1\"></div>
                                        </div>                                                
                                        
                                        <div class=\"form-group row\">
                                            <div class=\"col-sm-1\"></div>
                                            <label class=\"col-sm-2 col-form-label\">Description</label>
                                            <div class=\"col-sm-8\">                                                    
                                                <textarea  class=\"form-control square\" rows=\"5\" name=\"description\" id=\"description\">";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camera"]) ? $context["camera"] : null), "description", array()), "html", null, true);
        echo "</textarea>                                
                                            </div>
                                            <div class=\"col-sm-1\"></div>
                                        </div>                                        
                                        
                                        <br>
                                         <div class=\"form-group row\">
                                            <div class=\"col-sm-1\"></div>
                                            <label class=\"col-sm-2 col-form-label\">Choose Camera<span class=\"text-danger error\"> *</span></label>
                                            <div class=\"col-sm-8\">                                            
                                                <div class=\"border-checkbox-section\">";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cameralist"]) ? $context["cameralist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["camera"]) {
            echo "                                     
    \t\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-sm-3 border-checkbox-group border-checkbox-group-primary\">
    \t\t\t\t\t\t\t\t\t\t\t\t        <input class=\"border-checkbox\" type=\"checkbox\" id=\"checkbox";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["camera"], "camera_id", array()), "html", null, true);
            echo "\"> 
    \t\t\t\t\t\t\t\t\t                    <label class=\"border-checkbox-label\" for=\"checkbox";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["camera"], "camera_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["camera"], "camera_name", array()), "html", null, true);
            echo "</label>
    \t\t\t\t\t\t\t\t\t\t\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "     
\t\t\t\t\t\t\t\t\t\t\t\t</div>                                                                               
                                            </div>
                                             <div class=\"col-sm-1\"></div>
                                        </div>   

                                        <br>
                                        <div class=\"form-group row\">
                                            <div class=\"col-sm-1\"></div>
                                           <div class=\"col-md-10 text-right\">
                                                <button class=\"btn btn-outline-secondary btn-cancel\">Cancel</button>
                                                <button class=\"btn btn-secondary btn-save\">&nbsp; Save &nbsp;</button>
                                            </div>
                                            <div class=\"col-sm-1\"></div>
                                        </div>
                                        
                                    </form>
                                    
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

    // line 125
    public function block_footer($context, array $blocks = array())
    {
        // line 126
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next/js/i18next.min.js\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/select2/js/select2.full.min.js\"></script>

<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>
 
<script>
 
    function validate(){
 
        \$('.messages').hide();        
        var camera_name = \$('#camera_name').val();
        var branch_id = \$('#branch_id').val();       
        var camera_entrance = \$('#camera_entrance').val();        
        var camera_type = \$('#camera_type').val();
        var valid = 0;
        
        if(!camera_name){
            \$('#camera_name').parent('div').find('.messages').show();
            valid = 1;
        }
        if(!branch_id){
            \$('#branch_id').parent('div').find('.messages').show();
            valid = 1;
        }
        if(!camera_entrance){
            \$('#camera_entrance').parent('div').find('.messages').show();
            valid = 1;
        }
        if(!camera_type){
            \$('#camera_type').parent('div').find('.messages').show();
            valid = 1;
        }

        var type = '";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "';
        if(type == 'edit'){
            
 
            
        } else {
     
            if (valid != 1) {
                return true;
            } else {
                return false;
            }
        }
        
    }
    
    \$('.btn-cancel').click(function() {
        window.history.back();
        return false;
    });
    
    \$('.btn-save').click(function() {       
        return validate();
    }); 
    
</script>";
    }

    public function getTemplateName()
    {
        return "pages/camera/group/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 166,  241 => 136,  237 => 135,  233 => 134,  229 => 133,  224 => 131,  220 => 130,  216 => 129,  212 => 128,  208 => 127,  204 => 126,  201 => 125,  171 => 96,  161 => 94,  157 => 93,  150 => 91,  137 => 80,  125 => 71,  112 => 61,  108 => 59,  100 => 54,  95 => 51,  89 => 47,  83 => 43,  81 => 42,  65 => 27,  56 => 20,  46 => 11,  43 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* {% block head %}*/
/* {{ parent() }}*/
/* <style>*/
/*     .square {*/
/*         border-radius:0 !important;*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/*     <div class="pcoded-inner-content">*/
/*         <div class="main-body">*/
/*             <div class="page-wrapper">*/
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
/*                 <div class="page-body">*/
/*                     <div class="row">*/
/* */
/*                         <div class="col-sm-12">*/
/*                             <div class="card">*/
/*                                 <div class="card-block">*/
/*                                 */
/*                                     {% if warning_exist is not empty %}*/
/*                                         <div class="alert alert-warning background-warning">*/
/*                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">*/
/*                                                 <i class="icofont icofont-close-line-circled text-white"></i>*/
/*                                             </button>*/
/*                                             <strong> {{ warning_exist }}  </strong>*/
/*                                             <code></code>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                     */
/*                                     <h4 class="sub-title">Camera Setting : Group</h4>*/
/*                                     <form action="" method="post" autocomplete="on" id="frmmain" name="frmmain">*/
/*                                         <input type="hidden" name="camera_id" id="camera_id"    value="{{ camera.camera_id }}">*/
/*                                         <div class="form-group row">*/
/*                                             <div class="col-sm-1"></div>*/
/*                                             <label class="col-sm-2 col-form-label">Group Name<span class="text-danger error"> *</span></label>*/
/*                                             <div class="col-sm-8">*/
/*                                                 <input type="text" class="form-control square" name="group_name" id="group_name" value="{{ camera.group_name }}" placeholder="" required >           */
/*                                                  <span class="messages"><p class="text-danger error">*/
/*                                                         {{ incurrect_message }}*/
/*                                                     </p></span>                              */
/*                                             </div>*/
/*                                             <div class="col-sm-1"></div>*/
/*                                         </div>*/
/*                                         */
/*                                         <div class="form-group row">*/
/*                                             <div class="col-sm-1"></div>*/
/*                                             <label class="col-sm-2 col-form-label">Branch<span class="text-danger error"> *</span></label>*/
/*                                             <div class="col-sm-8">                                                                                                                                      */
/*                                                 <input type="text" class="form-control square" value="{{ branch_name }}" readonly >                                                                                                                                             */
/*                                             </div>*/
/*                                              <div class="col-sm-1"></div>*/
/*                                         </div>                                                */
/*                                         */
/*                                         <div class="form-group row">*/
/*                                             <div class="col-sm-1"></div>*/
/*                                             <label class="col-sm-2 col-form-label">Description</label>*/
/*                                             <div class="col-sm-8">                                                    */
/*                                                 <textarea  class="form-control square" rows="5" name="description" id="description">{{ camera.description }}</textarea>                                */
/*                                             </div>*/
/*                                             <div class="col-sm-1"></div>*/
/*                                         </div>                                        */
/*                                         */
/*                                         <br>*/
/*                                          <div class="form-group row">*/
/*                                             <div class="col-sm-1"></div>*/
/*                                             <label class="col-sm-2 col-form-label">Choose Camera<span class="text-danger error"> *</span></label>*/
/*                                             <div class="col-sm-8">                                            */
/*                                                 <div class="border-checkbox-section">             */
/*                                                     {% for camera in cameralist %}                                     */
/*     												    <div class="col-sm-3 border-checkbox-group border-checkbox-group-primary">*/
/*     												        <input class="border-checkbox" type="checkbox" id="checkbox{{ camera.camera_id }}"> */
/*     									                    <label class="border-checkbox-label" for="checkbox{{ camera.camera_id }}">{{ camera.camera_name }}</label>*/
/*     													</div>		    */
/*     												{% endfor %}     */
/* 												</div>                                                                               */
/*                                             </div>*/
/*                                              <div class="col-sm-1"></div>*/
/*                                         </div>   */
/* */
/*                                         <br>*/
/*                                         <div class="form-group row">*/
/*                                             <div class="col-sm-1"></div>*/
/*                                            <div class="col-md-10 text-right">*/
/*                                                 <button class="btn btn-outline-secondary btn-cancel">Cancel</button>*/
/*                                                 <button class="btn btn-secondary btn-save">&nbsp; Save &nbsp;</button>*/
/*                                             </div>*/
/*                                             <div class="col-sm-1"></div>*/
/*                                         </div>*/
/*                                         */
/*                                     </form>*/
/*                                     */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* <script src="{{ base_url }}/theme/bower_components/i18next/js/i18next.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/select2/js/select2.full.min.js"></script>*/
/* */
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/*  */
/* <script>*/
/*  */
/*     function validate(){*/
/*  */
/*         $('.messages').hide();        */
/*         var camera_name = $('#camera_name').val();*/
/*         var branch_id = $('#branch_id').val();       */
/*         var camera_entrance = $('#camera_entrance').val();        */
/*         var camera_type = $('#camera_type').val();*/
/*         var valid = 0;*/
/*         */
/*         if(!camera_name){*/
/*             $('#camera_name').parent('div').find('.messages').show();*/
/*             valid = 1;*/
/*         }*/
/*         if(!branch_id){*/
/*             $('#branch_id').parent('div').find('.messages').show();*/
/*             valid = 1;*/
/*         }*/
/*         if(!camera_entrance){*/
/*             $('#camera_entrance').parent('div').find('.messages').show();*/
/*             valid = 1;*/
/*         }*/
/*         if(!camera_type){*/
/*             $('#camera_type').parent('div').find('.messages').show();*/
/*             valid = 1;*/
/*         }*/
/* */
/*         var type = '{{ type }}';*/
/*         if(type == 'edit'){*/
/*             */
/*  */
/*             */
/*         } else {*/
/*      */
/*             if (valid != 1) {*/
/*                 return true;*/
/*             } else {*/
/*                 return false;*/
/*             }*/
/*         }*/
/*         */
/*     }*/
/*     */
/*     $('.btn-cancel').click(function() {*/
/*         window.history.back();*/
/*         return false;*/
/*     });*/
/*     */
/*     $('.btn-save').click(function() {       */
/*         return validate();*/
/*     }); */
/*     */
/* </script>*/
/* {% endblock %}*/
/* */
