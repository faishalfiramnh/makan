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
        <h2 style="margin-top:0px">Peralatan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Alat <?php echo form_error('nama_alat') ?></label>
            <input type="text" class="form-control" name="nama_alat" id="nama_alat" placeholder="Nama Alat" value="<?php echo $nama_alat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Beli <?php echo form_error('tgl_beli') ?></label>
            <input type="text" class="form-control" name="tgl_beli" id="tgl_beli" placeholder="Tgl Beli" value="<?php echo $tgl_beli; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Harga <?php echo form_error('harga') ?></label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $harga; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">TotalHarga <?php echo form_error('totalHarga') ?></label>
            <input type="text" class="form-control" name="totalHarga" id="totalHarga" placeholder="TotalHarga" value="<?php echo $totalHarga; ?>" />
        </div>
	    <input type="hidden" name="id_alat" value="<?php echo $id_alat; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('peralatan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </section>
    </div>
     <?php
//        </body>
//</html>
?>