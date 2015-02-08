<?php
//call db functions to add user to the DB
session_start();
	function addToDB($uname, $pass, $dropb, $gdrive){
		$servername = "localhost";
		$username = "root";
		$password = "tom";
		$dbname = "v1";

// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "INSERT INTO identity(uname, pass) VALUES ('$uname', '$pass')";
		if(mysqli_query($conn, $sql)){
			echo "success";
		}
		$row=mysqli_query($conn, "SELECT * FROM identity WHERE uname ='$uname' " );
		echo $row["id"];
		//header('Location: settings.php?drop='.$dropb.'&drive='.$gdrive.'');


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