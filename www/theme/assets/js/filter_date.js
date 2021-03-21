
var fnCriteria = {
	base_url: $('#base_url').val(),
	default_branch: '1',
	default_group: '1',
	default_host: $('#base_url').val(),
	checkWeekStartEnd: function(){
		$('#option_week_year_start,#option_week_year_end,#option_week_start,#option_week_end').change(function(){
			var year_start = $('#option_week_year_start').val();
			var year_end = $('#option_week_year_end').val();
			var week_start = $('#option_week_start').val();
			var week_end = $('#option_week_end').val();
			
			if(Number(year_start) > Number(year_end)){
				$('#option_week_year_start').val(year_end);
				$('#option_week_year_start').trigger('change');
			}
			if(Number(year_start) == Number(year_end)){
				if(Number(week_start) > Number(week_end)){
					$('#option_week_start').val(week_end);
				}
			}
		});
	},
	checkMonthStartEnd: function(){
		$('#option_month_year_start,#option_month_year_end,#option_month_start,#option_month_end').change(function(){
			var year_start = $('#option_month_year_start').val();
			var year_end = $('#option_month_year_end').val();
			var month_start = $('#option_month_start').val();
			var month_end = $('#option_month_end').val();
			
			if(Number(year_start) > Number(year_end)){
				$('#option_month_year_start').val(year_end);
			}
			if(Number(year_start) == Number(year_end)){
				if(Number(month_start) > Number(month_end)){
					$('#option_month_start').val(month_end);
				}
			}
		});
	},
	checkQuarterStartEnd: function(){
		$('#option_quarter_year_start,#option_quarter_year_end,#option_quarter_start,#option_quarter_end').change(function(){
			var year_start = $('#option_quarter_year_start').val();
			var year_end = $('#option_quarter_year_end').val();
			var quarter_start = $('#option_quarter_start').val();
			var quarter_end = $('#option_quarter_end').val();
			
			if(Number(year_start) > Number(year_end)){
				$('#option_quarter_year_start').val(year_end);
			}
			if(Number(year_start) == Number(year_end)){
				if(Number(quarter_start) > Number(quarter_end)){
					$('#option_quarter_start').val(quarter_end);
				}
			}
		});
	},
	checkYearStartEnd: function(){
		$('#option_year_start,#option_year_end').change(function(){
			var year_start = $('#option_year_start').val();
			var year_end = $('#option_year_end').val(); 
			
			if(Number(year_start) > Number(year_end)){
				$('#option_year_start').val(year_end);
			} 
		});
	},
	isChangeWeekYearStart: function(){
		$('#option_week_year_start').change(function(){
			var year = $(this).val();
			var url = fnCriteria.base_url +'/get-week';
			$.post(url, {'year': year}, function(response){
				var data = JSON.parse(response);
				var option = '';
				$.each(data, function(key, value){
					option += '<option value="'+key+'">'+value+'</option>';
				});
				$('#option_week_start').html(option);
			});
		});
	},
	isChangeWeekYearEnd: function(){
		$('#option_week_year_end').change(function(){
			var year = $(this).val();
			var url = fnCriteria.base_url +'/get-week';
			$.post(url, {'year': year}, function(response){
				var data = JSON.parse(response);
				var option = '';
				$.each(data, function(key, value){
					option += '<option value="'+key+'">'+value+'</option>';
				});
				$('#option_week_end').html(option);
			});
		});
	},	
	isChangeMonthYear: function(){
		var total = 0;
		var value = 0;
		var max_value = 0;
		var TodayDate = new Date();
		var month = TodayDate.getMonth();
				
		$('#option_month_year').change(function(){
			max_value = fnService.getMaximumSelectValue('option_month_year');
			value = $(this).val();
			if(value != max_value){
				$('#option_month option').show();
			}else{

				$('#option_month option').hide();
				for(var i=1; i<=month; i++ ){
					$('#option_month option[value='+ i +']').show();
				}
			}
		});
		$('#option_month').val(month);
	},
	isChangeQuarterYear: function(){
		var total = 0;
		var value = 0;
		var max_value = 0;
		var TodayDate = new Date();
		var quarter = Math.floor((TodayDate.getMonth() + 3) / 3);
		$('#option_quarter_year').change(function(){
			max_value = fnService.getMaximumSelectValue('option_quarter_year');
			value = $(this).val();
			if(value != max_value){
				$('#option_quarter option').show();
			}else{
				$('#option_quarter option').hide();
				for(var i=1; i<=quarter; i++ ){
					$('#option_quarter option[value='+ i +']').show();
				}
			}
		});
		
		$('#option_quarter').val(quarter);
	},
	selectDay: function(){
		$('#option_recurrence').off('click').on('click', function(e) {
	    	var checked = $(this).is(':checked');
	  		if(checked == false){
	  			$('.recurrence').each(function(){
	    	  		$(this).prop('checked', false);
	    		});
	  		}else if(checked == true){
	  			$('.recurrence').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}
	    });
	},
	initDate: function(){
		
			var startDate = new Date('2020-01-01');
			var FromEndDate = new Date();
			var ToEndDate = new Date();
			ToEndDate.setDate(ToEndDate.getDate() + 365);
		
			$(".date-start").datepicker({
			    format: 'yyyy-mm-dd',
			    autoclose: true,
			    startDate: '2010-01-01',
			    endDate: ToEndDate,
				orientation: 'auto bottom',
			    onSelect: function() {
			    	
			    }
			}).on("changeDate", function(selected) {
				 	
					if(this.value){
						$(".option-date-start").val(this.value);
					}
				 
			        startDate = new Date(selected.date.valueOf());
			        startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
			        
			        $('.date-end, .option-date-end').datepicker('setStartDate', startDate);
			        if($('.date-end').val()){
			        	$('.date-end').val(this.value);
						$('.option-date-end').val(this.value);
			        }
			});
			
			$(".option-date-start").datepicker({
			    format: 'yyyy-mm-dd',
			    autoclose: true,
			    startDate: '2010-01-01',
			    endDate: ToEndDate,
				orientation: 'auto bottom',
			    onSelect: function() {
			    	
			    }
			}).on("changeDate", function(selected) {
				if(this.value){
					$(".date-start").val(this.value);
				}
		        startDate = new Date(selected.date.valueOf());
		        startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
		        $('.date-end, .option-date-end').datepicker('setStartDate', startDate);
				if($('.date-end').val()){
		        	$('.date-end').val(this.value);
					$('.option-date-end').val(this.value);
		        }

		});
			
		//
		$(".date-end").datepicker({
		    format: 'yyyy-mm-dd',
		    autoclose: true,
			orientation: 'auto bottom',
		    onSelect: function(dateText) {
		    	
		    }
		}).on("changeDate", function() {
			 
				if(this.value){
					$(".option-date-end").val(this.value);
				}
		});
		
		$(".option-date-end").datepicker({
		    format: 'yyyy-mm-dd',
		    autoclose: true,
			orientation: 'auto bottom',
		    onSelect: function(dateText) {
		    	
		    }
		}).on("changeDate", function() {
			 
			 if(this.value){
				 $(".date-end").val(this.value);
				}
		});
	},
	initTime: function(){
		$("input[name='option_time_start'], input[name='option_time_end']").click(function(){
			$(this).select();
		});
		$("input[name='option_time_start'], input[name='option_time_end']").inputmask({
		    mask: "h:s",
		    placeholder: "00:00",
		    alias: "datetime",
		    hourFormat: "24"
		});  
	},
	init : function(){
		fnCriteria.isChangeMonthYear();
		fnCriteria.isChangeQuarterYear();
		fnCriteria.selectDay();
		fnCriteria.initDate();
		fnCriteria.initTime();
		fnCriteria.isChangeWeekYearStart();
		fnCriteria.isChangeWeekYearEnd();
		fnCriteria.checkWeekStartEnd();
		fnCriteria.checkYearStartEnd();
		fnCriteria.checkQuarterStartEnd();
		fnCriteria.checkMonthStartEnd();
		fnCriteria.checkWeekStartEnd();
	}
}

fnCriteria.init();

