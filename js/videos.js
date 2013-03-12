//$(window).load(function () {
  refreshBoutonsMenus();
  bindBoutonsVote();
  //refreshBoutonsVote();
//});

function refreshBoutonsMenus(){
	$("#titreCategorieActive").html($("li.active a").html());
	$.getJSON('http://cinefips.bips-asso.fr/api/catVoted', function(data){
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

function bindBoutonsVote()
{
	$("a#connected").click(function(){alert("BigUp !\n y'a rien ici ^^\n SPIPS <3 CineFIPS !");});
	$(".thumbnail .vote .btn").click(function(){
		if(!$(this).hasClass("btn-unvote")){
			$.getJSON('http://cinefips.bips-asso.fr/api/vote/'+$(this).attr("_rb-id-cat")+'/'+$(this).attr("_rb-id-vid"), function(data){
				if(data.code != 1){
					alert(data.error);
					console.log(data);
				} else {
					refreshBoutonsMenus();
					$(".btn-unvote").css("display", "inline-block");
				}
			});
		} else {
			$.getJSON('http://cinefips.bips-asso.fr/api/unvote/'+$(this).attr("_rb-id-cat"), function(data){
				if(data.code != 1){
					alert(data.error);
					console.log(data);
				} else {
					refreshBoutonsMenus();
					$(".btn-unvote").css("display", "none");
				}
			});
		}
	});
}

function refreshBoutonsVote(){

	
}
