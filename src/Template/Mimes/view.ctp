<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Editar {0}', ['Formato']), ['action' => 'edit', $mime->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Deletar {0}', ['Formato']), ['action' => 'delete', $mime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mime->id)]) ?> </li>
                <li><?= $this->Html->link(__('Listar {0}', ['Formato']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Novo {0}', ['Formato']), ['action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="mimes col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($mime->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Extensão</th>
                        <td><?= h($mime->extensao) ?></td>
                    </tr>
                                                        <tr>
                        <th>Mime</th>
                        <td><?= h($mime->mime) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($mime->id) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Ativo</th>
                        <td><?= $mime->ativo ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>'; ?></td>
                     </tr>
                                        </table>
                                </div>
    </div>
</div>
