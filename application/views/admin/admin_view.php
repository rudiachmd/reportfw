<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url() ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Kominfo</b>Jatim</span>
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
                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
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
          <div class="pull-left image">
            <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
          </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="treeview">
            <a href="#">
              <i class="fa fa-table"></i> <span>Menu Admin</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li <?php if (isset($daftar_karyawan)) echo 'class="active"' ?>><a href="<?php echo base_url(); ?>Admin/"><i class="fa fa-circle-o"></i>Data Karyawan</a></li>
              <li <?php if (isset($daftar_klien)) echo 'class="active"' ?>><a href="<?php echo base_url(); ?>Admin/klien"><i class="fa fa-circle-o"></i>Data Klien</a></li>
              <li <?php if (isset($daftar_tiket)) echo 'class="active"' ?>><a href="<?php echo base_url(); ?>Admin/tiket"><i class="fa fa-circle-o"></i>Data Tiket</a></li>
              <li <?php if (isset($daftar_masalah)) echo 'class="active"' ?>><a href="<?php echo base_url(); ?>Admin/masalah"><i class="fa fa-circle-o"></i>Data Masalah</a></li>
            </ul>
          </li>
      </section>
      <!-- /.sidebar -->
    </aside>
    <?php
    if (isset($daftar_klien)) {
      ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
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
                  <h3 class="box-title" style="text-align: center">Data Klien</h3>
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

                 <div class="btn-group">
              <button class="btn btn-info" style="margin: 5px 10px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Status Klien
              </button>
              <button type="button" style="margin: 5px -10px;" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Aktif</a>
                </li>
                <li>
                  <a href="#">Non Aktif</a>
                </li>
              </ul>
            </div>


                <!------------Modal------------->
                <div class="modal modal-info fade" id="tambahpenanggap">
                  <div class="modal-dialog">
                    <div class="modal-content" style="width:450px">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="text-align: center">Tambah Karyawan</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group has-feedback">
                          <input name="nama" type="text" style="width:400px" class="form-control" placeholder="Masukkan Nama">

                        </div>
                        <div class="form-group has-feedback">
                          <input name="no_ktp" type="text" style="width:400px" class="form-control" placeholder="No.KTP">

                        </div>
                        <div class="form-group has-feedback">
                          <input name="alamat" type="text" style="width:400px" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="divisi" type="text" style="width:400px" class="form-control" placeholder="Divisi">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <div class="modal modal-info fade" id="updatepenanggap">
                  <div class="modal-dialog">
                    <div class="modal-content" style="width:450px">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="text-align: center">Update Penanggap</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group has-feedback">
                          <input name="nama" type="text" style="width:400px" class="form-control" placeholder="Masukkan Nama">

                        </div>
                        <div class="form-group has-feedback">
                          <input name="no_ktp" type="text" style="width:400px" class="form-control" placeholder="No.KTP">

                        </div>
                        <div class="form-group has-feedback">
                          <input name="alamat" type="text" style="width:400px" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="divisi" type="text" style="width:400px" class="form-control" placeholder="Divisi">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <div class="modal modal-danger fade" id="deletepenanggap">
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
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($daftar_klien->num_rows() > 0) {
                        foreach ($daftar_klien->result() as $rows) {
                          if ($rows->group_id == 3) {
                            ?>
                            <tr>
                              <td><?php echo $rows->first_name ?></td>
                              <td>12-12-12</td>
                              <td>(x)Jl. Jala</td>
                              <td><?php
                                  if ($rows->active == 1) {
                                    echo "Aktif";
                                  } else {
                                    echo "Non Aktif";
                                  } ?></td>
                              <td class="text-center">
                                <button class="btn btn-app1" data-toggle="modal" data-target="#deleteklien"><i class="fa fa-remove" style="color:red"></i></button>
                              </td>
                            </tr>
                          <?php
                          }
                        }
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
      </div>
      <!-- /.box -->
    <?php
    } else if (isset($daftar_masalah)) {
      ?>
      <div class="content-wrapper">
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
                  <h3 class="box-title" style="text-align: center">Data Masalah</h3>
                </div>

                <div class="btn-group">
                  <button class="btn btn-info" style="margin: 5px 10px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu Masalah
                  </button>
                  <button type="button" style="margin: 5px -10px;" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>

                  <ul class="dropdown-menu" role="menu">
                    <li>
                      <a href="#">Asking</a>
                    </li>
                    <li>
                      <a href="#">Software</a>
                    </li>
                    <li>
                      <a href="#">Hardware</a>
                    </li>
                  </ul>
                </div>

                <div class="modal modal-info fade" id="createmasalah">
                  <div class="modal-dialog">
                    <div class="modal-content" style="width:450px">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="text-align: center">Tambah Masalah</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group has-feedback">
                          <input name="id_masalah" type="text" style="width:400px" class="form-control" placeholder="ID_Masalah">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="nama_masalah" type="text" style="width:400px" class="form-control" placeholder="Nama Masalah">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="nilai_masalah" type="text" style="width:400px" class="form-control" placeholder="Nilai">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <div class="modal modal-info fade" id="updatemasalah">
                  <div class="modal-dialog">
                    <div class="modal-content" style="width:450px">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="text-align: center">Tambah Masalah</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group has-feedback">
                          <input name="id_masalah" type="text" style="width:400px" class="form-control" placeholder="ID_Masalah">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="nama_masalah" type="text" style="width:400px" class="form-control" placeholder="Nama Masalah">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="nilai_masalah" type="text" style="width:400px" class="form-control" placeholder="Nilai">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <div class="modal modal-danger fade" id="deletemasalah">
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
                  <h3 class="box-title" style="text-align: center">Asking</h3>
                  <table id="asking" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nama Masalah</th>
                        <th>Nilai</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Anjing</td>
                        <td> 123123123</td>
                        <td class="text-center">
                          <button class="btn btn-app1" data-toggle="modal" data-target="#createmasalah"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#updatemasalah"><i class="fa fa-edit" style="color: green"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#deletemasalah"><i class="fa fa-remove" style="color:red"></i></button>
                        </td>
                      </tr>
                      <?php
                      if ($daftar_masalah->num_rows())
                        ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>

                <div class="box-body">
                  <table id="hardware" class="table table-bordered table-hover">
                    <h3 class="box-title" style="text-align: center">Hardware</h3>
                    <thead>
                      <tr>
                        <th>ID Masalah</th>
                        <th>Nama Masalah</th>
                        <th>Nilai</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>001</td>
                        <td>Anjing</td>
                        <td> 123123123</td>
                        <td class="text-center">
                          <button class="btn btn-app1" data-toggle="modal" data-target="#createmasalah"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#updatemasalah"><i class="fa fa-edit" style="color: green"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#deletemasalah"><i class="fa fa-remove" style="color:red"></i></button>
                        </td>


                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Abdul
                        </td>
                        <td> 123123123</td>
                        <td class="text-center">
                          <button class="btn btn-app1" data-toggle="modal" data-target="#createmasalah"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#updatemasalah"><i class="fa fa-edit" style="color: green"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#deletemasalah"><i class="fa fa-remove" style="color:red"></i></button>
                        </td>

                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Abdul
                        </td>
                        <td> 123123123</td>
                        <td class="text-center">
                          <button class="btn btn-app1" data-toggle="modal" data-target="#createmasalah"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#updatemasalah"><i class="fa fa-edit" style="color: green"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#deletemasalah"><i class="fa fa-remove" style="color:red"></i></button>

                        </td>

                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Abdul
                        </td>
                        <td> 123123123</td>
                        <td class="text-center">
                          <button class="btn btn-app1" data-toggle="modal" data-target="#createmasalah"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#updatemasalah"><i class="fa fa-edit" style="color: green"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#deletemasalah"><i class="fa fa-remove" style="color:red"></i></button>

                        </td>

                      </tr>
                      <tr>
                        <td>001</td>
                        <td>Abdul
                        </td>
                        <td> 123123123</td>
                        <td class="text-center">
                          <button class="btn btn-app1" data-toggle="modal" data-target="#createmasalah"><i class="fa fa-edit"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#updatemasalah"><i class="fa fa-edit" style="color: green"></i></button>
                          <button class="btn btn-app1" data-toggle="modal" data-target="#deletemasalah"><i class="fa fa-remove" style="color:red"></i></button>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>

                <!-- /.box-body -->
              </div>
            </div>
        </section>
      </div>
    <?php
  } else if (isset($daftar_tiket)) {
    ?>
      <div class="content-wrapper">
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
                  <h3 class="box-title" style="text-align: center">Data Tiket</h3>
                </div>

              <div class="btn-group">
              <button class="btn btn-info" style="margin: 5px 10px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Status Tiket
              </button>
              <button type="button" style="margin: 5px -10px;" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#">Open</a>
                </li>
                <li>
                  <a href="#">Close</a>
                </li>
              </ul>
            </div>


            <button type="button" class="btn btn-success" style="margin: 5px 10px;" data-toggle="modal" data-target="#tambahpenanggap">
              Export Excel
            </button>
                <div class="modal modal-danger fade" id="deletetiket">
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
                        <th>Tiket</th>
                        <th>Nama</th>
                        <th>Keluhan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($daftar_tiket->num_rows() > 0) {
                        foreach ($daftar_tiket->result() as $rows) {
                          ?>
                          <tr>
                            <td><?php echo $rows->id_ticket ?></td>
                            <td><?php echo $rows->id_user ?></td>
                            <td><?php echo $rows->id_problem ?></td>
                            <td><?php echo $rows->date_time ?></td>
                            <td><?php echo $rows->status ?></td>
                            <td class="text-center">
                              <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket"><i class="fa fa-remove" style="color:red"></i></button>
                            </td>
                          </tr>
                        <?php
                        }
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
      </div>
    <?php
    } else {
      ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
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
                  <h3 class="box-title" style="text-align: center">Data Karyawan</h3>
                </div>


                <!------------Modal------------->
                <button type="button" class="btn btn-info" style="margin: 5px 10px;" data-toggle="modal" data-target="#tambahpenanggap">
                  Tambah
                </button>
                <div class="modal modal-info fade" id="tambahpenanggap">
                  <div class="modal-dialog">
                    <div class="modal-content" style="width:450px">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="text-align: center">Tambah Karyawan</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group has-feedback">
                          <input name="nama" type="text" style="width:400px" class="form-control" placeholder="Masukkan Nama">

                        </div>

                        <div class="form-group has-feedback">
                          <input name="no_ktp" type="text" style="width:400px" class="form-control" placeholder="No.KTP">

                        </div>
                        <div class="form-group has-feedback">
                          <input name="alamat" type="text" style="width:400px" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="divisi" type="text" style="width:400px" class="form-control" placeholder="Divisi">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <div class="modal modal-info fade" id="updatepenanggap">
                  <div class="modal-dialog">
                    <div class="modal-content" style="width:450px">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" style="text-align: center">Update Penanggap</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group has-feedback">
                          <input name="nama" type="text" style="width:400px" class="form-control" placeholder="Masukkan Nama">

                        </div>
                        <div class="form-group has-feedback">
                          <input name="no_ktp" type="text" style="width:400px" class="form-control" placeholder="No.KTP">

                        </div>
                        <div class="form-group has-feedback">
                          <input name="alamat" type="text" style="width:400px" class="form-control" placeholder="Alamat">
                        </div>
                        <div class="form-group has-feedback">
                          <input name="divisi" type="text" style="width:400px" class="form-control" placeholder="Divisi">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline">Save changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>

                <div class="modal modal-danger fade" id="deletepenanggap">
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
                        <th>Nama</th>
                        <th>No. KTP</th>
                        <th>Alamat</th>
                        <th>Divisi</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($daftar_karyawan->num_rows() > 0) {
                        foreach ($daftar_karyawan->result() as $rows) {
                          if ($rows->group_id == 2 || $rows->group_id == 4) {
                            ?>
                            <tr>
                              <td><?php echo $rows->username ?></td>
                              <td>(x)123123123</td>
                              <td>(x)Jl. Jala</td>
                              <td><?php
                                  if ($rows->group_id == 2) {
                                    echo "karyawan a";
                                  } elseif ($rows->group_id == 4) {
                                    echo "karyawan b";
                                  }
                                  ?></td>
                              <td class="text-center">
                                <button class="btn btn-app1" data-toggle="modal" data-target="#updatepenanggap"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-app1" data-toggle="modal" data-target="#deletepenanggap"><i class="fa fa-remove" style="color:red"></i></button>
                              </td>
                            </tr>
                          <?php
                          }
                        }
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
      </div>
      <!-- /.box -->
    <?php
    }
    ?>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Website by S1 Teknik Informatika 2016.</strong> Universitas Negeri Surabaya
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->