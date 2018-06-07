<?php /* $this->Paginator->options(['url' => $url]); */ ?>

<div id="AjaxContent" class="index large-9 medium-8 columns content"> 
   
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="dropdown pull-right">
                <button class="btn dropdown-toggle btn-sm"  type="button" id="dropdownMenuTop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuTop">
                    <li> <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus pull-right" aria-hidden="true"></span>&nbsp; ' . __('Novo'), ['action' => 'add'], ['escape' => false]) ?></li>
                </ul>
            </div>
            <h3><?php echo __('Estações') ?></h3>
        </div>
       
            <div id="PanelBody" > 
                <table class="table table-striped" cellpadding="0" cellspacing="0" style="margin: 0; padding: 0">
                    <thead>
                        <tr>
                            <th class="actions">&nbsp;</th> 
                            <th class="ajax-pagination"><?php echo $this->Paginator->sort('IP') ?></th>
                            <th class="ajax-pagination"><?php echo $this->Paginator->sort('liberaSistema', ['Libera Sistema']) ?></th>
                            <th class="ajax-pagination"><?php echo $this->Paginator->sort('biometria', ['Biometria']) ?></th>
                            <th class="ajax-pagination"><?php echo $this->Paginator->sort('liberaAcessoAdministrativo', ['Sistema Administrativo']) ?></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($estacoes as $estaco):
                            ?> 
                        <tr>
                        <td class="action">
                            <div class="btn-group ">
                                <button type="button" class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                </button>
                                <ul class="dropdown-menu ">
                                    <li><?php echo $this->Html->link(__('Detalhes'), ['action' => 'view', $estaco->IP], ['escape' => false]); ?></li>
                                    <li><?php echo $this->Html->link(__('Alterar'), ['action' => 'edit', $estaco->IP], ['escape' => false]); ?></li>

                                    <li role="separator" class="divider"></li>
                                    <li><?php echo $this->Html->link(__('Remover'), ['action' => 'delete', $estaco->IP], ['class' => 'delete-confirm', 'escape' => false]) ?></li>
                                </ul>
                            </div>
                        </td>

                        
                            <td><?= h($estaco->IP) ?></td>
                            <td><?= $estaco->liberaSistema ? ('ATIVO') : ('<span class="text-danger">INATIVO</span>') ?> </td>
                            <td><?= $estaco->biometria ? ('ATIVO') : ('<span class="text-danger">INATIVO</span>') ?> </td>
                            <td><?= $estaco->liberaAcessoAdministrativo ? ('ATIVO') : ('<span class="text-danger">INATIVO</span>') ?> </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if ($estacoes->isEmpty() && !empty($url)): ?>
                    <div class="panel-body">
                        <div class="alert alert-warning">Nenhum registro encontrado.</div>
                    </div>
                <?php endif; ?>
            </div>
        

        <div class="panel-footer"> 
            <div class="row ">

                <div class="col col-xs-8 ajax-pagination" style=" line-height: 40px;height: 40px;" >
                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                        <div class="btn-group">
                            <ul class="pagination pagination-sm hidden-xs ">
                                <?php echo $this->Paginator->numbers() ?>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <ul class="pagination  pagination-sm">
                                <?php echo $this->Paginator->prev('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>', ['escape' => false]) ?>
                                <?php echo $this->Paginator->next('<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>', ['escape' => false]) ?>
                            </ul>
                        </div>
                        <?php
                        $paginas = [15, 25, 50, 75, 100];
                        $active = $this->Paginator->param('limit');
                        ?>
                         <small class="hidden-xs hidden-sm" >
                            <?php
                            echo $this->Paginator->counter(
                                    'Página {{page}} de {{pages}} - Total: {{pages}} registro(s)'
                            );
                            ?>
                        </small>
                        
                        <div class="btn-group pagination hidden-xs hidden-sm dropup">
                            <button type="button" class="btn  btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $active ? $active : 15; ?> / pág. <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu " style="min-width: 0px">
                                <?php 
                                  foreach ($paginas as $pag) {
                                  if ($pag == $active) {
                                  $class = 'active disabled';
                                  }
                                  echo "<li >" . $this->Html->link($pag, ['action' => 'index', '?' => ['limit' => $pag]], ['class' => ' ']) . "</li>";
                                  } 
                                ?>
                            </ul>

                       
                       
 </div> 
                    </div>
                </div>
                <div class="col col-xs-4" style=" line-height: 40px;height: 40px;" >
                    <div class="btn-group pagination dropup pull-right">

                        <button type="button" class="btn  btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-export"></span>
                        </button>
                        <ul class="dropdown-menu " style="min-width: 0px">
                            <li><?php echo $this->Html->link('' . __('Exportar Excel (.csv)'), ['action' => 'index', '?' => ['export' => 'csv']], ['class' => '', 'escape' => false]); ?></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>       
    </div>
</div>

