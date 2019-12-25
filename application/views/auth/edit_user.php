    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->

    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div>
          <!-- Profile Image -->
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="login-box">
          <div class="login-logo">
            <b>Halaman Profil</b></a>
          </div>

          <div class="login-box-body">

            <div class="tab-content">
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
              <div>
                <div id="infoMessage"><?php echo $message; ?></div>

                <body class="hold-transition skin-blue sidebar-mini">
                  <?php echo form_open(uri_string()); ?>

                  <div class="form-group">
                    <?php
                    if ($this->ion_auth->in_group('admin')) { ?>
                      <a href="<?php echo base_url() ?>Admin/">
                      <?php } elseif ($this->ion_auth->in_group('asking')) { ?>
                        <a href="<?php echo base_url() ?>Karyawan_asking/">
                        <?php } elseif ($this->ion_auth->in_group('verifikasi')) { ?>
                          <a href="<?php echo base_url() ?>Karyawan/">
                          <?php } elseif ($this->ion_auth->in_group('software')) { ?>
                            <a href="<?php echo base_url() ?>Karyawan_software/">
                            <?php } elseif ($this->ion_auth->in_group('hardware')) { ?>
                              <a href="<?php echo base_url() ?>Karyawan_hardware/">
                              <?php } else { ?>
                                <a href="<?php echo base_url() ?>User/">
                                <?php }
                                ?>
                                <button type="button" class="btn btn-success" style="margin: 5px 10px;">
                                  Kembali
                                </button>
                              </a>
                  </div>

                  <div class="form-group">
                    <label for="namadepan" class="col-sm-2 control-label">Nama Depan</label>
                    <div class="col-sm-10">
                      <?php echo form_input($first_name); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="namabelakang" class="col-sm-2 control-label">Nama Belakang</label>
                    <div class="col-sm-10">
                      <?php echo form_input($last_name); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nomortelpon" class="col-sm-2 control-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <?php echo form_input($phone); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <?php echo form_input($password); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="konfirm_password" class="col-sm-2 control-label">Konfirmasi Password</label>
                    <div class="col-sm-10">
                      <?php echo form_input($password_confirm); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <?php echo form_hidden('id', $user->id); ?>
                      <?php echo form_hidden($csrf); ?>
                      <p><?php echo form_submit('submit', 'Simpan'); ?></p>
                    </div>
                  </div>
                  <?php echo form_close(); ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->