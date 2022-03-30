<?php include ROOT . '/views/layouts/header.php';
//include(ROOT . "/config/config.php"); ?>

<div class="hero-wrap hero-bread" style="background-image: url('/template/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">My Cart</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            </div>
        </div>
    </div>
</div>
<?php if ($productsInCart) : ?>
    <section class="ftco-section ftco-cart">

        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">

                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product) : ?>
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="/cart/delete/<?php echo $product['id']; ?>"><span class="ion-ios-close"></span></a></td>

                                        <td class="image-prod">
                                            <div class="img" style="background-image:url(/template/images/<?= $product['image'] ?>);"></div>
                                        </td>

                                        <td class="product-name">
                                            <h3> <?php echo $product['name']; ?></h3>
                                        </td>

                                        <td class="price">$<?php echo $product['price']; ?></td>

                                        <td class="quantity">
                                            <div class="input-group mb-3">
                                                <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                                            </div>
                                        </td>

                                    </tr><!-- END TR-->
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                    <div class="cart-total mb-3">
                        <h3>Cart Totals</h3>
                        <p class="d-flex">
                            <span>Subtotal</span>
                            <span>$<?php echo $totalPrice; ?></span>
                        </p>
                        <p class="d-flex">
                            <span>Delivery</span>
                            <span>$0</span>
                        </p>
                        <p class="d-flex">
                            <span>Discount</span>
                            <span>$3</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>$<?php echo $totalPrice - 3; ?></span>
                        </p>
                    </div>
                    <p class="text-center"><a href="/cart/checkout" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                </div>
            </div>
        </div>
    </section>

<?php else : ?><section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-11 text-center heading-section ftco-animate">

                    <h1 class="big">Cart is empty</h1>
                    <h2>Cart is empty</h2>


                    <a href="/">Back to shopping</a></li>


                </div>
            </div>
        </div>
    </section>

<?php endif; ?>






<?php include ROOT . '/views/layouts/footer.php'; ?>