<nav id="acessible-nav" class="navbar navbar-default">
    <div class="acessible-block col-md-12 col-sm-12 col-xm-12">
        <ul>
            <li id="minus">
                <a href="">A <i class="fa fa-minus" aria-hidden="true"></i></a>
            </li>
            <li id="plus">
                <a href="">A <i class="fa fa-plus" aria-hidden="true"></i></a>
            </li>
            <li id="contraste">
                <span>Alto Contraste</span>
            </li>
            <li id="on">
                <a href=""><i class="fa fa-circle" aria-hidden="true"></i></a>
            </li>
            <li id="off">
                <a href=""><i class="fa fa-circle-thin" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</nav>
<div id="home-content">
    <nav id="nav-right">
        <ul>
            <li>
                <a href="" data-toggle="modal" data-target="#modal" data-whatever="Entrar">Entrar</a>
            </li>
            <li>
                <a href="" data-toggle="modal" data-target="#modal" data-whatever="Criar conta">Criar conta</a>
            </li>
        </ul>   
    </nav>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">ENTRE</a></li>
              <li class="breadcrumb-item active">CADASTRE-SE</li>
            </ol>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>
    <div id="center-itens" class="col-md-6 col-md-offset-3">
        <div>
            <img src="/img/logo-1.png">
        </div>
        <div>
            <button class="btn btn-default">Comece agora</button>
            <p>
                No estude você mesmo, você se prepara para o vestibular oua estuda conteúdos variados de forma gratuita e eficiente, experimente!
            </p>
        </div>
    </div>
    <div id="inclined-div">
        <div id="tablet-img">
            <img src="a">
        </div>
    </div>
</div>

    
<script type="text/javascript">
    function getTemplate(templateUrl, element){
        $.get(templateUrl, function(data, status){
            $(element).append(data);
        });
    }
    $('#modal').on('show.bs.modal', function (event) {
        $(".modal-body").empty();
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data('whatever'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('.modal-body input').val(recipient);

        if(recipient === "Entrar"){
            getTemplate("/Users/login", ".modal-body");
        }
        else{
            getTemplate("/Users/add", ".modal-body");
        }
    });
</script>