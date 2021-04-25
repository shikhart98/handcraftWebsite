<?php
include 'header.php';
//including header 

?>

<div class="hm_about_wrapper" style="background-color:#FFFFFF">
<div class="container" style="font-family:Georgia">
    <div class="row" >
        <div class="col-lg-4 col-md-4"></div>
       <div class="col-lg-4 col-md-4" >

       <h1 class="text-center font-weight-bolder pb-3 pt-3"><span class="hm_color" ><b>FORGOT PASSWORD</b></span></h1>

<?php
if (isset($_GET['step'])) {
    if ($_GET['step'] == 1) { 
        if (isset($_GET['error']) && $_GET['error'] == 'emptyfields') { ?>
        <p style="color:red;"> Email field cannot be empty </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'invalidemail') { ?>
        <p style="color:red;"> Please enter a valid email </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'usernotregistered') { ?>
        <p style="color:red;"> This user is not registered on the platform </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'failedtosendmail') { ?>
        <p style="color:red;"> Sorry for the inconvinience, system failed to send you password reset email. Please try again later. </p>
    <?php }
    ?>
        <form action="includes/resetPassword.php" method="post">
        <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" required class="form-control" id="email" name="email" placeholder="Email Address">
        </div>
        <input type="hidden" id="email" name="sendEmail" value="1">
        <button type="submit" class="btn btn-danger btn-block ronded-0" name="submit">Submit</button>
        </form>
    <?php 
} else if ($_GET['step'] == 2) { 
    if (isset($_GET['error']) && $_GET['error'] == 'passemptyfields') { ?>
        <p style="color:red;"> Password cannot be empty! </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'emailemptyfields') { ?>
        <p style="color:red;"> Email cannot be empty! </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'invalidemail') { ?>
        <p style="color:red;"> Invalid Email! </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'usernotregistered') { ?>
        <p style="color:red;"> This user is not registered on the platform </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'failedtosendmail') { ?>
        <p style="color:red;"> Sorry for the inconvinience, system failed to send you password reset email. Please try again later. </p>
    <?php } else if (isset($_GET['error']) && $_GET['error'] == 'incorrectCurrentPass') { ?>
        <p style="color:red;"> Incorrect current password entered </p>
    <?php }else { ?>
        <p style="color:#ff3385;"> A password reset mail has been sent to you on your email address. </p>
    <?php }
?>
    
    <form action="includes/resetPassword.php" method="post">
        <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" required class="form-control" id="email" name="email" placeholder="Email Address">
        </div>
        <div class="form-group">
                <label for="cpass">Enter Current Password </label>
                <input type="password" required class="form-control" id="cpass" name="cpass" placeholder="Password">
        </div>
        <div class="form-group">
                <label for="npass">Enter New Password </label>
                <input type="password" required class="form-control" id="npass" name="npass" placeholder="Password">
        </div>
        <input type="hidden" id="email" name="reset_pwd" value="1">
        <button type="submit" class="btn btn-danger btn-block ronded-0" name="submit">Submit</button>
        </form>
<?php } else if ($_GET['step'] == 3) { ?>
    <div class="text-center font-weight-bolder pb-3 pt-3" style="margin:50px 30px;">
        <img src="https://i.pinimg.com/736x/74/e8/59/74e859781d0718fada19f32b99cae021.jpg" style="width:100px;">
        <p style="margin-top:20px; font-size:15px; color: #33cc33"> Your password has been updated successfully! </p>
    </div>
    
<?php } 
}
?>

</div>
</div><!--row-->
    
</div><!--container-->
</div>


<?php
include 'footer.php'; 
?>