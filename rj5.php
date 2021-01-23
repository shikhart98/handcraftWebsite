<?php
include 'header.php';

$productID = $_GET['productID'];

$productCategory = $_GET['productCategory'];

$productSubCategory = $_GET['productSubCategory'];

$productName = $_GET['productName'];

$productPrice = $_GET['productPrice'];

?>


<?php

echo '
<div class="hm_news_wrapper shop_single">
 
      <div class="container">
                
<div class="row">
                   
 <div class="col-lg-9 col-md-9">
                     
   <div class="hm_shop_single">
                            
<div class="hm_product_details">
                               
 <div class="col-lg-5 col-md-5 padding_left">
                                   
 <div class="img_box" style="border:3px solid #f1f1f1">
                                 
       <img src="assets/rj/5.jpg" alt="" class="img-responsive" />
 
          </div>

         </div>
                               
 <div class="col-lg-7 col-md-7">
                                    
<div class="hm_product_info">
                                        
<h2 class="hm_text">Textile Work</h2>
                                      
  <div class="item_price">&#8377; '.$productPrice.'</div>
                                       
 <div class="rating">
                                            
<span class="fa fa-star"></span>
                                           
 <span class="fa fa-star"></span>
                                          
  <span class="fa fa-star"></span>
                                          
  <span class="fa fa-star"></span>
                                           
 <span class="fa fa-star"></span>
                                       
 </div>
                                        
<p class="item_text text-justify">
A product description is the marketing copy used to describe a products value proposition to potential customers. A compelling product description provides customers with details around features, problems it solves and other benefits to help generate a sale.
</p>
                                  <div class="hm_quantity_div">

 <div class="quantity-spinner">
<button type="button" class="minus"><span class="fa fa-minus"></span></button>
<input type="text" name="product" value="2" class="prod_qty">
<button type="button" class="plus"><span class="fa fa-plus"></span></button>
</div>
                                        
</div>
                                       
 <button type="button" class="hm_btn add-to-cart"> Add To Cart </button>
                                        
<a href="#" class="add-fav"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                       
 <div class="item-categories"><b>Categories: </b> '.$productCategory.', '.$productSubCategory.'</div>

</div>
                               
 </div>
                            
</div>
                        
</div>
                    
</div>
                
</div>
           
 </div>
        
</div>';
 

    echo '
<div class="hm_news_wrapper shop_single">
 
      <div class="container">
                
<div class="row">
                   
 <div class="col-lg-9 col-md-9">
                     
   <div class="hm_shop_single">
                            
<div class="hm_product_details">
                               
 <div class="col-lg-5 col-md-5 padding_left">
                                   
 <div class="img_box" style="border:3px solid #f1f1f1">
                                 
       <img src="assets/rj/5.jpg" alt="" class="img-responsive" />
 
          </div>

         </div>
                               
 <div class="col-lg-7 col-md-7">
                                    
<div class="hm_product_info">
                                        
<h2 class="hm_text">Textile Work</h2>
                                      
  <div class="item_price">&#8377;799</div>
                                       
 <div class="rating">
                                            
<span class="fa fa-star"></span>
                                           
 <span class="fa fa-star"></span>
                                          
  <span class="fa fa-star"></span>
                                          
  <span class="fa fa-star"></span>
                                           
 <span class="fa fa-star"></span>
                                       
 </div>
                                        
<p class="item_text text-justify">
A product description is the marketing copy used to describe a products value proposition to potential customers. A compelling product description provides customers with details around features, problems it solves and other benefits to help generate a sale.
</p>
                                  <div class="hm_quantity_div">

 <div class="quantity-spinner">
<button type="button" class="minus"><span class="fa fa-minus"></span></button>
<input type="text" name="product" value="2" class="prod_qty">
<button type="button" class="plus"><span class="fa fa-plus"></span></button>
</div>
                                        
</div>
                                       
 <button type="button" class="hm_btn add-to-cart"> Add To Cart </button>
                                        
<a href="#" class="add-fav"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                       
 <div class="item-categories"><b>Categories: </b> '.$productCategory.', '.$productSubCategory.'</div>

</div>
                               
 </div>
                            
</div>
                        
</div>
                    
</div>
                
</div>
           
 </div>
        
</div>';
          
      
 ?>



<?php
include 'footer.php';
?>