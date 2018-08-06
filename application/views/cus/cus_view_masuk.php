<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    berhasil daftar
    <a href="<?=base_url()?>/Coba/logout" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log Out</a>



    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>     <!-- FontAwesome 4.3.0 -->
        Masuk Pelanggan
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
        <h1></h1>
        <div class="container">
          <div class="row">

            <?php foreach ($jual as $key) { ?>
                  <div class="card" style="width: 18rem;">
                    <img src="<?php echo base_url(); ?>Foot.JPG" width="175px" height="110px">
                    <div class="card-body">
                            <td><h1><?php echo $key->NamaPaket ?></h1></td><br>
                          isi :  <td><?php echo $key->isi ?></td> <br>
                          harga :  <td><?php echo $key->hargaSatuan ?></td><br>
                    </div>

                  </div>
                <?php } ?>
          </div>

        </div>

      </body>

        <!-- kjdskfjdskf -->
        <?php echo form_open_multipart('Coba/pesanMakan'); ?>
              <?php echo validation_errors(); ?>

              <input type="hidden" name="name" value="<?= $this->session->userdata('nama') ?>">

              <div class="form-group form-group-margin">
                  <label for="inputPasswordConfirm" class="control-label no-mobile-display">jumlah </label>
                  <input id="jumlah" class="form-control" type="text" name="jumlah" value="" placeholder="" onchange="faisal()">
              </div>

                    <div class="form-group form-group-margin">
                        <label for="inputPassword" class="control-label no-mobile-display">jenis paket</label>
                        <select onchange="faisal()" class="form-control" name="jenisPaket" id="paket">
                                <option  value="">---Select paket---</option>
                            <?php foreach($jual as $key) { ?>
                                <option id="isi" name="NamaPaket" value="<?php echo $key->hargaSatuan;?>"><?php echo $key->NamaPaket;?></option>
                            <?php } ?>
                        </select>

                        <input type="text" name="jenisPaket" value="" hidden id="pilih"></div>

                    </div>

                    <div class="form-group">
                      <label for="">Total</label>
                      <input id="total" class="form-control" type="text" name="total" value="" readonly>
                    </div>
                      <button  class="btn btn-sm btn-success center mobile-bottom-10"type="submit">Pesan</button>
          <?php echo form_close(); ?>



<script type="text/javascript">
      // let barang_selected = document.getElementById('paket').options
      let faisal = () => { // Fungsi Total Pembelian
        let barang       = document.getElementById('paket') // definisikan variable dari elemen `pakai id`
        let selected     = barang.options[barang.selectedIndex].value // Ambil index dari dropdown `index == hargane`
        let teks = barang.options[barang.selectedIndex].text
        let jumlah       = document.getElementById('jumlah').value // variable buat total belanja
        let total_jumlah = selected * jumlah // Total belanja = harga paket dikali total belanjaan
        let total        = document.getElementById('total').value = total_jumlah // tampilkan total belanjaan
        // console.log(total)

        let nama_paket = document.getElementById('pilih').value = teks
        console.log(nama_paket)
      }

</script>
  </body>
</html>
