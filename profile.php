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
        if (!isset($_GET)) { ?>
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b>Welcome</b></span><br><br><br><?= $_SESSION['FirstName'] . ' ' . $_SESSION['LastName'] ?> </h1>
        <?php } else if (isset($_GET['cart']) && $_GET['cart'] == '1') { ?>
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b><?= ucfirst($_SESSION['FirstName']) . "'s" ?> Cart</b></span></h1>
        <?php } else if (isset($_GET['wishlist']) && $_GET['wishlist'] == '1') { ?>
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b><?= ucfirst($_SESSION['FirstName']) . "'s" ?> Wishlist</b></span></h1>
        <?php } else if (isset($_GET['order']) && $_GET['order'] == '1') { ?>
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b><?= ucfirst($_SESSION['FirstName']) . "'s" ?> Orders</b></span></h1>
        <?php } else {?>
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b>Welcome</b></span><br><br><br><?= ucfirst($_SESSION['FirstName']) . ' ' . ucfirst($_SESSION['LastName']) ?> </h1>
        <?php }?>
       </div><!--form-->


    </div><!--row-->

</div>
</div>


<?php

    //footer
    include 'footer.php';
    
    ?>