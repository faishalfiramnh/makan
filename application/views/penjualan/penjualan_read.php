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
        <h2 style="margin-top:0px">Penjualan Read</h2>
        <table class="table">
	    <tr><td>IdPelanggan</td><td><?php echo $idPelanggan; ?></td></tr>
	    <tr><td>NamaBarang</td><td><?php echo $NamaBarang; ?></td></tr>
	    <tr><td>JumlahSatuan</td><td><?php echo $JumlahSatuan; ?></td></tr>
	    <tr><td>HargaSatuan</td><td><?php echo $hargaSatuan; ?></td></tr>
	    <tr><td>TotalPenjualan</td><td><?php echo $totalPenjualan; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('penjualan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
    </section>
    </div>
      <?php
//        </body>
//</html>
?>