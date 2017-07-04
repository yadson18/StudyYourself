<?= $this->Form->create($user, ['class' => 'text-center']) ?>
    <fieldset>
        <?= $this->Flash->render() ?>
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
            <button type="submit" class="btn btn-success btn-lg btn-block">Registrar-se</button>
            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Fechar</button>
        </div>
    </div>
<?= $this->Form->end() ?>