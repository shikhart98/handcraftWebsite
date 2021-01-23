<!doctype html>
<html lang="en">
<head>
 <title>Seller dashboard</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet"  href="css/Style1.css">

 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>
<body>

<?php include "header.php"; ?>

<div class="hm_about_wrapper" style="background-color:#FFFFFF">
<div class="container">
    <div class="row bg-light rounded border border-danger mt-2" style="font-family:Georgia">
        <div class="col-lg-4"></div>
       <div class="col-lg-4 col-md-4" >

       <h1 class="text-center pb-3 pt-3"><span class="text-danger"><b>Log</b></span> In</h1>

        <form action="ValidateLogin.php" method="post">

        <?php
        //catch error send back by registration validation
        if(isset($_GET['login']))
            {
                $error = $_GET['login'];
                if($error == 'emptyfields')
                {
                    echo '<div class="alert alert-danger">Please fill the required fields </div>';
                }
                else if($error == 'norecord')
                {
                    echo '<div class="alert alert-danger">No record found , please create your account . </div>';
                }
                else if($error == 'invalidemail')
                {
                    echo '<div class="alert alert-danger">Please provide a valid email address </div>';
                }
                else if($error == 'passwordmissmatch')
                {
                    echo '<div class="alert alert-danger">Password is not correct </div>';
                }

            }
            ?>

            <div class="form-group" >
                <label for="email" class="text-dark">Email Address</label>
                <?php
                if (isset($_GET['emailAddress'])) {
                      $emailAddress = $_GET['emailAddress'];
                      echo'<input type="email" class="form-control" id="email" name="emailAddress" value="'.$emailAddress.'" read>
                        </div>';
                  // code...
                }
                else {
                  echo'<input type="email" class="form-control" id="email" name="emailAddress" placeholder="Email Address">
              </div>';
                }
                ?>
            <div class="form-group">
                <label for="email" class="text-dark">Password</label>
                <input type="password" class="form-control" id="email" name="sellerPassword" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-danger btn-block ronded-0" name="submit">Log In</button>
            <br>

            <p class="text-secondry text-center mt-3">Create a new Account ? <span class="font-weight-bolder"><a href="Signup.php" class="hm_color"><b>Sign Up</b></a></span></p>

        </form>

       </div><!--form-->


    </div><!--row-->

</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>