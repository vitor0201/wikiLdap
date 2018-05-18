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
                    <?= $this->Html->link(__('Editar {0}', ['Controlador']), ['action' => 'edit', $controladore->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Deletar {0}', ['Controlador']), ['action' => 'delete', $controladore->id], ['confirm' => __('Voce tem certeza que gostaria de excluir # {0}?', $controladore->id)]) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Controladores']), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Controlador']), ['action' => 'add']) ?>
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
    <div class="controladores col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($controladore->descricao) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Controlador</th>
                        <td>
                            <?= h($controladore->controller) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Ações</th>
                        <td>
                            <?= h($controladore->action) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <td>
                            <?= h($controladore->descricao) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Criado</th>
                        <td>
                            <?= h($controladore->created) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Modificado</th>
                        <td>
                            <?= h($controladore->modified) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Ativo</th>
                        <td>
                            <?= $controladore->ativo  ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>' ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Público</th>
                        <td>
                            <?= $controladore->publico ? '<span class="label label-info">ATIVADO</span>' : ''; ?>
                        </td>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($controladore->grupos)): ?>
                    <h4>
                        <?= __('Relacionado {0}', ['Grupos']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Descrição</th>
                            <th>Atividade</th>
                            <th>Sigla</th>
                            <th>Ativo</th>
                            <th>Criado</th>
                            <th>Modificado</th>
                            <th class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                        <?php foreach ($controladore->grupos as $grupos): ?>
                        <tr>
                            <td>
                                <?= h($grupos->id) ?>
                            </td>
                            <td>
                                <?= h($grupos->descricao) ?>
                            </td>
                            <td>
                                <?= h($grupos->atividade) ?>
                            </td>
                            <td>
                                <?= h($grupos->sigla) ?>
                            </td>
                            <td>
                                <?= h($grupos->ativo) ?>
                            </td>
                            <td>
                                <?= h($grupos->created) ?>
                            </td>
                            <td>
                                <?= h($grupos->modified) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Grupos', 'action' => 'view', $grupos->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Grupos', 'action' => 'edit', $grupos->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grupos', 'action' => 'delete', $grupos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
