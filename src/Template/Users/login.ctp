<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            echo $this->Form->control(' ', [
                'type' => 'text',
                'name' => 'username',
                'aria-label' => 'Digite seu usuário',
                'placeholder' => 'Digite seu usuário'
            ]);
            echo $this->Form->control(' ', [
                'type' => 'password',
                'name' => 'password', 
                'aria-label' => 'Digite sua senha',
                'placeholder' => 'Digite sua senha', 
                'role' => 'combobox'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Entrar')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link(__('Registrar-se'), ['action' => 'add']) ?>
</div>