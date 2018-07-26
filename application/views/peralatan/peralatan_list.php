<?php
$peralatanB=0;
foreach ($peralatan_data as $peralatan) {
  $peralatanB=$peralatanB+($peralatan->harga*$peralatan->jumlah);
}
$konvertAlat = number_format($peralatanB,0.3);

?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2 style="margin-top:0px">Peralatan List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('peralatan/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('peralatan/index'); ?>" class="form-inline" method="get">
                    <!-- <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('peralatan'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div> -->
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Alat</th>
		<th>Jumlah</th>
		<th>Tgl Beli</th>
		<th>Harga</th>
		<th>TotalHarga</th>
		<th>Action</th>
            </tr><?php
            foreach ($peralatan_data as $peralatan)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $peralatan->nama_alat ?></td>
			<td><?php echo $peralatan->jumlah ?></td>
			<td><?php echo $peralatan->tgl_beli ?></td>
			<td><?php echo $peralatan->harga ?></td>
			<td><?php echo $peralatan->jumlah * $peralatan->harga; ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('peralatan/read/'.$peralatan->id_alat),'Read');
				echo ' | ';
				echo anchor(site_url('peralatan/update/'.$peralatan->id_alat),'Update');
				echo ' | ';
				echo anchor(site_url('peralatan/delete/'.$peralatan->id_alat),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="alert alert-success" role="alert">
          Total harga seluruhnya : <?php echo $konvertAlat; ?>
        </div>
        </section>
    </div>
     <?php
//        </body>
//</html>
?>
