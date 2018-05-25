<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><?= $this->Html->link(__('Edit {0}', ['Ramal']), ['action' => 'edit', $ramai->id]) ?> </li>
                <li><?= $this->Form->postLink(__('Delete {0}', ['Ramai']), ['action' => 'delete', $ramai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ramai->id)]) ?> </li>
                <li><?= $this->Html->link(__('List {0}', ['Ramais']), ['action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('New {0}', ['Ramai']), ['action' => 'add']) ?> </li>
                    </ul>
        </div>
    </div>
    <div class="ramais col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= h($ramai->id) ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                                                        <tr>
                        <th>Setor</th>
                        <td><?= h($ramai->setor) ?></td>
                    </tr>
                                                                                <tr>
                        <th>Id</th>
                        <td><?= $this->Number->format($ramai->id) ?></td>
                    </tr>
                                <tr>
                        <th>Ramal</th>
                        <td><?= $this->Number->format($ramai->ramal) ?></td>
                    </tr>
                                                                </table>
                                </div>
    </div>
</div>
