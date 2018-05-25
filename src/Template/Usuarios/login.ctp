<?php
/**
 * @var \App\View\AppView $this
 */
?>
    <div class="usuarios col-md-10">
        <div class="box box-primary">
            <div class="box-body">
                <?= $this->Flash->render('auth') ?>
                    <div class="col-md-5 col-md-offset-4 text-center">
                        <?= $this->Form->create() ?>
                            <fieldset>
                                <legend>
                                    <?= __('Por favor, digitar usuário e senha') ?>
                                </legend>
                                <?= $this->Form->control('usuario', ["label" => 'Usuário']) ?>
                                    <label> Senha</label>
                                    <?= $this->Form->password('senha') ?>
                                        <br>
                            </fieldset>
                            <?= $this->Form->button(__('Login')); ?>
                                <?= $this->Form->end() ?>
                    </div>
            </div>
        </div>
    </div>
