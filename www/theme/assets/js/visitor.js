var fnVisitor = {
	
	base_url : $('#base_url').val(),
	chart: null,
	table: null,
	categories: '',
	data_in: '',
	data_out: '',
	data_trend: '',
	isChangeType: function(){
		$('.series-type').off('click').on('click', function(e) {
			e.preventDefault();
			fnVisitor.updateChart($(this).data('type'));
		});
	},
	isSearch: function(){
		$('#search').off('click').on('click', function(e) {
			e.preventDefault();
			fnService.getStaff();
		    $('.popup-list-wrapper').css({
	             display: 'none',
	             left: '-9999px',
	             opacity: '0'
	        });
			$('.loader').removeClass('d-none');
			$('#page-content').hide();
			var params = $('#criteria-form').serialize();
			var url = fnVisitor.base_url +'/get-visitor';
			$.post(url, params, function(response){
				var data = JSON.parse(response);
				
				$('.loader').addClass('d-none');
				$('#page-content').show();
				
				fnVisitor.categories = data.categories.split(",");
				fnVisitor.data_in = JSON.parse("[" + data.data_in + "]");
				fnVisitor.data_out = JSON.parse("[" + data.data_out + "]");
				fnVisitor.data_trend = JSON.parse("[" + data.data_trend + "]");
				fnVisitor.renderChart();
				fnVisitor.renderTable(fnVisitor.categories, fnVisitor.data_in , fnVisitor.data_out , fnVisitor.data_trend);
				
				fnService.getLocation(params);
				fnService.getPeriod(params);
			});
		});
	},
	renderChart: function(){
		var option = {
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
					categories: fnVisitor.categories,
			    },
			    legend: {
			        layout: 'horizontal',
			        align: 'center',
			        verticalAlign: 'bottom'
			    },
			    plotOptions: {
			 
			    },
			    series: [{
			    	type: 'area',
			        name: 'In',
			        marker: {
			            symbol: 'circle'
			        },
			        data: fnVisitor.data_in
			    }, {
			    	type: 'area',
			        name: 'Out',
			        marker: {
			            symbol: 'circle'
			        },
			        data: fnVisitor.data_out
			    } ],
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

		fnVisitor.chart = Highcharts.chart('highcharts-line',option);
		fnVisitor.updateChart(); 
	},
	updateChart: function(type){
		fnVisitor.chart.update(
	        {
	            series: [{
	            	type: type,
	            }, {
	            	type: type,
	            } ],
	        }
	    )
	},
	renderTable: function(categories, data_in , data_out, data_trend){
		
		var last_in = 0;
		var sum_in = 0;
		var sum_out = 0;
		var sum_trend = 0;
		var data = [];
		var trend = '';
		
		for(var i =0; i< categories.length; i++){
			if(data_trend[i]>0){
				trend = '<font color="green">'+data_trend[i]+'</font>';
			}else{
				trend = '<font color="red">'+data_trend[i]+'</font>'
			}
		    data[i] = {
	    		"time": categories[i],
	    		"in": fnService.formatComma(data_in[i]),
	    		"trend": trend,
	    		"out": fnService.formatComma(data_out[i]) 
		    };
		    if(i>0){
		    	last_in = (Number(last_in) + (Number(data_in[i])) - Number(data_out[i]));
		    }
		    sum_in = Number(sum_in) + Number(data_in[i]);
		    sum_trend = Number(sum_trend) + Number(data_trend[i]);
		    sum_out = Number(sum_out) + Number(data_out[i]);
		}
        data[i] = {
        		"time": 'Total',
        		"in":fnService.formatComma(sum_in),
        		"trend":'',
        		"out":fnService.formatComma(sum_out),
        		};
        $('.number-total-in').html(fnService.formatComma(sum_in));
        $('.number-total-out').html(fnService.formatComma(sum_out));
        var avg = Number(sum_in) / Number(categories.length);
        if(avg){
        	$('.number-total-avgerage').html(fnService.formatComma(avg.toFixed(0)));
        }
		if(fnVisitor.table){
			fnVisitor.table.clear();
			fnVisitor.table.rows.add(data);
			fnVisitor.table.draw();
		}else{
			fnVisitor.table = $('#visitor_table').DataTable({
	    		"lengthChange": false,
	    		"searching": false,
	    		"paging": false,
	    		"bInfo" : false,
	    		"ordering": false,
	    		"columnDefs": [
	    			{ "width": "10%", "targets": 0, className: "text-left"  },
	    			{ "width": "30%", "targets": 1, className: "text-center" },
	    			{ "width": "30%", "targets": 2, className: "text-center" },
	    			{ "width": "30%", "targets": 3, className: "text-center" },
	    		],
	            "data": data,
	            "columns" : [
	                { "data" : "time" },
	                { "data" : "in" },
	                { "data" : "trend" },
	                { "data" : "out" },
	            ]
	        });
		}
	},
 
	init : function(){
		fnVisitor.renderChart(); 
		fnVisitor.updateChart(); 
		fnVisitor.isSearch(); 
		fnVisitor.renderTable(fnVisitor.categories,fnVisitor.data_in,fnVisitor.data_out,fnVisitor.data_trend); 
		fnVisitor.isChangeType();
	}
}

fnVisitor.init();