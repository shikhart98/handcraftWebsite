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
                    <a href="rj1.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=embriodery&productPrice=699">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/rj/1.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Embriodery</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="rj2.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=enamel work&productPrice=599">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/rj/2.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Enamel Work</h4>
                            
                        </div>
                         </a>
                    </div>';
                        echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="rj3.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName= gems&productPrice=299">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/rj/3.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Gems and Jewellery</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="rj4.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=metalware&productPrice=199">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/rj/4.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize">Metalware </h4>
                            
                        </div>
                         </a>
                    </div>'; 
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="rj5.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&productName=textile&productPrice=199">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/rj/5.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize">Textile Work </h4>
                            
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