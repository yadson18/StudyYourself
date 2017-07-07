$(document).ready(function(){
	var template;

	function addNewCategory(){
		$("#addCategory").on("click", function(){
			if(
	       		$("input[name=category]").val() != "" && 
	       		!findExpression($("input[name=category]").val(), /[!@#$%&*|\\\/{}'|_£¢¬:;,.=+§.<>`'~^?]/igm)
	       	){
		        $.post("/materials/addCategory", 
					{
						'name': $("input[name=category]").val(),
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
				$("input[name=category]").focus();
			}
		});
	}

    $('#modal').on('show.bs.modal', function(event){
    	var clickedLink;

        clickedLink = $(event.relatedTarget).data('whatever');
        if(clickedLink === "Entrar"){
        	template = "login";

        	disableLink($(".breadcrumb .entrar"));
        	enableLink($(".breadcrumb .registrar"));
			showModal("/Users/login", event);
        }
        else if(clickedLink === "Criar conta"){
        	template = "registro";

        	disableLink($(".breadcrumb .registrar"));
        	enableLink($(".breadcrumb .entrar"));
        	showModal("/Users/add", event);
        }
        else if(clickedLink === "addNew"){
        	var button, recipient, modal, options;

	    	$(".modal-body").empty();
        	options = $("#select-category")[0];
	    	button = $(event.relatedTarget);
			recipient = button.data('whatever');

			modal = $("#modal");
			modal.find('.modal-body input').val(recipient);


			if($("#box") && ($("#select-category")[0].innerText !== "Cadastre uma categoria")){
	            $(".modal-body").append(
		            "<div id='box'>" +
			           	"<input type='text' name='category' aria-label='Digite o nome da categoria' class='form-control input-lg' placeholder='Digite o nome da categoria' required>" +
			           	"<select name='parent_id' class='form-control input-lg'>" + 
			           		"<option value=''>Não contém sub categoria</option>" +
			           		options.innerHTML + 
			           	"</select>" +
			           	"<button id='addCategory' class='form-control input-lg btn btn-success'>Cadastrar categoria</button>" +
			        "</div>"
	            );
	        }
	        else{
	            $(".modal-body").append(
		            "<div id='box'>" +
			           	"<input type='text' name='category' aria-label='Digite o nome da categoria' class='form-control input-lg' placeholder='Digite o nome da categoria' required>" +
			           	"<select name='parent_id' class='form-control input-lg'>" + 
			           		"<option value=''>Não contém sub categoria</option>" +
			           	"</select>" +
			           	"<button id='addCategory' class='form-control input-lg btn btn-success'>Cadastrar categoria</button>" +
			        "</div>"
	            );
	        }

	        addNewCategory();
	    }
    });	

	$("#modal ul.breadcrumb li a").on("click", function(event){
		if($(this).text() === "ENTRE"){
			if(template === "login"){
				event.preventDefault();
			}
			else{	
				template = "login";
		        
		        disableLink($(".breadcrumb .entrar"));
        		enableLink($(".breadcrumb .registrar"));
		        showModal("/Users/login", event);
			}
		}
		else{
			if(template === "registro"){
				event.preventDefault();
			}
			else{
				template = "registro";
		        
		        disableLink($(".breadcrumb .registrar"));
        		enableLink($(".breadcrumb .entrar"));
		        showModal("/Users/add", event);
			}
		}
	});

	$(".material-content").on("mouseover", function(){
		$(this).toggleClass("material-content-mouseOver");
	});
	$(".material-content").on("mouseout", function(){
		$(this).toggleClass("material-content-mouseOver");
	});

	function enableLink(element){
    	element.removeClass("disabled");
    }

    function disableLink(element){
    	element.addClass("disabled");
    }

    function showModal(ajaxSrc, event){
    	var button, recipient, modal;

    	$(".modal-body").empty();
    	button = $(event.relatedTarget);
		recipient = button.data('whatever');

		modal = $("#modal");
		modal.find('.modal-body input').val(recipient);

		getTemplate(ajaxSrc, ".modal-body");
    }

	function getTemplate(templateUrl, element){
        $.get(templateUrl, function(data, status){
            $(element).append(data);
        });
    }

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
});