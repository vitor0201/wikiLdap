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
                    <?= $this->Html->link(__('Editar {0}', ['Superior']), ['action' => 'edit', $superiore->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Deletar {0}', ['Superior']), ['action' => 'delete', $superiore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $superiore->id)]) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Superiores']), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Superior']), ['action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="superiores col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($superiore->id) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Nome</th>
                        <td>
                            <?= h($superiore->nome) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Ícone</th>
                        <td>
                            <?= h($superiore->icone) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td>
                            <?= $this->Number->format($superiore->id) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
