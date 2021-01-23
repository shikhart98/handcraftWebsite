<?php

    //header.php
    include 'header.php';

?>

<div class="hm_about_wrapper" style="background-color:#FFFFFF">
<div class="container">
    <div class="row" style="font-family:Georgia">
        <div class="col-lg-4"></div>
       <div class="col-lg-4 col-md-4" >

       
    <?php 
        if (isset($_GET['logged_in'])) {  ?>  
            
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b>Welcome </b></span> <?php $_SESSION['fullName'] ?></h1>

        <?php } else { ?>

            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b>Log</b></span> In</h1>
        <form action="includes/loginvalidate.php" method="post">

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
                <label for="email">Email Address</label>
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
                <label for="email">Password</label>
                <input type="password" class="form-control" id="email" name="userPassword" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-danger btn-block ronded-0" name="submit">Log In</button>
            <br>

            <p class="text-secondry text-center mt-3">Create a new Account ? <span class="font-weight-bolder"><a href="signup.php" class="hm_color"><b>Sign Up</b></a></span></p>

        </form>

        <?php }
    ?>
    

       </div><!--form-->


    </div><!--row-->

</div>
</div>


<?php

    //footer
    include 'footer.php';
    
    ?>