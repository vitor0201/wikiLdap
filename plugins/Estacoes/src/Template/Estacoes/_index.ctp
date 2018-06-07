<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>

            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('New {0}', ['Estaco']), ['action' => 'add']) ?></li>
            </ul>
        </div>
    </div>
    <div class="estacoes col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Estacoes</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('IP') ?></th>
                            <th><?= $this->Paginator->sort('liberaSistema') ?></th>
                            <th><?= $this->Paginator->sort('biometria') ?></th>
                            <th><?= $this->Paginator->sort('liberaAcessoAdministrativo') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estacoes as $estaco): ?>
                            <tr>
                                <td><?= h($estaco->IP) ?></td>
                                <td><?= h($estaco->liberaSistema) ?></td>
                                <td><?= h($estaco->biometria) ?></td>
                                <td><?= h($estaco->liberaAcessoAdministrativo) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $estaco->IP], ['class' => 'btn btn-default btn-xs']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estaco->IP], ['class' => 'btn btn-primary btn-xs']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estaco->IP], ['confirm' => __('Are you sure you want to delete # {0}?', $estaco->IP), 'class' => 'btn btn-danger btn-xs']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="paginator text-center">
                    <ul class="pagination">
                        <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape' => false]) ?>
                        <?= $this->Paginator->numbers(['escape' => false]) ?>
                        <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape' => false]) ?>
                    </ul>
                    <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
                    {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>