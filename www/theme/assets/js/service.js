var fnService = {
	ele_newgame : document.getElementsByClassName("btn-new-game"),
	ele_card : document.getElementsByClassName("card-item-number"),

	setNewGame: function() {
		
		console.log(fnService.ele_card);
	},	
	init : function(){
		alert();
 		fnService.setNewGame();
	}
}

fnService.init();