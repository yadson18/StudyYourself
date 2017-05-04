<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create(' ', ['class' => 'form-horizontal text-center container-fluid col-md-3']) ?>
  <fieldset>
      <legend><?= __('Registro de usuário') ?></legend>
      <div class="form-group">
        <div>
            <?= $this->Form->control(' ', [
                    'type' => 'text',
                    'name' => 'username',
                    'aria-label' => 'Digite seu usuário',
                    'required',
                    'placeholder' => 'Digite seu usuário',
                    'class' => 'form-control input-lg'
                ]);
            ?>
        </div>
      </div>
      <div class="form-group">
        <div>
            <?= $this->Form->control(' ', [
                    'type' => 'password',
                    'name' => 'password', 
                    'aria-label' => 'Digite sua senha',
                    'required',
                    'placeholder' => 'Digite sua senha', 
                    'class' => 'form-control input-lg'
                ]);
            ?>
        </div>
      </div>
  </fieldset>
  <div class="form-group">
      <div>
          <button type="submit" class="btn btn-default">Entrar</button>
      </div>
  </div>
  <?= $this->Html->link(__('Clique para registrar-se'), ['action' => 'add']) ?>
<?= $this->Form->end() ?>