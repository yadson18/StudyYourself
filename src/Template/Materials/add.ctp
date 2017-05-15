<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="content">
    <h1 class="title"><?= __('Adicionar Conteúdo') ?></h1>
    <input aria-label="Digite o título do conteúdo" placeholder="Digite o título do conteúdo" class="form-control input-lg" id="input-title" type="text" disabled="disabled">
    <div class="row col-md-8 col-md-offset-2 editor-row">
	    <div id="editor">
	        <div data-editable data-name="content" id="content-editor"></div>
	    </div>
    </div>
</div>
