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
                    <?= $this->Html->link(__('Litar {0}', 'Sistemas'), ['action' => 'index']) ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="sistemas col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= 'Add Sistema' ?>
                </h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($sistema) ?>
                <fieldset>
                    <?php
                    echo $this->Form->input('nome');
                    echo $this->Form->input('url');
                    //Limita em 35 caracter
                    echo $this->Form->input('descricao', ['input' => 'Descrição', 'maxlength' => '32']);
                    ?>
                    <label for="">Ícone</label>
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
                        </span>
                    </div>
                    <?php
                    echo $this->Form->input('botao_um', ['label' => 'Botão Um']);
                    echo $this->Form->input('botao_um_descricao', ['label' => 'Texto Botão Um']);
                    echo $this->Form->input('botao_dois', ['label' => 'Botão Dois']);
                    echo $this->Form->input('botao_dois_descricao', ['label' => 'Texto Botão Dois']);
                    ?>
                </fieldset>
<?= $this->Form->button(__('Enviar')) ?>
<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
