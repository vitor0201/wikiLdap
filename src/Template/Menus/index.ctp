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
                        <?= $this->Html->link(__('Novo {0}', ['Menu']), ['action' => 'add']) ?>
                    </li>
                                            <li>
                            <?= $this->Html->link(__('Listar {0}', ['Superiores']), ['controller' => 'Superiores', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Novo {0}', ['Superior']), ['controller' => 'Superiores', 'action' => 'add']) ?>
                        </li>
                                                <li>
                            <?= $this->Html->link(__('Listar {0}', ['Grupos']), ['controller' => 'Grupos', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Novo {0}', ['Grupo']), ['controller' => 'Grupos', 'action' => 'add']) ?>
                        </li>
                                        </ul>
            </div>
        </div>
        <div class="menus col-md-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Menus                    </h3>
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
                                            <?= $this->Paginator->sort('ativo') ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('icone',['label' =>'Ícone']) ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('home') ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('submenu') ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('publico',['label' =>'Público']) ?>
                                        </th>
                                                                                    <th class="actions">
                                                <?= __('Ações') ?>
                                            </th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php foreach ($menus as $menu): ?>
                                <tr>
                                                                                    <td>
                                                    <?= $this->Number->format($menu->id) ?>
                                                </td>
                                                                                            <td>
                                                <?= h($menu->nome) ?>
                                            </td>
                                                                                        <td>
                                                <?= ($menu->ativo)? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>' ?>
                                            </td>
                                                                                        <td>
                                                <?= h($menu->icone) ?>
                                            </td>
                                                                                        <td>
                                                <?= h($menu->home) ?>
                                            </td>
                                                                                        <td>
                                                <?= ($menu->superiore['nome']) ?>
                                            </td>
                                                                                        <td>
                                                <?= ($menu->publico) ? '<span class="label label-info">ATIVADO</span>' : '' ?>
                                            </td>
                                                                                                <td class="actions" style="white-space:nowrap">
                                                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $menu->id], ['class'=>'btn btn-default btn-xs']) ?>
                                                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $menu->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $menu->id], ['confirm' => __('Você tem certeza que gostaria de deletar # {0}?', $menu->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
