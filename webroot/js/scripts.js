$(".material-content").css("height", ($('.material-content').width() - 20) + "px");

$(".material-content").children("h1").each(function() {
	if(($(".material-content").height() / 2) > $(this).height()){
		$(this).css("margin-top", ($(".material-content").height() / 2) - $(this).height());
	}
});

$(".material-content").on("mouseover", function(){
	$(this).toggleClass("material-content-mouseOver");
});
$(".material-content").on("mouseout", function(){
	$(this).toggleClass("material-content-mouseOver");
});