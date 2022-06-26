<!-- Modal HTML Markup -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="./Models/login.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">E-Mail Address</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                    </div>
                 
                    <div class="form-group">
                        <div class="mt-1">
                            <button type="submit" class="btn btn-success">Login</button>

                            
                        </div>
                    </div>
                </form>
                <h1>Or Signup!</h1>
                <form role="form" method="POST" action="./Models/signup.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">E-Mail Address</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirm Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password_confirmation">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-1">
                            <button type="submit" class="btn btn-success">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<main class="mt-5">
    <div class="container">
        <h1 class="card-title mb-4 text-center text-warning"><?php echo htmlspecialchars($product->title); ?></h1>
        <div class="row">
            <div class="col-7 text-center mb-5">
                <img src="<?php echo htmlspecialchars($product->img); ?>" height="300px" alt="...">

                <div class="d-flex justify-content-around mt-5">
                    <a class="btn btn-outline-secondary" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->getPrevProductId()); ?>">PREV</a>
                    <a class="btn btn-outline-secondary" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->getNextProductId()); ?>">NEXT</a>
                </div>
                
            </div>
            <div class="col-5">
                <p><?php echo htmlspecialchars($product->description); ?></p>
                <div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">PRICE:</span>
                        </div>
                        <input name="price" disabled type="text" class="form-control" value="<?php echo htmlspecialchars($product->price); ?>" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">$</span>
                        </div>
                    </div>
                </div>
                <form method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">QUANTITY:</span>
                        </div>
                        <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="quantity" value="1">
                        <div class="input-group-append">
                            <span class="input-group-text">QTY</span>
                        </div>
                    </div>
                    <?php if(!empty($systemErrors['quantity'])) { ?>
                    <div class="error-msg text-danger">
                        <?php echo htmlspecialchars($systemErrors['quantity']) ?>
                    </div>
                    <?php } ?>
                    <input hidden name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                    <button type="submit" class="btn btn-outline-success">Add to Cart</button>
                </form>
               
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($relatedProducts as $singleRelated) { ?>
                <article class="single-product col-4 row mb-5 text-center">
                    <div class='col-4'>
                        <img src="<?php echo htmlspecialchars($singleRelated->img); ?>" alt="" width="100" height="100">
                    </div>
                    <div class='col-8'>
                        <h5><?php echo htmlspecialchars($singleRelated->title); ?></h5>
                        <p>PRICE: <?php echo htmlspecialchars($singleRelated->price); ?> $</p>
                        <a class="btn btn-success" href="./single-product-page.php?product=<?php echo htmlspecialchars($singleRelated->id); ?>">Show Product</a>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</main>