<?php
include "database.php";

$result = mysqli_query($connect, "SELECT * FROM `product`");

while($item = mysqli_fetch_assoc($result))
{
    $posts[] = $item;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sadik site</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/sadik.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
	<style type="text/css">
		/**{
			margin: 0px;
			padding: 0px;
			
		}*/
		.block{
			display: flex;
			background-color: lightyellow; 
			justify-content: space-around;
			/*width: 100%*/

		}

		.subblock{
			background-color: lightgrey;
			padding: 20px;
		}
	</style>
</head>

<div>
	<div class="block">
		<h1>Product List</h1>

		<div style="margin-top: 30px;">
			<a href="junior.php"><button style="">ADD Page</button></a>
			<form action="" method="POST" name="myForm">
				<select name="type">
					<option value="all" id = "all">All</option>
			        <option value="size" id = "size">Size</option>
			        <option value="weight" id = "weight">Weight</option>
			        <option value="dimention" id = "dimention">Dimention</option>
		        </select>
		        <input type="submit" name="submit" value="Submit">
			</form>
			
		</div>
	</div>
	
	<hr>
	<div class = block>

		<?php
            foreach($posts as $item){
            	if(isset($_POST['submit'])){
					$type = $_POST['type'];
					echo "$type";

					$switch = $item['switch'];
					if ($switch == "size" && $switch == $type) {
						    echo $item['switch'] + " MB";
						} elseif ($switch == "weight" && $switch == $type) {
						    echo $item['switch'] + " KG";
						}

					$switch = $item['switch'];

					// while($switch != null)
					// {
					// 	// echo "Hello";
					//     if ($switch == "size" && $switch == $type) {
					// 	    echo $item['switch'] + " MB";
					// 	} elseif ($switch == "weight" && $switch == $type) {
					// 	    echo $item['switch'] + " KG";
					// 	} 

					// }

// --------------------------------------

					// while($switch != null)
					// {
					// 	// echo "Hello";
					//     if ($switch == "size" && $switch == $type) {
					// 	    echo $item['switch'] + " MB";
					// 	} elseif ($switch == "weight" && $switch == $type) {
					// 	    echo $item['switch'] + " KG";
					// 	} elseif ($switch == "dimention" && $switch == $type) {
					// 	    echo $item['switch']
					// 	} elseif ($switch == "size" || $switch == "weight" || $switch == "dimention") {
							
					// 	}

					// }
        ?>
			<div class = "subblock">
				<p><?php echo $item['sku']; ?></p>
				<p><?php echo $item['name']; ?></p>
				<p><?php echo $item['price']; ?></p>
				<p><?php echo $item['switch']; ?>: <?php echo $item['number'];?></p>
			</div>

					<!-- Here was my wrong another answer -->

		<?php
				}
            }
        ?>

	</div>
	
</div>


<body>
	<!-- <script type="text/javascript">
		$("#ata_ana").click(function(){
		  	$("#menu_none").slideToggle("slow");
		})
	</script> -->

	<script type="text/javascript">
      $("#ata_ana").click(function() {
          $("#menu_none").slideToggle("slow");
      })


      // function newDoc() {
      //     // window.location.assign("kuzhattar.php")

      //     if(document.getElementById("size").value == "size" || document.getElementById("weight").value == "weight" || document.getElementById("dimention").value == "dimention"){
              // <?php whitchSwitch(); ?>
      //     }
                      
      // }
  </script>

</body>
</html>

<?php

				// if(isset($_POST['submit'])){
				// 	$types = $_POST['type'];
				//  	echo "$types";

				// }

			// function whichSwitch() {
			// 	$switch = $item['switch'];

			// 	while($switch != null)
			// 	{
			// 	    if ($switch == "size") {
			// 		    echo $item['switch'] + " MB";
			// 		} elseif ($switch == "weight") {
			// 		    echo $item['switch'] + " KG";
			// 		}

			// 	}

			// }	
?>