<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="content">
    <h2 class="title"><?= h($material->title) ?></h2>
    <div class="row">
        <!-- <h4><?= h($material->created) ?></h4>
        <h4><?= h($material->modified) ?></h4>
         --><?php if (!empty($material->pages)): ?>
            <?php foreach ($material->pages as $page): ?>
                <div><?= $page->data ?></div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div>
            <p>Autor: <?= $material->user->completeName ?></p>
            <p>Criação: <?= $material->created?></p>
        </div>
    </div>
</div>
