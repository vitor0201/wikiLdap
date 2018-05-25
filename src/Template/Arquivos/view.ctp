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
                    <?= $this->Html->link(__('Editar {0}', ['Arquivo']), ['action' => 'edit', $arquivo->id]) ?>
                </li>
                <li>
                    <?= $this->Form->postLink(__('Deletar {0}', ['Arquivo']), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Arquivos']), ['action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Novo {0}', ['Arquivo']), ['action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Categorias']), ['controller' => 'Categorias', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Nova {0}', ['Categoria']), ['controller' => 'Categorias', 'action' => 'add']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Listar {0}', ['Tags']), ['controller' => 'Tags', 'action' => 'index']) ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Nova {0}', ['Tag']), ['controller' => 'Tags', 'action' => 'add']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="arquivos col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($arquivo->titulo) ?>
                </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Categoria</th>
                        <td>
                            <?= $arquivo->has('categoria') ? $this->Html->link($arquivo->categoria->descricao, ['controller' => 'Categorias', 'action' => 'view', $arquivo->categoria->id]) : '' ?>
                        </td>
                    </tr>
                    <!-- <tr>
                        <th>Titulo</th>
                        <td><?= h($arquivo->titulo) ?></td>
                    </tr> -->
                    <tr>
                        <th>Autor</th>
                        <td>
                            <?= h($arquivo->autor) ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Criado</th>
                        <td>
                            <?= h($arquivo->created) ?>
                    </tr>
                    </tr>
                    <tr>
                        <th>Modificado</th>
                        <td>
                            <?= h($arquivo->modified) ?>
                    </tr>
                    </tr>
                </table>
                <div class="related">
                    <?php if (!empty($arquivo->tags)): ?>
                    <h4>
                        <?= __('{0}', ['Tags']) ?>
                    </h4>
                    <div class="panel">
                        <?php foreach ($arquivo->tags as $tags): ?>
                        <span class="label label-info">
                            <?= h($tags->descricao) ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="panel">
                    <?php if($arquivo->arquivo_tipo === 'image')
                        {                                                        
                                    echo $this->Html->image('/' . $arquivo->arquivo_caminho, 
                                                [
                                                    'alt' => 'HUMAP', 
                                                    'class' =>"img-rounded img-fluid img-thumbnail"
                                            ]);
                        }else if($arquivo->arquivo_tipo == 'video'):?>
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php 
                                    echo $this->Html->media('/' . $arquivo->arquivo_caminho, [
                                                'fullBase' => true,
                                                'download' => true,
                                                'text' => 'Fallback text',
                                                'class' => 'embed-responsive-item',
                                                'controls' => 'controls'
                                    ]);
                        else:
                                    echo $this->Html->link( 
                                                'Download',
                                                $arquivo->arquivo_caminho,
                                                [
                                                'class' => 'btn btn-lg btn-primary', 
                                                'target' => '_blank',
                                                'label' => 'Download'
                                    ]);
                        endif; ?>
                    </div>

                </div>


            </div>
        </div>
    </div>