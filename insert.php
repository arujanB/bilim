<?php

include_once 'database.php';
	// $sku = $_POST['sku'];
	// $name = $_POST['name'];
	// $price = $_POST['price'];
	// $switch = $_POST['size'];
	// $height = $_POST['height'];
	// $width = $_POST['width'];
	// $length = $_POST['length'];
	// $weight = $_POST['weight'];


	// $sql = "INSERT INTO product (sku, name, price, switch, size, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$switch', '$size', '$height', '$width', '$length', '$weight');";
	// mysql_query($connect, $sql);

// another vertion

// $sku = $_POST['sku'];
// 	$name = $_POST['name'];
// 	$price = $_POST['price'];
// 	$switch = $_POST['switch'];
// 	$switch = $_POST['size'];
// 	$height = $_POST['height'];
// 	$width = $_POST['width'];
// 	$length = $_POST['length'];
// 	$weight = $_POST['weight'];


// 	$stmp = $connect->prepare("INSERT INTO product (sku, name, price, switch, size, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$switch', '$size', '$height', '$width', '$length', '$weight');");
// 	$stmp = bind_param("ssisiiiii", $sku, $name, $price, $switch, $size, $height, $width, $length, $weight);
// 	$stmp->execute();
// 	echo "Successful";
// 	$stmp->close();
// 	$connect->close();



if(isset($_POST['submit']))
{    
    $sku = $_POST['sku'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$switch = $_POST['switch'];
	$switch = $_POST['size'];
	$height = $_POST['height'];
	$width = $_POST['width'];
	$length = $_POST['length'];
	$weight = $_POST['weight'];
     $sql = "INSERT INTO product (sku, name, price, switch, size, height, width, length, weight) VALUES ('$sku', '$name', '$price', '$switch', '$size', '$height', '$width', '$length', '$weight');");
     if (mysqli_query($connect, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($connect);
     }
     mysqli_close($connect);
}

?>