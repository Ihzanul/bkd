<?php
	// $host = "localhost";
	// $user = "root";
	// $pass = "";
	// $dbname = "bkd_rev";
	
	// $kon = mysqli_connect($host, $user, $pass, $dbname);
	// $kon = mysql_connect($host, $user, $pass);

	// if($kon){
	// 	echo "koneksi host berhasil.<br/>";
	// }else{
	// 	echo "koneksi gagal.<br/>";
	// }

	// $db = mysql_select_db($dbname);
	
	// if($kon){
	// 	echo "koneksi database berhasil.";
	// }else{
	// 	echo "koneksi database gagal.";
	// }
	
	// if(!$kon)
	// 	die ("Gagal koneksi karena ".mysql_error());
				
	// $dbKon = mysql_select_db($dbname, $kon);
	
	// if(!$dbKon) 
	// 	die ("Gagal membuka database $dbname karena".mysql_error());
	
	$koneksi = mysqli_connect("localhost","root","","bkd_rev");

	// Check connection
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	
?>