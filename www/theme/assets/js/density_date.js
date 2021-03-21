var fnDesityDate = {

	base_url : $('#base_url').val(),
	chart: null,
	oTable: null,
	series: null,
 	colorLessthan: $('#color_lessthan').val(),
	colorBetween: $('#color_between').val(),
	colorGreaterthan: $('#color_greaterthan').val(),
	isSearch: function(){
		$('#search').off('click').on('click', function(e) {
			e.preventDefault();
		    $('.popup-list-wrapper').css({
	             display: 'none',
	             left: '-9999px',
	             opacity: '0'
	        });
			$('.loader').removeClass('d-none');
			$('#page-content').hide();
			var params = $('#criteria-form').serialize();
			var url = fnDesityDate.base_url +'/get-summary-density-date';
			$.post(url, params, function(response){
				var data = JSON.parse(response);
				$('.loader').addClass('d-none');
				$('#page-content').show();
				
				fnDesityDate.renderTab(data.table);
 				fnDesityDate.renderTable(data.table);
				fnDesityDate.selectBranch();
				
				fnService.getLocation(params);
				fnService.getPeriod(params);
				
				fnDesityDate.reloadTable();
			});
		});
	},
	reloadTable: function(){
		$('#table_reload').off('click').on('click', function(e) {
			var id = $('.branch-select').find(':selected').data('id');
			var min = $('.option_min').val();
			var max = $('.option_max').val();
			var total_row = $('#heatmap_table_'+ id).find('tr').length;
			$('#heatmap_table_'+ id).find('tr').each(function (i,ele) {
				if(i>0 && i<(total_row-1)){
				    $(ele).find('td').each(function (index, element) {
						if(index > 2){
							var cell_value = $(element).html();
							if (Number(cell_value) <= Number(min)) {
								$(element).css('background', fnDesityDate.colorLessthan);
						    } else if (Number(cell_value) > Number(min) && Number(cell_value) <= Number(max)) {
								$(element).css('background', fnDesityDate.colorBetween);
						    } else if (Number(cell_value) > Number(max)) {
								$(element).css('background', fnDesityDate.colorGreaterthan);
						    }
						}
				    });
				}
			});
			fnDesityDate.reloadTable();
		});
	},
	selectBranch(){
		$('.branch-select').change(function(){
			var id = $(this).val();
			var min = $(this).find(':selected').data('min');
			var max = $(this).find(':selected').data('max');
			
			$('.option_min').val(min);
			$('.option_max').val(max);
			
			$('.heatmap-item').removeClass('d-block');
			$('.heatmap-item').addClass('d-none');
			$('#link_'+id).addClass('d-block');
			
			$('#heatmap_table_'+ id).DataTable().columns.adjust();
			
			fnDesityDate.reloadTable();
		});
	},
	renderTab: function(data){
		var html = ''; 
		var head = '';
		var body = '';
		var tab_active = '';
		var min = 0;
		var max = 0;
		var default_min = 0;
		var default_max = 0;
		head += '<li class="nav-item">';
		for(var i = 0; i < data.length; i++){
			if(i == 0){
				tab_active = 'd-block';
				default_min = data[i].config.min;
				default_max = data[i].config.max;
			}else{
				tab_active = 'd-none';
			}
			min = 0;
			max = 0;
			if(data[i].config.min){
				min = data[i].config.min;
			}
			if(data[i].config.max){
				max = data[i].config.max;
			}
			head += '<option value="'+ i +'" data-min="'+ min +'" data-max="'+ max +'" data-id="'+ i +'">'+ data[i].location +'</option>';
			
			body += '<div class="'+ tab_active +' dt-responsive table-responsive heatmap-item " id="link_'+ i +'" >';
			body += '<table id="heatmap_table_'+ i +'" ';
            body += 'class="table compact table-striped table-bordered order-column nowrap dataTable" style="width:100%">';
			body += '</table>';
			body += '</div>';
		}
		html += '<div class="card-block heatmap-body ">';
		html += '<div class="row mb-2">';
		
		html += '<div class="col-sm-6 float-left">';
		html += '	<div class="col-md-12 float-left ">';
		html += '		<div class="row mt-2 ">';
		html += '			<div class=" input-group criteria-time text-right header-option-reload"  >';
		html += '				Min: <input type="text" name="option_min" value="'+ default_min +'" placeholder="Min" class="input-sm form-control mr-1 ml-1 option_min">';
		html += '				Max: <input type="text" name="option_max" value="'+ default_max +'" placeholder="Max" class="input-sm form-control ml-1 option_max">';
		html += '				<button type="button" class="btn btn-secondary btn-mini waves-effect waves-light ml-1"id="table_reload"> Reload</button>';
		html += '			</div>';
		html += '		</div>';
		html += '	</div>';
		html += '</div>';
		
		html += '<div class="col-sm-6 float-right"><div class="select2-tab text-left"><select class="branch-select" >';
		html += head;
		html += '</select></div></div>';
		
		html += '</div>';
		html += body;
		html += '</div>';
		$('#heatmap-content').html(html);
		$(".branch-select").select2();
	},
	renderTable: function(data){
		
		$.each(data, function(key, value){
			var row = [];
			var column_def = [];
	 		var column_header = [];
			var min = 0;
			var max = 0;
			var key_total = 0;
			column_header.push({"title": "Date"});
			column_header.push({"title": "Total"});
			column_header.push({"title": "%"});
			
			column_def.push({"targets": 0, className: "text-left"});
			column_def.push({"targets": 1, className: "text-right"});
			column_def.push({"targets": 2, className: "text-right"});
			
			min = value.config.min;
			max = value.config.max;
			
			$.each(value.date, function(k, v){
				var col_main = [];
				var col_count = [];
				
				col_main.push(v.name);
				col_main.push(v.total_in);
				col_main.push(v.percent);

				for(var i =0; i< 24; i++){
					cnt_in = 0;
					category = '';
					if(v.column[i]){
						cnt_in = v.column[i].in;
						category = v.column[i].category;
					}
					col_count.push(Number(cnt_in));
					if(k==0){
						column_header.push({"title": category});
        				column_def.push({"targets": i+2, className: "text-center" });
					}
		        }
				row[k] = col_main.concat(col_count);
				key_total = k+1;
			});
			
			var col_main = [];
			var col_count = [];
			col_main.push(value.total.location);
			col_main.push(value.total.total_in);
			col_main.push(value.total.percent); 
			for(var i =0; i< 24; i++){
				cnt_in = 0;
				category = '';
				if(value.total.column[i]){
					cnt_in = value.total.column[i].in;
					category = value.total.column[i].category;
				}
				col_count.push(Number(cnt_in));
	        }
			row[key_total] = col_main.concat(col_count);
			var last_row = Number(row.length)-1;
			
			fnLocation.oTable = $('#heatmap_table_'+ key).DataTable({
	    		"lengthChange": false,
	    		"searching": false,
	    		"paging": false,
	    		"bInfo" : false,
	    		"ordering": false,
	    		"columnDefs": column_def,
	            "data": row,
	            "columns" : column_header,
				"scrollX": true,
	            "fixedColumns":{
	                "leftColumns": 2
	            },
				rowCallback: function(row, data, index){
					if(last_row == index){
						$(row).find('td').css('background', 'none');
					}else{
						for(var i = 3; i < 27; i++){
							if(min && max){
								if (data[i] <= min) {
									$(row).find('td:eq('+i+')').css('background', fnDesityDate.colorLessthan);
							    } else if (data[i] > min && data[i] <= max) {
									$(row).find('td:eq('+i+')').css('background', fnDesityDate.colorBetween);
							    } else if (data[i] > max) {
									$(row).find('td:eq('+i+')').css('background', fnDesityDate.colorGreaterthan);
							    }
							}else{
								$(row).find('td:eq('+i+')').css('background', fnDesityDate.colorLessthan);
							}
						}
					}
				}
	        });
		});
	},
	init : function(){
		fnDesityDate.isSearch();
	}
}
 
fnDesityDate.init();
