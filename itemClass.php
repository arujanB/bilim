<?php
include "database.php";

$result = mysqli_query($connect, "SELECT * FROM `product`");

while($item = mysqli_fetch_assoc($result))
{
    $posts[] = $item;
}

?>

<?php 

class ItemClass {
	public $sku;
	public $name;
	public $price;
	public $switch;
	public $size;
	public $height;
	public $width;
	public $length;
	public $weight;

	function set_sku($sku) {
	   $this->sku = $sku;
	}

    function get_sku() {
	    return $this->sku;
    }

    function set_name($name) {
	    $this->name = $name;
	}

    function get_name() {
	    return $this->name;
	}

	function set_price($price) {
	    $this->price = $price;
	}

    function get_price() {
	    return $this->price;
	}

	function set_switch($switch) {
	    $this->type = $switch;
	}

    function get_switch() {
	    return $this->switch;
	}

	function switch($switch, $size, $height, $width, $length, $weight){
		switch ($switch) {
		case 'Size':
			echo $switch . ": " . $size . " MB";
			break;
		case 'Weight':
			echo $switch . ": " . $weight . " KG";
			break;
		case 'Dimention':
			echo $switch. ": " . $height . "x" . $width . "x" . $length;
			break;
		}
	}

}

echo "<b>ALL PRODUCT LIST</b><br>";

