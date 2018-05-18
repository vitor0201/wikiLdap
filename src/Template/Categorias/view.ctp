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
                    <?= $this->Html->link(__('Editar {0}', ['Categoria']), ['action' => 'edit', $categoria->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Deletar {0}', ['Categoria']), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Categorias']), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Categoria']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Arquivos']), ['controller' => 'Arquivos', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Subcategorias']), ['controller' => 'Subcategorias', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Grupos']), ['controller' => 'Grupos', 'action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="categorias col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($categoria->descricao) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Id</th>
                        <td>
                            <?= $this->Number->format($categoria->id) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Descrição</th>
                        <td>
                            <?= h($categoria->descricao) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Criado</th>
                        <td>
                            <?= h($categoria->created) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Modificado</th>
                        <td>
                            <?= h($categoria->modified) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Ativo</th>
                        <td>
                            <?= $categoria->ativo ? __('Sim') : __('Não'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Publico</th>
                        <td>
                            <?= $categoria->publico ? __('Sim') : __('Não'); ?>
                        </td>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($categoria->subcategorias)): ?>
                    <h4>
                        <?= __('{0} Related ', ['Subcategorias']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Descrição</th>
                            <th>Ativo</th>
                            <th class="actions">
                                <?= __('Ações') ?>
                            </th>
                        </tr>
                        <?php foreach ($categoria->subcategorias as $subcategorias): ?>
                        <tr>
                            <td>
                                <?= h($subcategorias->id) ?>
                            </td>
                            <td>
                                <?= h($subcategorias->descricao) ?>
                            </td>
                            <td>
                                <?= h($subcategorias->ativo) ?>
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Subcategorias', 'action' => 'view', $subcategorias->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subcategorias', 'action' => 'edit', $subcategorias->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subcategorias', 'action' => 'delete', $subcategorias->id], ['confirm' => __('Você tem certeza que gostaria de apagar # {0}?', $subcategorias->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                <div class="related">
                    <?php if (!empty($categoria->grupos)): ?>
                    <h4>
                        <?= __('{0} Relacionados ', ['Grupos']) ?>
                    </h4>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Id</th>
                            <th>Descrição</th>
                            <th>Atividade</th>
                            <th>Sigla</th>
                            <th class="actions">
                                <?= __('Ações') ?>
                            </th>
                        </tr>
                        <?php foreach ($categoria->grupos as $grupos): ?>
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
                            </td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Grupos', 'action' => 'view', $grupos->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Grupos', 'action' => 'edit', $grupos->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grupos', 'action' => 'delete', $grupos->id], ['confirm' => __('Você tem certeza que gostaria de apagar # {0}?', $grupos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
