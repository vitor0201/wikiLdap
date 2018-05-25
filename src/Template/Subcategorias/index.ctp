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
                        <?= $this->Html->link(__('Nova {0}', ['Subcategoria']), ['action' => 'add']) ?>
                    </li>
                                            <li>
                            <?= $this->Html->link(__('Listar {0}', ['Categorias']), ['controller' => 'Categorias', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Novo {0}', ['Categoria']), ['controller' => 'Categorias', 'action' => 'add']) ?>
                        </li>
                                                <li>
                            <?= $this->Html->link(__('Listar {0}', ['Páginas']), ['controller' => 'Paginas', 'action' => 'index']) ?>
                        </li>
                        <li>
                            <?= $this->Html->link(__('Nova {0}', ['Página']), ['controller' => 'Paginas', 'action' => 'add']) ?>
                        </li>
                                        </ul>
            </div>
        </div>
        <div class="subcategorias col-md-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Subcategorias                    </h3>
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
                                            <?= $this->Paginator->sort('descricao',['label'=>'Descrição']) ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('ativo') ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('created',['label'=>'Criado']) ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('modified',['label'=>'Modificado']) ?>
                                        </th>
                                                                                <th>
                                            <?= $this->Paginator->sort('categorias_id') ?>
                                        </th>
                                                                                    <th class="actions">
                                                <?= __('Ações') ?>
                                            </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($subcategorias as $subcategoria): ?>
                                <tr>
                                                                                    <td>
                                                    <?= $this->Number->format($subcategoria->id) ?>
                                                </td>
                                                                                            <td>
                                                <?= h($subcategoria->descricao) ?>
                                            </td>
                                                                                        <td>
                                                <?= h($subcategoria->ativo) ?>
                                            </td>
                                                                                        <td>
                                                <?= h($subcategoria->created) ?>
                                            </td>
                                                                                        <td>
                                                <?= h($subcategoria->modified) ?>
                                            </td>
                                                                                    <td>
                                            <?= $subcategoria->has('categoria') ? $this->Html->link($subcategoria->categoria->descricao, ['controller' => 'Categorias', 'action' => 'view', $subcategoria->categoria->id]) : '' ?>
                                        </td>
                                                                                            <td class="actions" style="white-space:nowrap">
                                                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $subcategoria->id], ['class'=>'btn btn-default btn-xs']) ?>
                                                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $subcategoria->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $subcategoria->id], ['confirm' => __('Você está certo que quer deletar # {0}?', $subcategoria->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
