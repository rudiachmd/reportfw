<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url() ?>Karyawan/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Tif</b>UNESA</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><?php foreach ($user->result() as $userdata) echo $userdata->first_name; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">


                  <p>
                    <?php foreach ($user->result() as $userdata) echo $userdata->first_name; ?>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?= base_url() ?>Auth/edit_user/<?php foreach ($user->result() as $userdata) echo $userdata->id; ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url() ?>auth/logout" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

          <a>Halo, <?php foreach ($user->result() as $userdata) echo $userdata->first_name; ?></a>

        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-table"></i> <span>Menu Karyawan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href=""><i class="fa fa-user"></i>Data Klien Baru</a></li>
            </ul>
          </li>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php
      if (isset($klien_data)) { ?>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav navbar-static-top">
                  <h4 style="text-align: center"><strong>Review Klien Baru</strong></h4>
                </ul>
                <form class="form-horizontal" action="<?= base_url() ?>Karyawan/verif" method="post">
                  <?php foreach ($klien_data->result() as $row) { ?>
                    <div class="form-group">
                      <label for="namadepan" class="col-sm-2 control-label">Nama Depan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="namadepan" placeholder="Nama Depan" value="<?php echo $row->first_name; ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="namabelakang" class="col-sm-2 control-label">Nama Belakang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="namabelakang" placeholder="Nama Belakang" value="<?php echo $row->last_name; ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" placeholder="email" value="<?php echo $row->email; ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" placeholder="Alamat" disabled><?php echo $row->address; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nomorktp" class="col-sm-2 control-label">Nomor KTP</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="nomortelepon" placeholder="Nomor KTP" value="<?php echo $row->ktp; ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="fotoktp" class="col-sm-2 control-label">Foto KTP</label>
                      <div class="col-sm-10">
                        <img src="<?= base_url() ?>/upload/ktp/<?= $row->pict_ktp ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="hidden_id" value="<?= $row->id ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="delete" value="delete" class="btn btn-danger delete_data" id="<?= $row->id ?>">Tolak</button>
                        <button type="submit" name="update" value="Insert" class="btn btn-success">Terima</button>
                      </div>
                    </div>
                  <?php } ?>
                </form>
              </div>
              <!-- /.tab-pane -->
              </!-->
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
    </div>
    <!-- /.row -->

    </section>

  <?php
      } else {
  ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Data
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="text-align: center">Data Klien Baru</h3>
            </div>

            <div class="modal modal-danger fade" id="deleteklien">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Peringatan!</h4>
                  </div>
                  <div class="modal-body">
                    <p>Apakah Anda Yakin Ingin Menghapus Data?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline">Hapus</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Daftar Sebagai</th>
                    <th>Nama Lengkap</th>
                    <th>No.KTP</th>
                    <th>Alamat</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($daftar_user_baru->result() as $row) {
                  ?>
                    <tr>
                      <td><?= $row->company ?></td>
                      <td><?= $row->first_name ?> <?= $row->last_name ?></td>
                      <td><?= $row->ktp ?></td>
                      <td><?= $row->address ?></td>
                      <td>
                        <a href="<?= base_url() ?>Karyawan/preview/<?= $row->id ?>"><button class="btn btn-app1"><i class="glyphicon glyphicon-eye-open" style="color:blue"></i></button></a>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
  </div>
  <!-- /.box -->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Website by S1 Teknik Informatika 2016 Universitas Negeri Surabaya </strong>
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->