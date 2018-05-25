<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Novo {0}', ['Formato']), ['action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="mimes col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Formatos</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('extensao',['label' =>'Extensão']) ?></th>
                                        <th><?= $this->Paginator->sort('mime') ?></th>
                                        <th><?= $this->Paginator->sort('ativo') ?></th>
                                        <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mimes as $mime): ?>
                        <tr>
                                        <td><?= $this->Number->format($mime->id) ?></td>
                                        <td><?= h($mime->extensao) ?></td>
                                        <td><?= h($mime->mime) ?></td>
                                        <td><?= ($mime->ativo ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>') ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $mime->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $mime->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $mime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mime->id), 'class'=>'btn btn-danger btn-xs']) ?>
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