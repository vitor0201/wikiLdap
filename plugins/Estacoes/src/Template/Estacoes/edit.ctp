<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Form->postLink(
                        __('Delete'),
                        ['action' => 'delete', $estaco->IP],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $estaco->IP)]
                    )
                ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Estacoes'), ['action' => 'index']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="estacoes col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Estaco' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($estaco) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('liberaSistema');
                                    echo $this->Form->input('biometria');
                                    echo $this->Form->input('liberaAcessoAdministrativo');
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
