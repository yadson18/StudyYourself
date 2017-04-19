<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="materials form large-9 medium-8 columns content">
    <legend><?= __('Add Material') ?></legend>
    <?= $this->Form->create($material) ?>
    <div>
        <section class="content" id="editor">
            <div id="menu-editor"></div>
            <div data-editable data-name="content" id="content-editor">

            </div>
        </aside>
    </div>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
