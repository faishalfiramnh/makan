<?php
/*
<!doctype html>
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
        <h2 style="margin-top:0px">Bahanbaku Read</h2>
        <table class="table">
	    <tr><td>IdPemasok</td><td><?php echo $idPemasok; ?></td></tr>
	    <tr><td>Nama Bb</td><td><?php echo $nama_bb; ?></td></tr>
	    <tr><td>Hargasatuan</td><td><?php echo $hargasatuan; ?></td></tr>
	    <tr><td>Jumlah</td><td><?php echo $jumlah; ?></td></tr>
	    <tr><td>Hargatotal</td><td><?php echo $hargatotal; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('bahanbaku') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
     </section>
    </div>
    <?php
//        </body>
//</html>
?>