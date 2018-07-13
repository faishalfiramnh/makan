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
        <h2 style="margin-top:0px">Lainlain Read</h2>
        <table class="table">
	    <tr><td>Nama Ll</td><td><?php echo $nama_ll; ?></td></tr>
	    <tr><td>Hargasatuan Ll</td><td><?php echo $hargasatuan_ll; ?></td></tr>
	    <tr><td>Jumlah Ll</td><td><?php echo $jumlah_ll; ?></td></tr>
	    <tr><td>Hargatotal Ll</td><td><?php echo $hargatotal_ll; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('lainlain') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
         </section>
    </div>
         <?php
//        </body>
//</html>
?>