<?php  


$kode2 = $_GET['id'];

	$sql = $koneksi->query("delete from tb_barang where kode_barang = '$kode2'");



if ($sql) {
	


	?>
		

		<script type="text/javascript">
			alert("Data Berhasil di Hapus");
			window.location.href="?page=barang";
		</script>

	<?php

}



?>