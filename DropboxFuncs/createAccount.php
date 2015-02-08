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
		$result=mysqli_query($conn, "SELECT * FROM identity WHERE uname ='$uname' ");
		//int_r($row);
		while($row = mysqli_fetch_assoc($result)) {
        	$_SESSION["uid"];

    	}
		header('Location: settings.php?drop='.$dropb.'&drive='.$gdrive.'');


	}
	$dropbox=0;
	$googledrive=0;

	if($_POST["dbox"] ==1 ){
		$dropbox=1;
	}	
	if($_POST["gdrive"]==1){
		$googledrive=1;
	}
	addToDB($_POST["uname"], $_POST["password"], $dropbox, $googledrive);
?>