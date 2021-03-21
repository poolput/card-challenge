/*
   jPolygon - a ligthweigth javascript library to draw polygons over HTML5 canvas images.
   Project URL: http://www.matteomattei.com/projects/jpolygon
   Author: Matteo Mattei <matteo.mattei@gmail.com>
   Version: 1.0
   License: MIT License

   modified by : max
*/

var perimeter = new Array();
var tmp_perimeter = new Array();
var complete = false;
var canvas = document.getElementById("floorplan_canvas");
var ctx;
var cntDraw = 0;
var all_coordinates = new Array();
var json_global = new Array();


function line_intersects(p0, p1, p2, p3) {
    var s1_x, s1_y, s2_x, s2_y;
    s1_x = p1['x'] - p0['x'];
    s1_y = p1['y'] - p0['y'];
    s2_x = p3['x'] - p2['x'];
    s2_y = p3['y'] - p2['y'];

    var s, t;
    s = (-s1_y * (p0['x'] - p2['x']) + s1_x * (p0['y'] - p2['y'])) / (-s2_x * s1_y + s1_x * s2_y);
    t = ( s2_x * (p0['y'] - p2['y']) - s2_y * (p0['x'] - p2['x'])) / (-s2_x * s1_y + s1_x * s2_y);

    if (s >= 0 && s <= 1 && t >= 0 && t <= 1)
    {
        // Collision detected
        return true;
    }
    return false; // No collision
}

function point(x, y){
    ctx.fillStyle="black";
    ctx.strokeStyle = "black";
    ctx.fillRect(x-2,y-2,4,4);
    ctx.moveTo(x,y);
}

function undo(){
    ctx = undefined;
    if(perimeter.length == 0 && tmp_perimeter.length > 0){
        var remove_id = tmp_perimeter[tmp_perimeter.length-1].camera_group_id;
        resetStatus(remove_id);
        tmp_perimeter.pop();
        all_coordinates.pop();
    }
    perimeter.pop();
    complete = false;
    start(true);
}

function clear_canvas(){
    json = json_global;
    clear_canvas(json);
}
function clear_canvas(json){
    ctx = undefined;
    if(tmp_perimeter.length > 0){
        $.each(tmp_perimeter, function(index, value){
            var remove_id = value.camera_group_id;
            resetStatus(remove_id);
        });
    }

    perimeter = new Array();
    tmp_perimeter = new Array();
    all_coordinates = new Array();
    complete = false;

    document.getElementById('coordinates').value = '';
    start(false, json);
    if(json != '' && json != undefined){
        json_global = json;
        $.each(json, function(index, coords){
            all_coordinates.push(coords);
            setUnavailable(coords.camera_group_id);
        });
    }
}

function resetStatus(remove_id){
    $("#select_groupcamera option[value='"+remove_id+"']").prop("disabled", false);
    $(".scroll-list li[data-groupid='"+remove_id+"']").find(".icofont-lock").removeClass('icofont-unlock').addClass('icofont-unlocked');
    $(".scroll-list li[data-groupid='"+remove_id+"']").find(".delete_group").remove();
    $(".scroll-list li[data-groupid='"+remove_id+"']").find(".input_row").remove();
    $("#label_box-"+remove_id).remove();
}

function setUnavailable(item_id){
    $(".scroll-list li[data-groupid='"+item_id+"']").find(".icofont-unlocked").removeClass('icofont-unlocked').addClass('icofont-lock');
    $(".scroll-list li[data-groupid='"+item_id+"']").find(".delete_group").remove();
    $(".scroll-list li[data-groupid='"+item_id+"']").find(".input_row").remove();

    var del_btn = '<i class="delete_group icofont icofont-trash" data-groupid="'+item_id+'"></i>';
    var input_group = '<div class="row input_row">'+
                            '<div class="col">'+
                                '<div class="form-group" data-groupid="'+item_id+'">'+
                                    'T=<input type="number" class="input_label" data-groupid="'+item_id+'" id="input_t_'+item_id+'">'+
                                    'L=<input type="number" class="input_label" data-groupid="'+item_id+'" id="input_l_'+item_id+'"><br>'+
                                    'W=<input type="number" class="input_label" data-groupid="'+item_id+'" id="input_w_'+item_id+'">'+
                                    'H=<input type="number" class="input_label" data-groupid="'+item_id+'" id="input_h_'+item_id+'">'+
                                '</div>'+
                            '</div>'+
                        '</div>';

    $(".scroll-list li[data-groupid='"+item_id+"']").find("h6").append(del_btn);
    $(".scroll-list li[data-groupid='"+item_id+"']").find("h6").append(input_group);
}

