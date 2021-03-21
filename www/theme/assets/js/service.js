var fnService = {
	
	base_url : $('#base_url').val(),

	formatComma: function(string) {
		string = "" + string;
	    return string.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	},	
	getMaximumSelectValue: function(element_name){
	    var temp=0;
	    var currentValue, maxValue, value;
	    $('#'+element_name +' option').each(function(i,v){
	    	value = $(this).val();
	        currentValue = value;
	        maxValue = Math.max(temp, currentValue);
	        temp=maxValue;
	    });
	    return maxValue;
	},
	getLocation: function(){
 
		var params = $('#criteria-form').serialize();
		var url = fnService.base_url +'/get-location';
		$.post(url, params, function(response){
			if(response){
				var data = JSON.parse(response);
				$('.location-title').html(data.total);
		        $('.location-selected').html(data.location);
			}
		});
	},
	getPeriod: function(){
		var params = $('#criteria-form').serialize();
		var url = fnService.base_url +'/get-period';
		$.post(url, params, function(response){
			var data = JSON.parse(response);
	        var html = '<div class="row col-md-12"><span class="float-left"><b>Period :</b></span><span class="period-title">&nbsp; '+ data +'</span><div>';

	        $('.period-selected').html(html);
		});
	},
	getStaff: function(str, max){
		var params = $('#criteria-form').serialize();
		var url = fnService.base_url +'/get-summary-staff';
		$.post(url, params, function(response){
			var data = JSON.parse(response);
			if(data[0].total){
				$('.number-total-staff').html(fnService.formatComma(data[0].total));
			}
		});
	},
	zeroLead: function(str, max){
		str = str.toString();
  		return str.length < max ? fnService.zeroLead("0" + str, max) : str;
	}
}