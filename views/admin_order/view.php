<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-12 ftco-animate ">
                <h3>View product #<?php echo $id; ?></h3>
                <h2>Order Info</h2>
                <div class="cart-list">
                    <table class="table">
                       
                    <thead class="thead-primary">
                            <tr class="text-center">

                            <th>Order ID</th>
                    <th>Customer name</th>
                    <th>Phone</th>
                    <th>Comment</th>
                    <th>Customer ID</th>
                   
                    <th>Date</th>
                            </tr>
                        </thead>
                    <tr>
                    
                    <td><?php echo $order['id']; ?></td>
               
                    
                    <td><?php echo $order['user_name']; ?></td>
                
                   
                    <td><?php echo $order['user_phone']; ?></td>
               
                   
                    <td><?php echo $order['user_comment']; ?></td>
               
                <?php if ($order['user_id'] != 0): ?>
                   
                       
                        <td><?php echo $order['user_id']; ?></td>
                   
                <?php endif; ?>
               
                   
                   
                
                    
                    <td><?php echo $order['date']; ?></td>
                </tr>
                </table>
                <h2>Products in Order</h2>
                <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">

                            <th>ID</th>
                    <th>Code</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                            </tr>
                        </thead>
                        <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
             
               
                      
                    </table>
                   
                </div>
                <a href="/admin/order/" class="btn btn-default back"><i class="icon-arrow-left"></i> Назад</a>     
            </div>
        </div>
    </div>
</section>




          


<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

