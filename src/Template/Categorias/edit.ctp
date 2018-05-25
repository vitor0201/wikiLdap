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
                        ['action' => 'delete', $categoria->id],
                        ['confirm' => __('Você gostaria de deletar # {0}?', $categoria->id)]
                    )
                ?>
                </li>
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
                    <?= 'Editar Categoria' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($categoria) ?>
                    <fieldset>
                        <?php
                                    echo $this->Form->input('descricao',['label'=>'Descrição']);
                                    echo $this->Form->input('ativo');
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
