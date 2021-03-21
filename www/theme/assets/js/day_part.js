var fnDayPart = {

	base_url : $('#base_url').val(),
	chart: null,
	series: '',
	
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
			var url = fnDayPart.base_url +'/get-day-part';

			$.post(url, params, function(response){
				if(response != ''){
					$('.loader').addClass('d-none');
					$('#page-content').show();
					$('.location-table-content').addClass('d-block');
					
					fnDayPart.series = JSON.parse(response.series);

					fnDayPart.categories = response.categories.split(",");
					
					fnService.getLocation(params);
					fnService.getPeriod(params);

					fnDayPart.renderChart();
					fnDayPart.renderTable(response);
				}
				
			},'json');
		});
	},
	renderChart: function(){
		var option = {
			   	chart: {
			        type: 'bar'
			    },
			    title: {
			        text: ''
			    },
			    subtitle: {
			        text: ''
			    },
			    yAxis: {
			        min: 0,
			        max: 100,
			        title: {
			            text: 'Percentage'
			        },
			        reversedStacks: false
			    },
			    xAxis: {
					categories: ['Weekday', 'Weekend'],
			    },
			    plotOptions: {
			        series: {
			            stacking: 'normal'
			        }
			    },
			    legend: {
			        layout: 'horizontal',
			        align: 'center',
			        verticalAlign: 'bottom',
			        reversed: false
			    },
			    series: fnDayPart.series,
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
		fnDayPart.chart = Highcharts.chart('highcharts-stacked', option);
	},
	renderTable: function(response){

		var categories = response.categories.split(",");
		
		
		var weekday_in = JSON.parse("[" + JSON.parse(response.weekday).visitor + "]");
		var weekday_percentage = JSON.parse("[" + JSON.parse(response.weekday).percentage + "]");
		var weekend_in = JSON.parse("[" + JSON.parse(response.weekend).visitor + "]");
		var weeken_percentage = JSON.parse("[" + JSON.parse(response.weekend).percentage + "]");
		var total_in = JSON.parse("[" + JSON.parse(response.total).visitor + "]");
		var total_percentage = JSON.parse("[" + JSON.parse(response.total).percentage + "]");

		var sum_weekday = 0;
		var sum_weekday_percentage = 0;
		var sum_weekend = 0;
		var sum_weekend_percentage = 0;
		var sum_total = 0;
		var sum_total_percentage = 0;
		var data = [];
		
		for(var i =0; i< categories.length; i++){
			
		    data[i] = {
	    		"categories": categories[i],
	    		"weekday_in": fnService.formatComma(weekday_in[i]),
	    		"weekday_persentage": fnService.formatComma(weekday_percentage[i]+"%"),
	    		"weekend_in": fnService.formatComma(weekend_in[i]),
	    		"weekend_persentage": fnService.formatComma(weeken_percentage[i]+"%"),
	    		"total_in": fnService.formatComma(total_in[i]),
				"total_persentage": fnService.formatComma(total_percentage[i]+"%")
		    };
		    
		    sum_weekday += Number(weekday_in[i]);
			sum_weekday_percentage += Number(weekday_percentage[i]);
			sum_weekend += Number(weekend_in[i]);
			sum_weekend_percentage += Number(weeken_percentage[i]);
			sum_total += Number(total_in[i]);
			sum_total_percentage += Number(total_percentage[i]);

		}
		
		
        data[i] = {
	        		"categories": 'Total',
		    		"weekday_in": fnService.formatComma(sum_weekday),
		    		"weekday_persentage": fnService.formatComma(Math.round(sum_weekday_percentage)+"%"),
		    		"weekend_in": fnService.formatComma(sum_weekend),
		    		"weekend_persentage": fnService.formatComma(Math.round(sum_weekend_percentage)+"%"),
		    		"total_in": fnService.formatComma(sum_total),
					"total_persentage": fnService.formatComma(Math.round(sum_total_percentage)+"%")
        		};
        
		fnDayPart.table = $('#daypart_table').DataTable({
    		"lengthChange": false,
    		"searching": false,
    		"paging": false,
    		"bInfo" : false,
    		"ordering": false,
    		'bDestroy' : true,
    		"columnDefs": [
    			{ "width": "12%", "targets": 0, className: "text-left"  },
    			{ "width": "14%", "targets": 1, className: "text-center" },
    			{ "width": "14%", "targets": 2, className: "text-center" },
    			{ "width": "14%", "targets": 3, className: "text-center" },
    			{ "width": "14%", "targets": 4, className: "text-center" },
    			{ "width": "14%", "targets": 5, className: "text-center" },
    			{ "width": "14%", "targets": 6, className: "text-center" }
    		],
            "data": data,
            "columns" : [
                { "data" : "categories" },
                { "data" : "weekday_in" },
                { "data" : "weekday_persentage" },
                { "data" : "weekend_in" },
                { "data" : "weekend_persentage" },
                { "data" : "total_in" },
                { "data" : "total_persentage" },
            ]
        });
	},
	init : function(){
		fnDayPart.isSearch();
		$("#criteria-option-event").hide();
	}
}

fnDayPart.init();
