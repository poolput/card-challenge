
var fnCriteriaDateComparison = {
	base_url: $('#base_url').val(),
	default_branch: '1',
	default_group: '1',
	default_host: $('#base_url').val(),
	isSetGroupDate: function(){

		$("input[name=option_group_date]").change(function(){
			$('.compare-date-selected').find('input').each(function(){
		  		$(this).prop('checked', false);
			});
			value = $(this).val();
			if(value == 1){
				$('.compare-type-date').show();
				$('.compare-type-week').hide();
				$('.compare-type-month').hide();
				$('.compare-type-quarter').hide();
				$('.compare-type-year').hide();
				$('.compare-type-date').find('input ').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}else if(value == 2){
				$('.compare-type-date').hide();
				$('.compare-type-week').show();
				$('.compare-type-month').hide();
				$('.compare-type-quarter').hide();
				$('.compare-type-year').hide();
				$('.compare-type-week').find('input').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}else if(value == 3){
				$('.compare-type-date').hide();
				$('.compare-type-week').hide();
				$('.compare-type-month').show();
				$('.compare-type-quarter').hide();
				$('.compare-type-year').hide();
				$('.compare-type-month').find('input').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}else if(value == 4){
				$('.compare-type-date').hide();
				$('.compare-type-week').hide();
				$('.compare-type-month').hide();
				$('.compare-type-quarter').show();
				$('.compare-type-year').hide();
				$('.compare-type-quarter').find('input').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}else if(value == 5){
				$('.compare-type-date').hide();
				$('.compare-type-week').hide();
				$('.compare-type-month').hide();
				$('.compare-type-quarter').hide();
				$('.compare-type-year').show();
				$('.compare-type-year').find('input').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}
			
			fnCriteriaDateComparison.isSetCompareDate();
		});
		
	},
	isSetCompareDate: function(){
		$('.set-comparison').off('click').on('click', function(e) {
			e.preventDefault();
			
			var type = $(this).data('type');
			var html = '';
			$('.compare-date-selected').find('input').each(function(){
    	  		$(this).prop('checked', false);
    		});
			if(type==1){
				var date = $('#option_date_start').val();
				html = '<span class="row col-md-12" id="date-'+ date +'">'+
							'<input checked type="checkbox" name="option_compare_date[]" value="'+ date +'"> &nbsp; '+ date +' &nbsp;<i class="fa fa-minus remove-compare-date" data-id="date-'+ date +'"></i>'+
						'</span>';
				var exits = false;
				$('.compare-type-date').find('input').each(function(){
					var val_selected = $(this).val();
					if(val_selected == date){
						exits = true;
					}
	    	  		$(this).prop('checked', true);
	    		});
				if(exits == false){
					$('.compare-date-selected > .compare-type-date').append(html);
				}
			}else if (type==2){
				var year = $('#option_week_year_start').val();
				var week = $('#option_week_start').val();
				var week_text = $('#option_week_start option:selected').text();
				html = '<span class="row col-md-12" id="date-'+  year +'-'+ week  +'">'+
							'<input checked type="checkbox" name="option_compare_date[]" value="'+  year +'-'+ week  +'"> &nbsp; '+ year +' '+ week_text +' &nbsp;<i class="fa fa-minus remove-compare-date" data-id="date-'+  year +'-'+ week  +'"></i>'+
						'</span>';
				var exits = false;
				$('.compare-type-week').find('input').each(function(){
					var val_selected = $(this).val();
					if(val_selected == year+'-'+week){
						exits = true;
					}
	    	  		$(this).prop('checked', true);
	    		});
				if(exits == false){
					$('.compare-date-selected > .compare-type-week').append(html);
				}
			}else if (type==3){
				var year = $('#option_month_year_start').val();
				var month = $('#option_month_start').val();
				var month_text = $('#option_month_start option:selected').text();
				html = '<span class="row col-md-12" id="date-'+  year +'-'+ month  +'">'+
							'<input checked type="checkbox" name="option_compare_date[]" value="'+  year +'-'+ month  +'"> &nbsp; '+ year +' '+ month_text +' &nbsp;<i class="fa fa-minus remove-compare-date" data-id="date-'+  year +'-'+ month  +'"></i>'+
						'</span>';
				var exits = false;
				$('.compare-type-month').find('input').each(function(){
					var val_selected = $(this).val();
					if(val_selected == year+'-'+month){
						exits = true;
					}
	    	  		$(this).prop('checked', true);
	    		});
				if(exits == false){
					$('.compare-date-selected > .compare-type-month').append(html);
				}
			}else if (type==4){
				var year = $('#option_quarter_year_start').val();
				var quarter = $('#option_quarter_start').val();
				var quarter_text = $('#option_quarter_start option:selected').text();
				html = '<span class="row col-md-12" id="date-'+  year +'-'+ quarter  +'">'+
							'<input checked type="checkbox" name="option_compare_date[]" value="'+  year +'-'+ quarter  +'"> &nbsp; '+ year +' '+ quarter_text +' &nbsp;<i class="fa fa-minus remove-compare-date" data-id="date-'+  year +'-'+ quarter  +'"></i>'+
						'</span>';
				var exits = false;
				$('.compare-type-quarter').find('input').each(function(){
					var val_selected = $(this).val();
					if(val_selected == year+'-'+quarter){
						exits = true;
					}
	    	  		$(this).prop('checked', true);
	    		});
				if(exits == false){
					$('.compare-date-selected > .compare-type-quarter').append(html);
				}
			}else if (type==5){
				var year = $('#option_year_start').val();
				html = '<span class="row col-md-12"  id="date-'+ year +'">'+
							'<input checked type="checkbox" name="option_compare_date[]" value="'+  year +'"> &nbsp; '+ year +' &nbsp;<i class="fa fa-minus remove-compare-date" data-id="date-'+  year +'"></i>'+
						'</span>';
				var exits = false;
				$('.compare-type-year').find('input').each(function(){
					var val_selected = $(this).val();
					if(val_selected == year){
						exits = true;
					}
	    	  		$(this).prop('checked', true);
	    		});
				if(exits == false){
					$('.compare-date-selected > .compare-type-year').append(html);
				}
			}
			fnCriteriaDateComparison.isRemoveCompare();
		});
	},
	isRemoveCompare: function(){
		$('.remove-compare-date').off('click').on('click', function(e) {
			var id = $(this).data('id');
			$('#'+id).remove();
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
	  		fnCriteriaDateComparison.init();
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
	initDate: function(){
		$("#option_date_start").datepicker({
		    format: 'yyyy-mm-dd',
		    autoclose: true,
			orientation: 'auto bottom'
		});
	},
	init : function(){
		fnCriteriaDateComparison.isChangeMonthYear();
		fnCriteriaDateComparison.isChangeQuarterYear();
		fnCriteriaDateComparison.selectDay();
		fnCriteriaDateComparison.isSetGroupDate();
		fnCriteriaDateComparison.isSetCompareDate();
		fnCriteriaDateComparison.isRemoveCompare();
		fnCriteriaDateComparison.isChangeWeekYearStart();
		fnCriteriaDateComparison.initDate();
	}
}

fnCriteriaDateComparison.init();

