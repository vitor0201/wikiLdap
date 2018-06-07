<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Estaco']), ['action' => 'edit', $estaco->IP]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Estaco']), ['action' => 'delete', $estaco->IP], ['confirm' => __('Are you sure you want to delete # {0}?', $estaco->IP)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Estacoes']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Estaco']), ['action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="estacoes col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($estaco->IP) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>IP</th>
                        <td><?= h($estaco->IP) ?></td>
                    </tr>
                                                                                                        <tr>
                        <th>LiberaSistema</th>
                        <td><?= $estaco->liberaSistema ? __('Yes') : __('No'); ?></td>
                     </tr>
                                <tr>
                        <th>Biometria</th>
                        <td><?= $estaco->biometria ? __('Yes') : __('No'); ?></td>
                     </tr>
                                <tr>
                        <th>LiberaAcessoAdministrativo</th>
                        <td><?= $estaco->liberaAcessoAdministrativo ? __('Yes') : __('No'); ?></td>
                     </tr>
                                        </table>
                                </div>
    </div>
</div>