foreach($posts as $item){
	$firstClass = new ItemClass();
	$firstClass->set_sku($item['sku']);
	$firstClass->set_name($item['name']);
	$firstClass->set_price($item['price']);
	$firstClass->set_switch($item['switch']);

	echo "<br>";
	echo "SKU: " . $firstClass->get_sku();
	echo "<br>";
	echo "Name: " . $firstClass->get_name();
	echo "<br>";
	echo "Price: " . $firstClass->get_price();
	echo "<br>";
	echo $firstClass->switch($item['switch'], $item['size'], $item['height'], $item['width'], $item['length'], $item['weight']);
	echo "<br>";

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
</head>
<body>
	<br>
	<h3>Choose type of product that you want to be see</h3>
	<form action="" method="POST" name="myForm">
		<select name="type">
			<option value="all" id = "all">All</option>
			<option value="size" id = "size">Size</option>
	        <option value="weight" id = "weight">Weight</option>
	        <option value="dimention" id = "dimention">Dimention</option>
	    </select>
		    <input type="submit" name="submit" value="Submit">
	</form>

	<?php

//Incorrect, but have correct vertion and it work. Vertion with OOP. Ends where "----...-"
	
	// function showSwitchResult($switch, $sku, $name, $price, $size, $weight, $dimention, $height, $width, $length){
	// 	echo "Trying something <br>"
	// 		$type = $switch;
	// 		if ($type == 'size' && $size != 0) {
	// 				echo "<br>";
	// 				echo "SKU: " . $sku;
	// 				echo "<br>";
	// 				echo "Name: " . $name;
	// 				echo "<br>";
	// 				echo "Price: " . $price;
	// 				echo "<br>";
	// 				echo "Size: " . $size . " MB";
	// 				echo "<br>";
	// 			}elseif ($type == 'weight' &&  $weight != 0) {
	// 				echo "<br>";
	// 				echo "SKU: " . $sku;
	// 				echo "<br>";
	// 				echo "Name: " . $name;
	// 				echo "<br>";
	// 				echo "Price: " . $price;
	// 				echo "<br>";
	// 				echo "Weight: " . $weight . " KG";
	// 				echo "<br>";
	// 			}elseif ($type == "dimention" &&  $height != 0) {
	// 				echo "<br>";
	// 				echo "SKU: " . $sku;
	// 				echo "<br>";
	// 				echo "Name: " . $name;
	// 				echo "<br>";
	// 				echo "Price: " . $price;
	// 				echo "<br>";
	// 				echo "Dimention: " . $height . "x" . $width . "x" . $length;
	// 				echo "<br>";
	// 			} elseif ($type == "all"){
	// 				echo "<br>";
	// 				echo "SKU: " . $sku;
	// 				echo "<br>";
	// 				echo "Name: " . $name;
	// 				echo "<br>";
	// 				echo "Price: " . $price;
	// 				echo "<br>";
	// 				if ($type == $size) {
	// 					echo "Size: " . $size . " MB";
	// 					echo "<br>";
	// 				}elseif ($type == $weigth) {
	// 					echo "Weight: " . $weight . " KG";
	// 					echo "<br>";
	// 				}elseif ($type == $dimention) {
	// 					echo "Dimention: " . $height . "x" . $width . "x" . $length;
	// 					echo "<br>";
	// 				}
	// 	}
	// }

	//---------------------------------

		function qwer($switchSize, $switchWeight, $switchHeight, $switchWidth, $switchLength){
			if ($switchSize != 0) {
				echo "Size: " . $switchSize . " MB";
				echo "<br>";
			}elseif ($switchWeight != 0) {
				echo "Weight: " . $switchWeight . " KG";
				echo "<br>";
			}elseif ($switchHeight != 0) {
				echo "Dimention: " . $switchHeight . "x" . $switchWidth . "x" . $switchLength;
				echo "<br>";
			}
		}

		foreach($posts as $item){

            if(isset($_POST['submit'])){
				$type = $_POST['type'];

				if ($type == 'size' && $item['size'] != 0) {
					echo "<br>";
					echo "SKU: " . $item['sku'];
					echo "<br>";
					echo "Name: " . $item['name'];
					echo "<br>";
					echo "Price: " . $item['price'];
					echo "<br>";
					echo "Size: " . $item['size'] . " MB";
					echo "<br>";
				}elseif ($type == 'weight' &&  $item['weight'] != 0) {
					echo "<br>";
					echo "SKU: " . $item['sku'];
					echo "<br>";
					echo "Name: " . $item['name'];
					echo "<br>";
					echo "Price: " . $item['price'];
					echo "<br>";
					echo "Weight: " . $item['weight'] . " KG";
					echo "<br>";
				}elseif ($type == "dimention" &&  $item['height'] != 0) {
					echo "<br>";
					echo "SKU: " . $item['sku'];
					echo "<br>";
					echo "Name: " . $item['name'];
					echo "<br>";
					echo "Price: " . $item['price'];
					echo "<br>";
					echo "Dimention: " . $item['height'] . "x" . $item['width'] . "x" . $item['length'];
					echo "<br>";
				} elseif ($type == "all"){
					echo "<br>";
					echo "SKU: " . $item['sku'];
					echo "<br>";
					echo "Name: " . $item['name'];
					echo "<br>";
					echo "Price: " . $item['price'];
					echo "<br>";
					qwer($item['size'], $item['weight'], $item['height'], $item['width'], $item['length']);
				}

				// Correct code but should improve 

				// switch ($type) {
				// case 'size':
				// 	echo "<br>";
				// 	echo "SKU: " . $item['sku'];
				// 	echo "<br>";
				// 	echo "Name: " . $item['name'];
				// 	echo "<br>";
				// 	echo "Price: " . $item['price'];
				// 	echo "<br>";
				// 	echo "Size: " . $item['size'] . " MB";
				// 	echo "<br>";
				// 	break;
				// case 'weight':
				// 	echo "<br>";
				// 	echo "SKU: " . $item['sku'];
				// 	echo "<br>";
				// 	echo "Name: " . $item['name'];
				// 	echo "<br>";
				// 	echo "Price: " . $item['price'];
				// 	echo "<br>";
				// 	echo "Weight: " . $item['weight'] . " KG";
				// 	echo "<br>";
				// 	break;
				// case 'wimention':
				// 	echo "<br>";
				// 	echo "SKU: " . $item['sku'];
				// 	echo "<br>";
				// 	echo "Name: " . $item['name'];
				// 	echo "<br>";
				// 	echo "Price: " . $item['price'];
				// 	echo "<br>";
				// 	echo "Dimention: " . $height . "x" . $width . "x" . $length;
				// 	echo "<br>";
				// 	break;
				// }

				// -------------------

				//This is just code not answer
				
				// echo "<br>";
				// echo $item['sku'];
				// echo "<br>";
				// echo $item['name'];
				// echo "<br>";
				// echo $item['price'];
				// echo "<br>";
				// echo $item['switch'];
				// echo "<br>";
			}
		}


	?>
	<br>
	<div style="list-style: none;">
		<li>
			SKU: <input type="text" name="sku" value="">
		</li>
		<li>
			Name: <input type="text" name="name" value="">
		</li>
		<li>
			Price: <input type="text" name="price" value="">
		</li>
	</div>

	<form action="" method="POST" name="myForm">
		Type Switcher: 
		<select name="type2">
		        <option value="size" id = "size">Size</option>
		        <option value="weight" id = "weight">Weight</option>
		        <option value="dimention" id = "dimention">Dimention</option>
        </select>
        <input type="submit" name="want" value="Want">
	</form>

	<?php
	// This code show your switchs answer!
           	if(isset($_POST['want'])){
				$type2 = $_POST['type2'];
				echo "type2 is " . $type2 . "<br>";

				switch ($type2) {
					case 'size':
						echo "<br> Write yor product size:";
						?>
							<li style="list-style: none;">
								Size: <input type="text" name="size" value="">
							</li>
						<?php
						break;
					case 'weight':
						echo "<br> Write yor product weight:";
						?>
							<li style="list-style: none;">
								Weight: <input type="text" name="size" value="">
							</li>
						<?php
						break;
					case 'dimention':
						echo "<br> Write yor product height, width, length: ";
						?>
							<li style="list-style: none;">
								height: <input type="text" name="dimention" value="">
								weight: <input type="text" name="dimention" value="">
								length: <input type="text" name="dimention" value="">
							</li>
						<?php
						break;
				}
			}
    ?>

    <form action="" method="POST" name="myForm3">
        <input type="submit" name="add" value="ADD">
	</form>

</body>
</html>



<?php

// class ItemClass {
// 	public $sku;
// 	public $name;
// 	public $price;
// 	// public function switch();

// 	function set_sku($sku) {
// 	   $this->sku = $sku;
// 	}

//     function get_sku() {
// 	    return $this->sku;
//     }

//     function set_name($name) {
// 	    $this->name = $name;
// 	}

//     function get_name() {
// 	    return $this->name;
// 	}

// 	function set_price($price) {
// 	    $this->price = $price;
// 	}

//     function get_price() {
// 	    return $this->price;
// 	}

// function set_switch($switch) {
// 	    $this->type = $switch;
// 	}

//     function get_switch() {
// 	    return $this->switch;
// 	}

// function set_size($size) {
	//    $this->size = $size;
	// }
 //    function get_size() {
	//     return $this->size;
 //    }

 //    function set_height($height) {
	//     $this->height = $height;
	// }
 //    function get_height() {
	//     return $this->height;
	// }

	// function set_width($width) {
	//     $this->width = $width;
	// }
 //    function get_width() {
	//     return $this->width;
	// }

	// function set_length($length) {
	//     $this->length = $length;
	// }
 //    function get_length() {
	//     return $this->length;
	// }

	// function set_weight($weight) {
	//     $this->weight = $weight;
	// }
 //    function get_weight() {
	//     return $this->weight;
	// }


// }

// foreach($posts as $item){
// 	$firstClass = new ItemClass();
// 	$firstClass->set_sku($item['sku']);
// 	$firstClass->set_name($item['name']);
// 	$firstClass->set_price($item['price']);
// 	$firstClass->set_switch($item['switch']);
// 	// $firstClass->set_size($item['size']);
// 	// $firstClass->set_height($item['height']);
// 	// $firstClass->set_width($item['width']);
// 	// $firstClass->set_length($item['length']);
// 	// $firstClass->set_weigth($item['weight']);

// 	echo "<br>";
// 	echo "SKU: " . $firstClass->get_sku();
// 	echo "<br>";
// 	echo "Name: " . $firstClass->get_name();
// 	echo "<br>";
// 	echo "Price: " . $firstClass->get_price();
// 	echo "<br>";
// 	echo $firstClass->switch($item['switch'], $item['size'], $item['height'], $item['width'], $item['length'], $item['weight']);
// 	echo "<br>";



// }

?>
