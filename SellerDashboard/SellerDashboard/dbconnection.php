<?php
$dbServer = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "handmade";

$conn = mysqli_connect($dbServer,$dbUser,$dbPwd,$dbName);

if($conn)
{
    die("Connection Error :: ".mysqli_connect_error());
}



$stmt = "Select * from users_info";
 $query = mysqli_query($conn,$stmt);

$result = mysqli_num_rows($query);

 if($result>0)
 {
     while($row = mysqli_fetch_assoc($query))
    {
         echo $row['user_first_name']."<br>";
    } }
?>