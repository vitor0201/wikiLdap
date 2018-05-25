<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Editar {0}', ['Sistema']), ['action' => 'edit', $sistema->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar {0}', ['Sistema']), ['action' => 'delete', $sistema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistema->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar {0}', ['Sistemas']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Sistema']), ['action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="sistemas col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($sistema->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Nome</th>
                        <td><?= h($sistema->nome) ?></td>
                    </tr>
                                                        <tr>
                        <th>Descricao</th>
                        <td><?= h($sistema->descricao) ?></td>
                    </tr>
                                                        <tr>
                        <th>Botao Um</th>
                        <td><?= h($sistema->botao_um) ?></td>
                    </tr>
                                                        <tr>
                        <th>Botao Dois</th>
                        <td><?= h($sistema->botao_dois) ?></td>
                    </tr>
                                                        <tr>
                        <th>Url</th>
                        <td><?= h($sistema->url) ?></td>
                    </tr>
                                                        <tr>
                        <th>Botao Um Descricao</th>
                        <td><?= h($sistema->botao_um_descricao) ?></td>
                    </tr>
                                                        <tr>
                        <th>Botao Dois Descricao</th>
                        <td><?= h($sistema->botao_dois_descricao) ?></td>
                    </tr>
                                                        <tr>
                        <th>Logo</th>
                        <td><?= h($sistema->logo) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($sistema->id) ?></td>
                    </tr>
                                                                </table>
                                </div>
    </div>
</div>
