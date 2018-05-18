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
                    <?= $this->Html->link(__('Editar {0}', ['Parâmetro']), ['action' => 'edit', $parametro->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Deletar {0}', ['Parâmetro']), ['action' => 'delete', $parametro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parametro->id)]) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Parâmetro']), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Parâmetro']), ['action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="parametros col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($parametro->descricao) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Descrição</th>
                        <td>
                            <?= h($parametro->descricao) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Chave</th>
                        <td>
                            <?= h($parametro->chave) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Valor</th>
                        <td>
                            <?= h($parametro->valor) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Tipo</th>
                        <td>
                            <?= h($parametro->tipo) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Grupo</th>
                        <td>
                            <?= h($parametro->grupo) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Criado</th>
                        <td>
                            <?= h($parametro->created) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Modificado</th>
                        <td>
                            <?= h($parametro->modified) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Ativo</th>
                        <td>
                            <?= $parametro->ativo ? __('Yes') : __('No'); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Cache</th>
                        <td>
                            <?= $parametro->cache ? __('Sim') : __('Não'); ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>