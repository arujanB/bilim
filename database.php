<?php 
    $part1_ip = "localhost";
	$part2_name = "root";
	$part3_p = "root";
	$part4_db = "junior";

	$connect = mysqli_connect($part1_ip, $part2_name, $part3_p, $part4_db);

	if($connect == false){
		echo "Error";
	}

    mysqli_set_charset($connect, "utf8");
    

?>