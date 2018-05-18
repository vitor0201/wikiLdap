<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Form->postLink(
                        __('Deletar'),
                        ['action' => 'delete', $parametro->id],
                        ['confirm' => __('Você tem certeza que gostaria de pagar # {0}?', $parametro->id)]
                    )
                ?></li>
                        <li><?= $this->Html->link(__('Listar {0}', 'Parâmetros'), ['action' => 'index']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="parametros col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Editar Parâmetro' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($parametro) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('descricao',['label' => 'Descrição']);
                                    echo $this->Form->input('chave');
                                    echo $this->Form->input('valor');
                                    echo $this->Form->input('tipo');
                                    echo $this->Form->input('ativo');
                                    echo $this->Form->input('cache');
                                    echo $this->Form->input('grupo');
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
