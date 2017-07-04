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
    <?php if($this->templatePath != 'Users' && $this->templatePath != 'Pages'): ?>
        <nav id="acessible-nav" class="navbar navbar-default">
            <div class="acessible-block col-md-4 col-sm-12 col-xm-12">
                <ul id="atalho-1-2">
                    <li>
                        <a href="">Ir para o conteúdo (ALT + 1)</a>
                    </li>
                    <li>
                        <a href="">Ir para o menu (ALT + 2)</a>
                    </li>
                </ul>
            </div>
            <div class="acessible-block col-md-4 col-sm-12 col-xm-12">
                <ul>
                    <li id="minus">
                        <a href="">A <i class="fa fa-minus" aria-hidden="true"></i></a>
                    </li>
                    <li id="plus">
                        <a href="">A <i class="fa fa-plus" aria-hidden="true"></i></a>
                    </li>
                    <li id="contraste">
                        <span>Alto Contraste</span>
                    </li>
                    <li id="on">
                        <a href=""><i class="fa fa-circle" aria-hidden="true"></i></a>
                    </li>
                    <li id="off">
                        <a href=""><i class="fa fa-circle-thin" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <div class="acessible-block col-md-4 col-sm-12 col-xm-12">
                <ul id="atalho-3">
                    <li>
                        <a href="">Acessibilidade deste site (ALT + 3)</a>
                    </li>
                    <li id="logout">
                        <a href="/users/logout">SAIR <i class="fa fa-sign-out"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-default" role="navigation" id="main-menu">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li><a href="/materials/">Início</a></li>
                <li class="border"><a href="#">Disciplinas</a></li>
                <?php if($role == 'colaborador'): ?>
                    <li>
                        <a href="/materials/myMaterial">Meus conteúdos</a>
                    </li>
                <?php endif; ?>
                <li id="search">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="..." placeholder="Faça sua busca aqui" id="input-search">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default" id="search-icon">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                      </div>
                    </div>
                </li>
                <li><a href="#">Quem somos</a></li>
                <li class="border"><a href="#">Acessibilidade</a></li>
                <li><a href="#">Minha conta</a></li>
              </ul>
            </div>
        </nav>
    <?php endif; ?>
    <?= $this->Flash->render() ?>
    <?php  if($this->templatePath != 'Users'): ?>
        <div class="content-page">
            <?= $this->fetch('content') ?>
        </div>
    <?php else: ?>
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    <?php endif; ?>
    <?= $this->Html->script('content-tools.js') ?>
    <?= $this->Html->script('sandbox.js') ?>
    <?= $this->Html->script('scripts.js') ?>
    <footer>
    </footer>
</body>
</html>