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
        <h2 style="margin-top:0px">Pengeluaran <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdSewa <?php echo form_error('idSewa') ?></label>
            <input type="text" class="form-control" name="idSewa" id="idSewa" placeholder="IdSewa" value="<?php echo $idSewa; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IdPeralatan <?php echo form_error('idPeralatan') ?></label>
            <input type="text" class="form-control" name="idPeralatan" id="idPeralatan" placeholder="IdPeralatan" value="<?php echo $idPeralatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Perlengkapan <?php echo form_error('id_perlengkapan') ?></label>
            <input type="text" class="form-control" name="id_perlengkapan" id="id_perlengkapan" placeholder="Id Perlengkapan" value="<?php echo $id_perlengkapan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Bb <?php echo form_error('id_bb') ?></label>
            <input type="text" class="form-control" name="id_bb" id="id_bb" placeholder="Id Bb" value="<?php echo $id_bb; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Lain <?php echo form_error('id_lain') ?></label>
            <input type="text" class="form-control" name="id_lain" id="id_lain" placeholder="Id Lain" value="<?php echo $id_lain; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IdKaryawan <?php echo form_error('idKaryawan') ?></label>
            <input type="text" class="form-control" name="idKaryawan" id="idKaryawan" placeholder="IdKaryawan" value="<?php echo $idKaryawan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">TotalPengeluaran <?php echo form_error('totalPengeluaran') ?></label>
            <input type="text" class="form-control" name="totalPengeluaran" id="totalPengeluaran" placeholder="TotalPengeluaran" value="<?php echo $totalPengeluaran; ?>" />
        </div>
	    <input type="hidden" name="idPengeluaran" value="<?php echo $idPengeluaran; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengeluaran') ?>" class="btn btn-default">Cancel</a>
	</form>
         </section>
    </div>
     <?php
//        </body>
//</html>
?>