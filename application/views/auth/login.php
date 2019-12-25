<div class="login-box">
  <div class="login-logo">
    <b>Aplikasi E-Reporting Jurusan Teknik Informatika Unesa</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login untuk Memulai Sesi Anda</p>
    <div id="infoMessage"><?php echo $message; ?></div>
    <?php echo form_open("auth/login"); ?>
    <form>
      <div class="form-group has-feedback">
        <?php echo form_input($identity); ?>
      </div>
      <div class="form-group has-feedback">
        <?php echo form_input($password); ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <?php echo lang('login_remember_label', 'remember'); ?>
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <?php echo form_close(); ?>



    <!-- <a href="<?= base_url() ?>auth/create_user/" class="text-center">Belum Punya Akun? Klik disini.</a> -->

    <a href="<?= base_url() ?>auth/detailkelompok/">Tentang Kami</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->