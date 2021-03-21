
var fnLocation = {
	base_url: $('#base_url').val(),
	default_branch: '1',
	default_group: '1',
	default_host: $('#base_url').val(),
	isSearchLocation: function(){
		$('#criteria_search_location').keyup(function(){
			var keyword = $(this).val().toLowerCase();
			var branch_id = '';
			var branch_name = '';
			var is_match = '';
			var string = new RegExp(keyword);
			$('.item-branch').each(function(){
				branch_id = $(this).data('id');
				branch_name = $(this).data('value').toLowerCase();
				is_match = string.test(branch_name);
				$('.item-branch-'+ branch_id).hide();
				if(is_match){
					$('.item-branch-'+ branch_id).show();
				}
			});
		});
	},
	selectLocation : function(){
	    $('#option_location_branch').off('click').on('click', function(e) {
	    	var checked = $(this).is(':checked');
	  		if(checked == false){
	  			$('.province').each(function(){
	    	  		$(this).prop('checked', false);
	    		});
	  			$('.branch').each(function(){
	    	  		$(this).prop('checked', false);
	    		});
	  			$('.camera').each(function(){
	    	  		$(this).prop('checked', false);
	    		});
	  		}else if(checked == true){
	  			$('.province').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
	  			$('.branch').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
	  			$('.camera').each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}
	  		fnLocation.init();
	    });
	},
	selectProvince : function(){
	    $('.province').off('click').on('click', function(e) {
	    	var checked = $(this).is(':checked');
	    	var value = $(this).val();
	    	var branch = '';
	  		if(checked == false){
	  			$('.province-'+value).each(function(){
	    	  		$(this).prop('checked', false);
	    	  		branch = $(this).val();
	    	  		$('.branch-'+branch).each(function(){
		    	  		$(this).prop('checked', false);
		    		});
	    		});
	  		}else if(checked == true){
	  			$('.province-'+value).each(function(){
	    	  		$(this).prop('checked', true);
	    	  		branch = $(this).val();
	    	  		$('.branch-'+branch).each(function(){
		    	  		$(this).prop('checked', true);
		    		});
	    		});
			}
	  		fnLocation.init();
	    });
	},
	selectBranch : function(){
	    $('.branch').off('click').on('click', function(e) {
 
	    	var value = $(this).val();
	    	var checked = $(this).is(':checked');
	  		if(checked == false){
	  			$('.branch-'+value).each(function(){
	    	  		$(this).prop('checked', false);
	    		});
	  		}else if(checked == true){
		  		$('.branch-'+value).each(function(){
	    	  		$(this).prop('checked', true);
	    		});
			}
	  		
	    	var province = $(this).data('province-id');
	    	var valid = false;
	  		$('.'+ province).each(function(){
	  			var checked = $(this).is(':checked');
	  			if(checked == true){
	  				valid = true;
				}
    		});
	  		if(valid == false){
  				$('#'+province).prop('checked', false);
		  	}else if(valid == true){
		  		$('#'+province).prop('checked', true);
			}
	  		
	  		fnLocation.init();
	    });
	},	
	selectCamera: function(){
	    $('.camera').off('click').on('click', function(e) {
	  		
	    	var branch = $(this).data('branch-id');
	    	var valid = false;
	  		$('.'+ branch).each(function(){
	  			var checked = $(this).is(':checked');
	  			if(checked == true){
	  				valid = true;
				}
    		});
	  		if(valid == false){
  				$('#'+branch).prop('checked', false);
		  	}else if(valid == true){
		  		$('#'+branch).prop('checked', true);
			}
	  		
	  		fnLocation.init();
	    });
	},
	  
	init : function(){
		fnLocation.isSearchLocation();
		fnLocation.selectLocation();
		fnLocation.selectProvince();
		fnLocation.selectBranch();
		fnLocation.selectCamera();
	}
}

fnLocation.init();

