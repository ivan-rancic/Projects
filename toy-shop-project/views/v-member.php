<?php   



if(!isset($_SESSION["sess_user"])){  
    header("location:index.php");  
} else {  
?>  
 
<body>  

<div class="container">
      <div class="row">

      <div class="col">
<h2 class="mt-5"> Welcome, <?=$_SESSION['sess_user'];?>!</h2>
<p>  
You are now successfully logged in, and you can add new products!
</p>  
</body>  
 
<?php  
}  
?>  

<p>
Your name is: <?php echo $logedInUser->name?> <br>
Your email is: <?php echo $logedInUser->email?> <br>





</p>

</div>

<div class="col">

<button class="mt-5">
<a  href="./add-product.php" class="nav-link text-success" data-bs-toggle="modal" style="display: <?php if(!isset($_SESSION["sess_user"])) {
                                echo htmlspecialchars('none') ;
                                } ?>">Add new product</a>
</button>
<br>
<br>
<h2>Product list</h2>
<table class="table table-bordered">
                            <tr><th>Product id</th><th>Product Title</th><th>Product price</th></tr>
                            
<?php foreach ($products as $product) { ?>
                 
                 
                   
                        
                            <tr>
                                <td><?php echo htmlspecialchars($product->id) ?></td>
                                <td><?php echo htmlspecialchars($product->title); ?></td>
                                <td><?php echo htmlspecialchars($product->price); ?></td>
                            </tr>



                       
                        
                        
                    
              
            <?php } ?>

            </table>
</div>

</div>

<?php

$_SESSION['user_name'] = $logedInUser->name;


?>
</div>

<div style="height:320px ;"></div>