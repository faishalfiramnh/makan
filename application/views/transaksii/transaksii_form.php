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
        <h2 style="margin-top:0px">Transaksii <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdPenjualan <?php echo form_error('idPenjualan') ?></label>
            <input type="text" class="form-control" name="idPenjualan" id="idPenjualan" placeholder="IdPenjualan" value="<?php echo $idPenjualan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Keterangan <?php echo form_error('keterangan') ?></label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="<?php echo $keterangan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kredit <?php echo form_error('kredit') ?></label>
            <input type="text" class="form-control" name="kredit" id="kredit" placeholder="Kredit" value="<?php echo $kredit; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Debit <?php echo form_error('debit') ?></label>
            <input type="text" class="form-control" name="debit" id="debit" placeholder="Debit" value="<?php echo $debit; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">PemasukanSetelahPajak <?php echo form_error('PemasukanSetelahPajak') ?></label>
            <input type="text" class="form-control" name="PemasukanSetelahPajak" id="PemasukanSetelahPajak" placeholder="PemasukanSetelahPajak" value="<?php echo $PemasukanSetelahPajak; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">PemasukanSebelumPajak <?php echo form_error('PemasukanSebelumPajak') ?></label>
            <input type="text" class="form-control" name="PemasukanSebelumPajak" id="PemasukanSebelumPajak" placeholder="PemasukanSebelumPajak" value="<?php echo $PemasukanSebelumPajak; ?>" />
        </div>
	    <input type="hidden" name="idPemasukan" value="<?php echo $idPemasukan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('transaksii') ?>" class="btn btn-default">Cancel</a>
	</form>
    </section>
    </div>
<?php
//    </body>
//</html>
?>