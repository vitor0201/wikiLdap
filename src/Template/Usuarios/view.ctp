<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Editar {0}', ['Usuário']), ['action' => 'edit', $usuario->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar {0}', ['Usuário']), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar {0}', ['Usuários']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Usuário']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('List {0}', ['Grupos']), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Grupo']), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('Listar {0}', ['Páginas']), ['controller' => 'Paginas', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Nova {0}', ['Pagina']), ['controller' => 'Paginas', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="usuarios col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($usuario->nome) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Nome</th>
                        <td><?= h($usuario->nome) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($usuario->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Criado</th>
                        <td><?= h($usuario->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modificado</th>
                        <td><?= h($usuario->modified) ?></tr>
                    </tr>
                                                                    <tr>
                        <th>Ativo</th>
                        <td><?= $usuario->ativo ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>'; ?></td>
                     </tr>
                                        </table>
                                        <div class="related">
                    <?php if (!empty($usuario->grupos)): ?>
                    <h4><?= __('Related {0}', ['Grupos']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Descricao</th>
                                        <th>Sigla</th>
                                        <th>Ativo</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuario->grupos as $grupos): ?>
                        <tr>
                            <td><?= h($grupos->id) ?></td>
                            <td><?= h($grupos->descricao) ?></td>
                            <td><?= h($grupos->sigla) ?></td>
                            <td><?= h($grupos->ativo) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Grupos', 'action' => 'view', $grupos->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Grupos', 'action' => 'edit', $grupos->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Grupos', 'action' => 'delete', $grupos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                        <div class="related">
                    <?php if (!empty($usuario->paginas)): ?>
                    <h4><?= __(['Páginas']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Título</th>
                                        <th>Url</th>
                                        <th>Criado</th>
                                        <th>Modificado</th>
                                        <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($usuario->paginas as $paginas): ?>
                        <tr>
                            <td><?= h($paginas->id) ?></td>
                            <td><?= h($paginas->title) ?></td>
                            <td><?= h($paginas->url) ?></td>
                            <td><?= h($paginas->created) ?></td>
                            <td><?= h($paginas->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Paginas', 'action' => 'view', $paginas->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Paginas', 'action' => 'edit', $paginas->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Paginas', 'action' => 'delete', $paginas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paginas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
