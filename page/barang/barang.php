<div class="row clear-fix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Data Stok Barang
				</h2>

			</div>
			<div class="body">
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Kategori Barang</th>
							<th>Harga Beli</th>
							<th>Stok</th>
							<th>Harga Jual</th>
							<th>Keuntungan</th>
							<th>Opsi</th>
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
								<td><?php echo $data['satuan'] ?></td>

								<td><?php echo $data['harga_beli'] ?></td>
								<td><?php echo $data['stok'] ?></td>
								<td><?php echo $data['harga_jual'] ?></td>
								<td><?php echo $data['keuntungan'] ?></td>
								<td>


									<a href="?page=barang&aksi=edit&id=<?php echo $data['kode_barang'] ?>" class="btn btn-success">Edit</a>
									<a onclick="return confirm('Hapus Data?')" href="?page=barang&aksi=hapus&id=<?php echo $data['kode_barang'] ?>" class="btn btn-danger">Hapus</a>

								</td>
							</tr>

						<?php } ?>

					</tbody>
				</table>
				<a href="?page=barang&aksi=tambah" class="btn btn-primary">Tambah</a>
				<a href="page/barang/cetak.php" target="blank" class="btn btn-default">Cetak</a>
				<a href="page/barang/cetak_excel.php" target="blank" class="btn btn-default">Cetak ke Excel</a>
			</div>