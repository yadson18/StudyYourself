$(document).ready(function(){
	var Windows;

	// Define o tamanho inicial da janela de pré-vizualização dos materiais, baseado na largura da janela.
	$(".content-size").css({"height": ($('.material-content').width() - 20) + "px"});

	// Muda o tamanho da janela de pré-vizualização dos materiais, quando a largura da janela mudar.
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
		$("#input-title").removeAttr("disabled");
		if($("#select-category").val()){
			$("#select-category").removeAttr("disabled");
		}
		$("#input-title").focus();
		$(".ct-ignition__button--confirm, .ct-ignition__button--cancel").removeClass("hide-action-button");
		$(this).addClass("hide-action-button");
	});
	$(".ct-ignition__button--confirm, .ct-ignition__button--cancel").on("click", function(){
		$("#input-title, #select-category").attr("disabled", "disabled");
		$(".ct-ignition__button--confirm, .ct-ignition__button--cancel").addClass("hide-action-button");
		$(".ct-ignition__button--edit").removeClass("hide-action-button");
	});

	function updateOptions(select_id, options){
		$(select_id).empty();
		$(select_id).append(options);
	}

    function getCategories(src){
    	var options = "";

    	$.get(src, 
            function(data, status){ 
            	if(data && (status === "success")){
            		var json = JSON.parse(data);
            		
            		for(var i = 0; i < json.length; i++){
               			options += "<option value=" + json[i]['id'] + ">" + json[i]['name'] + "</option> "; 
            		}
            		
            		updateOptions("#select-category", options);
            	}
            	return false;
        	}
        );
    }

    /*Windows = {
    	'create': function(element_id, content){
    		console.log(element_id + "  " + content);
    	},
    	'close': function(){

    	}
    };
    Windows.create("1", "Yadson");
    */

	$(".new-category").on("click", function(){
		var options = $("#select-category")[0];

		if($("#box") && ($("#select-category")[0].innerText !== "Cadastre uma categoria")){
            $("#box").remove();
            $("#pop-up").append(
	            "<div id='box'>" +
		           	"<a href='#' id='close'>X</a>" +
		           	"<input type='text' name='name' aria-label='Digite o nome da categoria' class='form-control input-lg' placeholder='Digite o nome da categoria' required>" +
		           	"<select name='parent_id' class='form-control input-lg'>" + 
		           		"<option value=''>Não contém sub categoria</option>" +
		           		options.innerHTML + 
		           	"</select>" +
		           	"<button id='addCategory' class='form-control input-lg'>Cadastrar categoria</button>" +
		        "</div>"
            );
        }
        else{
        	$("#box").remove();
            $("#pop-up").append(
	            "<div id='box'>" +
		           	"<a href='#' id='close'>X</a>" +
		           	"<input type='text' name='name' aria-label='Digite o nome da categoria' class='form-control input-lg' placeholder='Digite o nome da categoria' required>" +
		           	"<select name='parent_id' class='form-control input-lg'>" + 
		           		"<option value=''>Não contém sub categoria</option>" +
		           	"</select>" +
		           	"<button id='addCategory' class='form-control input-lg'>Cadastrar categoria</button>" +
		        "</div>"
            );
        }

        $("#close").on("click", function(){
            $("#box").remove();
        });

        $("#addCategory").on("click", function(){
        	if($("input[name=name]").val() != ""){
				$.post("/materials/addCategory", 
					{
						'name': $("input[name=name]").val(),
						'parent_id': $("select[name=parent_id]").val()
					},
			        function(data, status){ 
			           	if (status === 'success') {
			           		$("#addCategory").attr("disabled", "disabled");
			           		setTimeout(function(){
			           			getCategories("/materials/getCategories");
			           			alert("Categoria cadastrada com secesso.");
			           		}, 2000);
			           	}
			        }
			 	);       		
			}
			else{
				$("input[name=name]").focus()
			}
		});
	});
});