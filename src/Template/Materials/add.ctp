<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="content" id="editor-box">
    <div class="modal fade" id="modal" role="dialog" aria-labelledby="modalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4>Adicionar Categoria</h4>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>
	<div id="pop-up" class="col-md-4 col-md-offset-4"></div>
	<div class="col-md-5 col-md-offset-2 title-categorie">
		<input aria-label="Digite o título do conteúdo" placeholder="Digite o título do conteúdo" id="input-title" class="form-control input-lg" type="text" disabled="disabled">
	</div>
	<div class="input-group col-md-3 title-categorie">
        <select class="btn btn-default input-lg form-control" id="select-category" disabled="disabled">
			<?php if(!$categories): ?>
				<option value="">Cadastre uma categoria</option>
			<?php endif; ?>
			<?php foreach ($categories as $category): ?>
	    		<option value=<?= $category->id ?> > <?= $category->name ?> </option>
	    	<?php endforeach; ?>
	    </select>
        <div class="input-group-btn">
          <button type="button" class="btn btn-primary input-lg new-category" data-toggle="modal" data-target="#modal" data-whatever="addNew" id="addNew">
              <i class="fa fa-plus" aria-hidden="true"></i>
          </button>
        </div>
    </div>
	<div class="row col-md-8 col-md-offset-2 editor-row">
	    <div id="editor">
	        <div data-editable data-name="content" id="content-editor"></div>
	    </div>
    </div>
</div>