<!-- Logo -->
<?=
$this->Html->link(
        '<span class="logo-mini"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></span>
    <span class="logo-lg"><b>HUMAP</b> &nbsp; Intranet</span>', '/paginas/home', ['class' => 'logo', 'escape' => false]
);
?>
</a>


<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
   
    
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="user user-menu">
                <!-- Menu Toggle Button -->
                <?php if ($this->request->session()->read('Auth.User.nome') != null) : ?>
                    <a href="#" class="dropdown-toggle">
                        <span class="user ">
                            <?= $this->request->session()->read('Auth.User.nome'); ?>
                        </span>
                    </a>
                <?php endif ?>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>                
                
                <?=
                ($this->request->session()->read('Auth.User') != null) ?
                 $this->Html->link('Sair', '/usuarios/logout', ['class' => "dropdown-toggle"]) :
                 $this->Html->link('Entrar', '/usuarios/login', ['class' => "dropdown-toggle"]);
                ?>               
                    
            </li>

        </ul>
    </div>
</nav>
