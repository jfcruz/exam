$(document).ready(function(){
	//otma el tamaño del tab que contiene el video y se lo asigna al iframe de yotube
	var hightVideo = $(".tab-1").height();
	$(".video").height(hightVideo);
	//muestra la vista 360
	$(document).on("click", ".btn_view_360", function(){
		$(".pop_up").css({"display":"block"});
		$("body").addClass("no_scroll");
	});
	//esconde la vista 360
	$(document).on("click", ".close_pop_up", function(){
		$(".pop_up").css({"display":"none"});
		$("body").removeClass("no_scroll");
	});
});