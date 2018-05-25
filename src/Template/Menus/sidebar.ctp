<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- search form (Optional) -->
    <?= $this->Form->create('keywords', 
                [
                    'type' => 'get', 'class' => 'sidebar-form',
                    'url' => [
                        'controller' => 'Paginas', 
                        'action' => 'search'
                    ]
                ]); 
    ?>
    <div class="input-group">
    <?=  $this->Form->text('keyword', [
        'default' => $this->request->query('keyword'),
        'label' => false,
        'class' => 'form-control',
        'placeholder' => 'Buscar Páginas'
    ] ); ?>
    <span class="input-group-btn">
    <?= $this->Form->button( '<i class="fa fa-search"></i>',
                    [
                        'escape'=> false,
                        'class' => "btn btn-flat"
    ]); ?>
    </span>
    </div>
    <?= $this->Form->end();?>
    <!-- /.search form -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <?php foreach ($sidebars as $sidebar): ?>
        <li>
            <?=$this->Html->link(
    '<i class="fa fa-' . $sidebar->icone . '"></i> <span>' . $sidebar->nome . '</span>',
    "/" . $sidebar->home,
    ['escape' => false]
);
?>
        </li>
        <?php endforeach;?>
        <?php 
        $sup = '';
        foreach($superiores as $superior):
            if(!empty($superior->menus) ):
        ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-<?= $superior->icone ?>"></i>
                <span><?= $superior->nome?></span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
            <?php foreach($superior->menus as $menu_inf): ?>
                <li>
                <?=$this->Html->link(
                    '<i class="fa fa-' . $menu_inf->icone . '"></i> <span>' . $menu_inf->nome . '</span>',
                    "/" . $menu_inf->home,
                    ['escape' => false]
                    );
                ?>
                    <!-- <a href="<?=" $sistema->home"?>">
                        <i class="fa fa-<?=$sistema->icone?>"></i>
                        <span>
                            <?=$sistema->nome?>
                        </span>
                    </a> -->
                </li>
                <?php endforeach;?>
            </ul>
        </li>
                <?php 
                    endif;
                    endforeach; 
                    
                ?>
    </ul>
    <!-- /.sidebar-sidebar -->
</section>
<!-- /.sidebar -->
<!-- search plugin -->
