<?php
/*<!doctype html>
<html>
    <head>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
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
        <h2 style="margin-top:0px">Karyawan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Kar <?php echo form_error('nama_kar') ?></label>
            <input type="text" class="form-control" name="nama_kar" id="nama_kar" placeholder="Nama Kar" value="<?php echo $nama_kar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Kar <?php echo form_error('alamat_kar') ?></label>
            <input type="text" class="form-control" name="alamat_kar" id="alamat_kar" placeholder="Alamat Kar" value="<?php echo $alamat_kar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jabatan <?php echo form_error('jabatan') ?></label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Telp Kar <?php echo form_error('telp_kar') ?></label>
            <input type="text" class="form-control" name="telp_kar" id="telp_kar" placeholder="Telp Kar" value="<?php echo $telp_kar; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">GajiKaryawan <?php echo form_error('gajiKaryawan') ?></label>
            <input type="text" class="form-control" name="gajiKaryawan" id="gajiKaryawan" placeholder="GajiKaryawan" value="<?php echo $gajiKaryawan; ?>" />
        </div>
	    <input type="hidden" name="id_kar" value="<?php echo $id_kar; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('karyawan') ?>" class="btn btn-default">Cancel</a>
	</form>
     </section>
    </div>
<?php
//    </body>
//</html>
?>
