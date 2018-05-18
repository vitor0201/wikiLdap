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
                    <?= $this->Html->link(__('Listar {0}', 'Subcategorias'), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', 'Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Nova {0}', 'Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', 'Páginas'), ['controller' => 'Paginas', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Nova {0}', 'Página'), ['controller' => 'Paginas', 'action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="subcategorias col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Adicionar Subcategoria' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($subcategoria) ?>
                    <fieldset>
                        <?php
                                    echo $this->Form->input('descricao',['label'=>'Descrição']);
                                    echo $this->Form->input('ativo',['checked'=>true]);
                                    echo $this->Form->input('categorias_id', ['options' => $categorias]);
                                ?>
                    </fieldset>
                    <?= $this->Form->button(__('Enviar')) ?>
                    <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
