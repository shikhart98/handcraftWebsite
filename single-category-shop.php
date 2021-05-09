<?php

    //header
    include 'includes/dbconnection.php';
    include 'header.php';
    $category = $_GET['category'];
    $subType = $_GET['subType'];

    $stmt = "select * from products where ProductCategory = '$category' AND ProductSubCategory= '$subType';";
    $query = mysqli_query($conn,$stmt);
    $products = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
        
        <!--About section start-->
        <div class="hm_service_wrapper" style="background-color:#f1f1f1;">
            <div class="container">
            <?php
                echo'
                <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="hm_heading"><span class="hm_color">'.$category.'/</span> <span style="color:black">'.$subType.'</span></h1>
                    <br><br>
                </div>
                </div>';
        ?>
                <div class="row">
                    <?php
                    foreach($products as $product){
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="shop-single.php?productID=' . $product['ProductID'] . '&productCategory='.$category.'&productSubCategory='.$subType.'&productName='.$product['ProductName'].'&productPrice=' . $product['ProductPrice'] .'&productSeller=' . $product['ProductSeller'] . '&productImage=' . $product['ProductImage'] . '&productDescription=' . $product['ProductDescription'] . '">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src=" ' . $product['ProductImage'] .  ' " alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> ' . $product['ProductName'] . '</h4>
                        </div>
                         </a>
                    </div>';
                    }?>
                    
                </div>
            </div>
        </div>
        
        
        <!--footer start-->
<?php

    //footer
    include 'footer.php';

    ?>