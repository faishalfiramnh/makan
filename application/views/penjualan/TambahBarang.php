<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="http://localhost:81/makan/bootstrap4.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
     <!-- <link href="http://localhost:81/makan/assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
     <script src="http://localhost:81/makan/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="http://localhost:81/makan/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="http://localhost:81/makan/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title></title>
              <style>
          .tengah{
          position: absolute;
          margin-top: -100px;
          margin-left: -200px;
          left: 50%;
          top: 50%;
          width: 400px;
          height: 220px;
          background-color: brown;
          }
</style>
  </head>
  <body>
    <?php echo form_open_multipart('BrngJualCont/tambah'); ?>
			<?php echo validation_errors(); ?>


    <form align="center">
      <div class="card" style="width: 25rem;">

          <div class="form-group">
            <label for="formGroupExampleInput">Masukkan Nama Paket makanan</label>
            <input type="text" class="form-control" name="NamaPaket" placeholder="Example input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">isian</label>
            <input type="text" class="form-control" name="isi" placeholder="Another input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">harga per item</label>
            <input type="number" class="form-control" name="hargaSatuan"  placeholder="Another input">
          </div>
          <button type="submit" class="btn btn-primary" uk-tooltip="tambah" >tambah</button>
          </div>
        </div>
    </div>
  </form>
			<?php echo form_close(); ?>
  </body>
</html>
