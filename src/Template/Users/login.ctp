<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row verticalCenter">
  <?= $this->Flash->render('auth') ?>
  <?= $this->Form->create(' ', [
        'class' => 'login col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center'
      ]) 
  ?>
    <fieldset>
        <?= $this->Flash->render() ?>
        <legend><?= __('Login de usuário') ?></legend>
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
            <button type="submit" class="btn btn-default btn-lg btn-block">Entrar</button>
        </div>
    </div>
    <?= $this->Html->link(__('Clique para registrar-se'), ['action' => 'add']) ?>
  <?= $this->Form->end() ?>
</div>