<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a class="logo">
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
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-table"></i> <span>Menu Karyawan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a><i class="fa fa-circle-o"></i>Data Tiket</a></li>
            </ul>
          </li>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
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
              <div class="modal modal-info fade" id="updatepenanggap">
                <div class="modal-dialog">
                  <div class="modal-content" style="width:450px">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" style="text-align: center">Respon Tiket</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-group has-feedback">
                        <input name="id_tiket" type="text" style="width:400px" class="form-control" placeholder="ID_Tiket">
                      </div>
                      <div class="form-group has-feedback">
                        <input name="nama_Pengirim" type="text" style="width:400px" class="form-control" placeholder="Nama Pengirim">
                      </div>
                      <div class="form-group has-feedback">
                        <input name="keterangan_tiket" type="text" style="width:400px" class="form-control" placeholder="Keterangan Tiket">
                      </div>
                      <div class="form-group has-feedback">
                        <input name="tanggal_tiket" type="text" style="width:400px" class="form-control" placeholder="Tanggal Tiket">
                      </div>
                      <div class="form-group has-feedback">
                        <textarea input name="isi_respon" type="text" style="width:400px" class="form-control" placeholder="Respon"></textarea>
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
                      <th>ID Tiket</th>
                      <th>Nama Pengirim</th>
                      <th>Keterangan</th>
                      <th>Tanggal</th>
                      <th>Status</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>Anjing</td>
                      <td> 123123123</td>
                      <td>Jl. Jala</td>
                      <td>OK</td>
                      <td class="text-center">
                        <button class="btn btn-app1" data-toggle="modal" data-target="#updatepenanggap"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket"><i class="fa fa-remove" style="color:red"></i></button>
                      </td>


                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Abdul
                      </td>
                      <td> 123123123</td>
                      <td>Jl. Jala</td>
                      <td>Cancel</td>
                      <td class="text-center">
                        <button class="btn btn-app1" data-toggle="modal" data-target="#updatepenanggap"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket"><i class="fa fa-remove" style="color:red"></i></button>

                      </td>

                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Abdul
                      </td>
                      <td> 123123123</td>
                      <td>Jl. Jala</td>
                      <td>Web</td>
                      <td class="text-center">
                        <button class="btn btn-app1" data-toggle="modal" data-target="#updatepenanggap"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket"><i class="fa fa-remove" style="color:red"></i></button>

                      </td>

                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Abdul
                      </td>
                      <td> 123123123</td>
                      <td>Jl. Jala</td>
                      <td>Web</td>
                      <td class="text-center">
                        <button class="btn btn-app1" data-toggle="modal" data-target="#updatepenanggap"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket"><i class="fa fa-remove" style="color:red"></i></button>

                      </td>

                    </tr>
                    <tr>
                      <td>001</td>
                      <td>Abdul
                      </td>
                      <td> 123123123</td>
                      <td>Jl. Jala</td>
                      <td>Web</td>
                      <td class="text-center">
                        <button class="btn btn-app1" data-toggle="modal" data-target="#updatepenanggap"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-app1" data-toggle="modal" data-target="#deletetiket"><i class="fa fa-remove" style="color:red"></i></button>

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
        </div>
      </section>
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