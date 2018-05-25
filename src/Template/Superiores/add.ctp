<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= __('Actions') ?>
                </h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <?= $this->Html->link(__('Listar {0}', 'Superiores'), ['action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="superiores col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Adicionar Superior' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($superiore) ?>
                    <fieldset>
                        <?php
                                    echo $this->Form->input('nome');
                                ?>
                            <label for="">Ícone</label>
                            <div class="input-group">
                                <?=  $this->Form->text('icone', [
                                        'default' => $this->request->query('keyword'),
                                        'label' => 'Ícone',
                                        'class' => 'form-control',
                                    ] ); ?>
                                    <span class="input-group-btn">
                                        <?= $this->Html->link( '<i class="fa fa-paper-plane"></i>',
                                            'https://fontawesome.com/icons?d=gallery',
                                                    [
                                                        'escape'=> false,
                                                        'class' => "btn btn-flat btn-default",
                                                        'target' => '_blank'
                                    ]); ?>
                                    </span>
                            </div> 
                    </fieldset>
                    <?= $this->Form->button(__('Enviar')) ?>
                        <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
