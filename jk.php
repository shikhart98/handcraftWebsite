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
                    <a href="jk1.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=crewel&productPrice=699">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/jk/1.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> CREWEL</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="jk2.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=kashmiri&productPrice=599">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/jk/2.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> KASHMIRI CARPETS</h4>
                            
                        </div>
                         </a>
                    </div>';
                        echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="jk3.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=shawls&productPrice=299">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/jk/3.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> KASHMIRI SHAWLS</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="jk4.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=phoolkari&productPrice=199">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/jk/4.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize">PHOOL KARI </h4>
                            
                        </div>
                         </a>
                    </div>'; 
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="jk5.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=carving&productPrice=199">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/jk/5.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize">WOOD CARVING </h4>
                            
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