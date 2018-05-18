<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Editar {0}', ['Subcategoria']), ['action' => 'edit', $subcategoria->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar {0}', ['Subcategoria']), ['action' => 'delete', $subcategoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategoria->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar {0}', ['Subcategorias']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Subcategoria']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('Listar {0}', ['Categorias']), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('NovoNew {0}', ['Categoria']), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('Listar {0}', ['Paginas']), ['controller' => 'Paginas', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('NovoNew {0}', ['Pagina']), ['controller' => 'Paginas', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="subcategorias col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($subcategoria->descricao) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Descricao</th>
                        <td><?= h($subcategoria->descricao) ?></td>
                    </tr>
                                                        <tr>
                        <th>Categoria</th>
                        <td><?= $subcategoria->has('categoria') ? $this->Html->link($subcategoria->categoria->descricao, ['controller' => 'Categorias', 'action' => 'view', $subcategoria->categoria->id]) : '' ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($subcategoria->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Created</th>
                        <td><?= h($subcategoria->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modified</th>
                        <td><?= h($subcategoria->modified) ?></tr>
                    </tr>
                                                                    <tr>
                        <th>Ativo</th>
                        <td><?= $subcategoria->ativo ? __('Yes') : __('No'); ?></td>
                     </tr>
                                        </table>
                                        <div class="related">
                    <?php if (!empty($subcategoria->paginas)): ?>
                    <h4><?= __('Related {0}', ['Paginas']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Url</th>
                                        <th>Body</th>
                                        <th>Active</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th>Subcategoria Id</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subcategoria->paginas as $paginas): ?>
                        <tr>
                            <td><?= h($paginas->id) ?></td>
                            <td><?= h($paginas->title) ?></td>
                            <td><?= h($paginas->url) ?></td>
                            <td><?= h($paginas->body) ?></td>
                            <td><?= h($paginas->active) ?></td>
                            <td><?= h($paginas->created) ?></td>
                            <td><?= h($paginas->modified) ?></td>
                            <td><?= h($paginas->subcategoria_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Paginas', 'action' => 'view', $paginas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Paginas', 'action' => 'edit', $paginas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paginas', 'action' => 'delete', $paginas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paginas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
                </div>
    </div>
</div>
