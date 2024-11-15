<?php 
$hostname = 'localhost';
$userdb = 'root';
$passdb = '';
$namedb = 'ujikom_galeripotoku';

$koneksi = mysqli_connect($hostname,$userdb,$passdb,$namedb);

if ($koneksi) {
	echo "Terhubung";
}else{
	echo "Tidak Terhubung";
}
 ?>
