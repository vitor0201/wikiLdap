<style>
    .content-wrapper {
        background-color: #FFF;
    }
</style>

<?= $this->Html->css('_wiki'); ?>
<div class="container-fluid ">
    <div class="row">
        <?php foreach ($sistemas as $sistema): ?>
        
            <div class="col-md-3">                  
                <div class="text-center">  
                    <div class ="panel panel-success" data-toggle="tooltip" data-placement="auto" title="<?= $sistema->descricao ?>">
                        <!-- Nome Sistema -->
                        <div class="panel-heading">
                            <h4 class="text-center">  <?= h($sistema->nome) ?></h4>
                        </div>

                        <!-- Logo -->                      
                        <div class="panel-body text-center">
                            <a class="lead" href="<?= $this->Url->build('/' . $sistema->url, true); ?>">
                                <div class="cardCenter">
                                    <i class="fa fa-<?= $sistema->logo ?> bigIcone" style="color:#42B782"></i>
                                </div>
                            </a>   
                        </div>

                        <!-- descrição -->
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item"><i class="icon-ok text-danger"></i><?= $sistema->descricao ?></li>
                        </ul>

                        <!-- Botões -->
                        <div class="panel-footer "> 
                            <div class="row ">
                                <!-- LIMITAR 40 -->
                                <?php if (!empty($sistema->botao_um)) : ?>
                                    <!-- LIMITAR 10-->
                                    <a href="<?= $this->Url->build('/' . $sistema->botao_um, true); ?>" class="btn btn-primary  ">
                                        <?= h($sistema->botao_um_descricao) ?>
                                    </a>
                                <?php else: ?>
                                    <a href="#" class="btn btn-lg" style="visibility: hidden;">.</a>
                                <?php endif; ?> &nbsp;
                                <!-- LIMITAR 10-->
                                <?php if (!empty($sistema->botao_dois)) : ?>
                                    <a href="<?= $this->Url->build('/' . $sistema->botao_dois, true); ?>" class="btn btn-success  ">
                                        <?= h($sistema->botao_dois_descricao) ?>
                                    </a>
                                <?php else: ?>
                                    <a href="#" class="btn btn-lg" style="visibility: hidden;">.</a>
                                <?php endif; ?>   
                            </div>
                        </div>    

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


