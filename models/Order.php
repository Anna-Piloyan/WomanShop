<?php

class Order
{
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {

        $products = json_encode($products);
        $db = Db::getConnection();
        $sql = "INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) "
            . "VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)";

        $result = $db->prepare($sql);
        $result->bindParam('user_name', $userName, PDO::PARAM_STR);
        $result->bindParam('user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam('user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam('user_id', $userId, PDO::PARAM_INT);
        $result->bindParam('products', $products, PDO::PARAM_STR);

        $result->execute();
        

        return $result->execute();
    }

    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'New order';
                break;
            case '2':
                return 'Processing';
                break;
            case '3':
                return 'Delivered';
                break;
            case '4':
                return 'Closed';
                break;
        }
    }
    public static function getOrderList()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT id, user_name, user_phone, date FROM product_order ORDER BY id DESC');
        $data = $result->fetchAll();
        return $data;
    }
    public static function deleteOrderById($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM product_order WHERE id = $id";
        $result = $db->query($sql);
       // $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getOrderById($id)
    {
        $db = Db::getConnection();
        $sql = "SELECT * FROM product_order WHERE id = $id";
        $result = $db->query($sql);
        //$result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function updateOrderById($id, $userName, $userPhone, $userComment, $date)
    {
        $db = Db::getConnection();
        $sql = "UPDATE product_order SET
            user_name = :user_name, 
            user_phone = :user_phone,
            user_comment = :user_comment, 
            date = :date
            WHERE id = :id";


        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
       
        return $result->execute();
    }
}
