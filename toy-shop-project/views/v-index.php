<main>




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


 
        <section class="mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./public/theme/img/Ban-55.png" class="d-block w-100" alt="WALL">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/theme/img/Lego.png" class="d-block w-100" alt="WALL">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/theme/img/Bucket.png" class="d-block w-100" alt="WALL">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>


        <section class="my-5 text-center">
            <div class="mb-5">
                <h2 class="text-center">Most popular product</h2>
            </div>

            <div class="d-flex justify-content-center row">
                <?php foreach ($mostProducts as $product) { ?>
                    <div class="card col-2 p-2 m-1" style="background-color: #eee;">
                        <a class="text-decoration-none" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->id); ?>">
                            <div class="row mt-1">
                                <img src="<?php echo htmlspecialchars($product->img); ?>" class="card-img-top col-12" alt="<?php echo htmlspecialchars($product->title); ?>">
                                <div class="card-text">
                                    <h5 class="mt-1"><?php echo htmlspecialchars($product->title); ?></h5>
                                    <p><?php echo htmlspecialchars($product->price); ?>$</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </section>
        
    </div>

</main>