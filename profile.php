<?php

    //header.php
    include 'header.php';

?>

<div class="hm_about_wrapper" style="background-color:#FFFFFF">
<div class="container">
    <div class="row" style="font-family:Georgia">
        <div class="col-lg-4"></div>
       <div class="col-lg-4 col-md-4" >

       <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b>Welcome</b></span><br><br><br><?= $_SESSION['FirstName'] . ' ' . $_SESSION['LastName'] ?> </h1>

        
       </div><!--form-->


    </div><!--row-->

</div>
</div>


<?php

    //footer
    include 'footer.php';
    
    ?>