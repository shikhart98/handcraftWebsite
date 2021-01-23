
<?php

include 'Connection.php';
session_start();
if(isset($_SESSION['Seller_ID']))
{
  header("Location: Login.php");
}

$id = $_SESSION['Seller_ID'];

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/about.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logos.jpg);"></div>
	  				<h3>Craft Village India</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-download mr-3 notif"></span> Orders</a>
          </li>
          <li>
            <a href="AddProduct.php"><span class="fa fa-gift mr-3"></span> Add Product</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
          </li>
          <li>
            <a href="Setting.php"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
            <a href="Logout.php"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        
        <div class="row">
    <div class="col-12 d-flex flex-row-reverse">
      <div id="add">
        <a href="AddProduct.php"><button class="p-2 btn btn-danger" id="add"><b style="font-size: 20px;color: white;">ADD PRODUCT</b></button></a>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-6 col-md-4 col-lg-3">
      <div id="box1">
        <h2>ALL PRODUCT</h2>
        <?php
          $result = mysqli_query($con, "SELECT SUM(quantity) AS all_product FROM products where email = '$id'"); 
          $row = mysqli_fetch_assoc($result); 
        ?>
        <h1><?php echo $row['all_product'];?></h1>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-3">
      <div id="box1">
        <h2>ALL TYPES</h2>
        <?php
          $result1 = mysqli_query($con, "SELECT count(id) AS all_type FROM products where email = '$id'"); 
          $row1 = mysqli_fetch_assoc($result1); 
        ?>
        <h1><?php echo $row1['all_type'];?></h1>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-3">
      <div id="box1">
        <h2>ALL SALES</h2>
        <h1>100</h1>
      </div>
    </div>
    <div class="col-6 col-md-4 col-lg-3">
      <div id="box1">
        <h2>ALL ORDER</h2>
        <h1>100</h1>
      </div>
    </div>
  </div>

  <div class="row mt-5">  
    <div class="col-12">
      <h1 class="p-2 rounded mt-3 border border-primary bg-primary text-light" id="myproduct">MY PRODUCTS</h1>
    </div>
  </div>

  <div class="row mt-5">
    <?php
    
    $q = "select id,image,title,price,email,description,location,quantity from products where email = '$id'";
    $result = mysqli_query($con,$q);
    $num = mysqli_num_rows($result);
    for($i=1;$i <= $num;$i++){
        $row = mysqli_fetch_array($result);
    ?> 
           
      <div class="col-6 col-md-4 col-lg-3 box2 img-thumbnail">
          
          <div class="row">
            <form action ="Details.php" method="post"> 
              <input name="p_id" class="hidden" value="<?php echo $row['id']; ?>" />

              <input name="mail" class="hidden" value="<?php echo $row['mail']; ?>" />
                <input name="Description" class="hidden" value="<?php echo $row['description']; ?>" />
                <input name="image" class="hidden" value="<?php echo $row['image']; ?>" />
                <input name="price" class="hidden" value="<?php echo $row['price']; ?>" />
                <input name="p_name" class="hidden" value="<?php echo $row['title']; ?>" />
                <input name="address" class="hidden" value="<?php echo $row['location']; ?>" />
                <input name="quantity" class="hidden" value="<?php echo $row['quantity']; ?>" />
                <button id ="p_image">
              <img src="images/products/<?php echo $row['image'] ?>"  alt="image" class="img-responsive center"/>
              </button>
            </form>
          </div>
      
          <div class="row box4 ml-2">
              <p><?php echo $row['title'] ?></p>
              <p>&#8377;
                  <b><?php echo $row['price'] ?></b>
              </p>
          </div>
      </div> 
          <?php      
              }
          ?>
               
        </div>

      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>