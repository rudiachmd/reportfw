<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?= base_url() ?>Karyawan_asking/" class="logo">
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
              <i class="fa fa-table"></i><span>Menu Karyawan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li <?php if (isset($daftar_tiket_resp)) echo 'class="active"'; ?>><a href="<?= base_url() ?>Karyawan_asking/"><i class="fa fa-check-circle"></i> Tiket Respon</a></li>
              <li <?php if (isset($daftar_tiket_xresp)) echo 'class="active"'; ?>><a href="<?= base_url() ?>Karyawan_asking/xresp/"><i class="fa fa-envelope-o"></i> Tiket Belum Respon</a></li>
              <li <?php if (isset($daftar_tiket_close)) echo 'class="active"'; ?>><a href="<?= base_url() ?>Karyawan_asking/close/"><i class="fa fa-close"></i> Tiket Close</a></li>
            </ul>
          </li>
        </ul>
        </li>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <?php if (isset($daftar_tiket_xresp)) { ?>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Tiket</h3>
                </div>



                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID Tiket</th>
                        <th>Nama Pengirim</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($daftar_tiket_xresp->result() as $row) {
                      ?>
                        <tr>
                          <td><?= $row->id_ticket ?></td>
                          <td><?= $row->first_name ?></td>
                          <td><?= $row->details ?></td>
                          <td><?= $row->date_time ?></td>
                          <td>
                            <a href="<?= base_url() ?>Karyawan_asking/detail_tiket/<?= $row->id_ticket ?>"><button class="btn btn-app1" data-toggle="modal" data-target="#detailtiket"><i class="fa fa-edit"></i></button></a>
                            <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket<?= $row->id_ticket ?>"><i class="fa fa-remove" style="color:red"></i></button>
                          </td>
                        </tr>
                        <div class="modal modal-danger fade" id="deletetiket<?= $row->id_ticket ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Peringatan!</h4>
                              </div>
                              <div class="modal-body">
                                <p>Apakah Anda Yakin Ingin Menutup Tiket?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                                <a href="<?= base_url() ?>Karyawan_asking/close_tiket/<?= $row->id_ticket ?>"><button type="button" class="btn btn-outline">Ya</button></a>
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
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
      <?php
      } elseif (isset($daftar_tiket_close)) { ?>
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="text-align: center">Data Tiket</h3>
                </div>

                <div class="modal modal-danger fade" id="deletetiket">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Peringatan!</h4>
                      </div>
                      <div class="modal-body">
                        <p>Apakah Anda Yakin Ingin Menutup Tiket?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-outline">Ya</button>
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
                        <th>ID Tiket</th>
                        <th>Nama Pengirim</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($daftar_tiket_close->result() as $row) {
                      ?>
                        <tr>
                          <td><?= $row->id_ticket ?></td>
                          <td><?= $row->first_name ?></td>
                          <td><?= $row->details ?></td>
                          <td><?= $row->date_time ?></td>
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
      <?php } elseif (isset($detail_tiket)) { ?>
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content-header">
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav navbar-static-top">
                  <h4 style="text-align: center"><strong>Review Tiket</strong></h4>
                </ul>
                <form class="form-horizontal" action="<?= base_url() ?>Karyawan_asking/send_chat/" method="post">
                  <?php
                  foreach ($detail_tiket->result() as $row) {
                  ?>
                    <div class="form-group">
                      <label for="namapengirim" class="col-sm-2 control-label">Nama Pengirim</label>
                      <div class=" col-sm-8">
                        <input type="text" class="form-control" id="namapengirim" placeholder="Nama Pengirim" value="<?= $row->first_name ?> <?= $row->last_name ?>" disabled>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kategoritiket" class="col-sm-2 control-label">Kategori Tiket</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="kategoritiket" placeholder="Kategori Tiket" value="<?= $row->name ?> - <?= $row->problem_details ?>" disabled>
                      </div>
                    </div>
                    <hr width="100%">
                    <div class="form-group">
                      <div class="row comments2 mb-2">
                        <div class="col-md-1 col-sm-2 col-7">
                        </div>
                        <div class="col-md-8 col-sm-9 col-9 comment rounded mb-2">
                          <h4 class="m-0"><strong><?= $row->first_name ?> <?= $row->last_name ?></strong></h4>
                          <p class="mb-0 text-white"><?= $row->details ?></p>
                        </div>
                      </div>
                    </div>
                    <?php foreach ($data_chat->result() as $chat) {
                      if ($chat->group_id == 3) { ?>
                        <div class="form-group">
                          <div class="row comments2 mb-2">
                            <div class="col-md-1 col-sm-2 col-7">
                            </div>
                            <div class="col-md-8 col-sm-9 col-9 comment rounded mb-2">
                              <h4 class="m-0"><strong> <?= $chat->first_name ?> <?= $chat->last_name ?></strong></h4>
                              <p class="mb-0 text-white"><?= $chat->message ?></p>
                            </div>
                          </div>
                        </div>
                      <?php } else { ?>
                        <div class="form-group">
                          <div class="row comments mb-2">
                            <div class="col-md-2 col-sm-1 col-3">
                            </div>
                            <div class="col-md-8 col-sm-8 col-9 comment rounded mb-2">
                              <h4 class="m-0"><strong><?= $chat->first_name ?> <?= $chat->last_name ?></strong></h4>
                              <p class="mb-0 text-white"><?= $chat->message ?></p>
                            </div>
                          </div>
                        </div>
                      <?php }
                      ?>
                    <?php } ?>
                    <div class="form-group">
                      <div class="row comments mb-2">
                        <div class="col-md-1 col-sm-2 col-7">
                        </div>
                        <div class="col-md-8 col-sm-7 col-8 pr-0 comment-box">
                          <input type="hidden" name="hidden_id" value="<?= $row->id ?>">
                          <input type="hidden" name="hidden_id_tiket" value="<?= $row->id_ticket ?>">
                          <input type="text" name="chat" class="form-control" placeholder="Balas Chat......." />
                        </div>
                        <div class="col-md-1 col-sm-2 col-2 pl-0 text-center send-btn">
                          <button name="submit" type="submit" class="btn btn-info">Send</button>
                        </div>
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
  </div>

  </section>
<?php } else { ?>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title" style="text-align: center">Data Tiket</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Tiket</th>
                  <th>Nama Pengirim</th>
                  <th>Judul</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($daftar_tiket->result() as $row) {
                ?>
                  <tr>
                    <td><?= $row->id_ticket ?></td>
                    <td><?= $row->first_name ?></td>
                    <td><?= $row->details ?></td>
                    <td><?= $row->date_time ?></td>
                    <td>
                      <a href="<?= base_url() ?>Karyawan_asking/detail_tiket/<?= $row->id_ticket ?>"><button class="btn btn-app1" data-toggle="modal" data-target="#detailtiket"><i class="fa fa-edit"></i></button></a>
                      <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket<?= $row->id_ticket ?>"><i class="fa fa-remove" style="color:red"></i></button>
                    </td>
                  </tr>
                  <div class="modal modal-danger fade" id="deletetiket<?= $row->id_ticket ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Peringatan!</h4>
                        </div>
                        <div class="modal-body">
                          <p>Apakah Anda Yakin Ingin Menutup Tiket?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                          <a href="<?= base_url() ?>Karyawan_asking/close_tiket/<?= $row->id_ticket ?>"><button type="button" class="btn btn-outline">Ya</button></a>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                <?php
                }
                ?>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </section>
<?php
      }
?>
</div>



<!-- /.box -->
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
  </div>
  <strong>Website by S1 Teknik Informatika 2016 Universitas Negeri Surabaya</strong>
</footer>

<!-- Control Sidebar -->
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>

<!-- ./wrapper -->