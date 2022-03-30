<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate ">
                <h3>Products List</h3>
                <a href="/admin/product/create" class="btn btn-default float-end"><span class="icon-plus"></span> Add Product</a><br />
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">

                                <th>ID</th>
                                <th>Image</th>
                                <th>Code</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productsList as $product) : ?>
                                <tr class="text-center">


                                    <td class="price"><?php echo $product['id']; ?></td>
                                    <td class="image-prod">
                                        <div class="img" style="background-image:url(/template/images/<?= $product['image'] ?>);"></div>
                                    </td>
                                    <td class="price"><?php echo $product['code']; ?></td>
                                    <td class="product-name">
                                        <h3> <?php echo $product['name']; ?></h3>
                                    </td>

                                    <td class="price">$<?php echo $product['price']; ?></td>
                                    <td class="product-remove"><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><span class="icon-edit"></span></a></td>
                                    <td class="product-remove"><a href="/admin/product/delete/<?php echo $product['id']; ?>"><span class="icon-delete"></span></a></td>


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