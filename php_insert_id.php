<?php
$servername = "localhost";
$username = "root";
$password = "tom";
$dbname = "v1";

//set values
$id_val = "5";
$db_val = "1";
$drive_val = "0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo"success";

$sql = "INSERT INTO identity (id, db, drive) VALUES ('$id_val','$db_val','$drive_val')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
