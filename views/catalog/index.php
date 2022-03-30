<?php
include(ROOT . '/views/layouts/header.php');
?>

<div class="hero-wrap hero-bread" style="background-image: url('/template/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Collection</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Product</span></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light">
    <div class="container-fluid">
        <div class="row">
            <?php foreach ($products as $item) : ?>
                <div class="col-sm col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="/template/images/<?= $item['image'] ?>" alt="Picture">
                            <?php if ($item['proposition'] != "") : ?>
                                <span class="status"><?= $item['proposition'] ?></span>
                            <?php endif ?>
                        </a>
                        <div class="text py-3 px-3">
                            <h3><a href="/product/<?= $item['id'] ?>"><?= $item['name'] ?></a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><?= $item['price'] ?> $</span></p>
                                </div>
                                <div class="rating">
                                    <p class="text-right">
                                        <?php for ($i = 1; $i < $item['rate']; $i++) : ?>
                                            <span class="ion-ios-star-outline"></span>
                                        <?php endfor ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <p class="bottom-area d-flex">
                                <a href="#" data-id="<?= $item['id'] ?>" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                                <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</section>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h1 class="big">Subscribe</h1>
                    <h2>Subcribe to our Newsletter</h2>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include(ROOT . '/views/layouts/footer.php');
?>