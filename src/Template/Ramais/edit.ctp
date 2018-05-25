<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $ramai->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $ramai->id)]
                    )
                ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Ramais'), ['action' => 'index']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="ramais col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Ramal' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($ramai) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('setor');
                                    echo $this->Form->input('ramal');
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
