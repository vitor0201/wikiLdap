<?= $this->Html->css("topocss"); ?>
<?= $this->Html->script("topojs"); ?>
<button onclick="topFunction()" id="myTopo" title="Volte ao topo">Topo</button>
<?= $this->Html->css("jquery.dataTables.min"); ?>
<?= $this->Html->script("jquery.dataTables.min"); ?>
<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Ações' ?>
                </h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Ramal']), ['action' => 'add']) ?>
                </li>
  
            </ul>
        </div>
    </div>
    <div class="ramais col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ramais</h3>
                  <!-- <input type="text" id="myInput" onkeyup="BuscarFunction()" placeholder="Buscar..." autofocus="true" > -->
            </div>
            <div class="table-responsive">
                <div class="box-body">
                    <!-- id="myTable" usado para realizar a pesquisa -->
                    <table class="table table-striped table-hover" id="myTable">
                        <thead>
                            <tr>
                          
                                <th>
                                    <?= $this->Paginator->sort('setor') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('ramal') ?>
                                </th>
                                <th class="actions">
                                    <?= __('Ações') ?>
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
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $ramai->id], ['class' => 'btn btn-default btn-xs']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $ramai->id], ['class' => 'btn btn-primary btn-xs']) ?>
                                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $ramai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ramai->id), 'class' => 'btn btn-danger btn-xs']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator text-center">
                        <ul class="pagination">
                            <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape' => false]) ?>
                            <?= $this->Paginator->numbers(['escape' => false]) ?>
                            <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape' => false]) ?>
                        </ul>
                        <p>
                            <?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script> 
    <!-- Script para carregar a pesquisa da tabela -->
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>