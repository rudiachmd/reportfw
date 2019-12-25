<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 style="text-align: center">
    <strong>Daftar Karyawan Akun</strong>
  </h1>
  <a href="<?php echo base_url() ?>Admin/kar_verifikasi/">
    <button type="button" class="btn btn-success" style="margin: 5px 10px;">
      Kembali
    </button>
  </a>
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
          <div class="form-group has-feedback">
            <div id="infoMessage"><?php echo $message; ?></div>
            <?php echo form_open("auth/create_user_new"); ?>
            <label>First Name</label>
            <?php echo form_input($first_name); ?>
            <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label>Last Name</label>
            <?php echo form_input($last_name); ?>
            <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?php
            if ($identity_column !== 'email') {
              echo '<p>';
              echo lang('create_user_identity_label', 'identity');
              echo '<br />';
              echo form_error('identity');
              echo form_input($identity);
              echo '</p>';
            }
            ?>
            <label>Email</label>
            <?php echo form_input($email); ?>
            <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label>Password</label>
            <?php echo form_input($password); ?>
            <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
          </div>
          <div class="form-group">
            <label>Konfimasi Password</label>
            <?php echo form_input($password_confirm); ?>
            <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
          </div>
          <!-- textarea -->
          <div class="col-xs-2">
            <?php echo form_submit('submit', lang('create_user_submit_btn')); ?>
          </div>
          <?php echo form_close(); ?>
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

<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/bower_components/bootstrap/di<?= base_url() ?>assets/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/di<?= base_url() ?>assets/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/di<?= base_url() ?>assets/demo.js"></script>
</body>

</html>