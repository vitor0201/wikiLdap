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
                    <?= $this->Html->link(__('Listar {0}', 'Arquivos'), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', 'Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', 'Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', 'Tags'), ['controller' => 'Tags', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', 'Tag'), ['controller' => 'Tags', 'action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="arquivos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Adicionar Arquivo' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($arquivo, ['type' => 'file', 'name'=>'upload']) ?>
                    <fieldset>
                        <?php 
                                    echo $this->Form->input('categoria_id', ['options' => $categorias]);
                                    echo $this->Form->input('titulo', ['label'=> 'Título']);
                                    // echo $this->Form->input('autor');
                                    echo $this->Form->input('descricao');
                                    // echo $this->Form->input('ativo');
                                    // echo $this->Form->input('arquivo_caminho');
                                    // echo $this->Form->input('arquivo_tipo');
                                    echo $this->Form->input('tags._ids', ['options' => $tags]);
                                    echo $this->Form->input('upload', ['type' => 'file', 'label' => 'Arquivo']);                    
                                ?>
                    </fieldset>
                    <?= $this->Form->button(__('Enviar')) ?>
                        <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>