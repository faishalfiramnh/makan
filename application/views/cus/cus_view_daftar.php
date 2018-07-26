<div class="col-lg-offset-0 col-md-offset-0 col-md-6 col-lg-5 col-sm-offset-2 col-sm-8">
					<div class="form">
						    <p>Get started for free</p>
								<link rel="stylesheet" href="http://localhost:81/makan/bootstrap4.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
				         <!-- <link href="http://localhost:81/makan/assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
				         <script src="http://localhost:81/makan/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				          <script src="http://localhost:81/makan/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				          <script src="http://localhost:81/makan/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
				        <meta charset="utf-8">

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
