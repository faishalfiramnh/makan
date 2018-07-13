<?php
/*<!doctype html>
<html>
    <head>
        <title>Catering : Bahanbaku</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
*/?>
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <form>
      <?php echo form_open_multipart('BahanBakuCont/tambah'); ?>
			<?php echo validation_errors(); ?>
	    <!-- <div class="form-group">
            <label for="int">IdPemasok <?php echo form_error('idPemasok') ?></label>
            <input type="text" class="form-control" name="idPemasok" id="idPemasok" placeholder="IdPemasok" value="<?php echo $idPemasok; ?>" />
        </div> -->
        <div class="uk-margin">
  					<label for="">bahanbaku</label>
      			<input class="uk-input uk-form-danger uk-form-width-medium" type="text" name="nama_bb" placeholder="isikan bahan" value="">
  				</div>

  				<div class="uk-margin">
  					<label for="">harga / item</label>
  					<input class="uk-input uk-form-danger uk-form-width-medium" type="text" name="hargasatuan" placeholder="isikan harga" value="">
  				</div>

  				<div class="uk-margin">
  					<label for="">jumlah</label>
  					<input class="uk-input uk-form-danger uk-form-width-medium" type="text" name="jumlah" placeholder="isikan jumlah" value="">
  				</div>

          <div>
          <button type="submit" class="uk-button uk-button-required" uk-tooltip="tambah" >tambah</button>
          </div>
		<?php echo form_close(); ?>
	</form>
     </section>
    </div>
<?php
//    </body>
//</html>
?>
