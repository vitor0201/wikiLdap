<<<<<<< HEAD
<?= $this->Html->css(['_wiki.css']); ?>
<div class="paginas col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-lg-9">
                    <h3 class="box-title">
                        WIKI
                    </h3>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <?= $this->LiveSearch->searchForm(); ?>
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="text-center col-md-10 col-sm-12">
                        <div class="row">
                            <!-- COMEÇO ELEMENTO DA WIKI-->
                            <?php foreach ($categorias as $categoria): ?>
                                <div class="col-md-6 col-sm-12 titulo">
                                    <!-- CABEÇALHO-->
                                    <div class="panel-heading" role="tab" id="heading<?= $categoria->id ?>">
                                        <p class="items">
                                            <a class="collapsed linkTitle " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $categoria->id ?>"
                                               aria-expanded="false" aria-controls="collapse<?= $categoria->id ?>">
                                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                <?= $categoria->descricao ?>
=======
<?=$this->Html->css(['_wiki.css']); ?>
        <div class="paginas col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="box-title">
                            WIKI
                        </h3>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <?=$this->LiveSearch->searchForm(); ?>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="text-center col-md-10 col-sm-12">
                            <div class="row">
                                <!-- COMEÇO ELEMENTO DA WIKI-->
                                <?php foreach ($categorias as $categoria): ?>
                                <div class="col-md-6 col-sm-12 titulo">
                                    <!-- CABEÇALHO-->
                                    <div class="panel-heading" role="tab" id="heading<?=$categoria->id ?>">
                                        <p class="items">
                                            <a class="collapsed linkTitle " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$categoria->id ?>"
                                                aria-expanded="false" aria-controls="collapse<?=$categoria->id ?>">
                                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                <?=$categoria->descricao ?>
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                                            </a>
                                        </p>
                                    </div>
                                    <!-- /CABEÇALHO -->
                                    <!-- CORPO -->
<<<<<<< HEAD
                                    <div id="collapse<?= $categoria->id ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading<?= $categoria->id ?>">
                                        <div class="panel-body">
                                            <ul class="list-unstyled list-group-flush liveSearch">
                                                <?php foreach ($categoria->subcategorias as $submenu): ?>
                                                    <!-- SUBMENU A-->
                                                    <div class="col-md-offset-1 col-md-11 col-sm-12 subtitulo">
                                                        <li>
                                                            <p class="text-left">
                                                                <a class="collapsed linkTitle toggleIcon" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSub<?= $submenu->id ?>"
                                                                   aria-expanded="false" aria-controls="collapseSub<?= $submenu->id ?>">
                                                                    <div class="items">
                                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                        <?= $submenu->descricao ?>
                                                                    </div>
                                                                </a>
                                                            </p>
                                                            <!-- SUBMENU B [LINKS]-->
                                                            <div id="collapseSub<?= $submenu->id ?>" class="panel-collapse collapse linkTitle " role="tabpanel" aria-labelledby="collapseSub<?= $submenu->id ?>">
                                                                <?php foreach ($submenu->paginas as $lista): ?>
                                                                    <div class="col-md-offset-1 col-md-11 col-sm-11 ">
                                                                        <p class="items">
                                                                            <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                            <?= $this->Html->link(h($lista->title), ['action' => 'view', $lista->id . '-' . $lista->url]) ?>
                                                                        </p>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                            <!-- /SUBMENU B-->
                                                        </li>
                                                    </div>
                                                    <!-- /SUBMENU A -->
=======
                                    <div id="collapse<?=$categoria->id ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading<?=$categoria->id ?>">
                                        <div class="panel-body">
                                            <ul class="list-unstyled list-group-flush liveSearch">
                                                <?php foreach ($categoria->subcategorias as $submenu): ?>
                                                <!-- SUBMENU A-->
                                                <div class="col-md-offset-1 col-md-11 col-sm-12 subtitulo">
                                                    <li>
                                                        <p class="text-left">
                                                            <a class="collapsed linkTitle toggleIcon" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSub<?=$submenu->id ?>"
                                                                aria-expanded="false" aria-controls="collapseSub<?=$submenu->id ?>">
                                                                <div class="items">
                                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                    <?=$submenu->descricao ?>
                                                                </div>
                                                            </a>
                                                        </p>
                                                        <!-- SUBMENU B [LINKS]-->
                                                        <div id="collapseSub<?=$submenu->id ?>" class="panel-collapse collapse linkTitle " role="tabpanel" aria-labelledby="collapseSub<?=$submenu->id ?>">
                                                            <?php foreach ($submenu->paginas as $lista): ?>
                                                            <div class="col-md-offset-1 col-md-11 col-sm-11 ">
                                                                <p class="items">
                                                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                    <?=$this->Html->link(h($lista->title), ['action' => 'view', $lista->id . '-' . $lista->url]) ?>
                                                                </p>
                                                            </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <!-- /SUBMENU B-->
                                                    </li>
                                                </div>
                                                <!-- /SUBMENU A -->
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <hr />
                                    <!-- /CORPO -->
                                </div>
<<<<<<< HEAD
                            <?php endforeach; ?>
                            <!-- FIM DO ELEMENTO DA WIKI-->
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <!-- CORPO DA SESSÃO PRIVADA-->
            <?php if (isset($categorias_privada)): ?>
