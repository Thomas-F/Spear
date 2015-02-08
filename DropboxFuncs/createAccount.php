<?php
//call db functions to add user to the DB
	function addToDB($uname, $pass, $dropb, $gdrive){
		$servername = "localhost";
		$username = "root";
		$password = "tom";
		$dbname = "v1";

// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "INSERT INTO identity(dbox, drive, uname, pass) VALUES ('$dropb', '$gdrive', '$uname', '$pass')";
		if(mysqli_query($conn, $sql)){
			echo "success";
		}


	}
	$dropbox=0;
	$googledrive=0;
	if(isset($_POST["dbox"])){
		$dropbox=1;
	}
	if(isset($_POST["gdrive"])){
		$googledrive=1;
	}
	addToDB($_POST["uname"], $_POST["password"], $dropbox, $googledrive);
?>