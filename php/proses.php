
<?php 

$nama       = $_POST['nama'];
$email      = $_POST['email'];
$alamat     = $_POST['alamat'];
$status     = $_POST['status'];
$komentar   = $_POST['komentar'];


echo '<body style="background-color:black" ">';
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("data.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);

echo '<h2 style="text-align:center;color:white;font-size:30px;font-family:calibri ;">terima kasih telah mengisi buku tamu<h2><br><br>';
echo "<div style=\"text-align:center;\">";
echo "<a href='../index.php'>kembali ke menu utama</a><br><br>";
echo "<a href='lihat.php'>lihat buku tamu</a><br>";
echo "</div>";

 ?>