function draw(end){
    if(ctx == undefined){
        return false;
    }
    
    if(cntDraw == 0){
        canvas.width = $("#floorplan_canvas").outerWidth();
        canvas.height = $("#floorplan_canvas").outerHeight();
    }
    cntDraw = 1;
    
    ctx.lineWidth = 1;
    ctx.strokeStyle = "white";
    ctx.lineCap = "square";
    ctx.beginPath();

    for(var i=0; i<perimeter.length; i++){
        //mark first point as dot
        if(i==0){
            ctx.moveTo(perimeter[i]['x'],perimeter[i]['y']);
            end || point(perimeter[i]['x'],perimeter[i]['y']);
        } else {
            ctx.lineTo(perimeter[i]['x'],perimeter[i]['y']);
            end || point(perimeter[i]['x'],perimeter[i]['y']);
        }
    }
    if(end){
        ctx.lineTo(perimeter[0]['x'],perimeter[0]['y']);
        ctx.closePath();
        ctx.fillStyle = 'rgba(0, 196, 255, 0.5)';
        ctx.fill();
        ctx.strokeStyle = 'blue';

        complete = true;
    }
    ctx.stroke();

    // print coordinates
    if(perimeter.length == 0){
        document.getElementById('coordinates').value = '';
    } else {
        document.getElementById('coordinates').value = JSON.stringify(perimeter);
    }
}

