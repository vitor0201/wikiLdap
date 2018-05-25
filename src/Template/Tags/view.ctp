<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Editar {0}', ['Tag']), ['action' => 'edit', $tag->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar {0}', ['Tag']), ['action' => 'delete', $tag->id], ['confirm' => __('Você tem certeza que gostaria de apagar # {0}?', $tag->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar {0}', ['Tags']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Nova {0}', ['Tag']), ['action' => 'add']) ?> </li>
                        <li><?= $this->Html->link(__('Listar {0}', ['Arquivos']), ['controller' => 'Arquivos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Arquivo']), ['controller' => 'Arquivos', 'action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="tags col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($tag->descricao) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Descrição</th>
                        <td><?= h($tag->descricao) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($tag->id) ?></td>
                    </tr>
                                                                    <tr>
                        <th>Criado</th>
                        <td><?= h($tag->created) ?></tr>
                    </tr>
                                <tr>
                        <th>Modificado</th>
                        <td><?= h($tag->modified) ?></tr>
                    </tr>
                                                                    <tr>
                        <th>Ativo</th>
                        <td><?= $tag->ativo ? __('Sim') : __('Não'); ?></td>
                     </tr>
                                        </table>
                                        <div class="related">
                    <!-- <?php if (!empty($tag->arquivos)): ?>
                    <h4><?= __('Related {0}', ['Arquivos']) ?></h4>
                    <table class="table table-striped table-hover">
                        <tr>
                                        <th>Id</th>
                                        <th>Categoria Id</th>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>Descricao</th>
                                        <th>Ativo</th>
                                        <th>Arquivo Caminho</th>
                                        <th>Arquivo Tipo</th>
                                        <th>Created</th>
                                        <th>Modified</th>
                                        <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($tag->arquivos as $arquivos): ?>
                        <tr>
                            <td><?= h($arquivos->id) ?></td>
                            <td><?= h($arquivos->categoria_id) ?></td>
                            <td><?= h($arquivos->titulo) ?></td>
                            <td><?= h($arquivos->autor) ?></td>
                            <td><?= h($arquivos->descricao) ?></td>
                            <td><?= h($arquivos->ativo) ?></td>
                            <td><?= h($arquivos->arquivo_caminho) ?></td>
                            <td><?= h($arquivos->arquivo_tipo) ?></td>
                            <td><?= h($arquivos->created) ?></td>
                            <td><?= h($arquivos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Arquivos', 'action' => 'view', $arquivos->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Arquivos', 'action' => 'edit', $arquivos->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Arquivos', 'action' => 'delete', $arquivos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?> -->
                </div>
                </div>
    </div>
</div>
