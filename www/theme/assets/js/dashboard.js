var fnDashboard = {
	
	base_url : $('#base_url').val(),

	params : $('#criteria-form').serialize(),
	visitor_url : $('#base_url').val() +'/get-visitor',
	location_url : $('#base_url').val() +'/get-summary-location',
	visitor_7days_url : $('#base_url').val() +'/get-visitor-7days',
	visitor_event_url : $('#base_url').val() +'/get-visitor-top-event',

	visitor_summary_chart : '',
	breakdown_chart : '',
	visitor7day_chart : '',
	visitorEvent_chart : '',

	timenow : '23:59',
	hournow : 23,

	isChangeType: function(){
		$('.series-type').off('click').on('click', function(e) {
			e.preventDefault();
			var chart_ref = $(this).data('chartref');

			fnDashboard.updateChart($(this).data('type'), chart_ref);
		});
	},
	isSearch: function(){
		$('#search').off('click').on('click', function(e) {
			e.preventDefault();

			$('.loader').removeClass('d-none');
			$('#page-content').hide();

			//visitor summary
			fnDashboard.renderVisitorChart();
			//location breakdown
			fnDashboard.renderLocationChart('pie');
			//visitor 7 days
			fnDashboard.renderVisitor7Days();
			//top event ... days
			fnDashboard.renderVisitorEvent(30);

			$('.loader').addClass('d-none');
			$('#page-content').show();
		});
	},
	updateChart: function(type, chart_ref){
		var chart_id = fnDashboard.visitor_summary_chart;

		switch(chart_ref) {
		  	case 'visitor-summary':
				chart_id = fnDashboard.visitor_summary_chart;
			    break;
		  	case 'location-breakdown':
			   	fnDashboard.renderLocationChart(type);
			    break;
			case 'visitor-7day':
			   	chart_id = fnDashboard.visitor7day_chart;
			    break;
			case 'top-event':
			   	chart_id = fnDashboard.visitorEvent_chart;
			    break;
		  	default:
		  		//blank
		}

		if(chart_ref != 'location-breakdown'){
			chart_id.update({
	            series: [{
	            	type: type,
	            }, {
	            	type: type,
	            }],
	        });
		}		
	},
	renderVisitorChart: function(){
		$.post(fnDashboard.visitor_url, fnDashboard.params, function(response){
			var data = JSON.parse(response); 
			var categories = [];
			var data_in = [];
			var data_out = [];
			var data_trend = [];

			for(var i = 0; i <= fnDashboard.hournow; i++){
				var hour_cat = fnService.zeroLead(i,2)+":00";
				categories.push(hour_cat);
				data_in.push(0);
				data_out.push(0);
				data_trend.push(0);
			}

			if(data != '' && data != undefined && data.length != 0){
				categories = data.categories.split(",");
				data_in = JSON.parse("[" + data.data_in + "]");
				data_out = JSON.parse("[" + data.data_out + "]");
				data_trend = JSON.parse("[" + data.data_trend + "]");
			}
			
			var option = {
			    title: {
			        text: 'Visitor Summary'
			    },
			    subtitle: {
			        text: ''
			    },
			    yAxis: {
			        title: {
			            text: 'Number of Visitor'
			        }
			    },
			    xAxis: {
					categories: categories
			    },
			    legend: {
			        layout: 'horizontal',
			        align: 'center',
			        verticalAlign: 'bottom'
			    },
			    plotOptions: {
			 
			    },
			    tooltip:{
			    	shared : true
			    },
			    series: [{
			    	type: 'area',
			        name: 'In',
			        marker: {
			            symbol: 'circle'
			        },
			        data: data_in
			    }, {
			    	type: 'area',
			        name: 'Out',
			        marker: {
			            symbol: 'circle'
			        },
			        data: data_out
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

			fnDashboard.visitor_summary_chart = Highcharts.chart('visitor-summary-chart',option);
		});
	},
	renderLocationChart : function(type){
		$.post(fnDashboard.location_url, fnDashboard.params, function(response){
			var data = JSON.parse(response);
			var series = [];
			var categories = [];

			categories.push('branch');
			if(type == 'line'){
				series.push(0);
			}

			if(data != '' && data != undefined && data.length != 0){
				series = JSON.parse(data.series);
				categories = data.categories.split(",");
			}

			if(type == 'line'){
				var option = {
				   	chart: {
				        type: 'line'
				    },
				    title: {
				        text: 'Location Breakdown'
				    },
				    subtitle: {
				        text: ''
				    },
				    yAxis: {
				        title: {
				            text: 'Number of Visitor'
				        }
				    },
				    xAxis: {
						categories: categories,
				    },
				    legend: {
				        layout: 'horizontal',
				        align: 'left',
				        verticalAlign: 'bottom',
				        labelFormatter: function () {
					    	return this.name.length > 10 ? [...this.name].splice(0, 15).join('') + '...' : this.name
					    }
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
			}else if(type == 'pie'){
				var data = [];

				for(var i =0; i< series.length; i++){
					var total_date = 0;
					for(var ii =0; ii< series[i].data.length; ii++){
						total_date = Number(total_date) + Number(series[i].data[ii]);
					}
					data[i] = {
			    		name: series[i].name,
			            y: total_date,
			            sliced: false,
						colorByPoint: true,
			            selected: true
					}
				}

				var option = {
				    title: {
				        text: 'Location Breakdown'
				    },
				    credits: {
				    	enabled : false
				    },
				    exporting: {
				    	enabled : false
				    },
				    tooltip: {
				        pointFormat: 'Percentage : <b>{point.percentage:.2f}%</b>'
				    },
					plotOptions: {
				        pie: {
				            allowPointSelect: true,
				            cursor: 'pointer',
				            dataLabels: {
				                enabled: true,
				                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
				            }
				        }
					},
		            chart: {
				        plotBackgroundColor: null,
				        plotBorderWidth: null,
				        plotShadow: false,
				        type: 'pie'
				    },
					series: [{
						data: data
					}]
		        }
				
			}

			
			fnDashboard.breakdown_chart = Highcharts.chart('breakdown-chart', option);
		});
	},
	renderVisitor7Days : function(){
		$.post(fnDashboard.visitor_7days_url, fnDashboard.params, function(response){
			var data = JSON.parse(response);
	
			var categories = [];
			var data_in = [];

			categories.push('date');
			data_in.push(0);

			if(data != '' && data != undefined && data.length != 0){
				categories = data.categories.split(",");
				data_in = JSON.parse("[" + data.data_in + "]");
			}

			var option = {
			    title: {
			        text: 'Visitor Pass 7 Days (In)'
			    },
			    subtitle: {
			        text: ''
			    },
			    yAxis: {
			        title: {
			            text: 'Number of Visitor'
			        }
			    },
			    xAxis: {
					categories: categories
			    },
			    legend: {
			        layout: 'horizontal',
			        align: 'center',
			        verticalAlign: 'bottom'
			    },
			    plotOptions: {
			 
			    },
			    series: [{
			    	type: 'line',
			        name: 'In',
			        marker: {
			            symbol: 'circle'
			        },
			        data: data_in
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

			fnDashboard.visitor7day_chart = Highcharts.chart('visitor7day-chart',option);
		});
	},
	renderVisitorEvent : function(days){
		$.post(fnDashboard.visitor_event_url, fnDashboard.params+ '&cfgday=' + days, function(response){
			var data = JSON.parse(response);
			
			var categories = [];
			var data_in = [];

			categories.push('event');
			data_in.push(0);

			if(data != '' && data != undefined && data.length != 0){
				categories = data.categories.split(",");
				data_in = JSON.parse("[" + data.data_in + "]");
			}

			var option = {
			    title: {
			        text: 'Top 10 Events ('+days+' days)'
			    },
			    subtitle: {
			        text: ''
			    },
			    yAxis: {
			        title: {
			            text: 'Number of Visitor'
			        }
			    },
			    xAxis: {
					categories: categories
			    },
			    legend: {
			        layout: 'horizontal',
			        align: 'center',
			        verticalAlign: 'bottom'
			    },
			    plotOptions: {
			 
			    },
			    series: [{
			    	type: 'column',
			        name: 'In',
			        marker: {
			            symbol: 'circle'
			        },
			        data: data_in
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

			fnDashboard.visitorEvent_chart = Highcharts.chart('top-event-chart',option);
		});
	},
	init : function(){
		var d = new Date();
		var month = d.getMonth()+1;
		var day = d.getDate();
		fnDashboard.timenow = d.getHours() + ":" + d.getMinutes();
		fnDashboard.hournow = d.getHours();

		fnDashboard.isSearch(); 
		fnDashboard.isChangeType();

		$("[name='option_date_start'], [name='option_date_end']").val(d.getFullYear() + '-' +(month<10 ? '0' : '') + month + '-' +(day<10 ? '0' : '') + day);
		$("[name='option_time']").prop("checked", true);
		$("[name='option_time_start']").val("00:00");
		$("[name='option_time_end']").val(fnDashboard.timenow);

		$('#search').trigger("click");
	}
}

fnDashboard.init();