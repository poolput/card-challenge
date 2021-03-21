var fnBranchGroup = {
	
	base_url : $('#base_url').val(),
	ref_id : 0,
	addOwner : function(){
	    $('.add-owner').off('click').on('click',function(event){
	    	event.preventDefault();
	    	
	    	var owner_id = $(this).data('id');
	    	var url = fnBranchGroup.base_url +'/branch-group/get-group-block';
	    	var params = {
	    			type: 1,
					level: $(this).data('level'),
					parent_id: $(this).data('parent-id')
	    	    }
	    	$.post(url, params, function(response){
	    		$('#'+ owner_id).after(response);
	    		fnBranchGroup.init();
	    	});
	    });
	},
	addChild : function(){
	    $('.add-child').off('click').on('click',function(event){
	    	event.preventDefault();
	    	
	    	var child_id = $(this).data('id');
	    	var url = fnBranchGroup.base_url +'/branch-group/get-group-block';
	    	var params = {
					type: 2,
					level: $(this).data('level'),
					parent_id: child_id
	    	    }
	    	$.post(url, params, function(response){
	    		$('#'+ child_id).append(response);
	    		fnBranchGroup.init();
	    	});
	    });
	},
	deleteOwner : function(){
	    $('.delete-owner').off('click').on('click',function(event){
	    	event.preventDefault();
	    	
	    	var child_id = $(this).data('id');
	    	$('#'+ child_id).remove();
	    	$('.'+ child_id).remove();
	    	fnBranchGroup.init();
	    });
	},
	addBranch : function(){
	    $('.add-branch').off('click').on('click',function(event){
	    	event.preventDefault();
	    	
	    	
			fnBranchGroup.ref_id = $(this).data('ref-id');
			fnBranchGroup.group_id = $(this).data('id');
			
			$('.camera-group-modal input').each(function(){
    	  		$(this).prop('checked', false);
    		});
			
	    	$('#add-branch-modal').on('shown.bs.modal', function (event) {
		    	var text = $('#input-'+ fnBranchGroup.ref_id).val();
		    	$('.group-name-selected').html(text);
	    	});

	    	fnBranchGroup.init();
	    });
	},
 
	setBranchToGroup : function(){
	    $('.save-branch').off('click').on('click',function(event){
	    	event.preventDefault();
	    	
	    	$('#add-branch-modal').modal('hide');
			
  			var branch_id = '';
  			var branch_name = '';
			var html = '';
			$('.branch').each(function(){
	  			var checked = $(this).is(':checked');
	  			if(checked == true){
		  			var branch_id = $(this).val();
		  			var branch_name = $(this).data('value');
		  			
	  				html =  '<div class="menu-item-bar bar-child-1 menu-item-branch" id="branch-'+branch_id+'" data-branch-id="'+branch_id+'">'+
        	  				'	<div class="menu-item-handle menu-item-value ui-sortable-handle">'+
        	  				'		<input type="hidden" value="'+fnBranchGroup.group_id+'" name="group_branch['+branch_id+']">'+
            				'		<span class="item-title"><span class="menu-item-title">'+branch_name+'</span> '+
            				'		<span class="item-controls">'+
							'			<span class="item-order">'+
							'				<a href="javascript;" data-id="'+branch_id+'" data-level="0" class="bar-item delete-branch" aria-label="Move up" title="Insert this level"><i class="fa fa-minus-square-o"></i></a>'+  
							'			</span>'+
							'		</span>'+
            				'	</div>'+
            				'</div>';
	  				$('#'+fnBranchGroup.group_id).append(html);
	  				var html_camera_group = '';
	  				var camera_group_id = '';
		  			var camera_group_name = '';
	  				$('.branch-'+branch_id).each(function(){
		  				camera_group_id = $(this).val();
			  			camera_group_name = $(this).data('value');
	  					html_camera_group =  '<div class="menu-item-bar bar-select-child menu-item-branch" id="camera_group_-'+camera_group_id+'" data-id="'+camera_group_id+'">'+
	    	  				'	<div class="menu-item-handle menu-item-value ui-sortable-handle">'+
	    	  				'		<input type="hidden" value="'+fnBranchGroup.group_id+'" name="group_branch['+branch_id+'][camera_group]['+camera_group_id+']">'+
	        				'		<span class="item-title"><span class="menu-item-title">'+camera_group_name+'</span> '+
	        				'		<span class="item-controls">'+
							'			<span class="item-order">'+
							'				<a href="javascript;" data-id="'+camera_group_id+'" data-level="0" class="bar-item delete-branch" aria-label="Move up" title="Insert this level"><i class="fa fa-minus-square-o"></i></a>'+  
							'			</span>'+
							'		</span>'+
	        				'	</div>'+
	        				'</div>';
	  						$('#'+fnBranchGroup.group_id).append(html_camera_group);
	  				});
			  	}
    		});
			var html = '';
 			
	    	fnBranchGroup.init();
	    });
	},
	deleteBranch : function(){
	    $('.delete-branch').off('click').on('click',function(event){
	    	event.preventDefault();
	    	
			var branch_id = $(this).data('id');
			$('#branch-'+ branch_id).remove();
 			
	    	fnBranchGroup.init();
	    });
	},	
 
	init : function(){
		fnBranchGroup.addOwner();
		fnBranchGroup.addChild();
		fnBranchGroup.deleteOwner();
		fnBranchGroup.setBranchToGroup();
		fnBranchGroup.deleteBranch();
		fnBranchGroup.addBranch();
	}
}

fnBranchGroup.init();