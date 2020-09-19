

<html>
<head>
<title>Car Parking</title>
</head>
<body  align="center">


<img src="Source/download.png" >
<h1><marquee>Thankyou</marquee></h1>

<?php
	require "config.php";
		
		if( isset($_POST[ "submit" ])){
			$vh_num = $_POST[ "vh_num" ];
		
		$sql3 = "SELECT `id`,`name`, `ph_num` FROM `allocate` WHERE vh_num = '$vh_num'";
		
		$result = mysqli_query( $link, $sql3 );
		
		if( $result !== false){
			while( $row = mysqli_fetch_row($result)){
				$id = $row[0];
				$name = $row[1];
				$ph_num = $row[2];
			}
			
			printf( "<h2>Parking Lot Number: %d \nName: %s \nPhone Number: %s \nVehicle Number: %s</h2>", $id, $name, $ph_num, $vh_num );
			
			
		}else{
			echo "<h2>CAR NO ENTERED IS NOT AVAILABLE...</h2>";
			die();
		}
		}
?>

</body>
</html>