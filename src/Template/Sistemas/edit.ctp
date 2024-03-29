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
                    <?=
                    $this->Form->postLink(
                            __('Deletar'), ['action' => 'delete', $sistema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistema->id)]
                    )
                    ?>
                </li>
                <li>
                    <?= $this->Html->link(__('Litar {0}', 'Sistemas'), ['action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="sistemas col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Edit Sistema' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($sistema) ?>
                <fieldset>
                    <?php
                    echo $this->Form->input('nome');
                    echo $this->Form->input('descricao');
                    echo $this->Form->input('botao_um');
                    echo $this->Form->input('botao_dois');
                    echo $this->Form->input('url');
                    echo $this->Form->input('botao_um_descricao');
                    echo $this->Form->input('botao_dois_descricao');
                    ?>
                    <div class="input-group">
                        <?=
                        $this->Form->text('logo', [
                            'default' => $this->request->query('keyword'),
                            'label' => 'Ícone',
                            'class' => 'form-control',
                            'name' => 'logo'
                        ]);
                        ?>
                        <span class="input-group-btn">
                            <?=
                            $this->Html->link('<i class="fa fa-paper-plane"></i>', 'https://fontawesome.com/icons?d=gallery', [
                                'escape' => false,
                                'class' => "btn btn-flat btn-default",
                                'target' => '_blank'
                            ]);
                            ?>

                            </fieldset>
<?= $this->Form->button(__('Enviar')) ?>
<?= $this->Form->end() ?>
                    </div>
            </div>
        </div>
    </div>
