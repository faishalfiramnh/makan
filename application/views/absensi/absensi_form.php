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
*/ ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2 style="margin-top:0px">Absensi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdKaryawan <?php echo form_error('idKaryawan') ?></label>
            <input type="text" class="form-control" name="idKaryawan" id="idKaryawan" placeholder="IdKaryawan" value="<?php echo $idKaryawan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">JamDatang <?php echo form_error('jamDatang') ?></label>
            <input type="time" class="form-control" name="jamDatang" id="jamDatang" placeholder="JamDatang" value="<?php echo $jamDatang; ?>" />
        </div>
	    <div class="form-group">
            <label for="time">JamPulang <?php echo form_error('jamPulang') ?></label>
            <input type="time" class="form-control" name="jamPulang" id="jamPulang" placeholder="jamPulang" value="<?php echo $jamPulang; ?>" />
        </div>
	    <input type="hidden" name="idAbsen" value="<?php echo $idAbsen; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('absensi') ?>" class="btn btn-default">Cancel</a>
	</form>
         </section>
    </div>
     <?php
//        </body>
//</html>
?>