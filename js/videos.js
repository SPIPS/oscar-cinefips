//$(window).load(function () {
  refreshBoutonsMenus();
  //refreshBoutonsVote();
//});

function refreshBoutonsMenus(){
	$.getJSON('http://www.rbeuque74.fr/others/polytech/spips/oscar-cinefips/api/catVoted', function(data){
		if(data != null && data.code == 1){
			$(".rb-navig li i").removeClass("icon-ok").addClass("icon-exclamation-sign");
			$.each(data.data, function(key, value){
				$("#cat-"+value.categorie+" i").removeClass("icon-exclamation-sign").addClass("icon-ok");
				if($("#cat-"+value.categorie).hasClass("active")){
					$(".thumbnail .vote .btn").attr("disabled", "disabled").addClass("disabled");
				}
			});
			//<i class="rb-icon pull-left icon-exclamation-sign"></i>
			//.each(function(){
			//	$(this).find("i").$(this).attr("_rb-id")
			//});
		}
	});
	

}

function refreshBoutonsVote(){

	
}