<?=$this->Html->script(['_script.js', '/ckeditor/ckeditor']); ?>
    <div class="row">
        <div class="col-md-2" id="actions-sidebar">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?=__('Ações') ?>
                    </h3>
                </div>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <?=$this->Html->link(__('Listar {0}', 'Páginas'), ['action' => 'index']) ?>
                    </li>
                    <li>
                        <?=$this->Html->link(__('Listar {0}', 'Subcategorias'), ['controller' => 'Subcategorias', 'action' => 'index']) ?>
                    </li>
                    <li>
                        <?=$this->Html->link(__('Nova {0}', 'Subcategoria'), ['controller' => 'Subcategorias', 'action' => 'add']) ?>
                    </li>
                    <li>
                        <?=$this->Html->link(__('Listar {0}', 'Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?>
                    </li>
                    <li>
                        <?=$this->Html->link(__('Novo {0}', 'Usuário'), ['controller' => 'Usuarios', 'action' => 'add']) ?>
                    </li>
                    <li>
                        <?=$this->Html->link(__('Listar {0}', 'Tags'), ['controller' => 'Tags', 'action' => 'index']) ?>
                    </li>
                    <li>
                        <?=$this->Html->link(__('Nova {0}', 'Tag'), ['controller' => 'Tags', 'action' => 'add']) ?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="paginas col-lg-10 col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?='Adicionar Página' ?>
                    </h3>
                </div>
                <div class="box-body">
                    <?=$this->Form->create($pagina,['id'=>'form']) ?>
                        <fieldset>
                            <?php
                                echo $this->Form->input('title', ['label' => 'Título']);
                                echo $this->Form->input('active', ['checked' => 'checked', 'label' => 'Ativo']);
                                echo $this->Form->input('body', ['name' => 'body', 'error' => ['This field cannot be left empty' => __('Este campo não pode ser vazio!')]]);
                                // echo $this->Form->input('subcategorias', ['options' => $subcategorias->descricao]);
                                echo $this->Form->input('usuarios._ids', ['options' => $usuarios]);
                                ?>
                                <div class="form-group select">
                                    <div>
                                        <label>Categoria</label>
                                        <select id="categorias" class="form form-control" required></select>
                                    </div>
                                    <div>
                                        <label>Subcategoria</label>
                                        <select name="subcategoria_id" id="subcategorias" class="form form-control" required></select>
                                    </div>
                                </div>
                        </fieldset>
                        <?=$this->Form->button(__('Enviar')) ?>
                            <?=$this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        var json = <?= json_encode($subcategorias) ?>;

        function categorias() {
            json.forEach(function (index, key) {
                var categoria = document.getElementById("categorias");
                var option = document.createElement("option");
                option.text = json[key].descricao;
                option.value = json[key].id;
                categoria.add(option);
            });
        }
        categorias();

        function subcategoria() {
            var categorias = (document.getElementById("categorias").selectedIndex);
            var subcategoria = document.getElementById("subcategorias");
            subcategoria.innerHTML = '';
            console.log(subcategoria);
            json[categorias].subcategorias.forEach(function (index, key) {
                console.log(subcategoria);
                var option = document.createElement("option");
                option.text = index.descricao;
                option.value = index.id;
                subcategoria.add(option);
            });
        }
        document.getElementById("categorias").addEventListener("change", subcategoria);

    </script>
