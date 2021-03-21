var fnLocation = {

	base_url : $('#base_url').val(),
	chart: null,
	oTable: null,
	series: null,
	setComparison: function(){
		
	},
	isChangeType: function(){
		$('.series-type').off('click').on('click', function(e) {
			e.preventDefault();
			fnLocation.updateChart($(this).data('type'));
		});
	},
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
			var url = fnLocation.base_url +'/get-summary-location';

			$.post(url, params, function(response){
				var data = JSON.parse(response);
				$('.loader').addClass('d-none');
				$('#page-content').show();
				$('.location-table-content').addClass('d-block');
				
				fnLocation.series = JSON.parse(data.series);
				fnLocation.categories = data.categories.split(",");
				
				fnLocation.renderChart();
				fnLocation.renderTable(data.table);
				
				fnService.getLocation(params);
				fnService.getPeriod(params);
				fnService.getStaff();
				
				$('.sum-in').html(data.sum_in);
				$('.sum-out').html(data.sum_out);
				
				var url = fnService.base_url +'/get-total-location';
				$.post(url, params, function(response){
					if(response){
						$('.branch-total').html(response);
						var total_in = data.sum_in.split(",").join("");
						var avg_branch = parseInt(total_in) / parseInt(response);
						$('.avgerage-branch').html(parseFloat(avg_branch).toFixed(0));
						var avg_period = parseInt(total_in) / parseInt(fnLocation.categories.length);
						$('.avgerage-period').html(parseFloat(avg_period).toFixed(0));
					}
				});
			});
		});
	},
	renderChart: function(){
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
					categories: fnLocation.categories,
			    },
			    legend: {
			        layout: 'horizontal',
			        align: 'center',
			        verticalAlign: 'bottom'
			    },
			    series: fnLocation.series,
			    credits: {
			    	enabled : false
			    },
			    exporting: {
			    	enabled : false
			    },
			    responsive: {
			        rules: [{
			            condition: {
			                maxWidth: 500
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
		fnLocation.chart = Highcharts.chart('highcharts-line', option);
	},
	updateChart: function(type){
		if(type=='pie'){
			var data = [];
			for(var i =0; i< fnLocation.series.length; i++){
				var total_date = 0;
				for(var ii =0; ii< fnLocation.series[i].data.length; ii++){
					total_date = Number(total_date) + Number(fnLocation.series[i].data[ii]);
				}
				data[i] = {
		    		name: fnLocation.series[i].name,
		            y: total_date,
		            sliced: false,
					colorByPoint: true,
		            selected: true
				}
			}
			var option = {
				    title: {
				        text: ''
				    },
				    credits: {
				    	enabled : false
				    },
				    exporting: {
				    	enabled : false
				    },
				    tooltip: {
				        pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
				    },
					plotOptions: {
				        pie: {
				            allowPointSelect: true,
				            cursor: 'pointer',
				            dataLabels: {
				                enabled: false
				            },
				            showInLegend: true
				        }
					},
		            chart: {
				        plotBackgroundColor: null,
				        plotBorderWidth: null,
				        plotShadow: false,
				        type: type
				    },
					series: [{
						data: data
					}]
		        }
		    Highcharts.chart('highcharts-line', option);
		}else{
			fnLocation.renderChart();
		}
	},
	renderTable: function(data){
		var row = [];
		var column_def = [];
 		var column_header = [];
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
			for(var ii =0; ii< fnLocation.categories.length; ii++){
				cnt_in = 0;
				if(data[i].column[ii]){
					cnt_in = data[i].column[ii].in;
				} 
				col_count.push(Number(cnt_in));
	        }
			row[i] = col_main.concat(col_count);
		}
		
        $.each(fnLocation.categories, function(i, val){
			column_header.push({"title": val});
        	column_def.push({"targets": i+2, className: "text-center" });
        });
		if(fnLocation.oTable){
			fnLocation.oTable.destroy();
			$('#location_table').empty();
		}
		fnLocation.oTable = $('#location_table').DataTable({
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
	},
	init : function(){
		fnLocation.isSearch();
		fnLocation.isChangeType();
	}
}

fnLocation.init();
