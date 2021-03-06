<?php
include 'header.php';
include 'includes/dbconnection.php';

$productID = $_GET['productID'];

$productCategory = $_GET['productCategory'];

$productSubCategory = $_GET['productSubCategory'];

$productName = $_GET['productName'];

$productPrice = $_GET['productPrice'];

$productImage = $_GET['productImage'];

$productDescription = $_GET['productDescription'];

$productSeller = $_GET['productSeller'];

$stmt = "select * from products where ProductSeller = '$productSeller';";
$query = mysqli_query($conn,$stmt);
$productsByThisSeller = mysqli_fetch_all($query, MYSQLI_ASSOC);

$loggedin = 1;
if (!isset($_SESSION['UserID'])) {
      $loggedin = 0;
}
?>

<script type="text/javascript" src="script.js"></script>
<script type='text/javascript'>
      
      var productID = '<?= $productID?>';
      var productCategory = '<?= $productCategory?>';
      var productSubCategory = '<?= $productSubCategory?>';
      var productName = '<?= $productName?>';
      var productImage = '<?= $productImage?>';
      var productDescription = '<?= $productDescription?>';
      var productPrice = '<?= $productPrice?>';
      var loggedin = '<?=$loggedin?>';
      var data = {
                        selected:'wishlist',
                        product: {
                              productID:productID,
                              productCategory:productCategory,
                              productSubCategory:productSubCategory, 
                              productName:productName,
                              productImage:productImage,
                              productDescription:productDescription,
                              productPrice:productPrice
                        }
                  };
      
      function addToCart() {
            if (loggedin == '0') {
                  window.location.replace("http://localhost/handcraft/login.php");
                  return;
            }
            data.selected = 'cart';
            data.product.productQty = $('.prod_qty').val();
            $.ajax({
                  url: 'productSelected.php',
                  method: 'POST',
                  data: data,
                  success: function (obj) {
                        console.log("add to cart clicked \n\n" + JSON.stringify(obj));
                        alert('Item added to cart');
                  }
            });
      }

      function addToWishlist() {
            if (loggedin == '0') {
                  window.location.replace("http://localhost/handcraft/login.php");
                  return;
            }
            data.selected = 'wishlist';
            $.ajax({
                  url: 'productSelected.php',
                  method: 'POST',
                  data: data,
                  success: function (obj) {
                        console.log("add to wishlist clicked \n\n" + JSON.stringify(obj));
                        alert('Item added to wishlist');
                  }
            });
      }
</script>

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
                                 
       <img src="' . $productImage . '" alt="' . $productName . '" class="img-responsive" />
 
          </div>

         </div>
                               
 <div class="col-lg-7 col-md-7">
                                    
<div class="hm_product_info">
                                        
<h2 class="hm_text">' . $productName . '</h2>
                                      
  <div class="item_price">&#8377; '.$productPrice.'</div>
                                       
 <div class="rating">
                                            
<span class="fa fa-star"></span>
                                           
 <span class="fa fa-star"></span>
                                          
  <span class="fa fa-star"></span>
                                          
  <span class="fa fa-star"></span>
                                           
 <span class="fa fa-star"></span>
                                       
 </div>
                                        
<p class="item_text text-justify">
' . $productDescription . '
</p>
                                  <div class="hm_quantity_div">

 <div class="quantity-spinner">
<button type="button" class="minus"><span class="fa fa-minus"></span></button>
<input type="text" name="product" value="1" class="prod_qty">
<button type="button" class="plus"><span class="fa fa-plus"></span></button>
</div>
                                        
</div>
                                       
 <button id="addToCart" onclick="addToCart();" type="button" class="hm_btn add-to-cart"> Add To Cart </button>
                                        
<a id="addToWishlist" onclick="addToWishlist();" href="#" class="add-fav"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                       
 <div class="item-categories"><b>Categories: </b> '.$productCategory.', '.$productSubCategory.'</div>

 <div class="item-categories"><b>Seller: </b> '.$productSeller.'</div>
</div>
                               
 </div>
                            
</div>
                        
</div>
                    
</div>
                
</div>
           
 </div>
        
</div>';       
 ?>
 <?php if (count($productsByThisSeller) > 1) { ?>
<div class="hm_partners_wrapper">
      <div class="container">
            <div class="row">
                  <div class="col-lg-12 col-md-12">
                        <h1 class="hm_heading">More products from this seller</h1>
                  </div>
            </div>
            <div class="row">
                  <div class="col-lg-12 col-md-12">
                        <div class="hm_partners_slider">
                              <div class="owl-carousel owl-theme test_slider">
                                    <?php
                                    // <div class="item"><img src="images/partner1.jpg" alt="handmade-craft-client"></div>
                                    foreach ($productsByThisSeller as $product) { 
                                          if ($product['ProductID'] != $productID) {?>
                                                <div class="item" style="margin:10px 30px;">
                                                <a href="shop-single.php?productID=<?=$product['ProductID']?>&productCategory=<?=$product['ProductCategory']?>&productSubCategory=<?=$product['ProductSubCategory']?>&productName=<?=$product['ProductName']?>&productPrice=<?=$product['ProductPrice']?>&productSeller=<?=$product['ProductSeller']?>&productImage=<?=$product['ProductImage']?>&productDescription=<?=$product['ProductDescription']?>">
                                                <img src="<?=$product['ProductImage']?>" alt="IMAGE"><h2 style="color:#fff;"><?=$product['ProductName']?></h2>
                                                </a>
                                                </div>
                                    <?php }
                                    }
                                    ?>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

 <?php } ?>


<?php
include 'footer.php';
?>