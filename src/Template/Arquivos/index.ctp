<?= $this->Html->script(['_script.js']); ?>
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
                        <?= $this->Html->link(__('Novo {0}', ['Arquivo']), ['action' => 'add']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('Listar {0}', ['Categorias']), ['controller' => 'Categorias', 'action' => 'index']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('Nova {0}', ['Categoria']), ['controller' => 'Categorias', 'action' => 'add']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('Listar {0}', ['Tags']), ['controller' => 'Tags', 'action' => 'index']) ?>
                    </li>
                    <li>
                        <?= $this->Html->link(__('Nova {0}', ['Tag']), ['controller' => 'Tags', 'action' => 'add']) ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="arquivos col-md-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Arquivos</h3>
                </div>
                <div class="table-responsive">
                    <div class="box-body">
                        <table class="table table-striped table-hover" style=" width=100%">
                            <thead>
                                <tr>
                                    <th>
                                        <?= $this->Paginator->sort('id') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('categoria_id') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('titulo') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('autor') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('ativo') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('arquivo_tipo') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('arquivo_caminho', ['label'=>'URL']) ?>
                                    </th>
                                    <th class="actions">
                                        <?= __('Ações') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($arquivos as $arquivo): ?>
                                <tr>
                                    <td>
                                        <?= $this->Number->format($arquivo->id) ?>
                                    </td>
                                    <td>
                                        <?= $arquivo->has('categoria') ? $this->Html->link($arquivo->categoria->descricao, ['controller' => 'Categorias', 'action' => 'view', $arquivo->categoria->id]) : '' ?>
                                    </td>
                                    <td>
                                        <?= h($arquivo->titulo) ?>
                                    </td>
                                    <td>
                                        <?= h($arquivo->autor) ?>
                                    </td>
                                    <td>
                                        <?= ($arquivo->ativo == 1) ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>'?>
                                    </td>
                                    <td>
                                        <?= ($arquivo->arquivo_tipo) ?>
                                    </td>
                                    <td id="caminho<?= $arquivo->id?>">
                                        <?= ('/' . $arquivo->arquivo_caminho) ?>
                                    </td>
                                    <td class="actions" style="white-space:nowrap">
                                        <button class="btn btn-xs btn-basic" onclick='copyText("caminho<?= $arquivo->id?>")'>Copiar</button>
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $arquivo->id], ['class'=>'btn btn-default btn-xs']) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arquivo->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
