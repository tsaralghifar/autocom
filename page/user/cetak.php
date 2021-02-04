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
	<caption>Laporan Data Pengguna</caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
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
	</tr>

<?php } ?>
	</tbody>
</table>

<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">