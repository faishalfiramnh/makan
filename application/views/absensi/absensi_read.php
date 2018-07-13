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
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2 style="margin-top:0px">Absensi Read</h2>
        <table class="table">
	    <tr><td>IdKaryawan</td><td><?php echo $idKaryawan; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>JamDatang</td><td><?php echo $jamDatang; ?></td></tr>
	    <tr><td>JamPulang</td><td><?php echo $jamPulang; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('absensi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
         </section>
    </div>
       <?php
//        </body>
//</html>
?>