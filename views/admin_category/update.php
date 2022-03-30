<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-8 ftco-animate ">
                <h3>Edit category "<?php echo $category['name']; ?>"</h3>
                <form action="#" method="post" class=" p-5 contact-form" enctype="multipart/form-data">
                <div class="form-group">
                        <p>Category name</p>
                        <input type="text" name="name" class="form-control" value="<?php echo $category['name']; ?>">
                        </div>
                        <div class="form-group">
                        <p>Serial number</p>
                        <input type="text" name="sort_order" class="form-control" value="<?php echo $category['sort_order']; ?>">
                        </div>
                        <div class="form-group"> 
                        <p>Status</p>
                        <select name="status" class="form-control">
                            <option value="1" <?php if ($category['status'] == 1) echo ' selected="selected"'; ?>>Visible</option>
                            <option value="0" <?php if ($category['status'] == 0) echo ' selected="selected"'; ?>>Hidden</option>
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

