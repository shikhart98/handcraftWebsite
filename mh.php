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
                    <a href="mh1.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&producmhame=Himrooshawl&productPrice=699">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mh/hs.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Himroo 	Shawl</h4>
                            
                        </div>
                         </a>
                    </div>';
                    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="mh2.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&producmhame=Jewellery of Kolhapur&productPrice=599">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mh/jok.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize">Jewellery of Kolhapur</h4>
                           
                        </div>
                         </a>
                    </div>';
                        echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="mh3.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&producmhame=Kolhapuri Chappal&productPrice=299">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mh/kc.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Kolhapuri Chappal</h4>
                            
                        </div>
                         </a>
                    </div>';
  		    echo'<div class="col-lg-3 col-md-3 col-sm-6" style="background-color:white;border:15px solid #f1f1f1;padding-top:10px;margin-bottom:20px">
                    <a href="mh4.php?productID=1234&productCategory='.$category.'&productSubCategory='.$subType.'&producmhame=Textiles&productPrice=499">
                        <div class="hm_service_box">
                            <div class="product_icon">
                               <img src="assets/mh/tx.jpg" alt="" data-loading="lazy" width="100%" height="250" style="border-radius:50%">
                            </div>
                            <hr>
                            <h4 class="hm_color" style="text-transform:capitalize"> Textiles</h4>
                           
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