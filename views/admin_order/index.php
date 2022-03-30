<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate ">
                <h3>Order List</h3>
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">

                            <th>ID</th>
                    <th>Customer name</th>
                    <th>Phone</th>
                    <th>Date</th>
                  
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ordersList as $order) : ?>
                                <tr class="text-center">


                                <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>   
                        <td class="product-remove"><a href="/admin/order/view/<?php echo $order['id']; ?>"><span class="icon-eye"></a></td>
                        <td class="product-remove"><a href="/admin/order/update/<?php echo $order['id']; ?>"><span class="icon-edit"></a></td>
                        <td class="product-remove"><a href="/admin/order/delete/<?php echo $order['id']; ?>"><span class="icon-delete"></span></a></td>
                                  


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

