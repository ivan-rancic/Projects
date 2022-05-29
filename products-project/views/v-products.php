<main>
    <div class="container">
        <form class="row mb-5" action="./all-products-page.php" method="get">
            <select name="sort-by" id="" class="col-3">
                <option value="">None</option>
                <option value="price-asc">By price asc</option>
                <option value="price-desc">By price desc</option>
            </select>
            <input class="col-7" type="text" name="filter">
            <button type="submit" class="btn btn-warning col-2">Search</button>
        </form>



        <div class="container justify-content-center row">
            <?php foreach ($products as $product) { ?>



        <div class="card m-1 col-3" style="max-height:200px; max-width: 540px;">
            <div class="row">
                <div class="m-auto col-md-4">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="img-fluid rounded-start" alt="slika">
                </div>

                <div class="col-md-8 m-auto">
                <div class="card-body">
                <h6 class="card-title"><?php echo htmlspecialchars($product['title']); ?></h6>
                <p class="card-text">Cena:<?php echo htmlspecialchars($product['price']); ?> RSD</p>
                <p class="card-text"><a class="btn btn-success row" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show Product</a></p>
                </div>
                </div>
            </div>
            
        </div>

            
            <?php } ?>
        </div>
    </div>
</main>