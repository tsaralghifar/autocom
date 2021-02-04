
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					Tambah Pelanggan / Reseller
					
				</h2>

			</div>

			<div class="body">

				<form method="POST">

				<label for="">Nama</label>

				<div class="form-group">
					<div class="form-line">
						<input type="text" name="nama" class="form-control" />
					</div>
				</div>

				<label for="">Sales</label>

				<div class="form-group">
					<div class="form-line">
						<input type="text" name="nama_sales" class="form-control" />
					</div>
				</div>

				<label for="">Alamat</label>

				<div class="form-group">
					<div class="form-line">
						<input type="text" name="alamat" class="form-control" />
					</div>
				</div>


				<label for="">Telpon</label>

				<div class="form-group">
					<div class="form-line">
						<input type="number" name="telpon" class="form-control" />
					</div>
				</div>

				<label for="">Email</label>

				<div class="form-group">
					<div class="form-line">
						<input type="text" name="email" class="form-control" />
					</div>
				</div>


				<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">


			</form>



<?php 


	if (isset($_POST['simpan'])) {
		$nama = $_POST['nama'];
		$nama_sales = $_POST['nama_sales'];
		$alamat = $_POST['alamat'];
		$telpon = $_POST['telpon'];
		$email = $_POST['email'];

		$sql = $koneksi->query("insert into tb_pelanggan (nama, nama_sales, alamat, telpon, email) values ('$nama','$nama_sales','$alamat','$telpon','$email')");

		if ($sql) {
			?>

				<script type="text/javascript">
					alert("Data Berhasil di Input");
					window.location.href="?page=pelanggan";
				</script>

			<?php
		}

	}

?>