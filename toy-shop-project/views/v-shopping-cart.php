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
        <form action="shopping-cart-page.php" method="post" class="m-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    <?php foreach ($items as $item) { ?>
                        <?php
                            $subtotal = $item->getSubtotal();
                            $total += $subtotal;
                            ?>
                        <tr>
                            <td><input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item->getProduct()->id); ?>"></td>
                            <td><?php echo htmlspecialchars($item->getProduct()->title); ?></td>
                            <td><?php echo htmlspecialchars($item->getProduct()->price); ?></td>
                            <td><?php echo htmlspecialchars($item->getQuantity()); ?></td>
                            <td><?php echo htmlspecialchars($subtotal); ?></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td class="tg-0lax" colspan="3"></td>
                        <td class="tg-0lax">TOTAL</td>
                        <td class="tg-0lax"><?php echo htmlspecialchars($total); ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <button class="btn btn-danger m-2" type="submit">Remove Selected</button>
                <a href="./checkout-page.php" class="btn btn-success m-2">Checkout</a>
            </div>
        </form>
    </div>

    <div style="height:200px ;"></div>
</main>