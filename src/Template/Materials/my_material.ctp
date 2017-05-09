<div class="content">
    <div class="row">
        <?php if($role == 'colaborador'): ?>
            <div class="col-md-3 material col-sm-6 col-xs-8 col-md-offset-0 col-sm-offset-0 col-xs-offset-2">
                <div class="material-content">
                    <h1><a id="addNew" class="fa fa-plus-square" href="/materials/add"></a></h1>
                </div>
            </div>
        <?php endif; ?>
        <?php foreach ($materials as $material): ?>
            <a title="<?= $material->title ?>" href="/materials/view/<?= $material->id ?>">
                <?php foreach ($material->pages as $page): ?>
                    <div class="col-md-3 material col-sm-6 col-xs-8 col-md-offset-0 col-sm-offset-0 col-xs-offset-2">
                        <div class="material-content mouseOver">
                            <!-- <h1 class="hidden"><?= $material->title ?></h1> -->
                            <h1>
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
