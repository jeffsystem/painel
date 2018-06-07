<?php
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//    CMSLite Versão 1.1                    //
//    Developer: Agencia 3WEB               //
//    Site: agencia3web.com                 //
//    GitHub: github.com/jhowbhz/CMSLite    //
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@


?>
<aside class="main-sidebar">
  <section class="sidebar">
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Buscar...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU PRINCIPAL</li>
      <li>
        <a href="<?php home();?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
         <!-- 
          <span class="pull-right-container">
            <small class="label pull-right bg-green">novo</small>
          </span>
          -->
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i>
          <span>Agenda</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php view();?>horarios.php"><i class="fa fa-circle-o"></i> Horários</a></li>
          <li><a href="<?php view();?>agenda.php"><i class="fa fa-circle-o"></i> Agenda</a></li>
        </ul>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-bag"></i>
            <span>Serviços</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php view();?>adicionar_servicos.php"><i class="fa fa-circle-o"></i> Cadastrar</a></li>
            <li><a href="<?php view();?>listar_servicos.php"><i class="fa fa-circle-o"></i> Listar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Configurações</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php view();?>config.php"><i class="fa fa-circle-o"></i> Empresa</a></li>
            <li><a href="<?php view();?>funcionarios.php"><i class="fa fa-circle-o"></i> Funcionários</a></li>
          </ul>
        </li>
      </li>
    </ul>
  </section>
</aside>