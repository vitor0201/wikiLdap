<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?=__('Actions') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?=$this->Form->postLink(
    __('Deletar'),
    ['action' => 'delete', $arquivo->id],
    ['confirm' => __('Você tem certeza que quer deletar # {0}?', $arquivo->id)]
)
?></li>
                        <li><?=$this->Html->link(__('List {0}', 'Arquivos'), ['action' => 'index']) ?></li>
                        <li><?=$this->Html->link(__('List {0}', 'Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
                <li><?=$this->Html->link(__('New {0}', 'Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
                        <li><?=$this->Html->link(__('List {0}', 'Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
                <li><?=$this->Html->link(__('New {0}', 'Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="arquivos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?='Editar Arquivo' ?></h3>
            </div>
            <div class="box-body">
                <?=$this->Form->create($arquivo) ?>
                <fieldset>
                    <?php
echo $this->Form->input('categoria_id', ['options' => $categorias]);
echo $this->Form->input('titulo', ['label' => 'Título']);
echo $this->Form->input('descricao');
echo $this->Form->input('ativo');
echo $this->Form->input('tags._ids', ['options' => $tags]);
?>
                </fieldset>
                <?=$this->Form->button(__('Submit')) ?>
                <?=$this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
