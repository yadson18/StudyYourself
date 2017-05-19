<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="content">
	<h1 class="title"><?= __('Adicionar Conteúdo') ?></h1>
	<div id="pop-up" class="col-md-4 col-md-offset-4"></div>
	<div class="col-md-5 col-md-offset-2 title-categorie">
		<input aria-label="Digite o título do conteúdo" placeholder="Digite o título do conteúdo" id="input-title" class="form-control input-lg" type="text" disabled="disabled">
	</div>
	<div class="col-md-3 title-categorie">
		<select class="col-md-10 btn btn-default input-lg" id="select-category" disabled="disabled">
			<?php foreach ($categories as $category): ?>
	    		<option value=<?= $category->id ?> > <?= $category->name ?> </option>
	    	<?php endforeach; ?>
	    </select>
	    <a href="#" class="fa fa-plus-square col-md-2 new-category" id="addNew"></a>
	</div>
	<div class="row col-md-8 col-md-offset-2 editor-row">
	    <div id="editor">
	        <div data-editable data-name="content" id="content-editor"></div>
	    </div>
    </div>
</div>