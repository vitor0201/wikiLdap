
<?= $this->Html->css("buscarcss"); ?>
<?= $this->Html->css("topocss"); ?>
<?= $this->Html->script("buscartablejs"); ?>
<?= $this->Html->script("topojs"); ?>

<button onclick="topFunction()" id="myTopo" title="Volte ao topo">Topo</button>



<div class="row">
    <div class="ramais col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <!-- <h3 class="box-title">
                    Ramais
                </h3> -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="box-title">
                            <strong>Ramais</strong>
                        </h3>
                        <!-- /input-group -->
                        <input type="text" id="myInput" onkeyup="BuscarFunction()" placeholder="Buscar..." autofocus="true" >
                    </div>
                    <!-- /.col-lg-6 -->
                   
                   
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <div class="table-responsive">
                <div class="box-body">
                    <table class="table table-striped table-hover liveSearch" id="myTable">
                        <thead>
                            <tr>
                                <th>
                                    <?= $this->Paginator->sort('setor') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('ramal') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ramais as $ramai): ?>
                                <tr>
                                    <td>
                                        <?= h($ramai->setor) ?>
                                    </td>
                                    <td>
                                        <?= h($ramai->ramal) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



