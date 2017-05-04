<div class="row">
    <?php if($role == 'colaborador'): ?>
        <div class="col-xs-4 col-md-2">
            <a id="addNew" class="fa fa-plus-square" href="/materials/add"></a>
        </div>
    <?php endif; ?>
    <!-- <?php foreach ($materials as $material): ?>
        <?php foreach ($material->pages as $page): ?>
            <div class="col-xs-4 col-md-2">
                <a href="#">
                    <h1><?= $material->title ?></h1>
                    <?= $page->data ?>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?> -->
</div>
