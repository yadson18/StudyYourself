$(document).ready(function(){
	$(".content-size").css({"height": ($('.material-content').width() - 20) + "px"});

	$(window).resize(function(){
		$(".content-size").css("height", ($('.material-content').width() - 20) + "px");
	});

	$(".material-content").on("mouseover", function(){
		$(this).toggleClass("material-content-mouseOver");
	});
	$(".material-content").on("mouseout", function(){
		$(this).toggleClass("material-content-mouseOver");
	});

	$(".ct-ignition__button--edit").on("click", function(){
		$("#input-title, #select-category").removeAttr("disabled");
		$("#input-title").focus();
		$(".ct-ignition__button--confirm, .ct-ignition__button--cancel").removeClass("hide-action-button");
		$(this).addClass("hide-action-button");
	});
	$(".ct-ignition__button--confirm, .ct-ignition__button--cancel").on("click", function(){
		$("#input-title, #select-category").attr("disabled", "disabled");
		$(".ct-ignition__button--confirm, .ct-ignition__button--cancel").addClass("hide-action-button");
		$(".ct-ignition__button--edit").removeClass("hide-action-button");
	});
});