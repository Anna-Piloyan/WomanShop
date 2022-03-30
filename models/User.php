<?php

class User
{
    public static function register($name, $email, $password)
    {
        $role = "";
        $db = Db::getConnection();
        $query = "INSERT INTO user (name, email, password, role) VALUES (:name, :email, :password, :role)";
        $result = $db->prepare($query);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':role', $role, PDO::PARAM_STR);
        $result->execute();
    }
    public static function login($email, $password)
    {
        $db = Db::getConnection();
        $result = $db->prepare("SELECT * FROM user WHERE email = :email AND password = :password");
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
       // $result->execute();
        
        if ($result->execute()){
        $user = $result->fetch();
            return $user['id'];
        }
        return false;
    }
    public static function userData($id)
    {

        $db = Db::getConnection();
        $result = $db->prepare("SELECT * FROM user WHERE id = :id");
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        $user = $result->fetch();
        if ($user != null)
            return $user;

        else return false;
    }
    public static function checkLogin()
    {
        if (isset($_SESSION["user"]))
            return $_SESSION["user"];
        else
            header("location: /user/login");
    }
    public static function authorization($id)
    {
        $_SESSION["user"] = $id;
    }
    public static function checkName($name)
    {
        if (strlen($name) > 3)
            return true;
        return false;
    }
    public static function checkEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function checkPassword($password)
    {
        if (strlen($password) > 4)
            return true;
        return false;
    }
    public static function checkEmailExists($email)
    {
        $db = Db::getConnection();
        $result = $db->prepare("SELECT COUNT(*) FROM user WHERE email = :email");
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }
    public static function logout()
    {
        $_SESSION = array();
        // setcookie(session_name(), '', time() - 2592000, '/');
        session_destroy();
    }

     public static function isGuest()
     {
        if (!isset($_SESSION["user"]))
        return true;
         else 
         return false;
     }

    public static function checkPhone($phone)
    {
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }

    public static function updateUserById($id, $name, $email, $password)
    {
        $db = Db::getConnection();
        $sql = "UPDATE user SET 
        name = :name, 
            email = :email,
            password = :password  
            WHERE id = :id";


        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
       
        return $result->execute();
    }
}
