<?php
include 'Connection.php';
session_start();
$id = $_SESSION['Seller_ID'];

if($_POST['option1'] == 1 ){
    header("Location: Payment.php");
}


    $title = $_POST['title'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $City = $_POST['city'];
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];

    function getProductId() { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
      
        for ($i = 0; $i < 7; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    } 
      
    $randString = getProductId();

   if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];

        if($file_size > 5097152){
        $errors[]='File size must be excately 2 MB';
        echo "<script type='text/javascript'>alert('File size must be excately 10 MB!');
                    window.location='AddProduct.php';
                    </script>";
        }
      
        if(empty($errors)==true){


            // FOR UPLOAD TO SERVER USE THIS CODE
            // $target=$_SERVER['DOCUMENT_ROOT'] . "/images/users/";

            move_uploaded_file($file_tmp,"images/products/".$randString.$file_name);
    
            $q = "insert into products(id, email, title, price, description, quantity,location, image) values ('$randString','$id','$title','$price','$description','$quantity','$City', '$randString$file_name')";
            $q2 = "insert into products(ProductCategory, ProductSubCategory, ProductName, ProductPrice, ProductImage, ProductDescription, ProductSeller) values ('$category','$subcategory','$title','$price','SellerDashboard/SellerDashboard/images/products/$randString$file_name','$description','$id')";
            $result = mysqli_query($con,$q);
            $result2 = mysqli_query($con2,$q2);
            if($result && $result2){
                echo "<script type='text/javascript'>
                    window.location='index.php';
                    alert('Product Uploaded Successfully !');
                    </script>";
            }
            else{
                echo "<script type='text/javascript'>alert('There is some error in database!');
                window.location='index.php';
                </script>";
            }
        }
        else{
            print_r($errors);
            echo "<script type='text/javascript'>alert('Product is not uploaded please try again!');
                    window.location='AddProduct.php';
                    </script>";
        }
    }

?>