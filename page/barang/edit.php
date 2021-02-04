<script>
function sum() {
	var harga_beli = document.getElementById('harga_beli').value;
	var harga_jual = document.getElementById('harga_jual').value;
	var result =parseInt(harga_jual) - parseInt(harga_beli);
	if (!isNaN(result)) {
		document.getElementById('keuntungan').value = result;
	}
}	
</script>



<?php  


	$kode2 = $_GET['id'];

	$sql = $koneksi->query("select * from tb_barang where kode_barang = '$kode2'");
	$tampil = $sql->fetch_assoc();

	$satuan = $tampil['satuan'];

?>


<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					EDIT DATA
					
				</h2>

			</div>

			<div class="body">

				<form method="POST">

				<label for="">Kode Barang</label>

				<div class="form-group">
					<div class="form-line">
						<input type="text" name="kode" value="<?php echo $tampil['kode_barang']; ?>" class="form-control" />
					</div>
				</div>

				<label for="">Nama Barang</label>

				<div class="form-group">
					<div class="form-line">
						<input type="text" name="nama" value="<?php echo $tampil['nama_barang']; ?>" class="form-control" />
					</div>
				</div>

				<label for="">Spesifikasi</label>

				<div class="form-group">
					<div class="form-line">
						<input type="text" name="spek" value="<?php echo $tampil['spek_barang']; ?>" class="form-control" />
					</div>
				</div>

				<label for="">Kategori Barang</label>
				<div class="form-group">
					<div class="form-line">
					<select name="satuan" class="form-control show-tick">
						
						<option value="Laptop" <?php if ($satuan=='Laptop') { echo "selected"; } ?>>Laptop</option>
						<option value="Komputer" <?php if ($satuan=='Komputer') { echo "selected"; } ?>>Komputer</option>
						<option value="Printer" <?php if ($satuan=='Printer') { echo "selected"; } ?>>Printer</option>
						<option value="Network" <?php if ($satuan=='Network') { echo "selected"; } ?>>Network</option>
		
					</select>
				</div>

			</div>


				<label for="">Stok</label>

				<div class="form-group">
					<div class="form-line">
						<input type="number" name="stok" value="<?php echo $tampil['stok']; ?>" class="form-control" />
					</div>
				</div>

				<label for="">Harga Beli</label>

				<div class="form-group">
					<div class="form-line">
						<input type="number" name="hbeli" id="harga_beli" onkeyup="sum()" value="<?php echo $tampil['harga_beli']; ?>" class="form-control" />
					</div>
				</div>

				<label for="">Harga Jual</label>

				<div class="form-group">
					<div class="form-line">
						<input type="number" name="hjual" id="harga_jual" onkeyup="sum()" value="<?php echo $tampil['harga_jual']; ?>" class="form-control" />
					</div>
				</div>

				<label for="">Keuntungan</label>

				<div class="form-group">
					<div class="form-line">
						<input type="number" name="keuntungan" id="keuntungan" value="<?php echo $tampil['keuntungan']; ?>" readonly="" style="background-color: #e7e3e9;" value="0" class="form-control" />
					</div>
				</div>

				<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">


			</form>



<?php 


	if (isset($_POST['simpan'])) {
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$spek = $_POST['spek'];
		$satuan = $_POST['satuan'];
		$stok = $_POST['stok'];
		$hbeli = $_POST['hbeli'];
		$hjual = $_POST['hjual'];
		$keuntungan = $_POST['keuntungan'];

		$sql2 = $koneksi->query("update tb_barang set kode_barang='$kode',nama_barang='$nama',spek_barang='$spek',satuan='$satuan',harga_beli='$hbeli',stok='$stok',harga_jual='$hjual',keuntungan='$keuntungan' where kode_barang='$kode2'");

		if ($sql2) {
			?>

				<script type="text/javascript">
					alert("Data Berhasil di Edit");
					window.location.href="?page=barang";
				</script>

			<?php
		}

	}

?>