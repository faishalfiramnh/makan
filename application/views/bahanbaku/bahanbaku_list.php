<?php
/*<!doctype html>
<html>
    <head>
        <title>Catering : Bahanbaku</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
*/
?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2 style="margin-top:0px">Bahanbaku List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('bahanbaku/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('bahanbaku/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('bahanbaku'); ?>" class="btn btn-default">Reset</a>
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
		<th>IdPemasok</th>
		<th>Nama Bb</th>
		<th>Hargasatuan</th>
		<th>Jumlah</th>
		<th>Hargatotal</th>
		<th>Action</th>
            </tr><?php
            foreach ($bahanbaku_data as $bahanbaku)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $bahanbaku->idPemasok ?></td>
			<td><?php echo $bahanbaku->nama_bb ?></td>
			<td><?php echo $bahanbaku->hargasatuan ?></td>
			<td><?php echo $bahanbaku->jumlah ?></td>
		<td><?php echo $bahanbaku->hargasatuan*$bahanbaku->jumlah  ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('bahanbaku/read/'.$bahanbaku->id_bb),'Read');
				echo ' | ';
				echo anchor(site_url('bahanbaku/update/'.$bahanbaku->id_bb),'Update');
				echo ' | ';
				echo anchor(site_url('bahanbaku/delete/'.$bahanbaku->id_bb),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php  echo $pagination
                //$this->pagination->create_links(); ?>
            </div>
        </div>
        </section>
    </div>
<?php
//    </body>
//</html>
?>
