<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-10 text-center heading-section ftco-animate">
                <h4>Delete category #<?php echo $id; ?></h4>
                <h1>Are you sure you want to delete this category?</h1>
                <div class="row justify-content-center mb-3 pb-3">
                    <div class="col-sm-8 col-sm-offset-8 padding-right">
                        <form class=" p-5 contact-form" method="post">
                            <div class="form-group">
                                <input type="submit" name="submit" value="Delete" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

