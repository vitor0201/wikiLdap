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
                    <?= $this->Html->link(__('New {0}', ['Sistema']), ['action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="sistemas col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Sistemas </h3>
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
                                    <?= $this->Paginator->sort('nome') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('descricao',['label'=>'Descrição']) ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('url') ?>
                                <th class="actions">
                                    <?= __('Ações') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sistemas as $sistema): ?>
                            <tr>
                                <td>
                                    <?= $this->Number->format($sistema->id) ?>
                                </td>
                                <td>
                                    <?= h($sistema->nome) ?>
                                </td>
                                <td>
                                    <?= h($sistema->descricao) ?>
                                </td>
                                <td>
                                    <?= h($sistema->url) ?>
                                </td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $sistema->id], ['class'=>'btn btn-default btn-xs']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $sistema->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $sistema->id], ['confirm' => __('Você está certo que quer deletar # {0}?', $sistema->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
