<div class="row clear-fix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Data Pelanggan dan Reseller
				</h2>

			</div>
			<div class="body">
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama/Toko</th>
							<th>Sales</th>
							<th>Alamat</th>
							<th>No. Telpon</th>
							<th>Email</th>
							<th>Opsi</th>
						</tr>
					</thead>			


					<tbody>

						<?php 

						$no = 1;

						$sql = $koneksi->query("select * from tb_pelanggan");


						while ($data = $sql->fetch_assoc()) {



							?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nama'] ?></td>
								<td><?php echo $data['nama_sales'] ?></td>
								<td><?php echo $data['alamat'] ?></td>
								<td><?php echo $data['telpon'] ?></td>
								<td><?php echo $data['email'] ?></td>
								
								<td>


									<a href="?page=pelanggan&aksi=edit&id=<?php echo $data['kode_pelanggan'] ?>" class="btn btn-success">Edit</a>
									<a onclick="return confirm('Hapus Data?')" href="?page=pelanggan&aksi=hapus&id=<?php echo $data['kode_pelanggan'] ?>" class="btn btn-danger">Hapus</a>

								</td>
							</tr>

						<?php } ?>

					</tbody>
				</table>
				<a href="?page=pelanggan&aksi=tambah" class="btn btn-primary">Tambah</a>
				<a href="page/pelanggan/cetak.php" target="blank" class="btn btn-default">Cetak</a>
			</div>