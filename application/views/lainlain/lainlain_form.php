<?php /* <!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
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
        <h2 style="margin-top:0px">Lainlain <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Ll <?php echo form_error('nama_ll') ?></label>
            <input type="text" class="form-control" name="nama_ll" id="nama_ll" placeholder="Nama Ll" value="<?php echo $nama_ll; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Hargasatuan Ll <?php echo form_error('hargasatuan_ll') ?></label>
            <input type="text" class="form-control" name="hargasatuan_ll" id="hargasatuan_ll" placeholder="Hargasatuan Ll" value="<?php echo $hargasatuan_ll; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jumlah Ll <?php echo form_error('jumlah_ll') ?></label>
            <input type="text" class="form-control" name="jumlah_ll" id="jumlah_ll" placeholder="Jumlah Ll" value="<?php echo $jumlah_ll; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Hargatotal Ll <?php echo form_error('hargatotal_ll') ?></label>
            <input type="text" class="form-control" name="hargatotal_ll" id="hargatotal_ll" placeholder="Hargatotal Ll" value="<?php echo $hargatotal_ll; ?>" />
        </div>
	    <input type="hidden" name="id_lain" value="<?php echo $id_lain; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('lainlain') ?>" class="btn btn-default">Cancel</a>
	</form>
         </section>
    </div>
     <?php
//        </body>
//</html>
?>
