<?php 

		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

		include_once "../../konfig.php"; 

		$kasir = $_GET['kasir'];

		$kode_pj = $_GET['kode_pjl'];

?>

<h4>Struk Belanjaan</h4>

<table>
	
	<tr>
		<td>Auto Computer</td>
	</tr>

	<tr>
		<td>Komp. Sejahtera Mandiri Km.14,5 No.34B Kecamatan Gambut</td>
	</tr>

</table>

<table>

	<?php  

		$sql = $koneksi->query("select * from tb_penjualan,tb_pelanggan where tb_penjualan.id_pelanggan=tb_pelanggan.kode_pelanggan and kode_penjualan='$kode_pj'");
		$tampil = $sql->fetch_assoc();


	?>
	
	<tr>
		<td>Kode Penjualan &nbsp&nbsp</td>
		<td>: &nbsp&nbsp <?php echo $tampil['kode_penjualan']; ?></td>
	</tr>

	<tr>
		<td>Tanggal &nbsp&nbsp</td>
		<td>: &nbsp&nbsp <?php echo $tampil['tgl_penjualan']; ?></td>
	</tr>

	<tr>
		<td>Pelanggan &nbsp&nbsp</td>
		<td>: &nbsp&nbsp <?php echo $tampil['nama']; ?></td>
	</tr>

	<tr>
		<td>Kasir &nbsp&nbsp</td>
		<td>: &nbsp&nbsp <?php echo $kasir ?></td>
	</tr>


	<td><hr></td>

	<?php  


			$sql2= $koneksi->query("select * from tb_penjualan, tb_penjualan_detail,tb_barang where tb_penjualan.kode_penjualan=tb_penjualan_detail.kode_penjualan and tb_penjualan.kode_barang=tb_barang.kode_barang and tb_penjualan.kode_penjualan='$kode_pj'");
			while ($tampil2 = $sql2->fetch_assoc()) {


	?>

	<tr>
		<td><?php echo $tampil2['nama_barang']; ?></td>
		<td><?php echo $tampil2['spek_barang']; ?></td>
		<td><?php echo number_format($tampil2['harga_jual']).',-'.'&nbsp'.'&nbsp'.'X'.'&nbsp'.'&nbsp'.$tampil2['jumlah'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp' ?></td>

		<td><?php echo number_format($tampil2['total']).',-'; ?></td>
	</tr>


	<?php  



			$diskon = $tampil2['diskon'];
			$potongan = $tampil2['potongan'];
			$bayar = $tampil2['bayar'];
			$kembali = $tampil2['kembali'];
			$total_b = $tampil2['total_b'];
			$total_bayar = $total_bayar+$tampil2['total'];
			$status_bayar = ['LUNAS', 'BELUM LUNAS'];
			$sisa = ['Kembalian', 'Sisa Pembayaran'];
			
		}

	?>


	<tr>
		<td><hr></td>
	</tr>

	<tr>
		<th colspan="2">Total</th>
		<td>: <?php echo $total_bayar; ?></td>
	</tr>

	<tr>
		<th colspan="2">Diskon</th>
		<td>: <?php echo $diskon.'%'; ?></td>
	</tr>

	<tr>
		<th colspan="2">Potongan Diskon</th>
		<td>: <?php echo $potongan; ?></td>
	</tr>

	<tr>
		<th colspan="2">Sub Total</th>
		<td>: <?php echo $total_b; ?></td>
	</tr>

	<tr>
		<th colspan="2">Bayar</th>
		<td>: <?php echo $bayar; ?></td>
	</tr>

	<tr>
		<th colspan="2"><?php 
		if ($bayar < $total_b) {
			echo $sisa[1];
		}
		else{
			echo $sisa[0];
		}

		?>
		</th>
		<td>: <?php echo $kembali; ?>
		</td>
	</tr>

	<tr>
		<th colspan="2">Status Bayar</th>
		<td>: <?php  
		if ($bayar < $total_b) {
			echo $status_bayar[1];
		}
		else{
			echo $status_bayar[0];
		} ?>
		</td>
	</tr>


</table>

<table>
	<tr>
		<td>Terimakasih</td>
	</tr>

</table>

<br>

<input type="button" value="Print" onclick="window.print()">