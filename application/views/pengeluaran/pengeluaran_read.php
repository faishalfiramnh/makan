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
        <h2 style="margin-top:0px">Pengeluaran Read</h2>
        <table class="table">
	    <tr><td>IdSewa</td><td><?php echo $idSewa; ?></td></tr>
	    <tr><td>IdPeralatan</td><td><?php echo $idPeralatan; ?></td></tr>
	    <tr><td>Id Perlengkapan</td><td><?php echo $id_perlengkapan; ?></td></tr>
	    <tr><td>Id Bb</td><td><?php echo $id_bb; ?></td></tr>
	    <tr><td>Id Lain</td><td><?php echo $id_lain; ?></td></tr>
	    <tr><td>IdKaryawan</td><td><?php echo $idKaryawan; ?></td></tr>
	    <tr><td>TotalPengeluaran</td><td><?php echo $totalPengeluaran; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengeluaran') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
    </section>
    </div>
        <?php
//        </body>
//</html>
?>