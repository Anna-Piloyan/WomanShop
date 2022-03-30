<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-8 ftco-animate ">
                <h3>Edit order #<?php echo $id; ?></h3>
                <form action="#" method="post" class=" p-5 contact-form">
                    <div class="form-group">
                        <p>Customer name</p>
                        <input type="text" name="userName" class="form-control" value="<?php echo $order['user_name']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Phone</p>
                        <input type="text" name="userPhone" class="form-control" value="<?php echo $order['user_phone']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Comment</p>
                        <input type="text" name="userComment" class="form-control" value="<?php echo $order['user_comment']; ?>">
                    </div>
                    <div class="form-group">
                        <p>Date</p>
                        <input type="text" name="date" class="form-control" value="<?php echo $order['date']; ?>">
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