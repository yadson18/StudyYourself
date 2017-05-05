<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('sandbox.css') ?>
    <?= $this->Html->css('content-tools.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('styles.css') ?>

    <?= $this->Html->script('jquery-3.1.1.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php if($this->templatePath != 'Users'): ?>
        <nav class="navbar navbar-default" data-topbar role="navigation">
            <div>
                <div id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/materials/">Home</a>
                        </li>
                        <li>
                            <a href="#">Categorias</a>
                        </li>
                        <li>
                            <a href="#">Favoritos</a>
                        </li>
                        <?php if($role == 'colaborador'): ?>
                            <li>
                                <a href="/materials/myMaterial">Minhas Aulas</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="input-group">
                            <input type="search" class="form-control" aria-label="Faça sua busca aqui" placeholder="Faça sua busca aqui">
                            <div class="input-group-btn">
                                <button type="submit" class="fa fa-search btn btn-default" aria-hidden="true">
                                </button>
                            </div>
                        </div>
                        <a class="fa fa-sign-out btn btn-default" aria-hidden="true" href="/users/logout"></a>
                    </form>
                </div>
            </div>
        </nav>
        <?= $this->Flash->render() ?>
    <?php endif; ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->Html->script('content-tools.js') ?>
    <?= $this->Html->script('sandbox.js') ?>
    <?= $this->Html->script('scripts.js') ?>
    <footer>
    </footer>
</body>
</html>
