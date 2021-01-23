<!doctype html>
<html lang="en">
<head>
 <title>Seller Setting</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet"  href="css/Style1.css">

 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <style type="text/css">
   .box{
    margin-top: 20px;
    padding: 20px;
   }
 </style>
 
</head>
<body class="bg-light">


  <?php include "header.php"; ?>

	<div class="container">
		<div class="row rounded border border-primary box">
          <?php 
          	include 'Connection.php';
          	session_start();

            try{
                $id = $_SESSION['Seller_ID'];
                $q = "select f_name,l_name,emailId,org_name,image,address,city from sellers where emailId ='$id'";
                $result = mysqli_query($con,$q);
                $num = mysqli_num_rows($result);
                for($i=1;$i <= $num;$i++){
                    $row = mysqli_fetch_array($result);
                            
                ?>

          <div class="col-md-4">
              <div class="row">
                <img src ="images/sellers/<?php echo $row['image']; ?>" id ="profile_pic" alt="Profile Picture" class="pull-right img-responsive">
              </div>
              <div class="row">
                <form action="PicUpdate.php" method="post" enctype="multipart/form-data" onsubmit="return Validatation();">
                  <input type="file" style="display:none;" id="file" name="photo" required="required"/>
                  <input type="submit" value="Update Photo" class="btn btn-primary float-right"/>
                  <input type="button" value="Choose Photo" onclick="document.getElementById('file').click();" class="btn btn-primary float-right" />
                </form>
              </div>
          </div>
          <div class ="col-md-8">
            <form action ="ProfileUpdate.php" method ="post" onsubmit="return Confirm();">
              <table class="table table-hover table-responsive">
                <tr>
                  <td><label for ="mail">MAIL-ID </label></td>
                  <td style="width: 600px;"><?php echo $row['emailId']; ?> </td>
                </tr>
                <tr>
                  <td><label for ="f_name">FIRST NAME </label></td>
                  <td><input type ="text" name="f_name"  class="form-control" value = "<?php echo $row['f_name']; ?>"></td>
                </tr>
                <tr>
                  <td><label for ="l_name">LAST NAME </label></td>
                  <td><input type ="text" name="l_name" value ="<?php echo $row['l_name']; ?>" class="form-control" /></td>
                </tr>

                <tr>
                  <td><label for ="f_name">Address </label></td>
                  <td><input type ="text" name="address"  class="form-control" value = "<?php echo $row['address']; ?>"></td>
                </tr>
                <tr>
                  <td><label for ="l_name">City </label></td>
                  <td><input type ="text" name="city" value ="<?php echo $row['city']; ?>" class="form-control" /></td>
                </tr>

 
              </table>
              <input type="submit" name="submit" class="btn btn-primary float-right rounded" value="Save">
            </form>
          </div>
          
          <?php    

          }
      }
      catch(Exception $e){
      echo 'Message: ' .$e->getMessage();
      }
  
  ?>
                
        </div>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>