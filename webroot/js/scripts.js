$(document).ready(function(){
	$(".material-content").css({"height": ($('.material-content').width() - 20) + "px"});

	$(window).resize(function(){
		$(".material-content").css("height", ($('.material-content').width() - 20) + "px");
	});

	$(".mouseOver").on("mouseover", function(){
		$(this).toggleClass("material-content-mouseOver");
	});
	$(".mouseOver").on("mouseout", function(){
		$(this).toggleClass("material-content-mouseOver");
	});

	$(".ct-ignition__button--edit").on("click", function(){
		$(".ct-ignition__button--confirm").removeClass("hide-action-button");
		$(".ct-ignition__button--cancel").removeClass("hide-action-button");
		$(this).addClass("hide-action-button");
	});
	$(".ct-ignition__button--confirm, .ct-ignition__button--cancel").on("click", function(){
		$(".ct-ignition__button--confirm").addClass("hide-action-button");
		$(".ct-ignition__button--cancel").addClass("hide-action-button");
		$(".ct-ignition__button--edit").removeClass("hide-action-button");
	});
});