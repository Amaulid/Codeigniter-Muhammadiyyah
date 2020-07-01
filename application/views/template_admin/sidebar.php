
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/img/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username') ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i>
          <span>BERANDA</span></a></li>        
        <li class="treeview">
          <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
         <span>POSTING</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/berita_admin') ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
              BERITA</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-photo" aria-hidden="true"></i>
         <span>GALERI</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/galeri_admin') ?>"><i class="fa fa-image" aria-hidden="true"></i>
              FOTO</a></li>
            <li><a href="<?php echo base_url('admin/video_admin') ?>"><i class="fa fa-film" aria-hidden="true"></i>
              VIDEO</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
         <span>TENTANG KAMI</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/sejarah') ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
              SEJARAH</a></li>
            <li><a href="<?php echo base_url('admin/visi_admin') ?>"><i class="fa fa-picture-o" aria-hidden="true"></i>
              VISI & MISI</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-gear" aria-hidden="true"></i>
         <span>Setting</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-user" aria-hidden="true"></i>
              Akun</a></li>
            <li><a href="<?php echo base_url('admin/slide') ?>"><i class="fa fa-picture-o" aria-hidden="true"></i>
              Setting Slide</a></li>
          </ul>
        </li>

        <li><a href="<?php echo base_url('admin/inbox') ?>"><i class="fa fa-inbox" aria-hidden="true"></i>
         <span>INBOX</span></a>
       </li>

       <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
          <span>LOGOUT</span></a>
       </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
