<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo base_url('assets/template/')?>dist/img/user.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Administrator</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <!-- <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form> -->
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
          <i class="pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active"><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-cubes"></i>
        <span>Access Point</span>
        <span class="pull-right-container">
          <span class="fa fa-angle-left pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo site_url('ap/stock/index'); ?>"><i class="fa fa-cube"></i>Stock Access Point</a></li>
        <li><a href="<?php echo site_url('ap/masuk/index'); ?>"><i class="fa fa-cube"></i>Access Point Masuk</a></li>
        <li><a href="<?php echo site_url('ap/keluar/index'); ?>"><i class="fa fa-cube"></i>Access Point Keluar</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i>
        <span>User Management</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right"></span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?php echo site_url('users/index'); ?>"><i class="fa fa-user"></i>Lihat User</a></li>
        <li><a href="<?php echo site_url('users/create'); ?>"><i class="fa fa-user"></i>Tambah User</a></li>
        <li><a href="<?php echo site_url('users/edit'); ?>"><i class="fa fa-user"></i>Edit User</a></li>
      </ul>
    </li>
  </ul>
</section>
<!-- /.sidebar -->
