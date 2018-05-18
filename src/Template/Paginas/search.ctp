<div class="box box-primary">
<div class="box-header with-border">
                <h3 class="box-title">Resultados</h3>
            </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($paginas as $pagina): ?>
                <h2 class="post-title">
                    <?=$this->Html->link(__($pagina->title), ['action' => 'view', $pagina->id . '-' . $pagina->url]) ?>
                </h2>
                <hr>
                <hr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
