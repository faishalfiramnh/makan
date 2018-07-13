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
        <h2 style="margin-top:0px">Laporanlaba <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdLabaBersih <?php echo form_error('idLabaBersih') ?></label>
            <input type="text" class="form-control" name="idLabaBersih" id="idLabaBersih" placeholder="IdLabaBersih" value="<?php echo $idLabaBersih; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">IdLabaKotor <?php echo form_error('idLabaKotor') ?></label>
            <input type="text" class="form-control" name="idLabaKotor" id="idLabaKotor" placeholder="IdLabaKotor" value="<?php echo $idLabaKotor; ?>" />
        </div>
	    <input type="hidden" name="idLabaRugi" value="<?php echo $idLabaRugi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('laporanlaba') ?>" class="btn btn-default">Cancel</a>
	</form>
         </section>
    </div>
     <?php
//        </body>
//</html>
?>