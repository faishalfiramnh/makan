<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo form_open_multipart('BrngJualCont/tambah'); ?>
			<?php echo validation_errors(); ?>

				<div class="uk-margin">
					<label for="">Nama Paket</label>
    			<input class="uk-input uk-form-danger uk-form-width-medium" type="text" name="NamaPaket" placeholder="isikan bahan" value="">
				</div>

				<div class="uk-margin">
					<label for="">isi </label>
					<input class="uk-input uk-form-danger uk-form-width-medium" type="text" name="isi" placeholder="isikan harga" value="">
				</div>

				<div class="uk-margin">
					<label for="">harga satuan</label>
					<input class="uk-input uk-form-danger uk-form-width-medium" type="number" name="hargaSatuan" placeholder="isikan jumlah" value="">
				</div>


    <div>
    <button type="submit" class="uk-button uk-button-required" uk-tooltip="tambah" >tambah</button>
    </div>
			</div>
			<?php echo form_close(); ?>
  </body>
</html>
