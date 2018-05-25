<div class="row">
    <div class="col-md-2" id="actions-sidebar">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= __('Ações') ?></h3>
            </div>
            <ul class="nav nav-pills nav-stacked">
                        <li><?= $this->Html->link(__('Listar {0}', 'Formatos'), ['action' => 'index']) ?></li>
                    </ul>
        </div>
    </div>
    <div class="mimes col-lg-10 col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= 'Adicionar Formato' ?></h3>
            </div>
            <div class="box-body">
                <?= $this->Form->create($mime) ?>
                <fieldset>
                    <?php
                                    echo $this->Form->input('extensao',['label' =>'Extensão']);
                                    echo $this->Form->input('mime');
                                    echo $this->Form->input('ativo',['checked' => true]);
                                ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
