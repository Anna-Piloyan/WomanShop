<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <?php if (isset($errors) && is_array($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <h2>Welcome, admin!</h2>
                <div class="row justify-content-center mb-3 pb-3">
                    <ul>
                        <li><a href="/admin/product">Goods managment</a></li>
                        <li><a href="/admin/category">Category managment</a></li>
                        <li><a href="/admin/order">Order managment</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer_admin.php'; ?>