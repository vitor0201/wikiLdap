<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('Listar {0}', 'Controladores'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Listar {0}', 'Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo {0}', 'Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="controladores col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Adicionar Controlador' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($controladore) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('controller',['label' =>'Controlador']);
                                    echo $this->Form->input('action',['label' =>'Ação']);
                                    echo $this->Form->input('descricao',['label' =>'Descrição']);
                                    echo $this->Form->input('ativo',['checked' => true]);
                                    echo $this->Form->input('publico',['label' =>'Público']);
                                    echo $this->Form->input('grupos._ids', [
                                        'options' => $grupos,
                                        "class"=>"selectpicker",
                                        'data-live-search'=>"true",                                 
                                        'title'=>"Selecione ...",
                                        'data-actions-box'=>"true"
                                        ]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
