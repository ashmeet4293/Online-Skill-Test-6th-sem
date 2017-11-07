	<?php
        function databaseConnector(){
		$servername = "localhost";
		$username = "root";
		$password = "system";
		$dbname = "oes";
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
			die("Connection Failed".mysqli_error());
		}else{
                    return $conn;
                }
        }
	?>