function drawAll(perimeters){
    if(perimeters.length > 0){
        $.each(perimeters,function(index, coords){
            var endloop = false;
            ctx.lineWidth = 1;
            ctx.strokeStyle = "white";
            ctx.lineCap = "square";
            ctx.beginPath();

            $.each(coords.coordinates, function(i,marked){
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

                //find center
                var center_point = findCenter(coords.coordinates);
                markCenterLabel(center_point, coords.area_name);

            }

            ctx.stroke();

            $.each(coords.coordinates, function(i,marked){
                point(marked.x, marked.y);
            });
            
        });
    }
}


function findCenter(points) {
    var x = 0, y = 0, i, len = points.length;
    for (i = 0; i < len; i++) {
        x += points[i].x;
        y += points[i].y;
    }
    return {x: x / len, y: y / len};   // return average position
}

function markCenterLabel(center_point, text_string){

    ctx.font = 2 * window.innerWidt+"px Arial";
    ctx.fillStyle = '#f50';
    ctx.textBaseline = 'middle';
    ctx.textAlign = "center";
    ctx.fillText(text_string , center_point.x, center_point.y);
}

function check_intersect(x,y){
    if(perimeter.length < 4){
        return false;
    }
    var p0 = new Array();
    var p1 = new Array();
    var p2 = new Array();
    var p3 = new Array();

    p2['x'] = perimeter[perimeter.length-1]['x'];
    p2['y'] = perimeter[perimeter.length-1]['y'];
    p3['x'] = x;
    p3['y'] = y;

    for(var i=0; i<perimeter.length-1; i++){
        p0['x'] = perimeter[i]['x'];
        p0['y'] = perimeter[i]['y'];
        p1['x'] = perimeter[i+1]['x'];
        p1['y'] = perimeter[i+1]['y'];
        if(p1['x'] == p2['x'] && p1['y'] == p2['y']){ continue; }
        if(p0['x'] == p3['x'] && p0['y'] == p3['y']){ continue; }
        if(line_intersects(p0,p1,p2,p3)==true){
            return true;
        }
    }
    return false;
}

function point_it(event) {
    // if(complete){
    //     alert('Polygon already created');
    //     return false;
    // }
    if(ctx == undefined){
        return false;
    }
    var rect, x, y;

    if(event.ctrlKey || event.which === 3 || event.button === 2){
        if(perimeter.length==2){
            alert('You need at least three points for a polygon');
            return false;
        }
        x = perimeter[0]['x'];
        y = perimeter[0]['y'];
        if(check_intersect(x,y)){
            alert('The line you are drowing intersect another line');
            return false;
        }

        draw(true);
        event.preventDefault();
        modalChooseGroup(event);

        return false;
    } else {
        rect = canvas.getBoundingClientRect();
        x = event.clientX - rect.left;
        y = event.clientY - rect.top;
        if (perimeter.length>0 && x == perimeter[perimeter.length-1]['x'] && y == perimeter[perimeter.length-1]['y']){
            // same point - double click
            return false;
        }
        if(check_intersect(x,y)){
            alert('The line you are drowing intersect another line');
            return false;
        }
        perimeter.push({'x':x,'y':y});
        
        draw(false);
        return false;
    }
}

function start(with_draw){
    json = '';
    start(with_draw,json);
}

function start(with_draw, json) {
    var img = new Image();
    img.src = canvas.getAttribute('data-imgsrc');
    
    img.onload = function(){
        ctx = canvas.getContext("2d");
        if(cntDraw == 0){
            canvas.width = "100%";
            canvas.height = "100%";
        }
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        if(with_draw == true){
            draw(false);
            drawAll(all_coordinates);    
        } 
        if(json != '' && json != undefined){
            drawAllEdit(json);
        }
    }
}

function calculateNewCoord(new_width_height, old_width_height, old_x_y){

    var new_x_y = (new_width_height/old_width_height)*old_x_y;
    // return Math.round(new_x_y)+".203";
    return new_x_y;
}


function drawAllEdit(json){
    if(json != ''){
        $("#label_div").empty();
        if(cntDraw == 0){
            canvas.width = $("#floorplan_canvas").outerWidth();
            canvas.height = $("#floorplan_canvas").outerHeight();
        }
        
        var diff_width = 0;
        var diff_height = 0;
        
        $.each(json,function(index, coords){
            var endloop = false;
            ctx.lineWidth = 1;
            ctx.strokeStyle = "white";
            ctx.lineCap = "square";
            ctx.beginPath();
            $.each(coords.coordinates, function(i,marked){
                if(cntDraw == 0){
                    marked.x = calculateNewCoord(canvas.width, $("#hidden_canvas_width").val(), marked.x);
                    marked.y = calculateNewCoord(canvas.height, $("#hidden_canvas_height").val(), marked.y);
                }
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

                //find center
                var center_point = findCenter(coords.coordinates);
                markCenterLabel(center_point, coords.area_name);
            }

            ctx.stroke();

            $.each(coords.coordinates, function(i,marked){
                point(marked.x, marked.y);
            });


            drawLabelbox(coords.camera_group_id, coords.area_name,coords.label_top, coords.label_left, coords.label_width, coords.label_height);

        });

        cntDraw = 1;
    }  
}


function drawLabelbox(cam_group_id,cam_group_name,top,left,width,height){
    var label = '<div class="label_box" id="label_box-'+cam_group_id+'" style="position: absolute;top: '+top+'%;left: '+left+'%;width: '+width+'%;height: '+height+'%;"><span class="label_text">Group : '+cam_group_name+'<br>Counting : xxx (xx%)</span></div>';
    $("#label_div").append(label);

    $("#input_t_"+cam_group_id).val(top);
    $("#input_l_"+cam_group_id).val(left);
    $("#input_w_"+cam_group_id).val(width);
    $("#input_h_"+cam_group_id).val(height);
    
}
