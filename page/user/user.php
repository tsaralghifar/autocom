<div class="row clear-fix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Data Pengguna
				</h2>

			</div>
			<div class="body">
				<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Password</th>
							<th>Level</th>
							<th>Foto</th>
							<th>Opsi</th>
						</tr>
					</thead>			


					<tbody>

						<?php 

						$no = 1;

						$sql = $koneksi->query("select * from tb_user");


						while ($data = $sql->fetch_assoc()) {



							?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nama'] ?></td>
								<td><?php echo $data['username'] ?></td>
								<td><?php echo $data['password'] ?></td>
								<td><?php echo $data['level'] ?></td>
								<td><img src="images/<?php echo $data['foto'] ?>" width="50" height="50" alt=""></td>
								
								<td>


									<a href="?page=user&aksi=edit&id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a>
									<a onclick="return confirm('Hapus Data?')" href="?page=user&aksi=hapus&id=<?php echo $data['id'] ?>" class="btn btn-danger">Hapus</a>

								</td>
							</tr>

						<?php } ?>

					</tbody>
				</table>
				<a href="?page=user&aksi=tambah" class="btn btn-primary">Tambah</a>
				<a href="page/user/cetak.php" target="blank" class="btn btn-default">Cetak</a>
			</div>