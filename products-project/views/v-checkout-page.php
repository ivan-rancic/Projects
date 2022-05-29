
    
<div class="container bg-light">
  <main>
  <form method="post" action="" id="form1">

  <?php if (isset($_POST['but']) && empty($errors)) {?>

    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Poštovani <?php echo $allValid['firstName']?> <?php echo $allValid['lastName']?> <br>
  Naručili ste proizvod: <?php echo $product['title']?> <br>
  Naručili ste: <?php echo $quantity?> komada <br>
  Cena po komadu je: <?php echo $product['price']?> RSD<br>
  Ukupno za naplatu: <?php echo intval($product['price'])*intval($quantity);?> RSD<br>

</p>
  <hr>
  <p class="mb-0">Hvala na kupovini!</p>
</div>




<?php } ?>




    <div class="py-5 text-center">
      <h2>Checkout form</h2>
    </div>

    






    <div class="row g-5">
      

      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          
        </h4>
        <ul class="list-group mb-3">

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted"><?php echo htmlspecialchars($product['title']); ?></small>
            </div>
            <span class="text-muted">RSD <?php echo htmlspecialchars($product['price']); ?></span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product picture</h6>
            </div>
            <span class="text-muted"><img src="<?php echo htmlspecialchars($product['img']); ?>" class=" rounded-start" alt="slika" height="50px"></span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-1">Product quantity</h6>

              <small class="text-danger">


              </small>


            </div>
            <span class="text-muted">
              <fieldset form="form1">
              <input type="number" id="quantity" name="quantity" min="1" max="5" value="1"> 
              </fieldset>
            </span>
          </li>


        </ul>
      </div>






      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>


       

        
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="firstName" placeholder="First name" value="" name="firstName">
            </div>

            <?php if (array_key_exists('firstName', $errors) && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Error!</h4>
            <p><?php echo $errors['firstName'] ?></p>
            </div>
            <?php
            }
            ?>
            


            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name<span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="lastName" placeholder="Last name" value="" name="lastName">
            </div>

            <?php if (array_key_exists('lastName', $errors) && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p><?php echo $errors['lastName'] ?></p>
            </div>
            <?php
            }
            ?>
           
            

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Required)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
            </div>

            <?php if (array_key_exists('email', $errors) && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p><?php echo $errors['email'] ?></p>
            </div>
            <?php
            }
            ?>




            <div class="col-12">
              <label for="address" class="form-label">Address <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="address" placeholder="Your address" name="address">
            </div>

            <?php if (array_key_exists('address', $errors) && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p><?php echo $errors['address'] ?></p>
            </div>
            <?php
            }
            ?>



              <div class="col-12">
              <label for="city" class="form-label">City <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="city" placeholder="Your City" name="city">
            </div>

            <?php if (array_key_exists('city', $errors) && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p><?php echo $errors['city'] ?></p>
            </div>
            <?php
            }
            ?>

       

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="zip" placeholder="Zip code" name="zip">
            </div>
          </div>


          <?php if (array_key_exists('zip', $errors) && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p><?php echo $errors['zip'] ?></p>
            </div>
            <?php
            }
            ?>








<div class="col-md-3">
              <label for="phone" class="form-label">Phone <span class="text-muted">(Required)</span></label>
              <input type="text" class="form-control" id="phone" placeholder="Your phone" name="phone">
            </div>
          

          <?php if (array_key_exists('phone', $errors) && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p><?php echo $errors['phone'] ?></p>
            </div>
            <?php
            }
            ?>







          <hr class="my-4">

         

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info" name="agree" value="checked">
            <label class="form-check-label" for="save-info">Do You agree?</label>
          </div>

          <?php if ($agree != 'checked' && isset($_POST['but'])) {
            ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p><?php echo $errorAgree ?></p>
            </div>
            <?php
            }
            ?>







          <hr class="my-4">

        
          <button class="mt-5 w-100 btn btn-primary btn-lg mb-5" type="submit" name="but">Continue to checkout</button>
        </form>

        </div>



      </div>
    </div>

 




    
  </main>



</div>