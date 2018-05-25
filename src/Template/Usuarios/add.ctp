<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('Listar {0}', 'Usuários'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Listar {0}', 'Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo {0}', 'Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link(__('List {0}', 'Paginas'), ['controller' => 'Paginas', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Nova {0}', 'Página'), ['controller' => 'Paginas', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="usuarios col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Adicionar Usuário' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($usuario) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('nome');
                                    echo $this->Form->input('ativo',['checked'=> true]);
                                    echo $this->Form->input('grupos._ids', ['options' => $grupos]);
                                    echo $this->Form->input('paginas._ids', ['options' => $paginas]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
