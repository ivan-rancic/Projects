<main class="mt-5">



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










        <div class="container">
        <form class="row" id="form1" action="./all-products-page.php" method="get">
            
            <div class="col-2">
                <label for="sl">Filter here:</label>
                <select name="sort" id="sl" class="form-select" aria-label="Default select example" onChange="document.forms['form1'].submit();">
                    <option <?php
                     if($sort == "") { 
                        echo htmlspecialchars("Selected");
                         } ?> value="">None</option>
                    <option <?php if($sort == 
                   \Models\Product\Product::ORDER_BY_PRICE_ASC) { 
                    echo htmlspecialchars("Selected"); 
                    } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_ASC); ?>">By price asc</option>
                    <option <?php if ($sort == \Models\Product\Product::ORDER_BY_PRICE_DESC) { 
                        echo htmlspecialchars("Selected"); 
                        } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_DESC); ?>">By price desc</option>
                </select>
            </div>

<div class="col">
<label for="sh">Search here:</label>
            <div class="input-group">
            <div class="form-outline">
            <input class="form-control" type="search" id="sh" name="term" placeholder="Your favourite toy is..." value="<?php echo htmlspecialchars($term); ?>">
            </div>
            <button type="submit" class="btn btn-primary"> <img src="./public/theme/img/search.svg"></button>
            </div>

            </div>
        </form>

<hr>


        <div class="row mt-4 justify-content-center">
            <?php foreach ($products as $product) { ?>
                <article class="card single-product col-3 row m-2" style="background-color: #eee;">
                    <div class='col-12 text-center'>
                        <img src="<?php echo htmlspecialchars($product->img); ?>" alt="" width="200" height="200" class="card-img-top">
                    </div>
                    <div class='col-12 text-center'>
                        <h6><?php echo htmlspecialchars($product->title); ?></h6>
                        <p>PRICE: <?php echo htmlspecialchars($product->price); ?> $</p>
                        <a class="btn btn-warning" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->id) ?>">Show Product</a>
                        <button form="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" class="btn btn-primary">Add to Cart</button>
                        <form id="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" action="./all-products-page.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                        </form>
                        <p class="mb-3"></p>
                    </div>
                </article>
            <?php } ?>
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item <?php if($ppage <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($ppage <= 1){ echo '#'; } else { echo "?ppage=".($ppage - 1); } ?>">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="?ppage=1">1</a></li>
                    <li class="page-item <?php if($total_pages < 2){ echo 'd-none'; }?>"><a class="page-link" href="?ppage=2">2</a></li>
                    <li class="page-item <?php if($total_pages < 3){ echo 'd-none'; }?>"><a class="page-link" href="?ppage=3">3</a></li>
                    <li class="page-item <?php if($ppage >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($ppage >= $total_pages){ echo '#'; } else { echo "?ppage=".($ppage + 1); } ?>">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</main>


