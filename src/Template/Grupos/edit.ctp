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
                            <?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $grupo->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $grupo->id)]
                    )
                ?>
                        </li>
                                                    <li>
                                <?= $this->Html->link(__('Listar {0}', 'Grupos'), ['action' => 'index']) ?>
                            </li>
                                                            <li>
                                    <?= $this->Html->link(__('Listar {0}', 'Controladores'), ['controller' => 'Controladores', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Controladore'), ['controller' => 'Controladores', 'action' => 'add']) ?></li>
                                        <li>
                                    <?= $this->Html->link(__('Listar {0}', 'Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
                                        <li>
                                    <?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
                                        <li>
                                    <?= $this->Html->link(__('Listar {0}', 'Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="grupos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Grupo' ?>
                                        </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($grupo) ?>
                    <fieldset>
                        <?php
                                    echo $this->Form->input('descricao');
                                    echo $this->Form->input('atividade');
                                    echo $this->Form->input('sigla');
                                    echo $this->Form->input('ativo');
                                    echo $this->Form->input('controladores._ids', [
                                        'options' => $controladores, 
                                        "class"=>"selectpicker",
                                        'data-live-search'=>"true",
                                        'title'=>"Selecione ...",
                                        'data-actions-box'=>"true"
                                        ]);
                                    echo $this->Form->input('categorias._ids', [
                                        'options' => $categorias, 
                                        "class"=>"selectpicker",
                                        'data-live-search'=>"true",
                                        'title'=>"Selecione ...",
                                        'data-actions-box'=>"true"
                                        ]);
                                    echo $this->Form->input('usuarios._ids', [
                                        'options' => $usuarios, 
                                        "class"=>"selectpicker",
                                        'data-live-search'=>"true",
                                        'title'=>"Selecione ...",
                                        'data-actions-box'=>"true"
                                        ]);
                                    echo $this->Form->input('menus._ids', [
                                        'options' => $menus, 
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
