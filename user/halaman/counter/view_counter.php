<?php
		$tgl=date("Y-m-d");
		$tgl_skrg = date("Ymd"); // dapatkan tanggal sekarang saat online
		//$tgl_skrg = date("20140117"); // untuk simulasi saja sesuai dengan di database  17 Januari 2014
			
		// dapatkan 6 hari sblm tgl sekarang 
		$seminggu = strtotime("-1 week +1 day",strtotime($tgl_skrg));
		$hasilnya = date("Y-m-d", $seminggu);
		$tanggal = "";
		$pengunjung = "";
		$hits = "";
		$tabelgrafik = "";
		for($i=0; $i<=6; $i++) {
			$urutan_tgl   = strtotime("+$i day",strtotime($hasilnya));
			$hasil_urutan = date("d-M-Y", $urutan_tgl);
			$tgl_pengujung   = strtotime("+$i day",strtotime($hasilnya));
			$hasil_pengujung = date("Y-m-d", $tgl_pengujung);
			$query_pengujung = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM statistik WHERE tanggal='$hasil_pengujung' GROUP BY ip"));
			$tgl_hits   = strtotime("+$i day",strtotime($hasilnya));
			$hasil_hits = date("Y-m-d", $tgl_hits);
			$query_hits = mysqli_fetch_array(mysqli_query($koneksi, "SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$hasil_hits' GROUP BY tanggal"));
			$hits_today = $query_hits['hitstoday'];
			
			if ($hits_today==""){ 
				$hits_today="0"; 
			}
			
			if($i==6) {
				$tanggal .= "'$hasil_urutan'";
				$pengunjung .= "$query_pengujung";
				$hits .= "$hits_today";
			} else {
				$tanggal .= "'$hasil_urutan',";
				$pengunjung .= "$query_pengujung,";
				$hits .= "$hits_today,";
			}
			$tabelgrafik .= "<tr><th>$hasil_urutan</th><td align=\"center\">$query_pengujung</td><td align=\"center\">$hits_today</td></tr>";
		}
		?>
		<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Hit Counter Pengunjung Aplikasi E-Container </h1>
          <p class="mb-4">Berikut merupakan halaman untuk counter pengunjung atau statistik pengguna web atau aplikasi E-Container <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
		

						<table class="table table-striped table-bordered">
							<tr><td></td><th>Pengunjung</th><th>Hits</th></tr>
							<?php echo $tabelgrafik; ?>
						</table>
					</div>	<!-- /.col-md-4 --></div>