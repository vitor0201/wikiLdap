<<<<<<< HEAD
<?= $this->Html->css("topocss"); ?>
<?= $this->Html->script("topojs"); ?>
<!-- Botão Topo -->
<button onclick="topFunction()" id="myTopo" title="Volte ao topo">Topo</button>


<?= $this->Html->css("jquery.dataTables.min"); ?>
<?= $this->Html->script("jquery.dataTables.min"); ?>

<div class="row">
    <div class="col-md-12 center-block" style="float:none;">
        <nav class="navbav">                   
            <ul class="nav navbar-top-links navbar-right" style="margin-right: 0px;">
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
        <h3><strong><i class="fa fa-phone"></i> Lista de Ramais</h3></strong>
    </div>

    <div class="ramais col-md-12 center-block" style="float:none;">
        <div class="box box-primary">
            <div class="box-header with-border">                     
              
            </div>
            <div class="table-responsive">
                <div class="box-body">
                    <!-- id="dataTables-example" usado para realizar a pesquisa, é possível configurar a qtde de itens --> 
                    <table class="table table-striped table-hover" id="myTable" data-page-length='25' >
                        <thead>
                            <tr>
                                <th>
                                    <?= $this->Paginator->sort('setor') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('ramal') ?>
=======


<div class="row">
    <div class="ramais col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <!-- <h3 class="box-title">
                    Ramais
                </h3> -->
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="box-title">
                            Ramais
                        </h3>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <?=$this->LiveSearch->searchForm(); ?>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <div class="table-responsive">
                <div class="box-body">
                    <table class="table table-striped table-hover liveSearch" id="example">
                        <thead>
                            <tr>
                                <th>
                                    <?=$this->Paginator->sort('setor') ?>
                                </th>
                                <th>
                                    <?=$this->Paginator->sort('ramal') ?>
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ramais as $ramai): ?>
<<<<<<< HEAD
                                <tr>
                                    <td>
                                        <?= h($ramai->setor) ?>
                                    </td>
                                    <td>
                                        <?= h($ramai->ramal) ?>
                                    </td>
                                </tr>
=======
                            <tr>
                                <td>
                                    <?=h($ramai->setor) ?>
                                </td>
                                <td>
                                    <?=h($ramai->ramal) ?>
                                </td>
                            </tr>
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD


<script> 
    <!-- Script para carregar a pesquisa da tabela -->
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
 
    
   
=======
<?=$this->Html->script("search"); ?>
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
