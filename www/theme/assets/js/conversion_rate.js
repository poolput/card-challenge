var fnConversionRate = {
	
	base_url : $('#base_url').val(),
	chart: null,
	table: null,

	isSearch: function(){
		$('#search').off('click').on('click', function(e) {
			e.preventDefault();
			
			$('#page-content').show();
			$('.loader').removeClass('d-none');
			fnService.getStaff();
			fnConversionRate.getBranchList(); //fill branch in select box
			$("#branch_select").select2().show();
			
		    $('.popup-list-wrapper').css({
				display: 'none',
				left: '-9999px',
				opacity: '0'
	        });
			
			var params = $('#criteria-form').serialize();
			var url = fnConversionRate.base_url +'/get-analysis-conversion-rate';
			$.post(url, params, function(response){
				var data = JSON.parse(response);
				
				$('.loader').addClass('d-none');
				$("#chart_div").empty();
				$(".table_div").empty();
				
				if(data != ''){
					$.each(data, function(branch_id, value){
						var categories = value.categories.split(",");
						var data_in = JSON.parse("[" + value.data_in + "]");
						var data_receipt = JSON.parse("[" + value.data_receipt + "]");
						var data_sale = JSON.parse("[" + value.data_sale + "]");
						var data_percentage = JSON.parse("[" + value.data_percentage + "]");

						fnConversionRate.renderTab(branch_id);
						fnConversionRate.renderChart(branch_id,categories,data_in,data_receipt,data_sale,data_percentage);
						fnConversionRate.renderTable(branch_id,categories,data_in,data_receipt,data_sale,data_percentage);
					});
				}
				
				fnService.getPeriod();
				 
				$("#branch_select").trigger('change');
			});
		});
	},
	selectBranch :function(){
		
		$("#branch_select").change(function(){
			var branch_id = $(this).val();
			
			$(".chart_contaner, .table_container").hide();
			
			$("#chart-"+branch_id).show();
			$("#table_container-"+branch_id).show();
		});
	},
	renderTab: function(branch_id){
		
		var chart_container = "<div class='chart_contaner' id='chart-"+branch_id+"'></div>";
		var table_template = "<div class='dt-responsive table-responsive col-sm-12 table_container' id='table_container-"+branch_id+"'>"+
									"<table id='conversion_rate_table-"+branch_id+"' class='table compact table-striped table-bordered nowrap dataTable' style='width:100%'>"+
		                                "<thead>"+
		                                    "<tr>"+
		                                        "<th class='text-center'>Time</th>"+
		                                        "<th class='text-center'>Visitor In</th>"+
		                                        "<th class='text-center'>Receipt</th>"+
		                                        "<th class='text-center'>Sale Amount</th>"+
		                                        "<th class='text-center'>Percentage</th>"+
		                                    "</tr>"+
		                                "</thead>"+
		                            "</table>"+
	                            "</div>";
		$("#chart_div").append(chart_container);
		$(".table_div").append(table_template);
	},
	renderChart: function(branch_id,categories,data_in,data_receipt,data_sale,data_percentage){
		var option = {
				chart: {
			        zoomType: 'xy'
			    },
			    title: {
			        text: ''
			    },
			    subtitle: {
			        text: ''
			    },
			    xAxis: [{
			        categories: categories,
			        crosshair: true
			    }],
			    yAxis: [
			    	{ // Primary yAxis
			        labels: {
			            format: '{value} %',
			            style: {
			                color: Highcharts.getOptions().colors[4]
			            }
			        },
			        title: {
			            text: 'Percentage',
			            style: {
			                color: Highcharts.getOptions().colors[4]
			            }
			        },
			        opposite: true

			    }, { // Secondary yAxis
			        gridLineWidth: 0,
			        title: {
			            text: 'Number of Visitor',
			            style: {
			                color: Highcharts.getOptions().colors[0]
			            }
			        },
			        labels: {
			        	format: '{value}',
			            style: {
			                color: Highcharts.getOptions().colors[0]
			            }
			        }

			    }, { // Tertiary yAxis
			        gridLineWidth: 0,
			        title: {
			            text: 'Sale Amount',
			            style: {
			                color: Highcharts.getOptions().colors[1]
			            }
			        },
			        labels: {
			            format: '{value} baht',
			            style: {
			                color: Highcharts.getOptions().colors[1]
			            }
			        },
			        opposite: true
			    }],
			    tooltip: {
			        shared: true
			    },
			    series: [{
			        name: 'In',
			        type: 'column',
			        yAxis: 1,
			        data: data_in
			    }, {
			        name: 'Sale',
			        type: 'spline',
			        yAxis: 2,
			        data: data_sale,
			        marker: {
			            enabled: false
			        },
			        dashStyle: 'shortdot',
			        tooltip: {
			            valueSuffix: ' Baht'
			        }
			    }, {
			        name: 'Percentage',
			        type: 'spline',
			        data: data_percentage,
			        tooltip: {
			            valueSuffix: ' %'
			        },
			        color: Highcharts.getOptions().colors[4]
			    }],
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

		fnConversionRate.chart = Highcharts.chart('chart-'+branch_id,option);
	},
	renderTable: function(branch_id,categories,data_in,data_receipt,data_sale,data_percentage){
		
		var sum_in = 0;
		var sum_sale = 0;
		var sum_receipt = 0;
		var last_percentage = 0;
		var data = [];
		
		for(var i =0; i< categories.length; i++){
		    data[i] = {
	    		"time": categories[i],
	    		"in": fnService.formatComma(data_in[i]),
	    		"sale": fnService.formatComma(data_sale[i]),
	    		"receipt": fnService.formatComma(data_receipt[i]),
	    		"percentage": fnService.formatComma(data_percentage[i])+"%"
		    };
		    
		    sum_in += Number(data_in[i]);
		    sum_sale += Number(data_sale[i]);
		    sum_receipt += Number(data_receipt[i]);
		}
		if(sum_in != 0){
			last_percentage = fnService.formatComma(((sum_receipt/sum_in)*100).toFixed(2));
		}
		
        data[i] = {
	        		"time": 'Total',
	        		"in":fnService.formatComma(sum_in),
	        		"sale":fnService.formatComma(sum_sale),
	        		"receipt":fnService.formatComma(sum_receipt),
	        		"percentage":fnService.formatComma(last_percentage)+"%"
        		};
        
		fnConversionRate.table = $('#conversion_rate_table-'+branch_id).DataTable({
    		"lengthChange": false,
    		"searching": false,
    		"paging": false,
    		"bInfo" : false,
    		"ordering": false,
    		"columnDefs": [
    			{ "width": "10%", "targets": 0, className: "text-left"  },
    			{ "width": "20%", "targets": 1, className: "text-center" },
    			{ "width": "20%", "targets": 2, className: "text-center" },
    			{ "width": "20%", "targets": 3, className: "text-center" },
    			{ "width": "20%", "targets": 4, className: "text-center" },
    		],
            "data": data,
            "columns" : [
                { "data" : "time" },
                { "data" : "in" },
                { "data" : "receipt" },
                { "data" : "sale" },
                { "data" : "percentage" },
            ]
        });

	},
 	getBranchList: function(){
		var params = $('#criteria-form').serialize();
		var url = fnService.base_url +'/get-branch-selectbox';
		$.post(url, params, function(response){
			html = '<option>-- No Data --</option>';
			if(response != ''){
				html = '';
				$("#branch_select").empty();
				var data = JSON.parse(response);
				$.each(data, function(index, value){
					html += "<option value='"+value.branch_id+"'>"+value.branch_name+"</option>";
				});
				$("#branch_select").html(html);
			}
		});
	},
	init : function(){
		fnConversionRate.isSearch(); 
		fnConversionRate.selectBranch();
		fnConversionRate.getBranchList();
	}
}

fnConversionRate.init();
