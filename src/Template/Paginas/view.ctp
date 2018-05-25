<div class="row">
    <div class="paginas col-lg-12 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= h($pagina->title) ?>
                </h3>
            </div>
            <div class="box-body">
               <!-- alterado -->
                <div>
                    <?=(($pagina->body)); ?>
                </div>
                <!-- TAGS-->
                <div class="related">
                    <?php if (!empty($pagina->usuarios)):
                        foreach ($pagina->tags as $tag): ?>
                    <?= $this->Html->link($tag->descricao,[
                                        "controller" => "Paginas",
                                        "action" => "search",
                                        "?" => ["keyword" => $tag->descricao]                                      
                                    ],
                                    ['class'=>"label label-primary"]);?>
                        </span>
                        <?php endforeach;
                        endif; ?>
                </div>
                <!-- USUÁRIOS -->
                <div class="related">
                    <?php if (!empty($pagina->paginas_usuarios)): ?>
                    <h4>
                        <?=__('Histórico de Modificações') ?>
                    </h4>
                    <table class="table table-striped table-hover ">

                        <tr class="collapsed toggleIcon" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <th>Autor</th>
                            <th>Data Alteração</th>
                            <th class="glyphicon glyphicon-chevron-down" aria-hidden="true"></th>
                        </tr>
                        
                        <tbody id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <?php foreach ($pagina->paginas_usuarios as $usuarios): ?>
                            <tr>
                                <td>
                                    <?=h($usuarios->usuario->nome) ?>
                                </td>
                                <td>
                                    <?=h($usuarios->created) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->Html->script(['scripts']); ?>