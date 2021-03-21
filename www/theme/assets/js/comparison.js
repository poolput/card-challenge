var fnComparison = {

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
			var url = fnComparison.base_url +'/get-analysis-comparison';
			$.post(url, params, function(response){
				var data = JSON.parse(response);
				$('.loader').addClass('d-none');
				$('#page-content').show();
				fnComparison.series = data.series;
				fnComparison.categories = data.categories.split(",");
				fnComparison.renderTab(data.table);
 				fnComparison.renderTable(data.table);
				fnComparison.selectBranch();
				
				fnService.getLocation(params);
				
				fnComparison.selectBranch();
				$('.branch-select').trigger('change');
			});
		});
	},
	selectBranch(){
		$('.branch-select').change(function(){
			var id = $(this).val();
			$('.comparison-item').removeClass('d-block');
			$('.comparison-item').addClass('d-none');
			
			$('#link_'+id).removeClass('d-none');
			$('#link_'+id).addClass('d-block');
			
			$('#highcharts_'+ id).removeClass('d-none');
			$('#highcharts_'+ id).addClass('d-block');
			
			$('#comparison_table_'+ id).DataTable().columns.adjust();
		});
	},
	renderTab: function(data){
		var html = ''; 
		var head = '';
		var body = '';
		var chart = '';
		var tab_active = '';
		var branch_id = 0;
		head += '<li class="nav-item">';
		for(var i = 0; i < data.length; i++){
			if(i == 0){
				tab_active = 'd-block'; 
			}else{
				tab_active = 'd-none';
			}
			branch_id = data[i].branch_id;
			
			head += '<option value="'+ branch_id +'"  data-id="'+ branch_id +'">'+ data[i].location +'</option>';
			
    		body += '<div class="row '+ tab_active +' comparison-item" id="link_'+ branch_id +'">';
			body += '<div class="col-sm-12">';
			body += '<div class="card">';
			body += '<div class="card-block">';
            body += '<div class="dt-responsive table-responsive col-sm-12"  >';
			body += '<table id="comparison_table_'+ branch_id +'" ';
			body += 'class="table compact table-striped table-bordered order-column nowrap dataTable" style="width:100%">';
			body += '</table>';
            body += '</div>';
            body += '</div>';
			body += '</div>';
			body += '</div>';
			body += '</div>';
 			
			chart += '<div id="highcharts_'+ branch_id +'" class="col-sm-12 comparison-item highcharts-figure"></div>';
		}
		
		html += '<div class="card-block comparison-body ">';
		html += '<div class="row mb-2">';
		
		html += '<div class="col-sm-12 float-right"><div class="select2-tab text-left"><select class="branch-select" >';
		html += head;
		html += '</select></div></div>';
		
 		html += chart;
                                    
		html += '</div>';
		html += '</div>';
		 
		$('#comparision-content').html(html);
		$('#comparision-table').html(body);
		
		$(".branch-select").select2();
		fnComparison.renderChart();
		fnComparison.init();
	},
	renderTable: function(data){
		 
		$.each(data, function(key, value){
			var row = [];
			var column_def = [];
	 		var column_header = [];
			var key_total = 0;
			column_header.push({"title": "Date"});
			column_header.push({"title": "Total"});
			column_header.push({"title": "%"});
			column_def.push({"targets": 0, className: "text-left"});
			column_def.push({"targets": 1, className: "text-right"});
			column_def.push({"targets": 2, className: "text-right"});
			
			$.each(value.date, function(k, v){
				var col_main = [];
				var col_count = [];
				col_main.push(v.name);
				col_main.push(v.total_in);
				col_main.push(v.percent);
				$.each(v.column, function(i, val){
					
					cnt_in = 0;
					category = '';
					if(val){
						cnt_in = val.in;
						category = val.category;
					}else{
						cnt_in = 0;
					}
					
					col_count.push(Number(cnt_in));
					if(k==0){
						column_header.push({"title": category});
        				column_def.push({"targets": i+2, className: "text-center" });
					}
		        });
				row[k] = col_main.concat(col_count);
				key_total = k+1;
			});
			var col_main = [];
			var col_count = [];
			col_main.push(value.total.location);
			col_main.push(value.total.total_in);
			col_main.push(value.total.percent); 
			for(var i =0; i< value.total.column.length; i++){
				cnt_in = 0;
				category = '';
				if(value.total.column[i]){
					cnt_in = value.total.column[i].in;
					category = value.total.column[i].category;
				}
				col_count.push(Number(cnt_in));
	        }
			row[key_total] = col_main.concat(col_count);
			
			fnLocation.oTable = $('#comparison_table_'+ value.branch_id).DataTable({
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
	            }
	        });
		});
	},
	renderChart: function(){
		$.each(fnComparison.series , function(key, value){
			var series = [];
			$.each(JSON.parse(value) , function(k, v){
				series.push(v);
			});
			var option = {
				   chart: {
				        type: 'line'
				    },
				    title: {
				        text: ''
				    },
				    subtitle: {
				        text: ''
				    },
				    yAxis: {
				        title: {
				            text: 'Number of Employees'
				        }
				    },
				    xAxis: {
						categories: fnComparison.categories,
				    },
				    legend: {
				        layout: 'horizontal',
				        align: 'center',
				        verticalAlign: 'bottom'
				    },
				    series: series,
				    credits: {
				    	enabled : false
				    },
				    exporting: {
				    	enabled : false
				    },
				    responsive: {
				        rules: [{
				            condition: {
				                maxWidth: '100%'
				            },
				            chartOptions: {
				                legend: {
				                    layout: 'vertical',
				                    align: 'center',
				                    verticalAlign: 'bottom'
				                }
				            }
				        }]
				    }
				};
			fnLocation.chart = Highcharts.chart('highcharts_'+ key, option);
			$('#highcharts_'+ key).addClass('d-none');
		});
	},
	init : function(){
		fnComparison.isSearch();
		fnComparison.selectBranch();
		$.fn.dataTable.ext.errMode = 'none';
	}
}
 
fnComparison.init();
