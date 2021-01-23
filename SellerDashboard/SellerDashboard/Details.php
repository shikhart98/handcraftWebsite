<!doctype html>
<html lang="en">
<head>
 <title>Seller dashboard</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" type="text/css" href="css/style.css">

 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>
<body class="bg-light">

  <?php include "header.php"; ?>
  
  <?php
    $mail = $_POST["mail"];
    $image = $_POST["image"];
    $description = $_POST["Description"];
    $price = $_POST["price"];
    $title = $_POST["p_name"];
    $address = $_POST["address"];
    $quantity = $_POST["quantity"];

    $productId = $_POST["p_id"];
  ?>
  <div class="container">
    <div class="row rounded border border-secondary mt-2 p-2">
      
        <form action="UpdateProduct.php" method="post" enctype="multipart/form-data">
          <input name="product_id" class="hidden" value="<?php echo $productId; ?>" />
          <div class="row">
            <div class="col-6 mt-5">
              <img src="images/products/<?php echo $image; ?>" class="img-responsive">
            </div>
            <div class="col-6">
              <div class="price">
                <h6 class="font-weight-bold pt-4 pb-1">Title:</h6>
                <div class="row px-3">
                  <input type="text" name="title" class="form-control" placeholder="title" required="required" id="title" value= <?php echo $title; ?> >
                </div>
              </div>

              <div class="price">
                <h6 class="font-weight-bold pt-4 pb-1">Price:</h6>
                <div class="row px-3">
                  <input type="text" name="price" class="form-control" placeholder="price" required="required" id="price" value= <?php echo $price; ?>>
                </div>
              </div>

              <div class="price">
                <h6 class="font-weight-bold pt-4 pb-1">Quantity:</h6>
                <div class="row px-3">
                  <input type="text" name="quantity" class="form-control" placeholder="Quantity" required="required" id="quantity" value= <?php echo $quantity; ?>>
                </div>
              </div>

              <div class="price">
                <h6 class="font-weight-bold pt-4 pb-1">Location:</h6>
                <div class="row px-3">
                  <input type="text" name="location" class="form-control" placeholder="location" required="required" id="location" value= <?php echo $address; ?>>
                </div>
              </div>

              <div class="price">
                <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                <div class="row px-3">
                  <textarea name="description" class="form-control" rows="7" placeholder="Write details about your product" required="required"><?php echo $description; ?></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5 float-right">
            <div class="col-6">
              <button type="submit" class="btn btn-success d-block rounded pr-5 pl-5" style="font-size: 20px;"><b>UPDATE</b></button>
            </div>
          </div>
        </form>
      
    </div>
  </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>