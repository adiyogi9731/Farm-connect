<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "register";
			
			$conn = mysqli_connect($servername, $username, $password);
			mysqli_select_db($dbname, $conn);
			if (isset($_GET['CompanyName'])){
				$username = mysqli_real_escape_string($_GET['CompanyName']);
				$query = mysqli_query("SELECT * FROM products WHERE 'CompanyName' = '$username'") ; 
				while($row = mysqli_fetch_assoc($query){
					$imageData = $row["image"];
				}
				header("content-type: image/jpeg");
				echo $imageData;
			}
			else{
			
			echo "Error!";
			}



?>