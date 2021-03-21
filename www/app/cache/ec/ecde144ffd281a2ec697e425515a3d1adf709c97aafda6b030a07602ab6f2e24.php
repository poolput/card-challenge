<?php

/* pages/floorplan/view.twig */
class __TwigTemplate_f5c9d48fc6edb0ef7d394a1563a1ffc34cc8d98686d66e389703fbb8d9f686b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/index.html", "pages/floorplan/view.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'criteria' => array($this, 'block_criteria'),
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


<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/css/j-forms.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/feather/css/feather.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/css/p-loader.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/css/fixedColumns.dataTables.min.css\">
<style type=\"text/css\">
\t#floorplan_canvas{
\t\tborder:1px solid #d3d3d3;
\t\tbackground-image:url('');
\t\tbackground-color: #f8f8f8;
\t\tbackground-size:100% 100%;
\t\twidth:100%
\t}

\ttable{
\t\twidth: 100%;
\t}

\t#density_location_table{
\t\tmin-height: unset;
\t}

\t.dataTables_scrollBody{
\t\theight: unset !important;
\t}

\t.label_box{
\t\tposition: absolute;
\t    background: #000000bf;
\t    padding: 1%;
\t    border-radius: 5px;
\t    box-shadow: 1px 1px 15px #00000099;
\t    color: #fff;
\t    display: inline-table;
\t    line-height: 1vw;
\t}

\t.label_text{
\t\tfont-size: 0.7vw;
\t}

</style>";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "
<div class=\"pcoded-content\">
\t<div class=\"pcoded-inner-content\">
\t\t<div class=\"main-body\">
\t\t\t<div class=\"page-wrapper\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<div class=\"row align-items-end\">
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<div class=\"page-header-breadcrumb\">";
        // line 62
        echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-8 text-right\">
\t\t\t\t\t\t\t<div class=\"page-header-title\">
\t\t\t\t\t\t\t\t<div class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : null), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"page-body\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card\">";
        // line 80
        $this->displayBlock('criteria', $context, $blocks);
        // line 83
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"loader animation-start d-none\">
                        <span class=\"circle delay-1 size-2\"></span>
                        <span class=\"circle delay-2 size-4\"></span>
                        <span class=\"circle delay-3 size-6\"></span>
                        <span class=\"circle delay-4 size-7\"></span>
                        <span class=\"circle delay-5 size-7\"></span>
                        <span class=\"circle delay-6 size-6\"></span>
                        <span class=\"circle delay-7 size-4\"></span>
                        <span class=\"circle delay-8 size-2\"></span>
                    </div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<div class=\"location-title\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapse_location\">
\t\t\t\t\t\t\t\t\t\t<div class=\"location-selected\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"period-selected\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t     <div class=\"card-block\">
\t\t\t\t\t\t\t     \t<div class=\"row\">
\t\t\t\t\t\t\t     \t\t<div class=\"col\">
\t\t\t\t\t\t\t     \t\t\t<div class=\"form-group\">
\t\t\t                                    <canvas id=\"floorplan_canvas\"
\t\t\t\t\t\t\t\t\t\t\t\t\tdata-imgsrc=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["floorplan_data"]) ? $context["floorplan_data"] : null), "map_path", array()), "html", null, true);
        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"background-image:url(";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["floorplan_data"]) ? $context["floorplan_data"] : null), "map_path", array()), "html", null, true);
        echo ")\"></canvas>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"hidden_canvas_width\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"hidden_canvas_height\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"label_div\"></div>
\t\t\t\t\t\t\t     \t\t\t</div>
\t\t\t\t\t\t\t     \t\t</div>
\t\t\t\t\t\t\t     \t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row mb-2 mt-3 option-minmax-reload\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row mb-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dt-responsive table-responsive col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<table id=\"density_location_table\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"table compact table-striped table-bordered order-column nowrap dataTable\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"stripe row-border order-column\" style=\"width: 100%\">

\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<input type=\"hidden\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : null), "lessthan", array()), "html", null, true);
        echo "\" id=\"color_lessthan\">
