<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Editar {0}', ['Menu']), ['action' => 'edit', $menu->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar {0}', ['Menu']), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar {0}', ['Menus']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Menu']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Superiores']), ['controller' => 'Superiores', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Superior']), ['controller' => 'Superiores', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Grupos']), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Grupo']), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="menus col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($menu->nome) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Nome</th>
                        <td><?= h($menu->nome) ?></td>
                    </tr>
                                                        <tr>
                        <th>Ícone</th>
                        <td><?= h($menu->icone) ?></td>
                    </tr>
                                                        <tr>
                        <th>Home</th>
                        <td><?= h($menu->home) ?></td>
                    </tr>
                                                        <tr>
                        <th>Superior</th>
                        <td><?= $menu->has('superiore') ? $this->Html->link($menu->superiore->id, ['controller' => 'Superiores', 'action' => 'view', $menu->superiore->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($menu->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Criado</th>
                        <td><?= h($menu->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modificado</th>
                        <td><?= h($menu->modified) ?></tr>
                    </tr>
                                                                    <tr>
                        <th>Ativo</th>
                        <td><?= $menu->ativo ? __('Sim') : __('Não'); ?></td>
                     </tr>

                                <tr>
                        <th>Público</th>
                        <td><?= $menu->publico ? __('Sim') : __('Não'); ?></td>
                     </tr>
                                        </table>
                                        <div class="related">
                    <?php if (!empty($menu->grupos)): ?>
                    <h4><?= __('Grupos') ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Descricão</th>
                                        <th>Atividade</th>
                                        <th>Sigla</th>
                                        <th>Ativo</th>
                                        <th>Criado</th>
                                        <th>Modificado</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($menu->grupos as $grupos): ?>
                        <tr>
                            <td><?= h($grupos->id) ?></td>
                            <td><?= h($grupos->descricao) ?></td>
                            <td><?= h($grupos->atividade) ?></td>
                            <td><?= h($grupos->sigla) ?></td>
                            <td><?= h($grupos->ativo) ?></td>
                            <td><?= h($grupos->created) ?></td>
                            <td><?= h($grupos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Grupos', 'action' => 'view', $grupos->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Grupos', 'action' => 'edit', $grupos->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Grupos', 'action' => 'delete', $grupos->id], ['confirm' => __('Você tem certeza que quer deletar # {0}?', $grupos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
