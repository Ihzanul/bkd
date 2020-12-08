<?php
$conn = new PDO("mysqli:host=localhost;dbname=bkd_rev","root","");
	
	if ($conn) {
		echo "<h2 style:color='green'>Koneksi berhasil</h2>";
	}
	else 
		echo "<h2 color='red'>koneksi gagal</h2>";

?>