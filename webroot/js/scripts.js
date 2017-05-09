$(document).ready(function(){
	$(".material-content").css({"height": ($('.material-content').width() - 20) + "px"});
	$(".material-content").children("h1").each(function() {
		$(this).css("margin-top", ($(".material").height() / 2) - $(this).height());
	});

	$(window).resize(function(){
		$(".material-content").css("height", ($('.material-content').width() - 20) + "px");
		$(".material-content").children("h1").each(function() {
			$(this).css("margin-top", ($(".material").height() / 2) - $(this).height());
		});
	});

	$(".material-content").on("mouseover", function(){
		$(this).toggleClass("material-content-mouseOver");
	});
	$(".material-content").on("mouseout", function(){
		$(this).toggleClass("material-content-mouseOver");
	});
});