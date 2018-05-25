<?= $this->Html->script(['_script.js', '/ckeditor/ckeditor']); ?> 
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
                        ['action' => 'delete', $pagina->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $pagina->id)]
                    )
                ?>
                        </li>
                                                    <li>
                                <?= $this->Html->link(__('Listar {0}', 'Paginas'), ['action' => 'index']) ?>
                            </li>
                                                            <li>
                                    <?= $this->Html->link(__('Listar {0}', 'Subcategorias'), ['controller' => 'Subcategorias', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Subcategoria'), ['controller' => 'Subcategorias', 'action' => 'add']) ?></li>
                                        <li>
                                    <?= $this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
                                        <li>
                                    <?= $this->Html->link(__('Listar {0}', 'Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('New {0}', 'Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="paginas col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Pagina' ?>
                                        </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($pagina) ?>
                    <fieldset>
                        <?php
                                    echo $this->Form->input('title',['label' =>'Título']);
                                    echo $this->Form->input('url');
                                    echo $this->Form->input('body', ['name' => 'body']);
                                    echo $this->Form->input('active',['label' =>'Ativo']);
                                    echo $this->Form->input('tags._ids', ['options' => $tags, ]);
                                    echo $this->Form->input('subcategoria_id', ['options' => $subcategorias]);
                                ?>
                    </fieldset>
                    <?= $this->Form->button(__('Enviar')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
    </div>
