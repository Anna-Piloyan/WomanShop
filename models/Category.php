<?php

class Category
{

    public static function getCategoriesList()
    {

        $db = Db::getConnection();
        $result = $db->query("SELECT id, name FROM category ORDER BY sort_order ASC");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public static function getCategoriesListAdmin()
    {

        $db = Db::getConnection();
        $result = $db->query("SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC");
        $data = $result->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }
    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'Visible';
                break;
            case '2':
                return 'Hidden';
                break;
        }
    }

    public static function deleteCategoryById($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM category WHERE id = $id";
        $result = $db->query($sql);
        // $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function createCategory($name, $sortOrder, $status)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO category '
            . '(name, sort_order, status)'
            . ' VALUES'
            . '(:name, :sort_order, :status)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getCategoryById($id)
    {
        $db = Db::getConnection();
        $sql = "SELECT * FROM category WHERE id = $id";
        $result = $db->query($sql);
        // $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function updateCategoryById($id, $name, $sortOrder, $status)
    {
        $db = Db::getConnection();
        $sql = "UPDATE category SET
            name = :name, 
            sort_order = :sort_order, 
            status = :status
            WHERE id = :id";


        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':sort_order', $sortOrder, PDO::PARAM_INT);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
}
