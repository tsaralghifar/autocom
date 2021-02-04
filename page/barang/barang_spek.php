<div class="row clear-fix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Data Barang
				</h2>

			</div>
			<div class="body">
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Spesifikasi</th>
							<th>Kategori Barang</th>
						</tr>
					</thead>			


					<tbody>

						<?php 

						$no = 1;

						$sql = $koneksi->query("select * from tb_barang");


						while ($data = $sql->fetch_assoc()) {



							?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['kode_barang'] ?></td>
								<td><?php echo $data['nama_barang'] ?></td>
								<td><?php echo $data['spek_barang'] ?></td>
								<td><?php echo $data['satuan'] ?></td>
							</tr>

						<?php } ?>

					</tbody>
				</table>
				
			</div>