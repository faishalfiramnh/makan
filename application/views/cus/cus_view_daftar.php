<div class="col-lg-offset-0 col-md-offset-0 col-md-6 col-lg-5 col-sm-offset-2 col-sm-8">
					<div class="form">
						    <p>Get started for free</p>

        <?php echo form_open_multipart('Coba/daftarUserBaru'); ?>
        			<?php echo validation_errors(); ?>
        <div class="form-group form-group-margin">
            <label for="inputEmail" class="control-label no-mobile-display">Nama</label>
            <input type="email" name="nama" autofocus="" value=""
                   class="form-control input-width-300  ajax-convert-lable field-required input-error"
                   data-placeholder="E-mail" id="u_econtact" placeholder="">
        </div>


        <div class="form-group form-group-margin">
            <label for="inputPassword" class="control-label no-mobile-display">Password</label>
            <input type="password" name="password" value=""
                   class="form-control input-width-300 ajax-convert-lable field-required "
                   data-placeholder="Password" id="u_pass" placeholder="">
        </div>


        <div class="form-group form-group-margin">
            <label for="inputPasswordConfirm"
                   class="control-label no-mobile-display">alamat </label>
            <input type="text" name="alamat" value=""
                   class="form-control input-width-300 ajax-convert-lable field-required " placeholder="">
        </div>

        <div class="form-group form-group-margin">
            <label for="inputPasswordConfirm"
                   class="control-label no-mobile-display">pekerjaan </label>
            <input type="text" name="pekerjaan" value="" placeholder="">
        </div>


        <div class="form-group margin-bottom-100 mobile-bottom-50">
            <button  class="btn btn-sm btn-success center mobile-bottom-10"
                    type="submit">daftar</button>
        </div>
        <?php echo form_close(); ?>

        <input type="hidden" name="PHPSESSID" value="0f3i2ofakpdaemc4ioj6k6jos3" id="PHPSESSID">
        <input type="hidden" name="theToken" value="1d1b2e83839a0164d6b749f8d">
        <input type="hidden" name="signup_src" value="orig">

    </form>
    <p class="new-login">sudah punya akun ?
		<li><a href="<?php echo base_url(); ?>Coba/loginUser">login</a></li>


					</div>
				</div>
			</div>
		</div>
	</section><!-- end section  .top -->
