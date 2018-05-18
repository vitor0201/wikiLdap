<div class="controladores col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                Filtro
            </h3>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="panel-body">
                <?php 
                        echo $this->Form->create(null, ['valueSources' => 'controladores', 'class'=>'form-horizontal']);
                        echo $this->Form->input('controller',[
                            'options'=> $control, 
                            'multiple'=>true,
                            'label'=>'Controlador',
                            "class"=>"selectpicker form-inline col-sm-9 multiple",
                            'data-live-search'=>"true",
                            'title'=>"Selecione ...",
                            'data-actions-box'=>"true"
                            ]);

                        echo $this->Form->input('actions',[
                            'options'=> $actions, 
                            'multiple'=>true,
                            'label'=>'Ações',
                            "class"=>"selectpicker form-inline col-sm-9 multiple",
                            'data-live-search'=>"true",
                            'title'=>"Selecione ...",
                            'data-actions-box'=>"true"
                            ]);
                        ?>
            </div>
            <div class="panel-footer">
                <div class="btn-group">
                    <?php
                        echo $this->Form->button('Filtrar', ['type' => 'submit','class'=>'btn btn-success']);
                        echo $this->Html->link('Limpar', ['action' => 'index'],['class'=>'btn btn-danger']);

                        echo $this->Form->end();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <?= $this->Html->link(__('Novo {0}', ['Controlador']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Grupos']), ['controller' => 'Grupos', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Grupo']), ['controller' => 'Grupos', 'action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="controladores col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="row">
                    <div class="controladores col-md-10">
                        <h3 class="box-title">Controladores</h3>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <?= $this->Paginator->sort('id') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('controller',['label' =>'Controlador']) ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('action',['label' =>'Ação']) ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('descricao',['label' =>'Descrição']) ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('ativo') ?>
                                </th>
                                <th>
                                    <?= $this->Paginator->sort('created',['label' =>'Criado']) ?>
                                </th>
                                <th class="actions">
                                    <?= __('Ações') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($controladores as $controladore): ?>
                            <tr>
                                <td>
                                    <?= $this->Number->format($controladore->id) ?>
                                </td>
                                <td>
                                    <?= h($controladore->controller) ?>
                                </td>
                                <td>
                                    <?= h($controladore->action) ?>
                                </td>
                                <td>
                                    <?= h($controladore->descricao) ?>
                                </td>
                                <td>
                                    <?= ($controladore->ativo ? '<span class="label label-info">ATIVADO</span>' : '<span class="label label-danger">DESATIVADO</span>') ?>
                                </td>
                                <td>
                                    <?= h($controladore->created) ?>
                                </td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $controladore->id], ['class'=>'btn btn-default btn-xs']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $controladore->id], ['class'=>'btn btn-primary btn-xs']) ?>
                                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $controladore->id], ['confirm' => __('Você tem certeza que deseja apagar?', $controladore->id), 'class'=>'btn btn-danger btn-xs']) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator text-center">
                        <ul class="pagination">
                            <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                                    <?= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) ?>
                        </ul>
                        <p>
                            <?= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Html->script('scripts');?>
