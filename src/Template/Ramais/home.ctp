

<div class="row">
    <div class="ramais col-md-10">
        <div class="box box-primary">
            <div class="box-header with-border">
                <!-- <h3 class="box-title">
                    Ramais
                </h3> -->
                <div class="row">
                    <div class="col-lg-9">
                        <h3 class="box-title">
                            Ramais
                        </h3>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                    <?=$this->LiveSearch->searchForm(); ?>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>
            <div class="table-responsive">
                <div class="box-body">
                    <table class="table table-striped table-hover liveSearch" id="example">
                        <thead>
                            <tr>
                                <th>
                                    <?=$this->Paginator->sort('setor') ?>
                                </th>
                                <th>
                                    <?=$this->Paginator->sort('ramal') ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ramais as $ramai): ?>
                            <tr>
                                <td>
                                    <?=h($ramai->setor) ?>
                                </td>
                                <td>
                                    <?=h($ramai->ramal) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->Html->script("search"); ?>
