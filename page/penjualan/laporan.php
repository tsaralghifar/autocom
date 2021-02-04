<?php  

		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
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
	<caption>Laporan Penjualan</caption>
	<thead>
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Spesifikasi</th>
			<th>Harga Jual</th>
			<th>Jumlah</th>
			<th>Total</th>
			<th>Keuntungan</th>
		</tr>
	</thead>
	<tbody>



<?php 

$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];

$no = 1;

$sql = $koneksi->query("select * from tb_penjualan,tb_barang where tb_penjualan.kode_barang=tb_barang.kode_barang and tgl_penjualan between '$tgl_awal' and '$tgl_akhir'");


while ($data = $sql->fetch_assoc()) {


	$keuntungan = $data['keuntungan'] * $data['jumlah'];


	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo date('d F Y',strtotime($data['tgl_penjualan'] ))?></td>
		<td><?php echo $data['kode_barang'] ?></td>
		<td><?php echo $data['nama_barang'] ?></td>
		<td><?php echo $data['spek_barang'] ?></td>
		<td><?php echo number_format($data['harga_jual']) ?></td>

		<td><?php echo $data['jumlah'] ?></td>
		<td><?php echo number_format($data['total']) ?></td>
		<td><?php echo number_format($keuntungan) ?></td>
	</tr>

	<?php

	$total_pj = $total_pj + $data['total'];
	$total_keuntungan = $total_keuntungan + $keuntungan;


 } 


	?>
	</tbody>
	<tr>
		<th colspan="7">Total Penjualan & Keuntungan</th>
		<td><?php echo number_format($total_pj) ?></td>
		<td><?php echo number_format($total_keuntungan) ?></td>
	</tr>
</table>

<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">