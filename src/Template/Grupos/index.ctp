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
                    <?= $this->Html->link(__('Novo {0}', ['Grupo']), ['action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="grupos col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Grupos </h3>
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
                                    <?= $this->Paginator->sort('atividade') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('sigla') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('ativo') ?>
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
                            <?php foreach ($grupos as $grupo): ?>
                            <tr>
                                <td>
                                    <?= $this->Number->format($grupo->id) ?>
                                </td>
                                <td>
                                    <?= h($grupo->descricao) ?>
                                </td>
                                <td>
                                    <?= h($grupo->atividade) ?>
                                </td>
                                <td>
                                    <?= h($grupo->sigla) ?>
                                </td>
                                <td>
                                    <?= h($grupo->ativo) ?>
                                </td>
                                <td>
                                    <?= h($grupo->created) ?>
                                </td>
                                <td>
                                    <?= h($grupo->modified) ?>
                                </td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $grupo->id], ['class'=>'btn btn-default btn-xs']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $grupo->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $grupo->id], ['confirm' => __('Você está certo que quer deletar # {0}?', $grupo->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
