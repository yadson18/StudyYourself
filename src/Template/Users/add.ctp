<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="">
<?= $this->Form->create($user, ['class' => 'form-horizontal text-center container-fluid']) ?>
<fieldset>
    <legend><?= __('Adicionar Usuário') ?></legend>
    <div class="form-group">
        <div>
            <?= $this->Form->control(' ', [
                    'type' => 'text',
                    'name' => 'username',
                    'aria-label' => 'Digite seu usuário',
                    'placeholder' => 'Digite seu usuário',
                    'required',
                    'class' => 'form-control input-lg'
                ])
            ?>
        </div>
    </div>
    <div class="form-group">
        <div>
            <?= $this->Form->control(' ', [
                    'type' => 'password',
                    'name' => 'password', 
                    'aria-label' => 'Digite sua senha',
                    'placeholder' => 'Digite sua senha', 
                    'required',
                    'class' => 'form-control input-lg'
                ])
            ?>
        </div>
    </div>
    <div class="form-group">
        <div>
            <?= $this->Form->control(' ', [
                    'type' => 'text',
                    'name' => 'completeName',
                    'aria-label' => 'Digite seu nome completo',
                    'placeholder' => 'Digite seu nome completo',
                    'required',
                    'class' => 'form-control input-lg'
                ])
            ?>
        </div>
    </div>
    <div class="form-group">
        <div>
            <?= $this->Form->control(' ', [
                    'type' => 'email',
                    'name' => 'email',
                    'aria-label' => 'Digite seu email',
                    'placeholder' => 'Digite seu email',
                    'required',
                    'class' => 'form-control input-lg'
                ])
            ?>
        </div>
    </div>
    <div class="form-group">
        <div>
            <?= $this->Form->control(' ', [
                    'name' => 'role',
                    'options' => ['colaborador' => 'Colaborador', 'aluno' => 'Aluno'],
                    'aria-label' => 'Escolha qual o seu tipo de perfil',
                    'class' => 'input-lg'
                ])
            ?>
        </div>
    </div>
</fieldset>
<div class="form-group">
    <div>
        <button type="submit" class="btn btn-default btn-lg btn-block">Registrar-se</button>
    </div>
</div>
<?= $this->Html->link(__('clique para retornar ao login'), ['action' => 'login', 'class' => 'sr-only sr-only-focusable']) ?>
<?= $this->Form->end() ?>
</div>