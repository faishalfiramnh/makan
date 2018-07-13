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
        <h2 style="margin-top:0px">Penjualan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdPelanggan <?php echo form_error('idPelanggan') ?></label>
            <input type="text" class="form-control" name="idPelanggan" id="idPelanggan" placeholder="IdPelanggan" value="<?php echo $idPelanggan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">NamaBarang <?php echo form_error('NamaBarang') ?></label>
            <input type="text" class="form-control" name="NamaBarang" id="NamaBarang" placeholder="NamaBarang" value="<?php echo $NamaBarang; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">JumlahSatuan <?php echo form_error('JumlahSatuan') ?></label>
            <input type="text" class="form-control" name="JumlahSatuan" id="JumlahSatuan" placeholder="JumlahSatuan" value="<?php echo $JumlahSatuan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">HargaSatuan <?php echo form_error('hargaSatuan') ?></label>
            <input type="text" class="form-control" name="hargaSatuan" id="hargaSatuan" placeholder="HargaSatuan" value="<?php echo $hargaSatuan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">TotalPenjualan <?php echo form_error('totalPenjualan') ?></label>
            <input type="text" class="form-control" name="totalPenjualan" id="totalPenjualan" placeholder="TotalPenjualan" value="<?php echo $totalPenjualan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <input type="hidden" name="id_transaksi" value="<?php echo $id_transaksi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('penjualan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </section>
    </div>
    <?php
//        </body>
//</html>
?>