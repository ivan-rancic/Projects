<main class="container justify-content-center">

<div class="container justify-content-center row">
<div class="card col-8">
            <div class="row mt-5 mb-5">
                <div class="m-auto col-md-4" style="width:40%;">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class=" rounded-start" alt="slika" height="250px">
                </div>

                <div class="col-md-8 m-auto" style="width:45%;" >
                <div class="card-body">
                <h6 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h6>
                <p class="card-text">Cena:<?php echo htmlspecialchars($product['price']); ?> RSD</p>
                <p class="card-text">Brend:<?php echo htmlspecialchars($product['brand']); ?></p>
                <p class="card-text">Kategorija:<?php echo htmlspecialchars($product['category']); ?></p>
                <p class="card-text"><a class="btn btn-danger btn-lg row" href="./checkout-page.php?kupujemID=<?php echo htmlspecialchars($product['id']) ?>">Buy product</a></p>
                </div>
                </div>
            </div>
            <div class="row m-3">
            <div class="col-12">
                <p><?php echo htmlspecialchars($product['description']); ?></p>
            </div>
            </div>
            
        </div>

        </div>

        <div class="row justify-content-center mt-5">
        <a type="button" class="col-1 btn btn-info" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id'] - 1); ?>">Prev</a>
        <span class="col-3"></span>
        <a type="button" class="col-1 btn btn-warning" href="./all-products-page.php">Go Back</a>
        <span class="col-3"></span>
        <a type="button" class="col-1 btn btn-info" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id'] + 1); ?>">Next</a>


        </div>





<div class="container justify-content-center row mt-5">
            <?php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="col-3 row mb-5 m-1 border border-info rounded">
                <div class="col-6">
                    <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" height="100">
                </div>
                <div class="col-6">
                    <span class="row mt-3"><?php echo htmlspecialchars($singleRelated['title']); ?></span>
                    <a class="row btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                </div>
            </article>
            <?php } ?>
</div>

</main>