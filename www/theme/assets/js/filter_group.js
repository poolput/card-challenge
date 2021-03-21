
var fnGroup = {
	base_url: $('#base_url').val(),
	default_branch: '1',
	default_group: '1',
	default_host: $('#base_url').val(),
	isSearchGroup: function(){
		$('#criteria_search_group').keyup(function(){
			var keyword = $(this).val().toLowerCase();
			var group_id = '';
			var group_name = '';
			var is_match = '';
			var string = new RegExp(keyword);
			$('.item-branch-group').each(function(){
				group_id = $(this).data('id');
				group_name = $(this).data('value').toLowerCase();
				is_match = string.test(group_name);
				$('.item-branch-group-'+ group_id).hide();
				if(is_match){
					$('.item-branch-group-'+ group_id).show();
				}
			});
		});
	},
	      
	selectCameraGroup : function(){
	    $('.check-group').off('click').on('click', function(e) {
	    	var checked = $(this).is(':checked');
	    	
	  		if(checked == false){
			    	$(this).closest('.item-branch-group').find('.check-group').each(function(){
		    			$(this).prop('checked', false);
			    	});
			    	$(this).closest('.item-branch-group').find('.check-camera-group').each(function(){
		    			$(this).prop('checked', false);
			    	});
	  		}else if(checked == true){
			    	$(this).closest('.item-branch-group').find('.check-group').each(function(){
		    			$(this).prop('checked', true);
			    	});
			    	$(this).closest('.item-branch-group').find('.check-camera-group').each(function(){
		    			$(this).prop('checked', true);
			    	});
			}
	  		fnGroup.init();
	    });
	},
	init : function(){
		fnGroup.isSearchGroup();
		fnGroup.selectCameraGroup();
	}
}

fnGroup.init();

