<?php
		//$servername = "localhost";
		///$username = "root";
		//$password = "";
		//$dbname = "test";

		//$conn  =  new mysqli($servername,$username,$password,$dbname);

		//if(!$conn){
	//		die("connection error" . mysqli_connect_error());
		//}
		if(!empty($_POST)){
			$data = array();
			$lat = $_POST['lat'];
			$lng = $_POST['lng'];
			$city = $_POST['city'];
			$sql = "INSERT INTO geo_location(address,latitude,longitude) VALUES ('city','lat','lng')";
			if(mysql_query($sql)){
				$data["status"] = true;
				$data["message"] = "location added successfully";	
			} else{
				$data["status"] = flase;
				$data["message"] = "Error: ";
			}
			echo json_encode($data);
			mysql_close();

		}
	
?>













