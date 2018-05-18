<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Nova {0}', ['Página']), ['action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('Listar {0}', ['Usuários']), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo {0}', ['Usuário']), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="paginas col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Páginas</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('title',['label' =>'Título']) ?></th>
                                        <th><?= $this->Paginator->sort('url') ?></th>
                                        <th><?= $this->Paginator->sort('active',['label' =>'Ativo']) ?></th>
                                        <th><?= $this->Paginator->sort('created',['label' =>'Criado']) ?></th>
                                        <th><?= $this->Paginator->sort('modified',['label' =>'Modificado']) ?></th>
                                        <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($paginas as $pagina): ?>
                        <tr>
                                        <td><?= $this->Number->format($pagina->id) ?></td>
                                        <td><?= h($pagina->title) ?></td>
                                        <td><?= h($pagina->url) ?></td>
                                        <td><?= $pagina->active ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>'?></td>
                                        <td><?= h($pagina->created) ?></td>
                                        <td><?= h($pagina->modified) ?></td>
                                        <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__('Visualizar'), ['action' => 'view',  $pagina->id .'-'. $pagina->url], ['class'=>'btn btn-default btn-xs']) ?>
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pagina->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pagina->id], ['confirm' => __('Você tem certeza que gostaria de apagar # {0}?', $pagina->id), 'class'=>'btn btn-danger btn-xs']) ?>
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