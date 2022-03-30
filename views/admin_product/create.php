<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-8 ftco-animate ">
                <h3>Add new product</h3>
                <?php if (isset($errors) && is_array($errors)) : ?>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                        <form action="#" method="post" class=" p-5 contact-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Product name" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="code" class="form-control" placeholder="Code" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="price" class="form-control" placeholder="Price" value="">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="category_id">
                                    <option selected>Choose category....</option>
                                    <?php if (is_array($categoriesList)) : ?>
                                        <?php foreach ($categoriesList as $category) : ?>
                                            <option value="<?php echo $category['id']; ?>">
                                                <?php echo $category['name']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="brand" class="form-control" placeholder="Brand" value="">
                            </div>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" placeholder="Image" value="">
                            </div>
                            <div class="form-group">
                                <textarea name="description" class="form-control" placeholder="Description"></textarea>
                            </div>                        
                            <div class="form-group">
                                <p>Availability</p>
                                <select name="availability" class="form-control">
                                    <option value="1" selected="selected">Yes</option>
                                    <option value="0">No</option>
                                </select>
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