<?php
include(ROOT . '/views/layouts/header.php');
//include(ROOT . "/config/config.php");
?>
<div class="hero-wrap hero-bread" style="background-image: url('/template/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">User Account</h1>
            </div>
        </div>
    </div>
</div>
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
                <h2>Welcome, <?php echo $user['name']; ?>!</h2>
                <div class="row justify-content-center mb-3 pb-3">
                    <ul>
                        <li><a href="/cabinet/edit">Change user data</a></li>
                        <li><a href="/cabinet/history">History</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/footer.php'; ?>