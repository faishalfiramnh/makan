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
        <h2 style="margin-top:0px">Penjualan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('BrngJualCont/tambah'),'tambah paket jual makananx', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('penjualan/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('penjualan'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>



        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>

            		<th>Nama </th>
            		<th>Nama Paket yang dipesan</th>
            		<th>harga seluruhnya </th>
            		<th>jumlahnya</th>
            		<th>Action</th>
  </tr><?php foreach ($lihat as $key){?>
    <td><?php echo $key->idJual ?></td>
    <td><?php echo $key->nama ?></td>
    <td><?php echo $key->jenisPaket ?></td>
    <td><?php echo $key->harga ?></td>
    <td><?php echo $key->jumlah ?></td>
    <!-- <td><?php echo $penjualan->hargaSatuan ?></td>
    <td><?php echo $penjualan->totalPenjualan ?></td>
    <td><?php echo $penjualan->tanggal ?></td> -->
    <td style="text-align:center" width="200px">
      <!-- <?php
      echo anchor(site_url('penjualan/read/'.$penjualan->id_transaksi),'Read');
      echo ' | ';
      echo anchor(site_url('penjualan/update/'.$penjualan->id_transaksi),'Update');
      echo ' | ';
      echo anchor(site_url('penjualan/delete/'.$penjualan->id_transaksi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
      ?> -->
    </td>
  </tr>
<?php  }?>

        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </section>
    </div>
     <?php
//        </body>
//</html>
?>
