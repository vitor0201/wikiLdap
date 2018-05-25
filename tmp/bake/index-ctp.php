<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Utility\Inflector;

$fields = collection($fields)
    ->filter(function($field) use ($schema) {
        return !in_array($schema->columnType($field), ['binary', 'text']);
    })
    ->take(7);
?>
    <div class="row">
        <div class="col-md-2" id="actions-sidebar">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <CakePHPBakeOpenTag= __('Ações') CakePHPBakeCloseTag>
                    </h3>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <CakePHPBakeOpenTag= $this->Html->link(__('New {0}', ['<?= $singularHumanName ?>']), ['action' => 'add']) CakePHPBakeCloseTag>
                    </li>
                    <?php
            $done = [];
            foreach ($associations as $type => $data):
                foreach ($data as $alias => $details):
                    if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
        ?>
                        <li>
                            <CakePHPBakeOpenTag= $this->Html->link(__('Listar {0}', ['<?= $this->_pluralHumanName($alias) ?>']), ['controller' => '<?= $details['controller'] ?>', 'action' => 'index']) CakePHPBakeCloseTag>
                        </li>
                        <li>
                            <CakePHPBakeOpenTag= $this->Html->link(__('Novo {0}', ['<?= $this->_singularHumanName($alias) ?>']), ['controller' => '<?= $details['controller'] ?>', 'action' => 'add']) CakePHPBakeCloseTag>
                        </li>
                        <?php
                        $done[] = $details['controller'];
                    endif;
                endforeach;
            endforeach;
        ?>
                </ul>
            </div>
        </div>
        <div class="<?= $pluralVar ?> col-md-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?= $pluralHumanName ?>
                    </h3>
                </div>
                <div class="table-responsive">
                    <div class="box-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <?php foreach ($fields as $field): ?>
                                        <th>
                                            <CakePHPBakeOpenTag= $this->Paginator->sort('<?= $field ?>') CakePHPBakeCloseTag>
                                        </th>
                                        <?php endforeach; ?>
                                            <th class="actions">
                                                <CakePHPBakeOpenTag= __('Ações') CakePHPBakeCloseTag>
                                            </th>
                                </tr>
                            </thead>
                            <tbody>
                                <CakePHPBakeOpenTagphp foreach ($<?= $pluralVar ?> as $<?= $singularVar ?>): CakePHPBakeCloseTag>
                                <tr>
                                    <?php        foreach ($fields as $field) {
                        $isKey = false;
                        if (!empty($associations['BelongsTo'])) {
                            foreach ($associations['BelongsTo'] as $alias => $details) {
                                if ($field === $details['foreignKey']) {
                                    $isKey = true;
            ?>
                                        <td>
                                            <CakePHPBakeOpenTag= $<?= $singularVar ?>->has('<?= $details['property'] ?>') ? $this->Html->link($<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['displayField'] ?>, ['controller' => '<?= $details['controller'] ?>', 'action' => 'view', $<?= $singularVar ?>-><?= $details['property'] ?>-><?= $details['primaryKey'][0] ?>]) : '' CakePHPBakeCloseTag>
                                        </td>
                                        <?php
                                    break;
                                }
                            }
                        }
                        if ($isKey !== true) {
                            if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
            ?>
                                            <td>
                                                <CakePHPBakeOpenTag= h($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag>
                                            </td>
                                            <?php
                            } else {
            ?>
                                                <td>
                                                    <CakePHPBakeOpenTag= $this->Number->format($<?= $singularVar ?>-><?= $field ?>) CakePHPBakeCloseTag>
                                                </td>
                                                <?php
                            }
                        }
                    }

                    $pk = '$' . $singularVar . '->' . $primaryKey[0];
            ?>
                                                    <td class="actions" style="white-space:nowrap">
                                                        <CakePHPBakeOpenTag= $this->Html->link(__('Visualizar'), ['action' => 'view', <?= $pk ?>], ['class'=>'btn btn-default btn-xs']) CakePHPBakeCloseTag>
                                                            <CakePHPBakeOpenTag= $this->Html->link(__('Editar'), ['action' => 'edit', <?= $pk ?>], ['class'=>'btn btn-primary btn-xs']) CakePHPBakeCloseTag>
                                                                <CakePHPBakeOpenTag= $this->Form->postLink(__('Deletar'), ['action' => 'delete', <?= $pk ?>], ['confirm' => __('Você está certo que quer deletar # {0}?', <?= $pk ?>), 'class'=>'btn btn-danger btn-xs']) CakePHPBakeCloseTag>
                                                    </td>
                                </tr>
                                <CakePHPBakeOpenTagphp endforeach; CakePHPBakeCloseTag>
                            </tbody>
                        </table>
                        <div class="paginator text-center">
                            <ul class="pagination">
                                <CakePHPBakeOpenTag= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) CakePHPBakeCloseTag>
                                    <CakePHPBakeOpenTag= $this->Paginator->numbers(['escape'=>false]) CakePHPBakeCloseTag>
                                        <CakePHPBakeOpenTag= $this->Paginator->next(__('próximo') . ' &raquo;', ['escape'=>false]) CakePHPBakeCloseTag>
                            </ul>
                            <p>
                                <CakePHPBakeOpenTag= $this->Paginator->counter(__('Página {{page}} de {{pages}}')) CakePHPBakeCloseTag>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
