<?php
include 'header.php';
//including header 
?>

<!--main-->
<div class="hm_about_wrapper" style="background-color:#FFFFFF">
<div class="container" style="font-family:Georgia">
    <div class="row" >
        <div class="col-lg-4 col-md-4"></div>
       <div class="col-lg-4 col-md-4" >

       <h1 class="text-center font-weight-bolder pb-3 pt-3"><span class="hm_color" ><b>Register</b></span> Me!</h1>

        <form action="includes/register.php" method="post">

        <?php
        //catch error send back by registration validation 
        if(isset($_GET['signup']))
            {
                $error = $_GET['signup'];
                if($error == 'emptyfields')
                {
                    echo '<div class="alert alert-danger">Please fill the required fields </div>';
                }
                else if($error == 'charactererror')
                {
                    echo '<div class="alert alert-danger">Can not use numbers in name fields </div>';
                }
                else if($error == 'invalidemail')
                {
                    echo '<div class="alert alert-danger">Please provide a valid email address </div>';
                }
                else if($error == 'successfull')
                {
                    echo '<div class="alert alert-danger">Registered successfully <br> 
                            Now you can <a href="login.php"> <b> Log In</b> </a></div>
                           ';
                }
            }
            ?>
            <div class="form-group">
            <label for="first">First Name</label>
            <input type="text" class="form-control" name="firstName" id="first" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="last">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="last" placeholder="Last Name"> 
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="emailAddress" placeholder="Email Address">
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" class="form-control" id="email" name="userPassword" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-danger btn-block ronded-0" name="submit">Sign up</button>
            <br>
            <p class="text-secondry text-center mt-3">I have already an Account ? <span class="font-weight-bolder"><a href="login.php" class="hm_color"><b>Log In</b></a></span></p>

        </form>

       </div><!--form-->

       

    </div><!--row-->
    
</div><!--container-->
</div>
<?php
include 'footer.php'
?>