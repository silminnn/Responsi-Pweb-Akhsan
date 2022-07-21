
<?php
echo "<head><title>PESANAN</head></title>";
$fp =fopen("pesanan.txt","a+");
$nama = $_POST ['nama'];
$jumbel = $_POST ['jumbel'];
$PESANAN = $_POST ['PESANAN'];
fputs($fp, "$nama|$jumbel|$PESANAN\n");
fclose($fp);

echo "Terima Kasih <br>";
echo "<a href=lihat.php> Lihat PESANAN </a><br>";
?>