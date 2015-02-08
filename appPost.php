<?php
header('Content-type: application/json');
if($_POST)
{		
        	$con=mysqli_connect("localhost", "root", "tom", "v1");

        	if (mysqli_connect_errno())
        	{
            	echo "Failed to connect to MySQL: " . mysqli_connect_error();
        	}
			
			$id = $_POST ['ID'];
			
			mysqli_query($con,
			"INSERT INTO identity (id, db, drive) VALUES ('$id', '$db', '$drive') ");

        	mysqli_close($con);
			
        	echo '{"success":1}';
}

else
{
    echo '{"success":0,"error_message":"no post"}';
}
     
?>
