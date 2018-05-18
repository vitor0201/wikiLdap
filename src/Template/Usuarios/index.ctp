<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Novo {0}', ['Usuário']), ['action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('Listar {0}', ['Grupos']), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo {0}', ['Grupo']), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', ['Paginas']), ['controller' => 'Paginas', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Nova {0}', ['Página']), ['controller' => 'Paginas', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="usuarios col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Usuários</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('nome') ?></th>
                                        <th><?= $this->Paginator->sort('ativo') ?></th>
                                        <th><?= $this->Paginator->sort('created',['label' =>'Criado']) ?></th>
                                        <th><?= $this->Paginator->sort('modified',['label' =>'Modificado']) ?></th>
                                        <th class="actions"><?= __('Actions',['label' =>'Ações']) ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                                        <td><?= $this->Number->format($usuario->id) ?></td>
                                        <td><?= h($usuario->nome) ?></td>
                                        <td><?= ($usuario->ativo ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>') ?></td>
                                        <td><?= h($usuario->created) ?></td>
                                        <td><?= h($usuario->modified) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $usuario->id], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $usuario->id], ['confirm' => __('Você tem certeza de gostaria de apagar # {0}?', $usuario->id), 'class'=>'btn btn-danger btn-xs']) ?>
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