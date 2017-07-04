<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div>
    <div id="banner-destaques">
        <h1>Estude online de forma fácil</h1>
    </div>
    <div id="float-div-options" class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
        <button class="btn btn-primary">Mais Avaliados</button>
        <button class="btn btn-primary">Categorias</button>
    </div>
    <div id="destaques-content">
        <div class="col-md-8 col-md-offset-2" id="destaques-itens">
            <?php foreach ($materials as $i => $material): ?>
                <a title="<?= $material->title ?>" href="/materials/view/<?= $material->id ?>">
                    <?php foreach ($material->pages as $page): ?>
                        <div class="col-md-3 material col-sm-6 col-xs-8 col-md-offset-0 col-sm-offset-0 col-xs-offset-2">
                            <div class="material-content content-size">
                                <h1 class="material-title">
                                    <?php if(strlen($material->title) > 17): ?>
                                        <?= substr($material->title, 0, 17) . "..." ?>
                                    <?php else: ?>
                                        <?= $material->title ?>
                                    <?php endif; ?>
                                </h1>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- <h1 class="title"><?= __('Destaques') ?></h1>
    <div class="row h-100 w-100">
        <?php foreach ($materials as $i => $material): ?>
            <?php if($role == 'colaborador'): ?>
                <a title="<?= $material->title ?>" href="/materials/view/<?= $material->id ?>" tabindex="<?= ($i + 8) ?>">
            <?php else: ?>
                <a title="<?= $material->title ?>" href="/materials/view/<?= $material->id ?>" tabindex="<?= ($i + 7) ?>">
            <?php endif; ?>
                <?php foreach ($material->pages as $page): ?>
                    <div class="col-md-3 material col-sm-6 col-xs-8 col-md-offset-0 col-sm-offset-0 col-xs-offset-2">
                        <div class="material-content content-size">
                            <h1 class="material-title">
                                <?php if(strlen($material->title) > 17): ?>
                                    <?= substr($material->title, 0, 17) . "..." ?>
                                <?php else: ?>
                                    <?= $material->title ?>
                                <?php endif; ?>
                            </h1>
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
    </div> -->
</div>