<?php  


		$tgl = date("Y-m-d");

		$sql = $koneksi->query("select * from tb_penjualan, tb_barang where tb_penjualan.kode_barang=tb_barang.kode_barang and tgl_penjualan='$tgl'");

		while ($tampil=$sql->fetch_assoc()) {
			$keuntungan = $tampil['keuntungan']*$tampil['jumlah'];

			$total_pj = $total_pj+$tampil['total'];

			$total_keuntungan = $total_keuntungan+$keuntungan;
		}


		$sql2 = $koneksi->query("select * from tb_barang");

		while ($tampil2=$sql2->fetch_assoc()) {
			$jumlah_brg=$sql2->num_rows;
		}


?>


<marquee>Selamat Datang Di Sistem Informasi Auto Computer Sales & Servis (Komputer-Laptop-Printer-Network-IT Property) 082350584347</marquee>
<div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Barang</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jumlah_brg; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">add_shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">Penjualan Hari Ini</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo "Rp"."&nbsp". number_format($total_pj); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">attach_money</i>
                        </div>
                        <div class="content">
                            <div class="text">Keuntungan Hari Ini</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo "Rp"."&nbsp". number_format($total_keuntungan); ?></div>
                        </div>
                    </div>
                </div>