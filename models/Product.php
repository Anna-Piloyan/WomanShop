<?php
include(ROOT . "/config/config.php");
class Product
{

    public static function getProductList($count = SHOW_BY_DEFAULT)  //self
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product WHERE status = 1
        ORDER BY id DESC
        LIMIT $count");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public static function getProductListByCategory($categoryId, $page = 1)
    {
        $offset = ($page - 1) * SHOW_BY_DEFAULT;      //self
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product 
        WHERE status = 1 AND category_id = $categoryId
        ORDER BY id DESC "
            . "LIMIT " . SHOW_BY_DEFAULT      //self
            . " OFFSET " . $offset);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public static function getProductById($id)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product 
        WHERE id = $id");

        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function getTotalProductsInCategory($categoryId)
    {

        $db = Db::getConnection();
        $result = $db->query("SELECT count(id) AS count FROM product "
            . "WHERE status = 1 AND category_id = $categoryId");

        $data = $result->fetch(PDO::FETCH_ASSOC);

        return $data["count"];
    }

    public static function getProductsByIds($idsArray)
    {
        $db = Db::getConnection();
        $idsString = implode(',', $idsArray);
        $query = "SELECT * FROM product WHERE status = '1' AND id IN($idsString)";

        $result = $db->query($query);

        $data = $result->fetchAll();

        return $data;
    }

    public static function getProductsList()  //self
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM product ORDER BY id ASC");

        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function deleteProductById($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM product WHERE id = $id";
        $result = $db->query($sql);
        //$result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function createProduct($options)
    {
        $db = Db::getConnection();
        $sql = "INSERT INTO product
        (name, code, price, category_id, brand, image, availability, description, proposition, rate, status) 
        VALUES(:name, :code, :price, :category_id, :brand, :image, :availability, :description, :proposition, :rate, :status)";
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':proposition', $options['proposition'], PDO::PARAM_STR);
        $result->bindParam(':rate', $options['rate'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }
    public static function updateProductById($id, $options)
    {
        $db = Db::getConnection();
        $sql = "UPDATE product SET
            name = :name,
            code = :code,
            price = :price, 
            category_id = :category_id,
            brand = :brand,
            image = :image,
            availability = :availability,     
            description = :description,
            proposition = :proposition,
            rate = :rate,
            status = :status
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':proposition', $options['proposition'], PDO::PARAM_STR);
        $result->bindParam(':rate', $options['rate'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->execute();
       
    }

    public static function getImage($id){
        $db = Db::getConnection();
        $result = $db->query("SELECT image FROM product WHERE id = $id");
        $data = $result->fetch();
        return $data['image'];
    }
}
