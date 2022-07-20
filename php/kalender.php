<?php 
	/*tanggal*/
	$hari = date("d");
	$hariini = $hari;
	/*bulan*/
	$bulan = date("m");
	/*tahun*/
	$tahun = date("Y");
	/*jumlah hari bulan tahun*/
	$jumlahhari = date("t", mktime(0,0,0,$bulan,$hari,$tahun));
?>

<?php 
	switch ($bulan) 
	{
		case 1:
			$nmbulan = "Januari";
			break;
		case 2:
			$nmbulan = "Februari";
			break;
		case 3:
			$nmbulan = "Maret";
			break;
		case 4:
			$nmbulan = "April";
			break;
		case 5:
			$nmbulan = "Mei";
			break;
		case 6:
			$nmbulan = "Juni";
			break;
		case 7:
			$nmbulan = "Juli";
			break;
		case 8:
			$nmbulan = "Agustus";
			break;
		case 9:
			$nmbulan = "September";
			break;
		case 10:
			$nmbulan = "Oktober";
			break;
		case 11:
			$nmbulan = "November";
			break;
		case 12:
			$nmbulan = "Desember";
			break;
	}
	echo "<center><h2>$nmbulan $tahun</h2></center>";
?>
<table style="border: 0px solid #1E90FF" align="center" cellpadding="10">
	<tr bgcolor=black>
		<td align="center"><font color="#FF000">Min</font></td>
		<td align="center">Sen</font></td>
		<td align="center">Sel</font></td>
		<td align="center">Rab</font></td>
		<td align="center">Kam</font></td>
		<td align="center">Jum</font></td>
		<td align="center">Sab</font></td>
	</tr>

	<?php 
		$s = date("w", mktime(0,0,0, $bulan,1,$tahun));
		for ($ds=1; $ds<=$s; $ds++) { 
			echo "<td></td>";
		}

		for ($d=1; $d<=$jumlahhari; $d++) { 
			
			//jika masuk minggu 0, buat new line
			if (date("w", mktime(0,0,0, $bulan, $d, $tahun))==0){
				echo "<tr>";

			}
			$warna = "white"; //warna default
			$warnasel = "black";

			//jika hari minggu beri warna merah
			if (date("l", mktime(0,0,0, $bulan, $d, $tahun))== "Sunday") {
				$warna = "red";
			}


			//sesuai hari ini
			if ($hariini == $d) {
				$warna = "black";
				$warnasel = "magenta";
			}

			//beri warna default tanggal tiap harinya(selain hari minggu)
			echo "<td align=center valign=middle bgcolor=$warnasel > <span style=\"color:$warna\">$d</span></td>";

			
			//if (date("l", mktime(0,0,0, $bulan, $d, $tahun))== "Sunday") {
				

			//jika hari ke enam, akhiri baris
			if(date("w", mktime(0,0,0, $bulan, $d, $tahun)) ==6){
				echo "</tr>";
			}
		}
		echo '</table>';
	?>
