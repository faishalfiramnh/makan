
    <?php
      $pengeluaran=0;
      $penjualan=0;
      foreach ($lihat as $laporanlaba)
      {
         $penjualan=$laporanlaba->totJual;
      }

      foreach ($bahan as $key) {
        $pengeluaran=$pengeluaran+($key->hargasatuan*$key->jumlah);
      }

      $formatPenjualan = number_format($penjualan,0.3);
      $formatPengeluaran = number_format($pengeluaran,0.3);

      $labaBersih = $penjualan - $pengeluaran;
      $formatLabBersih = number_format($labaBersih,0.3);

     ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2 style="margin-top:0px">Laporanlaba List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('laporanlaba/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('laporanlaba/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('laporanlaba'); ?>" class="btn btn-default">Reset</a>
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
		<th>total penjualan</th>
		<th>total pengeluaran bahan baku</th>
    <th>keuntungan saat ini</th>
		<th>Action</th>
      </tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $formatPenjualan?></td>
			<td><?php echo $formatPengeluaran ?></td>
      <td><?php echo $formatLabBersih ?></td>
			<td style="text-align:center" width="200px">

			</td>
		</tr>
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
