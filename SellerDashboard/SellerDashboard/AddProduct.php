<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Seller | AddProduct</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet"  href="css/Style1.css">
 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 <link rel="stylesheet" href="css/bootstrap.min.css">
    	
    <style type="text/css">
       .product{
        margin-top: 60px;
       }
        
    </style>
    <script type="text/javascript">
        
        function Validatation(){
        //   document.getElementById('catname').value = (document.getElementById('category').value);
        //   document.getElementById('subcatname').value = (document.getElementById('subcategory').value);
          var numbers = /^[0-9]+$/;
          var price = document.getElementById('price');
          var quantity = document.getElementById('quantity');
          var fileInput = document.getElementById('image');
          var filePath = fileInput.value;
          var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.jfif)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert("Please Upload Only Image type File");
              fileInput.value = '';
              return false;
          }
          if(price.value < 0){
            alert("Price should not be negative!");
            return false;
          }

          if(inputtxt.value.match(numbers) == false)
          {
          alert('Quantity Should be Number.');
          document.form1.text1.focus();
          return false;
          }

        }
        
    </script>
  </head>
  <body>
  
  <?php include "header.php"; ?>
  
    <section class="bg-light py-5">
    <div class="container product">
        <form action="PostProduct.php" method="post" enctype="multipart/form-data" onsubmit="return Validatation();">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 id = "myproduct" class="rounded border border-primary bg-primary text-light">ADD PRODUCT</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1 text-dark">Title Of Product:</h6>
                            <input type="text" name="title" class="form-control" placeholder="Ad title" required="required">
                            <h6 class="font-weight-bold pt-4 pb-1 text-dark">City:</h6>
                            <input type="text" name="city" class="form-control" placeholder="Location" required="required">

                            <h6 class="font-weight-bold pt-4 pb-1 text-dark">Description:</h6>
                            <textarea name="description" class="form-control" rows="7" placeholder="Write details about your product" required="required"></textarea>
                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1 text-dark">Item Sub-Category:</h6>
                                <div class="row px-3">
                                  <select name="subcategory" class="form-control" required="required" id="subcategory">
                                    <option value="tshirts">T-shirts</option>
                                    <option value="dupattas">Dupattas</option>
                                    <option value="kurti">Kurti</option>
                                    <option value="sarees">Sarees</option>
                                    <option value="shirts">Shirts</option>
                                    <option value="unstiched_shirts">Unstiched Shirts</option>
                                    <option value="handbags">Handbags</option>
                                    <option value="potlis">Potlis</option>
                                    <option value="cross_body_bags">Cross Body Bags</option>
                                    <option value="wallets">wallets</option>
                                    <option value="earrings">earrings</option>
                                    <option value="necklase">necklase</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1 text-dark">Item Quantity:</h6>
                                <div class="row px-3">
                                  <input type="text" name="quantity" class="form-control" placeholder="Quantity" required="required" id="quantity">
                                </div>
                            </div>
                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1 text-dark">Item Price:</h6>
                                <div class="row px-3">
                                  <input type="text" name="price" class="form-control" placeholder="Price" required="required" id="price">
                                </div>
                            </div>
                            <!-- <input type="hidden" id="catname" name="category" value="">
                            <input type="hidden" id="subcatname" name="subcategory" value=""> -->
                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1 text-dark">Item Category:</h6>
                                <div class="row px-3">
                                  <select name="category" class="form-control" required="required" id="category">
                                    <option value="handloom">Handloom</option>
                                    <option value="handcrafted">Handcrafted</option>
                                    <option value="gift store">Gift Store</option>
                                    <option value="home">Home</option>
                                  </select>
                                </div>
                            </div>
                            <div class="choose-file text-center my-4 py-4 rounded">
                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Select Image to upload</span>
                                    <span class="d-block">Maximum upload file size: 10MB</span>
                                    <input type="file" class="form-control-file" id="image" name="image" required="required">
                                </label>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <!-- Post Your ad end -->

            <!-- ad-feature start -->
            <fieldset class="border bg-white p-4 my-5 ad-feature bg-gray">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="pb-3">Make Your Ad Featured
                            <span class="float-right"><a class="text-right font-weight-normal text-success" href="#">What
                                    is featured ad ?</a></span>
                        </h3>
                        <input type="checkbox" class="mt-1" name="option1" id="option1" value="1">
                        <label for="terms-&-condition" class="ml-2">By click you must agree with our
                            <span> <a class="text-success" href="terms-conditions.html">Terms & Condition and Posting Rules.</a></span>
                        </label>
                    </div>
                    
                </div>
            </fieldset>
            <!-- ad-feature start -->

            <!-- submit button -->
            <button type="submit" class="btn btn-primary d-block rounded pr-5 pl-5" style="font-size: 20px;"><b>Post</b></button>
        </form>
    </div>
</section>

    </div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
    
  </body>
</html>