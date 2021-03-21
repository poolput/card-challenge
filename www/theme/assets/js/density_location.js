var fnDensityLocation = {

	base_url : $('#base_url').val(),
 	colorLessthan: $('#color_lessthan').val(),
	colorBetween: $('#color_between').val(),
	colorGreaterthan: $('#color_greaterthan').val(),
	getTotalLocation: function(){
		var params = $('#criteria-form').serialize();
		var url = fnService.base_url +'/get-total-location';
		$.post(url, params, function(response){
			if(response){
				$('.branch-total').html(response);
			}
		});
	},
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
			var url = fnDensityLocation.base_url +'/get-summary-density-location';

			$.post(url, params, function(response){
				var data = JSON.parse(response);
				$('.loader').addClass('d-none');
				$('#page-content').show();
				fnDensityLocation.categories = data.categories.split(",");

				if(data.color){
					fnDensityLocation.colorLessthan = data.color.lessthan;
					fnDensityLocation.colorBetween = data.color.between;
					fnDensityLocation.colorGreaterthan = data.color.greaterthan;
				}

				fnDensityLocation.renderHeaderOption();
				fnDensityLocation.renderTable(data.table);
				
				fnService.getLocation(params);
				fnService.getPeriod(params);
				
				fnDensityLocation.reloadTable();

			});
		});
	},
	 renderHeaderOption: function(){
		var html = ''; 
		html += '<div class="col-sm-6 float-left">';
		html += '	<div class="col-md-12 float-left ">';
		html += '		<div class="row mt-2 ">';
		html += '			<div class=" input-group criteria-time text-right header-option-reload"  >';
		html += '				Min: <input type="text" name="option_min" value="0" placeholder="Min" class="input-sm form-control mr-1 ml-1 option_min">';
		html += '				Max: <input type="text" name="option_max" value="0" placeholder="Max" class="input-sm form-control ml-1 option_max">';
		html += '				<button type="button" class="btn btn-secondary btn-mini waves-effect waves-light ml-1"id="table_reload"> Reload</button>';
		html += '			</div>';
		html += '		</div>';
		html += '	</div>';
		html += '</div>';
 
		$('.option-minmax-reload').html(html);
	},
	renderTable: function(data){
		var row = [];
		var column_def = [];
 		var column_header = [];
		var min = 0;
		var max = 0; 

		column_header.push({"title": "Location"});
		column_header.push({"title": "Total"});
		column_header.push({"title": "%"});
		
		column_def.push({"targets": 0, className: "text-left"});
		column_def.push({"targets": 1, className: "text-right"});
		column_def.push({"targets": 2, className: "text-right"});
		
		for(var i =0; i< data.length; i++){
		
	 		var col_main = [];
			var col_count = [];
			col_main.push(data[i].location);
			col_main.push(data[i].total_in);
			col_main.push(data[i].percent);
			for(var ii =0; ii< fnDensityLocation.categories.length; ii++){
				cnt_in = 0;
				if(data[i].column[ii]){
					cnt_in = data[i].column[ii].in;
				} 
				col_count.push(Number(cnt_in));
	        }
			row[i] = col_main.concat(col_count);
		}
		
        $.each(fnDensityLocation.categories, function(i, val){
			column_header.push({"title": val});
        	column_def.push({"targets": i+2, className: "text-center" });
        });
		if(fnDensityLocation.oTable){
			fnDensityLocation.oTable.destroy();
			$('#density_location_table').empty();
		}
		var last_row = Number(data.length)-1;
		
		fnDensityLocation.oTable = $('#density_location_table').DataTable({
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
			rowCallback: function(row, table_data, index){
				min = 0;
				max = 0; 
				if(last_row == index){
					$(row).find('td').css('background', 'none');
				}else{
					min = data[index].config.min;
					max = data[index].config.max;
					for(var i = 3; i < table_data.length; i++){
						if(min && max){
							if (Number(table_data[i]) <= Number(min)) {
								$(row).find('td:eq('+i+')').css('background', fnDensityLocation.colorLessthan);
						    } else if (Number(table_data[i]) > Number(min) && Number(table_data[i]) <= Number(max)) {
								$(row).find('td:eq('+i+')').css('background', fnDensityLocation.colorBetween);
						    } else if (Number(table_data[i]) > Number(max)) {
								$(row).find('td:eq('+i+')').css('background', fnDensityLocation.colorGreaterthan);
						    }
						}else{
							$(row).find('td:eq('+i+')').css('background', fnDensityLocation.colorLessthan);
						}
					}
				}
			}
        });
	},
	reloadTable: function(){
		$('#table_reload').click(function(){
			var id = $('.branch-select').find(':selected').data('id');
			var min = $('.option_min').val();
			var max = $('.option_max').val();
			var total_row = $('#density_location_table').find('tr').length;
			$('#density_location_table').find('tr').each(function (i,ele) {
				if(i>0 && i<(total_row-1)){
				    $(ele).find('td').each(function (index, element) {
						if(index > 2){
							var cell_value = $(element).html();
							if (Number(cell_value) <= Number(min)) {
								$(element).css('background', fnDensityLocation.colorLessthan);
						    } else if (Number(cell_value) > Number(min) && Number(cell_value) <= Number(max)) {
								$(element).css('background', fnDensityLocation.colorBetween);
						    } else if (Number(cell_value) > Number(max)) {
								$(element).css('background', fnDensityLocation.colorGreaterthan);
						    }
						}
				    });
				}
			});
			fnDensityLocation.reloadTable();
		});
	},
	init : function(){
		fnDensityLocation.isSearch();
	}
}
 
fnDensityLocation.init();
