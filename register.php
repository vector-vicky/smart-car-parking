<?php
	require "config.php";
	
	
	if( isset( $_POST[ "SEND" ] ) ){			
			
			$name = $_POST[ "name" ];
			$ph_num = $_POST[ "pnumber" ];
			$vh_num = $_POST[ "vnumber" ];
		
	}
		$sql = "INSERT INTO `allocate`(`name`, `ph_num`, `vh_num`) VALUES ('$name','$ph_num','$vh_num')";
        
		$stmt = mysqli_query($link, $sql);
		
		 
        if($stmt){
			$sql2 = "SELECT `id` FROM `allocate` WHERE name = '$name'";
			
			$result = mysqli_query($link, $sql2);
			
			if( $result ){
				while( $row = mysqli_fetch_row($result)){
					$id = $row[0];
				}
			}
			
			session_start();
			$_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
			
			header( "location: carparking3.php" );
        }
		else{
			die("Error: ".mysqli_error($link));
		}
        // Close statement
        mysqli_stmt_close($stmt);
	

?>