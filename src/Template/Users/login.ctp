<?= $this->Flash->render('auth') ?>
<?= $this->Form->create(' ', ['class' => 'text-center']) ?>
  <fieldset>
    <?= $this->Flash->render() ?>
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
      <button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
      <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Fechar</button>
    </div>
  </div>
<?= $this->Form->end() ?>