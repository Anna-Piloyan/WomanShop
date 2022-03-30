<?php
include(ROOT . '/views/layouts/header.php');
//include(ROOT . "/config/config.php");
?>
<div class="hero-wrap hero-bread" style="background-image: url('/template/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Registration</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Registration</span></p>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <h1 class="big">Registration</h1>
                <h2>Registration</h2>
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-sm-8 col-sm-offset-8 padding-right">
                        <?php if ($result) : ?>
                            <p class="green">You are register!</p>
                        <?php else : ?>
                            <?php if (isset($errors) && is_array($errors)) : ?>
                                <ul class="error-info">
                                    <?php foreach ($errors as $error) : ?>
                                        <li class="red"><?= $error ?></li>
                                    <?php endforeach ?>
                                </ul>
                            <?php endif ?>


                            <form action="#" class=" p-5 contact-form" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Register" class="btn btn-primary py-3 px-5">
                                </div>
                            </form>

                        <?php endif ?>
                    </div>
                </div>

            </div>
        </div>
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

<?php include ROOT . '/views/layouts/footer.php'; ?>