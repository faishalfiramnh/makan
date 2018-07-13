<?php
/*<!doctype html>
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
        <h2 style="margin-top:0px">Pemasok <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NamaPemasok <?php echo form_error('namaPemasok') ?></label>
            <input type="text" class="form-control" name="namaPemasok" id="namaPemasok" placeholder="NamaPemasok" value="<?php echo $namaPemasok; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">NoTelfon <?php echo form_error('noTelfon') ?></label>
            <input type="text" class="form-control" name="noTelfon" id="noTelfon" placeholder="NoTelfon" value="<?php echo $noTelfon; ?>" />
        </div>
	    <input type="hidden" name="idPemasok" value="<?php echo $idPemasok; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pemasok') ?>" class="btn btn-default">Cancel</a>
	</form>
            </section>
    </div>
<?php
//    </body>
//</html>
?>
  