<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('Listar {0}', 'Tags'), ['action' => 'index']) ?></li>
                        <li><?= $this->Html->link(__('Listar {0}', 'Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Novo {0}', 'Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="tags col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Adicionar Tag' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($tag) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('descricao',['label' => 'Descrição']);
                                    echo $this->Form->input('ativo');
                                    // echo $this->Form->input('arquivos._ids', ['options' => $arquivos]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
