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
		<h1>Product ADD</h1>

		<div style="margin-top: 30px;">
			<a href="index.php"><button style="">BACK</button></a>
			<button>SAVE</button>
		</div>
	</div>
	
	<hr>

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
		Type Switcher: <select name="type">
				<option value="all" id = "all">All</option>
		        <option value="size" id = "size">Size</option>
		        <option value="weight" id = "weight">Weight</option>
		        <option value="dimention" id = "dimention">Dimention</option>
        </select>
	</form>
	<div class = block>

		<?php
            foreach($posts as $item){
            	if(isset($_POST['submit'])){
					$type = $_POST['type'];
					echo "$type";

					$switch = $item['switch'];
					while($switch != null)
					{
						// echo "Hello";
					    if ($switch == "size" && $switch == $type) {
						    echo $item['switch'] + " MB";
						} elseif ($switch == "weight" && $switch == $type) {
						    echo $item['switch'] + " KG";
						} elseif ($switch == "dimention" && $switch == $type) {
						    echo $item['switch'];
						} 

					}
        ?>
			<div class = "subblock">
				<p><?php echo $item['sku']; ?></p>
				<p><?php echo $item['name']; ?></p>
				<p><?php echo $item['price']; ?></p>
				<p><?php echo $item['switch']; ?>: <?php echo $item['number'];?></p>
			</div>

		<?php
				}
            }
        ?>

	</div>
	
</div>


<body>

	<script type="text/javascript">
      $("#ata_ana").click(function() {
          $("#menu_none").slideToggle("slow");
      })
  </script>

</body>
</html>
