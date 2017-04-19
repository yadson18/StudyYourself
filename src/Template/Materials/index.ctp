<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="materials index large-9 medium-8 columns content">
    <h3><?= __('Destaques') ?></h3>
    <?= $this->Html->link(__(''), [
            'controller' => 'Materials', 
            'action' => 'add'
        ],[
            'class' => 'fa fa-plus-square',
            'aria-hidden' => 'true'
        ]) 
    ?>
    <div class="paginator">
        <!-- <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p> -->
    </div>
</div>
