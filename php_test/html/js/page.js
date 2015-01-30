
$(function(){
	var winW = $(window).width();
	var winH = $(window).height();
	var registH = $(".pop_regist").height();
	$(".btn_join").click(function(){
		$(".mask").css({"width":winW,"height":winH}).fadeTo(300,0.5);
		$(".pop_regist").css("margin-top",(winH - registH) / 2).addClass("show").fadeIn();
	});
	$(".pop_close").click(function(){
		$(".mask").fadeOut();
		$(this).parent().removeClass("show").fadeOut();
	});
	$(window).resize(function(){
		 winW = $(window).width();
		 winH = $(window).height();
		if($(".pop_regist").hasClass("show")){
			$(".mask").css({"width":winW,"height":winH})
			$(".pop_regist").css("margin-top",(winH - registH) / 2);
		}
	});
	$(".btn_top").click(function(){
		$("html,body").animate({scrollTop:0},500);
	});
});
