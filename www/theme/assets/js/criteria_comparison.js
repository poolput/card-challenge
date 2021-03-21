
var fnCriteria = {
	base_url: $('#base_url').val(),
	default_branch: '1',
	default_group: '1',
	default_host: $('#base_url').val(),

	isGroupLeft: function(){
		$('.group-left').off('click').on('click', function(e) {
			var value = $(this).val();
			$('#group-header-left').val(value);
			 
			$('.item-location').hide();
			$('.item-group').hide();
			if(value == 1){
				$('.item-location').show();
			}else{
				$('.item-group').show();
			}
		});
	},
	isGroupRight: function(){
		$('.group-right').off('click').on('click', function(e) {
			var value = $(this).val();
			$('#group-header-right').val(value);
			$('.item-date').hide();
			$('.item-event').hide();
			if(value == 1){
				$('.item-date').show();
			}else{
				$('.item-event').show();
			}
		});
	},
	fnCriteriaToggle: function(){
	     $('#search-more').off('click').on('click', function(e) {
	         if ($('.popup-list-open .popup-list-wrapper').css('display') == 'none') {
	             $('.popup-list-open .popup-list-wrapper').css({
	                 display: 'block',
	                 left: 'auto',
	                 right: '0',
	                 opacity: '1'
	             });
	         } else {
	             $('.popup-list-wrapper').css({
                     display: 'none',
                     left: '-9999px',
                     opacity: '0'
                 });
	         }
	     });
	},
	fnHideAdvanceSearch: function(){
		$('.date-start, .date-end').off('click').on('click', function(e) {
		     $('.popup-list-wrapper').css({
	             display: 'none',
	             left: '-9999px',
	             opacity: '0'
	         });
		});
	},
	init : function(){
		fnCriteria.fnCriteriaToggle();
		fnCriteria.fnHideAdvanceSearch();
		fnCriteria.isGroupLeft();
		fnCriteria.isGroupRight();
	}
}

fnCriteria.init();

