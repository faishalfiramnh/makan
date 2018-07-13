<?php /*<!doctype html>
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
        <h2 style="margin-top:0px">Karyawan Read</h2>
        <table class="table">
	    <tr><td>Nama Kar</td><td><?php echo $nama_kar; ?></td></tr>
	    <tr><td>Alamat Kar</td><td><?php echo $alamat_kar; ?></td></tr>
	    <tr><td>Jabatan</td><td><?php echo $jabatan; ?></td></tr>
	    <tr><td>Telp Kar</td><td><?php echo $telp_kar; ?></td></tr>
	    <tr><td>GajiKaryawan</td><td><?php echo $gajiKaryawan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
 <?php
//        </body>
//</html>
?>