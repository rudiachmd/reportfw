<div class="register-box">
      <div class="register-logo">
            <b>Aplikasi E-Reporting Jurusan Teknik Informatika Unesa</b></a>
      </div>

      <div class="register-box-body">
            <p class="login-box-msg">Daftar Baru</p>


            <div id="infoMessage"><?php echo $message; ?></div>
            <?php echo form_open_multipart("auth/create_user"); ?>
            <div class="form-group has-feedback">
            </div>
            <a>Daftar Sebagai</a>
            <select <?= form_input($company); ?>>
                  <option value="Perorangan">Perorangan</option>
                  <option value="Perusahaan">Perusahaan</option>
            </select>
            <div class="form-group has-feedback">
                  <?php echo form_input($first_name); ?>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                  <?php echo form_input($last_name); ?>
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
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
            <div class="form-group has-feedback">
                  <?php echo form_input($email); ?>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                  <?= form_input($ktp); ?>
                  <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                  <?php echo form_input($phone); ?>
                  <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                  <?= form_input($address); ?>
                  <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                  <?php echo form_input($password); ?>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                  <?php echo form_input($password_confirm); ?>
                  <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="file-ktp">
                  <a>(x)Masukkan Foto KTP</a>
                  <?= form_input($pict_ktp); ?>
            </div>
            <div class="row">
                  <div class="col-xs-8">
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-4">
                        <?php echo form_submit('submit', lang('create_user_submit_btn')); ?>
                  </div>
                  <!-- /.col -->
            </div>
            <?php echo form_close(); ?>

            <a href="<?= base_url() ?>auth/login" class="text-center">Sudah Punya Akun</a>
      </div>
      <!-- /.form-box -->
</div>

<!-- /.register-box -->