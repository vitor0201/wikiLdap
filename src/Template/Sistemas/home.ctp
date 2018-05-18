<?= $this->Html->css('_wiki'); ?>
<div class="sistemas col-md-12 col-sm-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                Sistemas
            </h3>
        </div>
        <div>
            <div class="box-body ">
                <?php foreach ($sistemas as $sistema): ?>
                <div class="col-md-3 col-sm-12">
                    <div class="card text-center">
                        <div data-toggle="tooltip" data-placement="auto" title="<?=$sistema->descricao ?>">
                            <a href="<?= $this->Url->build('/'.$sistema->url, true);?>">
                                <div style="background-color:#d0f2eb" class="cardCenter">
                                    <i class="fa fa-<?=$sistema->logo ?> bigIcone" style="color:#00a65a"></i>
                                </div>
                            </a>
                            <div class="cardCenter">
                                <p>
                                    <?= h($sistema->nome)?>
                                </p>
                                <!-- LIMITAR 40 -->
                                <div class="row">
                                    <?php if(!empty($sistema->botao_um)) : ?>
                                    <!-- LIMITAR 10-->
                                    <a href="<?= $this->Url->build('/'.$sistema->botao_um, true); ?>" class="btn btn-primary btn-xs pull-left">
                                        <?= h($sistema->botao_um_descricao)?>
                                    </a>
                                    <?php else: ?>
                                    <a href="#" class="btn btn-xs" style="visibility: hidden;">.</a>
                                    <?php endif; ?> &nbsp;
                                    <!-- LIMITAR 10-->
                                    <?php if(!empty($sistema->botao_dois)) : ?>
                                    <a href="<?= $this->Url->build('/'.$sistema->botao_dois, true); ?>" class="btn btn-primary btn-xs pull-right">
                                        <?= h($sistema->botao_dois_descricao)?>
                                    </a>
                                    <?php else: ?>
                                    <a href="#" class="btn btn-xs" style="visibility: hidden;">.</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
