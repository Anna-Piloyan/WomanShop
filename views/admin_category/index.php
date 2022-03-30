<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate ">
                <h3>Category List</h3>
                <a href="/admin/category/create" class="btn btn-default back"><span class="icon-plus"></span> Add category</a>
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categoriesList as $category) : ?>
                                <tr class="text-center">
                                    <td><?php echo $category['id']; ?></td>
                                    <td><?php echo $category['name']; ?></td>
                                    <td><?php echo Category::getStatusText($category['status']); ?></td>
                                    <td class="product-remove"><a href="/admin/category/update/<?php echo $category['id']; ?>"><span class="icon-edit"></a></td>
                                    <td class="product-remove"><a href="/admin/category/delete/<?php echo $category['id']; ?>"><span class="icon-delete"></span></a></td>
                                </tr><!-- END TR-->
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include ROOT . '/views/layouts/footer_admin.php'; ?>