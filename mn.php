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
                    <a href="mn1.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Gambira mask&productPrice=199">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mn/mn1.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Cane & Bamboo Work</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="mn2.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Terracotta Jewellery&productPrice=699">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mn/mn3.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize">Mats(water reed)</h4>
                            
                        </div>
                         </a>
                    </div>';
                        echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="mn3.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=kanth cloth embriodery&productPrice=999">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mn/mn5.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Bed Covers</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="mn4.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Cane furniture&productPrice=1999">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mn/mn7.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Shawls</h4>
                           
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="mn5.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=Cane furniture&productPrice=1999">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mn/mn9.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Dance Dolls</h4>
                           
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