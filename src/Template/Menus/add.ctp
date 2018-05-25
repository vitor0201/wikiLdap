<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?=__('Ações') ?>
                </h3>
            </div>
            <ul class="nav nav-pills nav-stacked">

                <li>
                    <?=$this->Html->link(__('Listar {0}', 'Menus'), ['action' => 'index']) ?>
                </li>
                <li>
                    <?=$this->Html->link(__('Listar {0}', 'Superiores'), ['controller' => 'Superiores', 'action' => 'index']) ?>
                </li>
                <li>
                    <?=$this->Html->link(__('Novo {0}', 'Superior'), ['controller' => 'Superiores', 'action' => 'add']) ?>
                </li>
                <li>
                    <?=$this->Html->link(__('Listar {0}', 'Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?>
                </li>
                <li>
                    <?=$this->Html->link(__('Novo {0}', 'Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="menus col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?='Adicionar Menu' ?>
                </h3>
            </div>
            <div class="box-body">
                <?=$this->Form->create($menu) ?>
                    <fieldset>
                        <?php
                            echo $this->Form->input('nome');
                            echo $this->Form->input('ativo',['checked'=>true]); ?>
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
                            <label for="">Home</label>
                            <div class="input-group">
                                <?=  $this->Form->text('home', [
                                    'default' => $this->request->query('keyword'),
                                    'label' => false,
                                    'class' => 'form-control',
                                ] ); ?>
                                    <span class="input-group-btn">
                                        <?= $this->Html->link( '<i class="fa fa-question-circle"></i>',
                                        '#',
                                                [
                                                    'data-toggle'=>"tooltip",
                                                    'title'=>"Para digitar um link externo digite '\' antes de digitar o site. Ex: \www.google.com",
                                                    'class' => "btn btn-default",
                                                    'escape'=>false
                                ]); ?>
                                    </span>
                            </div>
                            <?php
                                    echo $this->Form->input('publico', ['label' => 'Público']);
                                    echo $this->Form->input('superiores_id', [
                                        'options' => $superiores, 
                                        'empty' => true,
                                        "class"=>"selectpicker",
                                        'data-live-search'=>"true",                                 
                                        'title'=>"Selecione ...",
                                        'data-actions-box'=>"true"
                                        ]);
                                    echo $this->Form->input('grupos._ids', [
                                        'options' => $grupos,
                                        "class"=>"selectpicker",
                                        'data-live-search'=>"true",                                 
                                        'title'=>"Selecione ...",
                                        'data-actions-box'=>"true"
                                        ]);
                                    ?>
                    </fieldset>
                    <?=$this->Form->button(__('Enviar')) ?>
                        <?=$this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
