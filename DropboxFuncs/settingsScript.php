<?php
//call db functions to add user to the DB
include 'DropboxCon.php';
session_start();
	function updateDB($dropbToken, $gdriveToken){
		$servername = "localhost";
		$username = "root";
		$password = "tom";
		$dbname = "v1";

// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$uid = $_SESSION["uid"];
		echo $uid;
		$sql = "UPDATE identity SET dbox='$dropbToken', drive='$gdriveToken' WHERE id='$uid'";
		if(mysqli_query($conn, $sql)){
			echo "success";
		}
		
		


	}
	//$dropbox=0;
	//$googledrive=0;
	$dbcon = new DropboxCon();
	$webAuth = $_SESSION["dbsess"];
	$authCodeDb= $_POST["authcodedb"];
	$authCodeGd=$_POST["authcodegd"];
	if($_SESSION["dbox"]==1&&$_SESSION["gdrive"]==0){
		updateDB($dbcon->getUserAccessToken($authcodedb, $webAuth),0);
	}else if($_SESSION["dbox"]==0&&$_SESSION["gdrive"]==1){
		updateDB(0,$dbcon->getUserAccessToken($authcodegd, $webAuth));//change this to google drive shit latter

	}else if($_SESSION["dbox"]==1&&$_SESSION["gdrive"]==1){
		updateDB($dbcon->getUserAccessToken($authcodedb, $webAuth),$dbcon->getUserAccessToken($authcodegd, $webAuth));//change this to google drive shit latter
	}else{
		updateDB(0,0);
	}
?>