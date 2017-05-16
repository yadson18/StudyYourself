<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="content">
<!-- <?php debug($categories); ?> -->
    <h1 class="title"><?= __('Adicionar Conteúdo') ?></h1>
	<div class="col-md-5 col-md-offset-2 title-categorie">
		<input aria-label="Digite o título do conteúdo" placeholder="Digite o título do conteúdo" id="input-title" class="form-control input-lg" type="text" disabled="disabled">
	</div>
	<div class="col-md-3 title-categorie">
		<select class="btn btn-default dropdown-toggle form-control input-lg" id="select-category" disabled="disabled">
	    	<option>Action</option>
	      	<option>Another action</option>
	      	<option>Something else here</option>
	      	<option>Separated link</option>
	    </select>
	</div>
    <div class="row col-md-8 col-md-offset-2 editor-row">
	    <div id="editor">
	        <div data-editable data-name="content" id="content-editor"></div>
	    </div>
    </div>
</div>
