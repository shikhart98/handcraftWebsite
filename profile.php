<?php

    //header.php
    include 'header.php';
    if (isset($_GET) && isset($_GET['productID'])) {
        if (isset($_GET['wishlist'])) {
            foreach ($_SESSION['wishlist'] as $k=>$v) {
                if ($v['productID'] == $_GET['productID']) {
                    unset($_SESSION['wishlist'][$k]);
                    break;
                }
            }
            if (sizeof($_SESSION['wishlist']) == 0) {
                unset($_SESSION['wishlist']);
            }
        } else if (isset($_GET['cart'])) {
            foreach ($_SESSION['cart'] as $k=>$v) {
                if ($v['productID'] == $_GET['productID']) {
                    unset($_SESSION['cart'][$k]);
                    break;
                }
            }
            if (sizeof($_SESSION['cart']) == 0) {
                unset($_SESSION['cart']);
            }
        }
    }
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
                        <li style="float:right;display:inline;">
                            <div style="text-align:center;margin:10px;padding:10px;box-shadow:1px 5px 10px #d9d9d9;border-radius:10px;">
                            <img style="width:80%;"src="<?=$item['productImage']?>" alt="img"><br><br>
                             <b>Product Name:</b>  <?= $item['productName'] ?>
                                <b> Quantity: </b>   <?= $item['productQty'] ?> <br><br>
                                <a style="padding:10px; background-color:red; color:white;" href="profile.php?cart=1&productID=<?=$item['productID']?>"> <b> Remove </b> </a><br><br>
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
                        <li style="float:right;display:inline;">
                            <div style="text-align:center;margin:10px;padding:10px;box-shadow:1px 5px 10px #d9d9d9;border-radius:10px;">
                            <img style="width:80%;"src="<?=$item['productImage']?>" alt="img"><br><br>
                             <b>Product Name:</b>  <?= $item['productName'] ?><br><br>
                             <a style="border-radius:10px; padding:10px; background-color:red; color:white;" href="profile.php?wishlist=1&productID=<?=$item['productID']?>"> <b> Remove </b> </a> <br><br>
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