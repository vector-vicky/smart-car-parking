

<html>
<head>
<title>Car Parking</title>
</head>
<body  align="center">


<img src="Source/download.png" >
<h1><marquee>Thankyou</marquee></h1>

<?php
	session_start();
	
	if( $_SESSION["loggedin"] === true ){ 
        $id = $_SESSION["id"];
	}
	
	echo "<h2>Allocated parking lot:  ".$id."</h2>";
?>

</body>
</html>