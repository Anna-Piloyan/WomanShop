<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-8 ftco-animate ">
                <h3>Edit product #<?php echo $id; ?></h3>
                <form action="#" method="post" class=" p-5 contact-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <p>Product name: </p>
                        <input type="text" name="name" class="form-control" value="<?php echo $product[0]['name']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Code: </p>
                        <input type="text" name="code" class="form-control" value="<?php echo $product[0]['code']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Price: </p>
                        <input type="text" name="price" class="form-control" value="<?php echo $product[0]['price']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Category: </p>
                        <select name="category_id" class="form-control">
                            <?php if (is_array($categoriesList)) : ?>
                                <?php foreach ($categoriesList as $category) : ?>
                                    <option value="<?php echo $category['id']; ?>" <?php if ($product[0]['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <p>Brand: </p>
                        <input type="text" name="brand" class="form-control" placeholder="" value="<?php echo $product[0]['brand']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Image: </p>
                        <img src="/template/images/<?php echo $product[0]['image'] ?>" width="200" alt="" id="imgUpdate" />
                        <p></p>
                        <input id="imgInp" class="form-control" type="file" name="image" placeholder="" value="<?php echo $product[0]['image']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Description: </p>
                        <textarea name="description" class="form-control"><?php echo $product[0]['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <p>Availability</p>
                        <select name="availability" class="form-control">
                            <option value="1" <?php if ($product[0]['availability'] == 1) echo ' selected="selected"'; ?>>Yes</option>
                            <option value="0" <?php if ($product[0]['availability'] == 0) echo ' selected="selected"'; ?>>No</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <p>Status</p>
                        <select name="status" class="form-control">
                            <option value="1" <?php if ($product[0]['status'] == 1) echo ' selected="selected"'; ?>>Visible</option>
                            <option value="0" <?php if ($product[0]['status'] == 0) echo ' selected="selected"'; ?>>Hidden</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary py-3 px-5" value="Save">
                    </div>


                </form>
            </div>
        </div>

    </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>