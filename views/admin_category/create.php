<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-8 ftco-animate ">
                <h3>Add new category</h3>
                <?php if (isset($errors) && is_array($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                        <form action="#" method="post" class=" p-5 contact-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Category name" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="sort_order" class="form-control" placeholder="Serial number" value="">
                            </div>
                            <div class="form-group">
                                <p>Status</p>
                                <select name="status" class="form-control">
                                    <option value="1" selected="selected">Visible</option>
                                    <option value="0">Hidden</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary py-3 px-5" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

