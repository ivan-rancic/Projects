<div class="container">


<div class="row">

<div class="col">





<form class="" method="POST" action="./Models/add.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>ADD PRODUCT</legend>

<!-- Text input-->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col">
  <input id="product_name" name="title" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col">                     
    <textarea class="form-control" id="product_description" name="description"></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">PRICE</label>  
  <div class="col">
  <input id="product_weight" name="price" placeholder="PRICE" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">STOCK</label>  
  <div class="col">
  <input id="available_quantity" name="stock" placeholder="STOCK" class="form-control input-md" required="" type="text">
    
  </div>
</div>



 <!-- File Button --> 
 <div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">IMAGE</label>
  <div class="col-md-4">
    <input id="filebutton" name="file" class="input-file" type="file">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">STATUS</label>
  <div class="col">
    <select id="product_categorie" name="status" class="form-control">
        <option value="1">1</option>
        <option value="0">0</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">BARCODE</label>  
  <div class="col">
  <input id="available_quantity" name="barcode" placeholder="BARCODE" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="category" class="form-control">
        <option value="0">0</option>
    </select>
  </div>
</div>








<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="submit" id="singlebutton" name="submit" class="btn btn-primary">Add Product</button>
  </div>
  </div>

</fieldset>
</form>





</div>

<div class="col text-center mt-5">

<p class="text-danger"><?php if (isset($_SESSION["message1"])) {
    echo $_SESSION["message1"];
    unset($_SESSION['message1']);
    echo "<br>";
    echo "New Product Name: " . $_SESSION["addProductName"];
    unset($_SESSION["addProductName"]);
        
    
    } ?>
</p>
</div>


</div>

</div>