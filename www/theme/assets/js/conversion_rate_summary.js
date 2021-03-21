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
			fnService.getLocation();
			
		    $('.popup-list-wrapper').css({
				display: 'none',
				left: '-9999px',
				opacity: '0'
	        });
			
			var params = $('#criteria-form').serialize();
			var url = fnConversionRate.base_url +'/get-analysis-conversion-rate-summary';
			$.post(url, params, function(response){
				var data = JSON.parse(response);
				
				$('.loader').addClass('d-none');
				
				if(data != ''){
					var categories = data.categories.split(",");
					var data_in = JSON.parse("[" + data.data_in + "]");
					var data_receipt = JSON.parse("[" + data.data_receipt + "]");
					var data_sale = JSON.parse("[" + data.data_sale + "]");
					var data_percentage = JSON.parse("[" + data.data_percentage + "]");

					fnConversionRate.renderChart(categories,data_in,data_receipt,data_sale,data_percentage);
					fnConversionRate.renderTable(categories,data_in,data_receipt,data_sale,data_percentage);
				}
				
				fnService.getPeriod();
				 
			});
		});
	},
	renderChart: function(categories,data_in,data_receipt,data_sale,data_percentage){
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

		fnConversionRate.chart = Highcharts.chart('chart-content', option);
	},
	renderTable: function(categories,data_in,data_receipt,data_sale,data_percentage){
		var sum_in = 0;
		var sum_sale = 0;
		var sum_receipt = 0;
		var last_percentage = 0;
		var data = [];
		
		for(var i =0; i< categories.length; i++){
		    data[i] = {
	    		"location": categories[i],
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
	        		"location": 'Total',
	        		"in":fnService.formatComma(sum_in),
	        		"sale":fnService.formatComma(sum_sale),
	        		"receipt":fnService.formatComma(sum_receipt),
	        		"percentage":fnService.formatComma(last_percentage)+"%"
        		};
        
		fnConversionRate.table = $('#table-content').DataTable({
    		"lengthChange": false,
    		"searching": false,
    		"bDestroy": true,
    		"paging": false,
    		"bInfo" : false,
    		"ordering": false,
    		"columnDefs": [
    			{ "width": "20%", "targets": 0, className: "text-left"  },
    			{ "width": "20%", "targets": 1, className: "text-center" },
    			{ "width": "20%", "targets": 2, className: "text-center" },
    			{ "width": "20%", "targets": 3, className: "text-center" },
    			{ "width": "20%", "targets": 4, className: "text-center" },
    		],
            "data": data,
            "columns" : [
                { "data" : "location" },
                { "data" : "in" },
                { "data" : "receipt" },
                { "data" : "sale" },
                { "data" : "percentage" },
            ]
        });

	},
	init : function(){
		fnConversionRate.isSearch(); 
	}
}

fnConversionRate.init();
