<?php

    //header
    include 'header.php';
    $category = $_GET['category'];
    $subType = $_GET['subType'];

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
                    for($i=1;$i<=12;$i++){
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="shop-single.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName='.$category.' '.$subType.'&productPrice=Available soon">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/placeholder.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> '.$category.' '.$subType.' '.$i.'</h4>
                            <p class="text-truncate">&#8377;699/-</p>
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