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
                    <?= $this->Html->link(__('Novo {0}', ['Superior']), ['action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="superiores col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Superiores </h3>
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
                                    <?= $this->Paginator->sort('icone',['label' =>'Ícone']) ?>
                                </th>
                                <th class="actions">
                                    <?= __('Ações') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($superiores as $superiore): ?>
                            <tr>
                                <td>
                                    <?= $this->Number->format($superiore->id) ?>
                                </td>
                                <td>
                                    <?= h($superiore->nome) ?>
                                </td>
                                <td>
                                    <?= h($superiore->icone) ?>
                                </td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $superiore->id], ['class'=>'btn btn-default btn-xs']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $superiore->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $superiore->id], ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $superiore->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
