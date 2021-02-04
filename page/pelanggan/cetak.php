<?php  

		include_once  "../../konfig.php";

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
		<th>Nama/Toko</th>
		<th>Sales</th>
		<th>Alamat</th>
		<th>No. Telpon</th>
		<th>Email</th>
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
	</tr>

<?php } ?>
	</tbody>
</table>

<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">