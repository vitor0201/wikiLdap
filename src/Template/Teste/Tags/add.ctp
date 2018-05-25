<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag $tag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Arquivos'), ['controller' => 'Arquivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Arquivo'), ['controller' => 'Arquivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paginas'), ['controller' => 'Paginas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pagina'), ['controller' => 'Paginas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tags form large-9 medium-8 columns content">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Add Tag') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('ativo');
            echo $this->Form->control('arquivos._ids', ['options' => $arquivos]);
            echo $this->Form->control('paginas._ids', ['options' => $paginas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
