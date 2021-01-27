<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db_name = 'handcraft';

	$con = mysqli_connect($host, $user, $pass, $db_name);

	// if($con){
	// 	echo "Connection to Database Failed";
	// }
	
// $stmt = "Select * from users_info";
//  $query = mysqli_query($conn,$stmt);
// $result = mysqli_num_rows($query);
//  if($result>0)
//  {
//      while($row = mysqli_fetch_assoc($query))
//     {
//          echo $row['user_first_name']."<br>";
//     } }

?>