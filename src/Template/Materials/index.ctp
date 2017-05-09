<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="materials index large-9 medium-8 columns content">
    <h3><?= __('Destaques') ?></h3>
    <div class="row">
        <?php foreach ($materials as $material): ?>
            <a href="#">
                <?php foreach ($material->pages as $page): ?>
                    <div class="col-md-3 material">
                        <div class="material-content">
                            <h1><?= $material->title ?></h1>
                        </div>
                    </div>
                <?php endforeach; ?>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>