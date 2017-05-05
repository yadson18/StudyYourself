<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row verticalCenter">
    <?= $this->Form->create($user, [
           'class' => 'register col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center'
        ]) 
    ?>
    <fieldset>
        <?= $this->Flash->render() ?>
        <legend><?= __('Registro de usuário') ?></legend>
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
                        'options' => ['text' => 'Selecione qual o seu tipo de perfil', 'colaborador' => 'Colaborador', 'aluno' => 'Aluno'],
                        'aria-label' => 'Escolha qual o seu tipo de perfil',
                        'class' => 'form-control input-lg btn-block'
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
    <?= $this->Html->link(__('clique para retornar ao login'), ['action' => 'login']) ?>
    <?= $this->Form->end() ?>
</div>