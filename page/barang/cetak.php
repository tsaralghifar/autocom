<?php  

		include_once "../../konfig.php";

?>

<style>
	
		@media print{
			input.noPrint{
				display: none;
			}
		}

</style>


<table border="1" width="100%" style="border-collapse: collapse;">
	<caption>Laporan Data Barang</caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Spesifikasi</th>
			<th>Satuan</th>
			<th>Stok</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Keuntungan</th>
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

		<td><?php echo $data['harga_beli'] ?></td>
		<td><?php echo $data['stok'] ?></td>
		<td><?php echo $data['harga_jual'] ?></td>
		<td><?php echo $data['keuntungan'] ?></td>
	</tr>

<?php } ?>
	</tbody>
</table>

<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">