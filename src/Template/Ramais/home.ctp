
<?= $this->Html->css("buscarcss"); ?>
<?= $this->Html->script("buscartablejs"); ?>

<?= $this->Html->css("topocss"); ?>
<?= $this->Html->script("topojs"); ?>
<!-- Botão Topo -->
<button onclick="topFunction()" id="myTopo" title="Volte ao topo">Topo</button>



<div class="row">
    <div class="ramais col-md-12 center-block" style="float:none;">
        <div class="box box-primary">
            <div class="box-header with-border">                     
                <div class="row">
                    <div class="col-lg-12">   
                        <div class="box-title col-lg-12">
                            <nav class="navbav">                   
                            <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-question-circle fa-fw"></i> <i class="fa fa-caret-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-messages">
                                        <li>
                                            <a href="http://sistemas2.nhu.ufms.br/base/" target="_blank">
                                                <div><strong>Alterar Lista</strong></div>
                                                <div>Para incluir ou remover um ramal entre em contato com a SGPTI.</div>
                                            </a>
                                        </li>                      
                                    </ul>
                                </li>            
                            </ul>         
                        </nav>    

                        <h3>
                            <strong>
                                <i class="fa fa-phone"></i> Lista de Ramais
                            </strong>
                        </h3>
                        </div>
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
                    <!-- id="myTable" usado para realizar a pesquisa --> 
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



