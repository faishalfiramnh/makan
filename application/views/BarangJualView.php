<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>     <!-- FontAwesome 4.3.0 -->
     <link href="http://localhost:81/makan/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
     <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="http://localhost:81/makan/bootstrap4.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
     <!-- <link href="http://localhost:81/makan/assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
     <script src="http://localhost:81/makan/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="http://localhost:81/makan/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="http://localhost:81/makan/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php $this->load->view('HeaderCusView');?>

      <div class="row">
        <?php foreach ($lihat as $key) { ?>
              <div class="card" style="width: 18rem;">
                <img src="<?php echo base_url(); ?>Foot.JPG" width="175px" height="110px">
                <div class="card-body">
                        <td><h1><?php echo $key->NamaPaket ?></h1></td><br>
                      isi :  <td><?php echo $key->isi ?></td> <br>
                      harga :  <td><?php echo $key->hargaSatuan ?></td><br>
                </div>
                <input type="number" name="jumlah" value="">
                <button type="button" class="btn btn-info" name="">pesan</button>
              </div>
            <?php } ?>
      </div>

  </body>
</html>
