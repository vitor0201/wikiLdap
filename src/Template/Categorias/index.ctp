<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= __('Ações') ?>
                </h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li>
                    <?= $this->Html->link(__('Nova {0}', ['Categoria']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Subcategorias']), ['controller' => 'Subcategorias', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Grupos']), ['controller' => 'Grupos', 'action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="categorias col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Categorias </h3>
            </div>
            <div class="table-responsive">
                <div class="box-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <?= $this->Paginator->sort('id') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('descricao',['label'=>'Descrição']) ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('ativo') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('publico',['label'=>'Público']) ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('created',['label'=>'Criado']) ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('modified',['label'=>'Modificado']) ?>
                                </th>
                                <th class="actions">
                                    <?= __('Ações') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categorias as $categoria): ?>
                            <tr>
                                <td>
                                    <?= $this->Number->format($categoria->id) ?>
                                </td>
                                <td>
                                    <?= h($categoria->descricao) ?>
                                </td>
                                <td>
                                    <?= h($categoria->ativo)  ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>'?>
                                </td>
                                <td>
                                    <?= h($categoria->publico)  ? '<span class="label label-info">ATIVADO</span>' : '' ?>
                                </td>
                                <td>
                                    <?= h($categoria->created) ?>
                                </td>
                                <td>
                                    <?= h($categoria->modified) ?>
                                </td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $categoria->id], ['class'=>'btn btn-default btn-xs']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoria->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $categoria->id], ['confirm' => __('Você está certo que gostaria de apagar # {0}?', $categoria->id), 'class'=>'btn btn-danger btn-xs']) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator text-center">
                        <ul class="pagination">
                            <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                                    <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) ?>
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
