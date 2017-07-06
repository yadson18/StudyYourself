<div class="content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="border: solid 1px">
            <div class="col-md-12 mais-avaliados-header">
                <h4>Mais avaliados</h4>
                <div>
                    <a href="/materials/add">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        <p>Adicionar conteúdo</p>
                    </a>
                </div>
            </div>
            <div class="col-md-12 content-box">
                <div class="col-md-7">
                    <?php foreach($materials as $key => $material): ?>
                        <?php if($key === 0): ?>
                            <a title="<?= $material->title ?>" href="/materials/view/<?= $material->id ?>">
                                <?php foreach ($material->pages as $page): ?>
                                    <div class="col-md-12 material col-sm-12 col-xs-12">
                                        <div class="material-content content-size">
                                            <!-- <h1 class="hidden"><?= $material->title ?></h1> -->
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
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-5">
                    <?php foreach($materials as $key => $material): ?>
                        <?php if($key > 0 || $key < 4): ?>
                            <a title="<?= $material->title ?>" href="/materials/view/<?= $material->id ?>">
                                <?php foreach ($material->pages as $page): ?>
                                    <div class="col-md-12 material col-sm-12 col-xs-12">
                                        <div class="material-content content-size">
                                            <!-- <h1 class="hidden"><?= $material->title ?></h1> -->
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
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
