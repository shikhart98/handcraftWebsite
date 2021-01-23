<?php

    //header
    include 'header.php';
    $category = $_GET['type'];
    $subType = $_GET['sareeType'];

?>
        
        <!--About section start-->
        <div class="hm_service_wrapper" style="background-color:#f1f1f1;">
            <div class="container">
            <?php
                echo'
                <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1 class="hm_heading"><span class="hm_color">'.$category.' Store /</span> <span style="color:black">'.$subType.'</span></h1>
                    <br><br>
                </div>
                </div>';
        ?>
                <div class="row">
                    <?php
                    
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="gj1.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Rogan paintig&productPrice=2999">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/gj/rp2.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Rogan Painting</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="gj2.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Ajrakh painting&productPrice=2499">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/gj/ap2.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Ajrakh painting</h4>
                           
                        </div>
                         </a>
                    </div>';
                        echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="gj3.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Bohra caps&productPrice=499">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/gj/bc1.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Bohra caps</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="gj4.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Bead work&productPrice=999">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/gj/bw.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Bead work</h4>
                            
                        </div>
                         </a>
                    </div>';
                    
?>
                    
            </div>
            </div>
        </div>
        
        
        <!--footer start-->
<?php

    //footer
    include 'footer.php';

    ?>