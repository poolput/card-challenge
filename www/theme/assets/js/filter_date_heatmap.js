
var fnHeatmap = {
	base_url: $('#base_url').val(),
	default_branch: '1',
	default_group: '1',
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
	  		fnHeatmap.init();
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
			        }
			});
			
			$(".option-date-start").datepicker({
			    format: 'yyyy-mm-dd',
			    autoclose: true,
			    onSelect: function(dateText) {
			    	
			    }
			}).on("changeDate", function(selected) {
				if(this.value){
					$(".date-start").val(this.value);
				}
				 
		        startDate = new Date(selected.date.valueOf());
		        startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
		        $('.date-end, .option-date-end').datepicker('setStartDate', startDate);
		});
			
			//
			$(".date-end").datepicker({
			    format: 'yyyy-mm-dd',
			    autoclose: true,
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
			    onSelect: function(dateText) {
			    	
			    }
			}).on("changeDate", function() {
				 
				 if(this.value){
					 $(".date-end").val(this.value);
				 }
			});
	},
 
	init : function(){
		fnHeatmap.isChangeMonthYear();
		fnHeatmap.isChangeQuarterYear();
		fnHeatmap.selectDay();
		fnHeatmap.initDate();
	}
}

fnHeatmap.init();

