<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Novo {0}', ['Parâmetro']), ['action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="parametros col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Parâmetros</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('descricao',['label' =>'Descrição']) ?></th>
                                        <th><?= $this->Paginator->sort('chave') ?></th>
                                        <th><?= $this->Paginator->sort('valor') ?></th>
                                        <th><?= $this->Paginator->sort('tipo') ?></th>
                                        <th><?= $this->Paginator->sort('ativo') ?></th>
                                        <th><?= $this->Paginator->sort('cache') ?></th>
                                        <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($parametros as $parametro): ?>
                        <tr>
                                        <td><?= $this->Number->format($parametro->id) ?></td>
                                        <td><?= h($parametro->descricao) ?></td>
                                        <td><?= h($parametro->chave) ?></td>
                                        <td><?= h(substr($parametro->valor, 0, 35)) ?></td>
                                        <td><?= h($parametro->tipo) ?></td>
                                        <td><?= $parametro->ativo ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>'?></td>
                                        <td><?= h($parametro->cache) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $parametro->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $parametro->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $parametro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametro->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
                    <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>