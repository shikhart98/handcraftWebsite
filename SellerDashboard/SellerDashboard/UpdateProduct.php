<?php
include 'Connection.php';
session_start();
$id = $_SESSION['Seller_ID'];



    $title = $_POST['title'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $City = $_POST['location'];

    $p_id = $_POST['product_id'];

    
    $q = "update products set title = '$title', price='$price', description = '$description' , quantity = '$quantity',location = '$City' where id = '$p_id'";
            $result = mysqli_query($con,$q);
            if($result){
                echo "<script type='text/javascript'>alert('Product Updated Successfully !');
                    window.location='index.php';
                    </script>";
            }
            else{
                echo "<script type='text/javascript'>alert('There is some error in database!');
                window.location='index.php';
                </script>";
            }
       
?>