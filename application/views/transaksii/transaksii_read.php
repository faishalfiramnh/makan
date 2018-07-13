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
        <h2 style="margin-top:0px">Transaksii Read</h2>
        <table class="table">
	    <tr><td>IdPenjualan</td><td><?php echo $idPenjualan; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $keterangan; ?></td></tr>
	    <tr><td>Kredit</td><td><?php echo $kredit; ?></td></tr>
	    <tr><td>Debit</td><td><?php echo $debit; ?></td></tr>
	    <tr><td>PemasukanSetelahPajak</td><td><?php echo $PemasukanSetelahPajak; ?></td></tr>
	    <tr><td>PemasukanSebelumPajak</td><td><?php echo $PemasukanSebelumPajak; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('transaksii') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
    </section>
    </div>
<?php
//        </body>
//</html>
?>