<input type=\"hidden\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : null), "between", array()), "html", null, true);
        echo "\" id=\"color_between\">
<input type=\"hidden\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["color"]) ? $context["color"] : null), "greaterthan", array()), "html", null, true);
        echo "\" id=\"color_greaterthan\">";
    }

    // line 80
    public function block_criteria($context, array $blocks = array())
    {
        // line 81
        $this->loadTemplate("filter/criteria_floorplan.twig", "pages/floorplan/view.twig", 81)->display(array_merge($context, array("base_url" => (isset($context["base_url"]) ? $context["base_url"] : null))));
    }

    // line 147
    public function block_footer($context, array $blocks = array())
    {
        // line 148
        $this->displayParentBlock("footer", $context, $blocks);
        echo "


<!-- datatable -->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net/js/jquery.dataTables.min.js\" ></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js\" ></script>
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js\" ></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js\" ></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js\" ></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js\" ></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js\" ></script>

 <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/moment-with-locales.min.js\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js\"></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/SmoothScroll.js\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/pcoded.min.js\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/jquery.mCustomScrollbar.concat.min.js\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/vartical-layout.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/script.js\"></script>

<script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/pages/j-pro/js/custom/popup-menu-form.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/common-pages.js\"></script>

<!-- custom js -->
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/service.js\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/criteria.js\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_location.js\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_group.js\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_date.js\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/filter_event.js\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/theme/assets/js/density_location.js\"></script>

<script>

var cntDraw = 0;
var canvas = document.getElementById(\"floorplan_canvas\");
var ctx;
var map_id = 0;

\$(\"#branch_id\").change(function(){
\tvar branch_id = \$(this).val();
\tvar url = \"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/floorplan/get-floorplan-by-branch/\"+branch_id;
\t\$(\"#search\").prop(\"disabled\", true);
\tif(branch_id == ''){
\t\t\$(\"#map_id\").empty().append(\"<option selected value=''>-- Select Floorplan --</option>\");
\t}else{
\t\t\$.post(url, function(response){
\t\t\tif(response != ''){
\t\t\t\t\$(\"#map_id\").empty().append(\"<option selected value=''>-- Select Floorplan --</option>\");
\t\t\t\t\$.each(response, function(index, value){
\t\t\t\t\t\$(\"#map_id\").append(\"<option value='\"+value.map_id+\"'>\"+value.map_name+\"</option>\");
\t\t\t\t});
\t\t\t}else{
\t\t\t\t\$(\"#map_id\").empty().append(\"<option selected value=''>-- Floorplan Not Found --</option>\");
\t\t\t}
\t\t},'json');

\t\t\$(\"#option_branch\").val(branch_id);
\t}
});

\$(\"#map_id\").change(function(){
\tmap_id = \$(this).val();
\tif(map_id != ''){
\t\t\$(\"#search\").prop(\"disabled\", false);
\t\tgetCameraGroup(map_id);
\t}else{
\t\t\$(\"#search\").prop(\"disabled\", true);
\t}
});

\$(\"#search\").click(function(){
\trenderFloorplan(map_id);
});


function getCameraGroup(map_id){
\tvar url = '";
        // line 228
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/floorplan/get-cameragroup-by-floorplan/'+map_id;
\t\$.post(url, function(response){
\t\tif(response != ''){
\t\t\t\$(\"#hidden_cam_group\").empty();
\t\t\t\$.each(response, function(index, cam_id){
\t\t\t\t\$(\"#hidden_cam_group\").append('<input type=\"hidden\" name=\"option_camera_group[]\" value=\"'+cam_id+'\">');
\t\t\t});
\t\t}
\t}, 'json');
}


function getMapData(map_id){
\tvar url = '";
        // line 241
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/floorplan/get-floorplan-data/'+map_id;
\t\$.post(url, function(response){
\t\tif(response.area_perimeters != ''){
\t\t\tcntDraw = 0;
\t\t\t\$(\"#hidden_cam_group\").empty();
\t\t\t\$.each(response.area_perimeters, function(index, value){
\t\t\t\t\$(\"#hidden_cam_group\").append('<input type=\"hidden\" name=\"option_camera_group[]\" value=\"'+value.camera_group_id+'\">');
\t\t\t});
\t\t}
\t}, 'json');
}

function renderFloorplan(map_id, dataset){
\tvar url = '";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "/floorplan/get-floorplan-data/'+map_id;
\tvar params = \$('#criteria-form').serialize();

\tcanvas.setAttribute('data-imgsrc', \"\");
    \$(\"#floorplan_canvas\").css(\"background-image\", \"\");

\t\$.post(url, params, function(response){
\t\tcntDraw = 0;
\t\tif(response != ''){
\t\t\tif(response.floorplan_data != ''){
\t        \tcanvas.setAttribute('data-imgsrc', response.floorplan_data.map_path);
\t\t        \$(\"#floorplan_canvas\").css(\"background-image\", \"url(\"+response.floorplan_data.map_path+\")\");
\t\t        \$(\"#hidden_canvas_width\").val(response.floorplan_data.map_width);
\t\t        \$(\"#hidden_canvas_height\").val(response.floorplan_data.map_height);
\t\t\t}

\t\t\tif(response.area_perimeters != ''){
\t\t\t\tvar img = new Image();
\t\t\t    img.src = canvas.getAttribute('data-imgsrc');
\t\t\t    
\t\t\t    img.onload = function(){
\t\t\t        ctx = canvas.getContext(\"2d\");
\t\t\t        
\t\t            canvas.width = \$(\"#floorplan_canvas\").outerWidth();
\t\t\t        canvas.height = \$(\"#floorplan_canvas\").outerHeight();

\t\t\t        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

\t\t\t\t\tdrawAll(response.area_perimeters);
\t\t\t    }
\t\t\t}
\t\t}
\t}, 'json');
\t
}

function drawAll(json){
    \$(\"#label_div\").empty();
    if(json != ''){
        \$.each(json,function(index, coords){
            var endloop = false;
            ctx.lineWidth = 1;
            ctx.strokeStyle = \"white\";
            ctx.lineCap = \"square\";
            ctx.beginPath();
            \$.each(coords.coordinates, function(i,marked){
            \tif(cntDraw == 0){
\t                marked.x = calculateNewCoord(canvas.width, \$(\"#hidden_canvas_width\").val(), marked.x);
\t                marked.y = calculateNewCoord(canvas.height, \$(\"#hidden_canvas_height\").val(), marked.y);
            \t}

                if(i==0){
                    ctx.moveTo(marked.x, marked.y);
                } else {                    
                    ctx.lineTo(marked.x, marked.y);
                    if(i = coords.coordinates.length-1){
                        endloop = true;
                    }
                } 
            });

            if(endloop){
                ctx.lineTo(coords.coordinates[0].x,coords.coordinates[0].y);
                ctx.closePath();
                ctx.fillStyle = 'rgba(0, 196, 255, 0.5)';
                ctx.fill();
                ctx.strokeStyle = 'blue';
            }

            ctx.stroke();

            var cnt_data = coords.count_data;

            drawLabelbox(coords.camera_group_id, coords.area_name,coords.label_top, coords.label_left, coords.label_width, coords.label_height, cnt_data);
            
        });

        cntDraw = 1;
    }
}

function drawLabelbox(cam_group_id,cam_group_name,top,left,width,height, cnt_data){
\tvar growth_percent = 0;
\tvar counting = 0;
\tif(cnt_data.past != 0){
\t\tgrowth_percent = ((cnt_data.present-cnt_data.past)/cnt_data.past)*100;
\t}
\tif(cnt_data.present != 0){
\t\tcounting = fnService.formatComma(cnt_data.present);
\t}
    var label = '<div class=\"label_box\" id=\"label_box-'+cam_group_id+'\" style=\"top: '+top+'%;left: '+left+'%;width: '+width+'%;height: '+height+'%;\">'+
    \t\t\t'<span class=\"label_text\">Group : '+cam_group_name+'<br>Counting : '+counting+' ('+growth_percent.toFixed(2)+'%)</span></div>';
    \$(\"#label_div\").append(label);
}

function calculateNewCoord(new_width_height, old_width_height, old_x_y){

    var new_x_y = (new_width_height/old_width_height)*old_x_y;
    return new_x_y;
}

function resize(){    
\t\$(\"#floorplan_canvas\").outerHeight(
\t\t\$(window).height() - \$(\"#floorplan_canvas\").offset().top - Math.abs(\$(\"#floorplan_canvas\").outerHeight(true) - \$(\"#floorplan_canvas\").outerHeight())
\t);
}


\$(document).ready(function(){

\tresize();

\t\$(window).on(\"resize\", function(){                      
    \tresize();
\t});

\t\$(\".option-date-end\").change(function(){
        \$(\".option-date-start\").val(\$(this).val());
\t});

\t\$(\"#option_week_year_end\").change(function(){
\t\t\$(\"#option_week_year_start\").val(\$(this).val());
\t});

\t\$(\"#option_month_year_end\").change(function(){
\t\t\$(\"#option_month_year_start\").val(\$(this).val());
\t});

\t\$(\"#option_week_end\").change(function(){
\t\t\$(\"#option_week_start\").val(\$(this).val());
\t});

\t\$(\"#option_month_end\").change(function(){
\t\t\$(\"#option_month_start\").val(\$(this).val());
\t});
});

</script>";
    }

    public function getTemplateName()
    {
        return "pages/floorplan/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 254,  406 => 241,  390 => 228,  351 => 192,  337 => 181,  333 => 180,  329 => 179,  325 => 178,  321 => 177,  317 => 176,  313 => 175,  307 => 172,  303 => 171,  298 => 169,  294 => 168,  290 => 167,  286 => 166,  282 => 165,  277 => 163,  273 => 162,  269 => 161,  265 => 160,  260 => 158,  256 => 157,  252 => 156,  248 => 155,  244 => 154,  240 => 153,  236 => 152,  229 => 148,  226 => 147,  222 => 81,  219 => 80,  214 => 144,  210 => 143,  206 => 142,  174 => 113,  170 => 112,  139 => 83,  137 => 80,  124 => 69,  115 => 62,  105 => 53,  102 => 52,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "layout/index.html" %}*/
/* */
/* {% block head %}*/
/* {{ parent() }}*/
/* */
/* */
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/pages/j-pro/css/j-forms.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/feather/css/feather.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/icon/weather-icons/css/weather-icons-wind.min.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/assets/css/p-loader.css">*/
/* <link rel="stylesheet" type="text/css" href="{{ base_url }}/theme/bower_components/datatables.net/css/fixedColumns.dataTables.min.css">*/
/* <style type="text/css">*/
/* 	#floorplan_canvas{*/
/* 		border:1px solid #d3d3d3;*/
/* 		background-image:url('');*/
/* 		background-color: #f8f8f8;*/
/* 		background-size:100% 100%;*/
/* 		width:100%*/
/* 	}*/
/* */
/* 	table{*/
/* 		width: 100%;*/
/* 	}*/
/* */
/* 	#density_location_table{*/
/* 		min-height: unset;*/
/* 	}*/
/* */
/* 	.dataTables_scrollBody{*/
/* 		height: unset !important;*/
/* 	}*/
/* */
/* 	.label_box{*/
/* 		position: absolute;*/
/* 	    background: #000000bf;*/
/* 	    padding: 1%;*/
/* 	    border-radius: 5px;*/
/* 	    box-shadow: 1px 1px 15px #00000099;*/
/* 	    color: #fff;*/
/* 	    display: inline-table;*/
/* 	    line-height: 1vw;*/
/* 	}*/
/* */
/* 	.label_text{*/
/* 		font-size: 0.7vw;*/
/* 	}*/
/* */
/* </style>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="pcoded-content">*/
/* 	<div class="pcoded-inner-content">*/
/* 		<div class="main-body">*/
/* 			<div class="page-wrapper">*/
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
/* 										{{ page_title }}*/
/* 									</h4>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="page-body">*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							<div class="card">*/
/* 								{% block criteria %}*/
/* 								{% include 'filter/criteria_floorplan.twig' with { 'base_url': base_url } %}*/
/* 								{% endblock %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="loader animation-start d-none">*/
/*                         <span class="circle delay-1 size-2"></span>*/
/*                         <span class="circle delay-2 size-4"></span>*/
/*                         <span class="circle delay-3 size-6"></span>*/
/*                         <span class="circle delay-4 size-7"></span>*/
/*                         <span class="circle delay-5 size-7"></span>*/
/*                         <span class="circle delay-6 size-6"></span>*/
/*                         <span class="circle delay-7 size-4"></span>*/
/*                         <span class="circle delay-8 size-2"></span>*/
/*                     </div>*/
/* */
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 							<div class="card">*/
/* 								<div class="card-header">*/
/* 									<div class="location-title"></div>*/
/* 									<div class="collapse" id="collapse_location">*/
/* 										<div class="location-selected"></div>*/
/* 									</div>*/
/* 									<div class="period-selected"></div>*/
/* 								</div>*/
/* 							     <div class="card-block">*/
/* 							     	<div class="row">*/
/* 							     		<div class="col">*/
/* 							     			<div class="form-group">*/
/* 			                                    <canvas id="floorplan_canvas"*/
/* 													data-imgsrc="{{ floorplan_data.map_path }}" */
/* 													style="background-image:url({{ floorplan_data.map_path }})"></canvas>*/
/* 												<input type="hidden" id="hidden_canvas_width" value="">*/
/* 												<input type="hidden" id="hidden_canvas_height" value="">*/
/* 												<div id="label_div"></div>*/
/* 							     			</div>*/
/* 							     		</div>*/
/* 							     	</div>*/
/* */
/* 									<div class="row mb-2 mt-3 option-minmax-reload"></div>*/
/* 									<div class="row mb-2">*/
/* 										<div class="dt-responsive table-responsive col-sm-12">*/
/* 											<table id="density_location_table"*/
/* 												class="table compact table-striped table-bordered order-column nowrap dataTable"*/
/* 												class="stripe row-border order-column" style="width: 100%">*/
/* */
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/*                                 </div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <input type="hidden" value="{{ color.lessthan }}" id="color_lessthan">*/
/* <input type="hidden" value="{{ color.between }}" id="color_between">*/
/* <input type="hidden" value="{{ color.greaterthan }}" id="color_greaterthan">*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* */
/* */
/* <!-- datatable -->*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net/js/jquery.dataTables.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.print.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-buttons/js/buttons.html5.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" ></script>*/
/* <script src="{{ base_url }}/theme/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" ></script>*/
/* */
/*  <script src="{{ base_url }}/theme/assets/pages/advance-elements/moment-with-locales.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>*/
/* <script src="{{ base_url }}/theme/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/SmoothScroll.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/pcoded.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/vartical-layout.min.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/script.js"></script>*/
/* */
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/pages/j-pro/js/custom/popup-menu-form.js"></script>*/
/* <script type="text/javascript" src="{{ base_url }}/theme/assets/js/common-pages.js"></script>*/
/* */
/* <!-- custom js -->*/
/* <script src="{{ base_url }}/theme/assets/js/service.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/criteria.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_location.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_group.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_date.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/filter_event.js"></script>*/
/* <script src="{{ base_url }}/theme/assets/js/density_location.js"></script>*/
/* */
/* <script>*/
/* */
/* var cntDraw = 0;*/
/* var canvas = document.getElementById("floorplan_canvas");*/
/* var ctx;*/
/* var map_id = 0;*/
/* */
/* $("#branch_id").change(function(){*/
/* 	var branch_id = $(this).val();*/
/* 	var url = "{{ base_url }}/floorplan/get-floorplan-by-branch/"+branch_id;*/
/* 	$("#search").prop("disabled", true);*/
/* 	if(branch_id == ''){*/
/* 		$("#map_id").empty().append("<option selected value=''>-- Select Floorplan --</option>");*/
/* 	}else{*/
/* 		$.post(url, function(response){*/
/* 			if(response != ''){*/
/* 				$("#map_id").empty().append("<option selected value=''>-- Select Floorplan --</option>");*/
/* 				$.each(response, function(index, value){*/
/* 					$("#map_id").append("<option value='"+value.map_id+"'>"+value.map_name+"</option>");*/
/* 				});*/
/* 			}else{*/
/* 				$("#map_id").empty().append("<option selected value=''>-- Floorplan Not Found --</option>");*/
/* 			}*/
/* 		},'json');*/
/* */
/* 		$("#option_branch").val(branch_id);*/
/* 	}*/
/* });*/
/* */
/* $("#map_id").change(function(){*/
/* 	map_id = $(this).val();*/
/* 	if(map_id != ''){*/
/* 		$("#search").prop("disabled", false);*/
/* 		getCameraGroup(map_id);*/
/* 	}else{*/
/* 		$("#search").prop("disabled", true);*/
/* 	}*/
/* });*/
/* */
/* $("#search").click(function(){*/
/* 	renderFloorplan(map_id);*/
/* });*/
/* */
/* */
/* function getCameraGroup(map_id){*/
/* 	var url = '{{ base_url }}/floorplan/get-cameragroup-by-floorplan/'+map_id;*/
/* 	$.post(url, function(response){*/
/* 		if(response != ''){*/
/* 			$("#hidden_cam_group").empty();*/
/* 			$.each(response, function(index, cam_id){*/
/* 				$("#hidden_cam_group").append('<input type="hidden" name="option_camera_group[]" value="'+cam_id+'">');*/
/* 			});*/
/* 		}*/
/* 	}, 'json');*/
/* }*/
/* */
/* */
/* function getMapData(map_id){*/
/* 	var url = '{{ base_url }}/floorplan/get-floorplan-data/'+map_id;*/
/* 	$.post(url, function(response){*/
/* 		if(response.area_perimeters != ''){*/
/* 			cntDraw = 0;*/
/* 			$("#hidden_cam_group").empty();*/
/* 			$.each(response.area_perimeters, function(index, value){*/
/* 				$("#hidden_cam_group").append('<input type="hidden" name="option_camera_group[]" value="'+value.camera_group_id+'">');*/
/* 			});*/
/* 		}*/
/* 	}, 'json');*/
/* }*/
/* */
/* function renderFloorplan(map_id, dataset){*/
/* 	var url = '{{ base_url }}/floorplan/get-floorplan-data/'+map_id;*/
/* 	var params = $('#criteria-form').serialize();*/
/* */
/* 	canvas.setAttribute('data-imgsrc', "");*/
/*     $("#floorplan_canvas").css("background-image", "");*/
/* */
/* 	$.post(url, params, function(response){*/
/* 		cntDraw = 0;*/
/* 		if(response != ''){*/
/* 			if(response.floorplan_data != ''){*/
/* 	        	canvas.setAttribute('data-imgsrc', response.floorplan_data.map_path);*/
/* 		        $("#floorplan_canvas").css("background-image", "url("+response.floorplan_data.map_path+")");*/
/* 		        $("#hidden_canvas_width").val(response.floorplan_data.map_width);*/
/* 		        $("#hidden_canvas_height").val(response.floorplan_data.map_height);*/
/* 			}*/
/* */
/* 			if(response.area_perimeters != ''){*/
/* 				var img = new Image();*/
/* 			    img.src = canvas.getAttribute('data-imgsrc');*/
/* 			    */
/* 			    img.onload = function(){*/
/* 			        ctx = canvas.getContext("2d");*/
/* 			        */
/* 		            canvas.width = $("#floorplan_canvas").outerWidth();*/
/* 			        canvas.height = $("#floorplan_canvas").outerHeight();*/
/* */
/* 			        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);*/
/* */
/* 					drawAll(response.area_perimeters);*/
/* 			    }*/
/* 			}*/
/* 		}*/
/* 	}, 'json');*/
/* 	*/
/* }*/
/* */
/* function drawAll(json){*/
/*     $("#label_div").empty();*/
/*     if(json != ''){*/
/*         $.each(json,function(index, coords){*/
/*             var endloop = false;*/
/*             ctx.lineWidth = 1;*/
/*             ctx.strokeStyle = "white";*/
/*             ctx.lineCap = "square";*/
/*             ctx.beginPath();*/
/*             $.each(coords.coordinates, function(i,marked){*/
/*             	if(cntDraw == 0){*/
/* 	                marked.x = calculateNewCoord(canvas.width, $("#hidden_canvas_width").val(), marked.x);*/
/* 	                marked.y = calculateNewCoord(canvas.height, $("#hidden_canvas_height").val(), marked.y);*/
/*             	}*/
/* */
/*                 if(i==0){*/
/*                     ctx.moveTo(marked.x, marked.y);*/
/*                 } else {                    */
/*                     ctx.lineTo(marked.x, marked.y);*/
/*                     if(i = coords.coordinates.length-1){*/
/*                         endloop = true;*/
/*                     }*/
/*                 } */
/*             });*/
/* */
/*             if(endloop){*/
/*                 ctx.lineTo(coords.coordinates[0].x,coords.coordinates[0].y);*/
/*                 ctx.closePath();*/
/*                 ctx.fillStyle = 'rgba(0, 196, 255, 0.5)';*/
/*                 ctx.fill();*/
/*                 ctx.strokeStyle = 'blue';*/
/*             }*/
/* */
/*             ctx.stroke();*/
/* */
/*             var cnt_data = coords.count_data;*/
/* */
/*             drawLabelbox(coords.camera_group_id, coords.area_name,coords.label_top, coords.label_left, coords.label_width, coords.label_height, cnt_data);*/
/*             */
/*         });*/
/* */
/*         cntDraw = 1;*/
/*     }*/
/* }*/
/* */
/* function drawLabelbox(cam_group_id,cam_group_name,top,left,width,height, cnt_data){*/
/* 	var growth_percent = 0;*/
/* 	var counting = 0;*/
/* 	if(cnt_data.past != 0){*/
/* 		growth_percent = ((cnt_data.present-cnt_data.past)/cnt_data.past)*100;*/
/* 	}*/
/* 	if(cnt_data.present != 0){*/
/* 		counting = fnService.formatComma(cnt_data.present);*/
/* 	}*/
/*     var label = '<div class="label_box" id="label_box-'+cam_group_id+'" style="top: '+top+'%;left: '+left+'%;width: '+width+'%;height: '+height+'%;">'+*/
/*     			'<span class="label_text">Group : '+cam_group_name+'<br>Counting : '+counting+' ('+growth_percent.toFixed(2)+'%)</span></div>';*/
/*     $("#label_div").append(label);*/
/* }*/
/* */
/* function calculateNewCoord(new_width_height, old_width_height, old_x_y){*/
/* */
/*     var new_x_y = (new_width_height/old_width_height)*old_x_y;*/
/*     return new_x_y;*/
/* }*/
/* */
/* function resize(){    */
/* 	$("#floorplan_canvas").outerHeight(*/
/* 		$(window).height() - $("#floorplan_canvas").offset().top - Math.abs($("#floorplan_canvas").outerHeight(true) - $("#floorplan_canvas").outerHeight())*/
/* 	);*/
/* }*/
/* */
/* */
/* $(document).ready(function(){*/
/* */
/* 	resize();*/
/* */
/* 	$(window).on("resize", function(){                      */
/*     	resize();*/
/* 	});*/
/* */
/* 	$(".option-date-end").change(function(){*/
/*         $(".option-date-start").val($(this).val());*/
/* 	});*/
/* */
/* 	$("#option_week_year_end").change(function(){*/
/* 		$("#option_week_year_start").val($(this).val());*/
/* 	});*/
/* */
/* 	$("#option_month_year_end").change(function(){*/
/* 		$("#option_month_year_start").val($(this).val());*/
/* 	});*/
/* */
/* 	$("#option_week_end").change(function(){*/
/* 		$("#option_week_start").val($(this).val());*/
/* 	});*/
/* */
/* 	$("#option_month_end").change(function(){*/
/* 		$("#option_month_start").val($(this).val());*/
/* 	});*/
/* });*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
