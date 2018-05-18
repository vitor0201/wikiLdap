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
                    <?= $this->Html->link(__('Listar {0}', 'Categorias'), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', 'Subcategorias'), ['controller' => 'Subcategorias', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', 'Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="categorias col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Adicionar Categoria' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($categoria) ?>
                    <fieldset>
                        <?php
                                    echo $this->Form->input('descricao',['label'=>'Descrição']);
                                    echo $this->Form->input('ativo',['checked'=>true]);
                                    echo $this->Form->input('publico',['label'=>'Público']);
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
<?= $this->Html->script('scripts');?>