=======
                                <?php endforeach; ?>
                                <!-- FIM DO ELEMENTO DA WIKI-->
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <!-- CORPO DA SESSÃO PRIVADA-->
                <?php if(isset($categorias_privada)):?>
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                <div class="panel-body ">
                    <div class="container-fluid">
                        <div class="text-center col-md-10 col-sm-12 ">
                            <div class="row">
                                <!-- COMEÇO ELEMENTO DA WIKI-->
                                <?php foreach ($categorias_privada as $categoria): ?>
<<<<<<< HEAD
                                    <div class="col-md-6 col-sm-12 titulo">
                                        <!-- CABEÇALHO-->
                                        <div class="panel-heading" role="tab" id="heading<?= $categoria->id ?>">
                                            <p class="items">
                                                <a class="collapsed linkTitle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $categoria->id ?>"
                                                   aria-expanded="false" aria-controls="collapse<?= $categoria->id ?>">
                                                    <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                    <?= $categoria->descricao ?>
                                                </a>
                                            </p>
                                        </div>
                                        <!-- /CABEÇALHO -->
                                        <!-- CORPO -->
                                        <div id="collapse<?= $categoria->id ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading<?= $categoria->id ?>">
                                            <div class="panel-body">
                                                <ul class="list-unstyled list-group-flush liveSearch">
                                                    <?php foreach ($categoria->subcategorias as $submenu): ?>
                                                        <!-- SUBMENU A-->
                                                        <div class="col-md-offset-1 col-md-11 col-sm-12 subtitulo">
                                                            <li>
                                                                <p class="text-left">
                                                                    <a class="collapsed linkTitle toggleIcon" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSub<?= $submenu->id ?>"
                                                                       aria-expanded="false" aria-controls="collapseSub<?= $submenu->id ?>">
                                                                        <div class="items">
                                                                            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                                                            <?= $submenu->descricao ?>
                                                                        </div>
                                                                    </a>
                                                                </p>
                                                                <!-- SUBMENU B [LINKS]-->
                                                                <div id="collapseSub<?= $submenu->id ?>" class="panel-collapse collapse linkTitle " role="tabpanel" aria-labelledby="collapseSub<?= $submenu->id ?>">
                                                                    <?php foreach ($submenu->paginas as $lista): ?>
                                                                        <div class="col-md-offset-1 col-md-11 col-sm-11 ">
                                                                            <p class="items">
                                                                                <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                                <?= $this->Html->link(h($lista->title), ['action' => 'view', $lista->id . '-' . $lista->url]) ?>
                                                                            </p>
                                                                        </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                                <!-- /SUBMENU B-->
                                                            </li>
                                                        </div>
                                                        <!-- /SUBMENU A -->
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>

                                        <hr />
                                        <!-- /CORPO -->
                                    </div>
=======
                                <div class="col-md-6 col-sm-12 titulo">
                                    <!-- CABEÇALHO-->
                                    <div class="panel-heading" role="tab" id="heading<?=$categoria->id ?>">
                                        <p class="items">
                                            <a class="collapsed linkTitle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$categoria->id ?>"
                                                aria-expanded="false" aria-controls="collapse<?=$categoria->id ?>">
                                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                                <?=$categoria->descricao ?>
                                            </a>
                                        </p>
                                    </div>
                                    <!-- /CABEÇALHO -->
                                    <!-- CORPO -->
                                    <div id="collapse<?=$categoria->id ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading<?=$categoria->id ?>">
                                        <div class="panel-body">
                                            <ul class="list-unstyled list-group-flush liveSearch">
                                                <?php foreach ($categoria->subcategorias as $submenu): ?>
                                                <!-- SUBMENU A-->
                                                <div class="col-md-offset-1 col-md-11 col-sm-12 subtitulo">
                                                    <li>
                                                        <p class="text-left">
                                                            <a class="collapsed linkTitle toggleIcon" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSub<?=$submenu->id ?>"
                                                                aria-expanded="false" aria-controls="collapseSub<?=$submenu->id ?>">
                                                                <div class="items">
                                                                    <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                                                                    <?=$submenu->descricao ?>
                                                                </div>
                                                            </a>
                                                        </p>
                                                        <!-- SUBMENU B [LINKS]-->
                                                        <div id="collapseSub<?=$submenu->id ?>" class="panel-collapse collapse linkTitle " role="tabpanel" aria-labelledby="collapseSub<?=$submenu->id ?>">
                                                            <?php foreach ($submenu->paginas as $lista): ?>
                                                            <div class="col-md-offset-1 col-md-11 col-sm-11 ">
                                                                <p class="items">
                                                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                                                    <?=$this->Html->link(h($lista->title), ['action' => 'view', $lista->id . '-' . $lista->url]) ?>
                                                                </p>
                                                            </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                        <!-- /SUBMENU B-->
                                                    </li>
                                                </div>
                                                <!-- /SUBMENU A -->
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <hr />
                                    <!-- /CORPO -->
                                </div>
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                                <?php endforeach; ?>
                                <!-- FIM DO ELEMENTO DA WIKI-->
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            <?php endif; ?>
        </div>
    </div>
    <?= $this->Html->script(['scripts', 'search']); ?>
=======
                <?php endif;?>
            </div>
        </div>
        <?=$this->Html->script(['scripts','search']); ?>
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b

