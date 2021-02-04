<?php  

include_once "../../konfig.php";

$filename = "stokbarang_excel-(".date('d-m-Y').").xls";

header("Content-Disposition: attachment; filename='$filename'");
header("Content-Type: application/vnd.ms-excel");

?>

<h2>Laporan Data Barang</h2>

<table border="1">
	<tr>
		<th>No</th>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Spesifikasi</th>
		<th>Kategori Barang</th>
		<th>Harga Beli</th>
		<th>Stok</th>
		<th>Harga Jual</th>
		<th>Keuntungan</th>
	</tr>


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

			<td><?php echo $data['harga_beli'] ?></td>
			<td><?php echo $data['stok'] ?></td>
			<td><?php echo $data['harga_jual'] ?></td>
			<td><?php echo $data['keuntungan'] ?></td>
		</tr>

	<?php } ?>
	
</table>