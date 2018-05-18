<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= __('Actions') ?>
                </h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Grupos']), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Editar {0}', ['Grupo']), ['action' => 'edit', $grupo->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Deletar {0}', ['Grupo']), ['action' => 'delete', $grupo->id], ['confirm' => __('Você tem certeza que deseja apagar # {0}?', $grupo->id)]) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Grupo']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Controlador']), ['controller' => 'Controladores', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Nova {0}', ['Categoria']), ['controller' => 'Categorias', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Usuário']), ['controller' => 'Usuarios', 'action' => 'add']) ?>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Menu']), ['controller' => 'Menus', 'action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="grupos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($grupo->sigla) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Descrição</th>
                        <td>
                            <?= h($grupo->descricao) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Atividade</th>
                        <td>
                            <?= h($grupo->atividade) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Sigla</th>
                        <td>
                            <?= h($grupo->sigla) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Criado</th>
                        <td>
                            <?= h($grupo->created) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Modificado</th>
                        <td>
                            <?= h($grupo->modified) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Ativo</th>
                        <td>
                            <?= $grupo->ativo ? __('Yes') : __('No'); ?>
                        </td>
                    </tr>
                </table>               
                
                <div class="related">
                    <?php if (!empty($grupo->usuarios)): ?>
                    <h4>
                        <?= __('Usuários') ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Ativo</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($grupo->usuarios as $usuarios): ?>
                        <tr>
                            <td>
                                <?= h($usuarios->id) ?>
                            </td>
                            <td>
                                <?= h($usuarios->nome) ?>
                            </td>
                            <td>
                                <?= $grupo->ativo ? __('Yes') : __('No'); ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
