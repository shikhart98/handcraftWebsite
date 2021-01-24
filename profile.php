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
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b><?= ucfirst($_SESSION['FirstName']) . "'s" ?> Cart</b></span></h1><br><br>
                <?php 
                if (isset($_SESSION['cart'])) { ?>
                    <ul style="font-size:20px;list-style-type: none;">
                <?php foreach ($_SESSION['cart'] as $item) { ?>
                        <li>
                            <div style="margin:10px;padding:10px;border:2px solid #d9d9d9;border-radius:10px;"> <b>Product Name:</b>  <?= $item['productName'] ?>
                                   <b> Quantity: </b>   <?= $item['productQty'] ?>
                            </div>  
                        <li>
                    <?php } ?>
                    </ul>
                <?php } else { ?>
                        <h2 class = "text-center pb-3 pt-3 hm_color" style="color:#d2d2d2">
                        <b>EMPTY<b>
                        </h2>
                <?php } ?>
            
        <?php } else if (isset($_GET['wishlist']) && $_GET['wishlist'] == '1') { ?>
            <h1 class="text-center pb-3 pt-3"><span class="hm_color"><b><?= ucfirst($_SESSION['FirstName']) . "'s" ?> Wishlist</b></span></h1><br><br>
            <?php 
                if (isset($_SESSION['wishlist'])) { ?>
                    <ul style="font-size:20px;list-style-type: none;">
                <?php foreach ($_SESSION['wishlist'] as $item) { ?>
                    <li>
                            <div style="margin:10px;padding:10px;border:2px solid #d9d9d9;border-radius:10px;"> <b>Product Name:</b>  <?= $item['productName'] ?>
                            </div>  
                        <li>
                    <?php } ?>
                    </ul>
                <?php } else { ?>
                        <h2 class = "text-center pb-3 pt-3 hm_color" style="color:#d2d2d2">
                        <b>EMPTY<b>
                        </h2>
                <?php } ?>
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