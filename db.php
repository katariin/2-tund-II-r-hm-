<?php
     require_once("../config.php");
     
	 //Create connection
	    $conn = new mysqli($servername, $username, $password, $dbname);
	 
	 // Check connection
	 if ($conn->connect_error) {
		 die("Cennection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	
	         require_once("../table.txt")
	   // valmistame ja yhendame
	            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
	             $stmt->bind_param ($firstname, $email);
				 
	     $stmt->close();
		 $conn->close();
?>
	 