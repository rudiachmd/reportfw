<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url() ?>Admin/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>TIf</b>UNESA</span>
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

          <a>Halo, <?php foreach ($user->result() as $userdata) echo $userdata->first_name; ?></a>

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
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-user"></i><span>Data Karyawan</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li <?php if (isset($karyawan_asking)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/"><i class="fa fa-circle-o"></i> Data Karyawan Asking</a></li>
                  <li <?php if (isset($karyawan_software)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/kar_software/"><i class="fa fa-circle-o"></i> Data Karyawan Software</a></li>
                  <li <?php if (isset($karyawan_hardware)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/kar_hardware/"><i class="fa fa-circle-o"></i> Data Karyawan Hardware</a></li>
                  <li <?php if (isset($karyawan_verifikasi)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/kar_verifikasi/"><i class="fa fa-circle-o"></i> Data Karyawan Akun</a></li>
                </ul>
              </li>
              <li <?php if (isset($daftar_klien)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/klien/"><i class="fa fa-users"></i>Data Klien</a></li>
              <li <?php if (isset($daftar_tiket)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/tiket/"><i class="fa  fa-envelope"></i>Data Tiket</a></li>


              <li class="treeview">
                <a href="#">
                  <i class="fa fa-warning"></i><span>Data Masalah</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li <?php if (isset($asking)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/asking/"><i class="fa fa-circle-o"></i> Data Masalah Asking</a></li>
                  <li <?php if (isset($software)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/software/"><i class="fa fa-circle-o"></i> Data Masalah Software</a></li>
                  <li <?php if (isset($hardware)) echo 'class="active"' ?>><a href="<?= base_url(); ?>Admin/hardware/"><i class="fa fa-circle-o"></i> Data Masalah Hardware</a></li>
                </ul>
              </li>

            </ul>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
    <?php
    if (isset($daftar_klien)) {
    ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">



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
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($daftar_klien->num_rows() > 0) {
                        foreach ($daftar_klien->result() as $rows) {
                      ?>
                          <tr>
                            <td><?= $rows->first_name ?></td>
                            <td><?= $rows->birth ?></td>
                            <td><?= $rows->address ?></td>
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
      <!-- /.box -->
    <?php
    } elseif (isset($hardware)) { ?>
      <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Masalah</h3>
                </div>

                <button type="button" class="btn btn-success" style="margin: 5px 12px;" data-toggle="modal" data-target="#createmasalah">
                  Tambah Masalah
                </button>

                <div class="modal modal-info fade" id="createmasalah">
                  <form action="<?= base_url() ?>Admin/tambah_hardware" method="post">
                    <div class="modal-dialog">
                      <div class="modal-content" style="width:450px">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" style="text-align: center">Tambah Masalah</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group has-feedback">
                            <input name="id_masalah" type="hidden" style="width:400px" class="form-control" placeholder="ID_Masalah">
                          </div>
                          <div class="form-group has-feedback">
                            <input name="nama_masalah" type="text" style="width:400px" class="form-control" placeholder="Nama Masalah">
                            <span class="text-danger"><?php echo form_error("nama_masalah") ?></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input name="" type="hidden" style="width:400px" class="form-control" placeholder="Nilai">
                            <p>Nilai Masalah</p>
                            <select name="nilai_masalah" style="width:400px" class="form-control" placeholder="Nilai">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                            <span class="text-danger"><?php echo form_error("nilai_masalah") ?></span>

                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-outline">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </form>
                </div>



                <!-- /.box-header -->
                <div class="box-body">
                  <h3 class="box-title" style="text-align: center">Hardware</h3>
                  <table id="asking" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nama Masalah</th>
                        <th>Nilai</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($hardware->result() as $rows) { ?>
                        <tr>
                          <td><?= $rows->problem_details ?></td>
                          <td><?= $rows->score ?></td>
                          <td>
                            <a href="<?= base_url() ?>Admin/edit_masalah/<?= $rows->id_problem ?>"><button class="btn btn-app1"><i class="fa fa-edit"></i></button></a>

                          </td>
                        </tr>
                        <div class="modal modal-danger fade" id="deletemasalah<?= $rows->id_problem ?>">
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
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                      <?php }
                      ?>
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
    } elseif (isset($software)) { ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Masalah</h3>
                </div>
                <button type="button" class="btn btn-success" style="margin: 5px 12px;" data-toggle="modal" data-target="#createmasalah">
                  Tambah Masalah
                </button>


                <div class="modal modal-info fade" id="createmasalah">
                  <form action="<?= base_url() ?>Admin/tambah_software" method="post">
                    <div class="modal-dialog">
                      <div class="modal-content" style="width:450px">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" style="text-align: center">Tambah Masalah</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group has-feedback">
                            <input name="id_masalah" type="hidden" style="width:400px" class="form-control" placeholder="ID_Masalah">
                          </div>
                          <div class="form-group has-feedback">
                            <input name="nama_masalah" type="text" style="width:400px" class="form-control" placeholder="Nama Masalah">
                            <span class="text-danger"><?php echo form_error("nama_masalah") ?></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input name="" type="hidden" style="width:400px" class="form-control" placeholder="Nilai">
                            <p>Nilai Masalah</p>
                            <select name="nilai_masalah" style="width:400px" class="form-control" placeholder="Nilai">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                            <span class="text-danger"><?php echo form_error("nilai_masalah") ?></span>

                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-outline">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </form>
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
                  <h3 class="box-title" style="text-align: center">Software</h3>
                  <table id="asking" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nama Masalah</th>
                        <th>Nilai</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($software->result() as $rows) { ?>
                        <tr>
                          <td><?= $rows->problem_details ?></td>
                          <td><?= $rows->score ?></td>
                          <td>
                            <a href="<?= base_url() ?>Admin/edit_masalah/<?= $rows->id_problem ?>"><button class="btn btn-app1"><i class="fa fa-edit"></i></button></a>

                          </td>
                        </tr>
                        <div class="modal modal-danger fade" id="deletemasalah<?= $rows->id_problem ?>">
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
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                      <?php }
                      ?>
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
    } else if (isset($asking)) {
    ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Masalah</h3>
                </div>
                <button type="button" class="btn btn-success" style="margin: 5px 12px;" data-toggle="modal" data-target="#createmasalah">
                  Tambah Masalah
                </button>


                <div class="modal modal-info fade" id="createmasalah">
                  <form action="<?= base_url() ?>Admin/tambah_asking" method="post">
                    <div class="modal-dialog">
                      <div class="modal-content" style="width:450px">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" style="text-align: center">Tambah Masalah</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group has-feedback">
                            <input name="id_masalah" type="hidden" style="width:400px" class="form-control" placeholder="ID_Masalah">
                          </div>
                          <div class="form-group has-feedback">
                            <input name="nama_masalah" type="text" style="width:400px" class="form-control" placeholder="Nama Masalah">
                            <span class="text-danger"><?php echo form_error("nama_masalah") ?></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input name="" type="hidden" style="width:400px" class="form-control" placeholder="Nilai">
                            <p>Nilai Masalah</p>
                            <select name="nilai_masalah" style="width:400px" class="form-control" placeholder="Nilai">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                            </select>
                            <span class="text-danger"><?php echo form_error("nilai_masalah") ?></span>

                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" name="submit" class="btn btn-outline">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </form>
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
                      <?php
                      foreach ($asking->result() as $rows) { ?>
                        <tr>
                          <td><?= $rows->problem_details ?></td>
                          <td><?= $rows->score ?></td>
                          <td>
                            <a href="<?= base_url() ?>Admin/edit_masalah/<?= $rows->id_problem ?>"><button class="btn btn-app1"><i class="fa fa-edit"></i></button></a>
                          </td>
                        </tr>
                        <div class="modal modal-danger fade" id="deletemasalah<?= $rows->id_problem ?>">
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
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                      <?php }
                      ?>
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


          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title" style="text-align: center">Data Tiket</h3>
                  </div>

                  <button type="button" class="btn btn-success" style="margin: 5px 10px;" data-toggle="modal" data-target="#tambahpenanggap">
                    Export Excel
                  </button>

                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Tiket</th>
                          <th>Nama</th>
                          <th>Keluhan</th>
                          <th>Tanggal</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if ($daftar_tiket->num_rows() > 0) {
                          foreach ($daftar_tiket->result() as $rows) {
                        ?>
                            <tr>
                              <td><?= $rows->id_ticket ?></td>
                              <td><?= $rows->first_name ?></td>
                              <td><?= $rows->name ?> - <?= $rows->problem_details ?></td>
                              <td><?= $rows->date_time ?></td>
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
    } elseif (isset($karyawan_verifikasi)) { ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Karyawan Verifikasi</h3>
                </div>


                <a href="<?php echo base_url() ?>auth/create_user_new">
                  <button type="button" class="btn btn-info" style="margin: 5px 10px;">
                    Tambah
                  </button>
                </a>

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
                        <th>Divisi</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($karyawan_verifikasi->num_rows() > 0) {
                        foreach ($karyawan_verifikasi->result() as $rows) {

                      ?>
                          <tr>
                            <td><?= $rows->username ?></td>
                            <td><?= $rows->name  ?></td>
                            <td class="text-center">
                              <button class="btn btn-app1" data-toggle="modal" data-target="#deletepenanggap<?= $rows->id ?>"><i class="fa fa-remove" style="color:red"></i></button>
                            </td>
                          </tr>
                          <div class="modal modal-danger fade" id="deletepenanggap<?= $rows->id ?>">
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
                                  <a href="<?= base_url() ?>Admin/hapus_karyawan_asking/<?= $rows->id ?>"><button type="button" class="btn btn-outline">Hapus</button></a>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
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
      <!-- /.box -->
    <?php
    } elseif (isset($karyawan_hardware)) { ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Karyawan Hardware</h3>
                </div>


                <a href="<?php echo base_url() ?>auth/create_user_hardware">
                  <button type="button" class="btn btn-info" style="margin: 5px 10px;">
                    Tambah
                  </button>
                </a>

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
                        <th>Divisi</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($karyawan_hardware->num_rows() > 0) {
                        foreach ($karyawan_hardware->result() as $rows) {

                      ?>
                          <tr>
                            <td><?= $rows->username ?></td>
                            <td><?= $rows->name  ?></td>
                            <td class="text-center">
                              <button class="btn btn-app1" data-toggle="modal" data-target="#deletepenanggap<?= $rows->id ?>"><i class="fa fa-remove" style="color:red"></i></button>
                            </td>
                          </tr>
                          <div class="modal modal-danger fade" id="deletepenanggap<?= $rows->id ?>">
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
                                  <a href="<?= base_url() ?>Admin/hapus_karyawan_asking/<?= $rows->id ?>"><button type="button" class="btn btn-outline">Hapus</button></a>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
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
      <!-- /.box -->
    <?php
    } elseif (isset($karyawan_software)) { ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Karyawan Software</h3>
                </div>


                <a href="<?php echo base_url() ?>auth/create_user_software">
                  <button type="button" class="btn btn-info" style="margin: 5px 10px;">
                    Tambah
                  </button>
                </a>

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
                        <th>Divisi</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($karyawan_software->num_rows() > 0) {
                        foreach ($karyawan_software->result() as $rows) {

                      ?>
                          <tr>
                            <td><?= $rows->username ?></td>
                            <td><?= $rows->name  ?></td>
                            <td class="text-center">
                              <button class="btn btn-app1" data-toggle="modal" data-target="#deletepenanggap<?= $rows->id ?>"><i class="fa fa-remove" style="color:red"></i></button>
                            </td>
                          </tr>
                          <div class="modal modal-danger fade" id="deletepenanggap<?= $rows->id ?>">
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
                                  <a href="<?= base_url() ?>Admin/hapus_karyawan_asking/<?= $rows->id ?>"><button type="button" class="btn btn-outline">Hapus</button></a>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
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
      <!-- /.box -->
    <?php
    } elseif (isset($edit_masalah)) { ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="text-align: center">
            Form Masalah
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-12">
              <div class="box box-success">
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- text input -->
                  <form class="form-horizontal" method="post" action="<?= base_url() ?>Admin/rubah_masalah/">
                    <?php foreach ($edit_masalah->result() as $rows) { ?>
                      <div>
                        <label>Nama Masalah</label>
                        <input name="nama" id="nama" type="text" class="form-control" value="<?= $rows->problem_details ?>">
                      </div>
                      <div>
                        <label>Nilai Masalah</label>
                        <select id="nilai" name="nilai" class="form-control" id="nilai_masalah">
                          <option value="1" <?php if ($rows->score == 1) echo 'selected'; ?>>1</option>
                          <option value="2" <?php if ($rows->score == 2) echo 'selected'; ?>>2</option>
                          <option value="3" <?php if ($rows->score == 3) echo 'selected'; ?>>3</option>
                          <option value="4" <?php if ($rows->score == 4) echo 'selected'; ?>>4</option>
                          <option value="5" <?php if ($rows->score == 5) echo 'selected'; ?>>5</option>
                        </select>
                      </div>
                      <input name="id" type="hidden" value="<?= $rows->id_problem ?>">
                    <?php } ?>
                    <div style="margin: 10px 2px; class=" col-xs-2">
                      <button name="submit" type="submit" class="btn btn-success btn-flat">Simpan
                      </button>
                    </div>
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
    <?php } else {
    ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Karyawan Asking</h3>
                </div>


                <a href="<?php echo base_url() ?>auth/create_user_asking">
                  <button type="button" class="btn btn-info" style="margin: 5px 10px;">
                    Tambah
                  </button>
                </a>

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


                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if ($karyawan_asking->num_rows() > 0) {
                        foreach ($karyawan_asking->result() as $rows) {

                      ?>
                          <tr>
                            <td><?= $rows->username ?></td>
                            <td><?= $rows->name  ?></td>
                            <td class="text-center">
                              <button class="btn btn-app1" data-toggle="modal" data-target="#deletepenanggap<?= $rows->id ?>"><i class="fa fa-remove" style="color:red"></i></button>
                            </td>
                          </tr>
                          <div class="modal modal-danger fade" id="deletepenanggap<?= $rows->id ?>">
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
                                  <a href="<?= base_url() ?>Admin/hapus_karyawan_asking/<?= $rows->id ?>"><button type="button" class="btn btn-outline">Hapus</button></a>
                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
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
      <!-- /.box -->
    <?php
    }
    ?>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
      </div>
      <strong>Website by S1 Teknik Informatika 2016 Universitas Negeri Surabaya</strong>
    </footer>


    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->