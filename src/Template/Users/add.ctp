<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            echo $this->Form->control(' ', [
                'type' => 'text',
                'name' => 'username',
                'aria-label' => 'Digite seu usuário',
                'placeholder' => 'Digite seu usuário',
                'required'
            ]);
            echo $this->Form->control(' ', [
                'type' => 'password',
                'name' => 'password', 
                'aria-label' => 'Digite sua senha',
                'placeholder' => 'Digite sua senha', 
                'required'
            ]);
            echo $this->Form->control(' ', [
                'type' => 'text',
                'name' => 'completeName',
                'aria-label' => 'Digite seu nome completo',
                'placeholder' => 'Digite seu nome completo',
                'required'
            ]);
            echo $this->Form->control(' ', [
                'type' => 'email',
                'name' => 'email',
                'aria-label' => 'Digite seu email',
                'placeholder' => 'Digite seu email',
                'required'
            ]);
            echo $this->Form->control(' ', [
                'name' => 'role',
                'options' => ['colaborador' => 'Colaborador', 'aluno' => 'Aluno'],
                'aria-label' => 'Escolha qual o seu tipo de perfil'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link(__('Login'), ['action' => 'login']) ?>
</div>