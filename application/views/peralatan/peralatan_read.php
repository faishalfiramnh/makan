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
        <h2 style="margin-top:0px">Peralatan Read</h2>
        <table class="table">
	    <tr><td>Nama Alat</td><td><?php echo $nama_alat; ?></td></tr>
	    <tr><td>Jumlah</td><td><?php echo $jumlah; ?></td></tr>
	    <tr><td>Tgl Beli</td><td><?php echo $tgl_beli; ?></td></tr>
	    <tr><td>Harga</td><td><?php echo $harga; ?></td></tr>
	    <tr><td>TotalHarga</td><td><?php echo $totalHarga; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('peralatan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
    </section>
    </div>
<?php   
        //</body>
//</html>
?>