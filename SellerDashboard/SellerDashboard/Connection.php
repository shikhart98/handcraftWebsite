<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db_name = 'handcraft';
	$db_name2 = 'handmade';
	$con = mysqli_connect($host, $user, $pass, $db_name);
	$con2 = mysqli_connect($host, $user, $pass, $db_name2);
	if($con && $con2){
		echo "";
	}
	
// $stmt = "Select * from sellers";
// $query = mysqli_query($con,$stmt);
// $result = mysqli_num_rows($query);
//  if($result>0)
//  {
//      while($row = mysqli_fetch_assoc($query))
//     {
//          echo $row['user_first_name']."<br>";
//     } }

?>