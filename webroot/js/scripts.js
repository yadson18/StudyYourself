$(document).ready(function(){
	/*console.log($("nav"));

	for(var domElement in $("nav").childNodes){
		console.log(domElement.childNodes);
		domElement.childNodes.attr("tabindex", "1");
	}*/
	$("ul.ct-ignition").attr("tabindex", "1");
	var index = 2;
	var elements = $("ul.ct-ignition li");
	//console.log($("ul.ct-ignition").children());
		//var element = $("ul.ct-ignition li")[0]['className'];
	for(var i = 0; i < elements.length; i++){
		//$("ul.ct-ignition li")[0].attr("tabindex", "'" + i + "'");
		// /var result = ;
		console.log(elements[i]['className'].split(/\s+/)[1]);
		$("." + elements[i]['className'].split(/\s+/)[1]).attr("tabindex", index++);
		//console.log();
	}

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

	function updateOptionsCategories(select_id, options){
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
            		
            		updateOptionsCategories("#select-category", options);
            		$("#select-category").removeAttr("disabled");
            	}
            	return false;
        	}
        );
    }

    function findExpression(word, expression){
		if(word.search(expression) === 0){
			return true;
		}
		return false;
	}

	$(".new-category").on("click", function(){
		var options = $("#select-category")[0];

		if($("#box") && ($("#select-category")[0].innerText !== "Cadastre uma categoria")){
            $("#box").remove();
            $("#pop-up").append(
	            "<div id='box'>" +
		           	"<a href='#' class='fa fa-times-circle' aria-hidden='true' id='close'></a>" +
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
		           	"<a href='#' class='fa fa-times-circle' aria-hidden='true' id='close'></a>" +
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
        	if(
        		$("input[name=name]").val() != "" && 
        		!findExpression($("input[name=name]").val(), /[!@#$%&*|\\\/{}'|_£¢¬:;,.=+§.<>`'~^?]/igm)
        	){
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