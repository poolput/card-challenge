
var fnEvent = {
	base_url: $('#base_url').val(),
	default_branch: '1',
	default_group: '1',
	default_host: $('#base_url').val(),
	isSearchEvent: function(){
		$('#criteria_search_event').keyup(function(){
			var keyword = $(this).val().toLowerCase();
			var event_id = '';
			var event_id = '';
			var is_match = '';
			var string = new RegExp(keyword);
			$('.item-block-event').each(function(){
				event_id = $(this).data('id');
				event_name = $(this).data('value').toLowerCase();
				is_match = string.test(event_name);
				$('.item-event-'+ event_id).hide();
				if(is_match){
					$('.item-event-'+ event_id).show();
				}
			});
		});
	},	
	selectEvent : function(){
	    $('.event_all').off('click').on('click', function(e) {
 
	    	var checked = $(this).is(':checked');
	  		if(checked == false){
	  			$('.event').each(function(){
	    	  		$(this).prop('checked', false);
	    		});
	  		}else if(checked == true){
	  			$('.event').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}
	  		
	  		fnEvent.init();
	    });
	},	
	init : function(){
		fnEvent.isSearchEvent();
		fnEvent.selectEvent();
	}
}

fnEvent.init();

