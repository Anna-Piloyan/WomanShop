<?php

class CabinetController extends
AdminBase
{
    public function actionIndex()
    {
        $categories = Category::getCategoriesList();
        if (self::checkAdmin()) {
            require_once(ROOT . '/views/admin/index.php');
            return true;
        }
        $id = User::checkLogin();
        $user = User::userData($id);
        $errors = false;
        if ($user == false)
            $errors[] = "Something went wrong!";

        else {

            require_once(ROOT . '/views/cabinet/index.php');
            return $user;
        }
    }

    public function actionEdit()
    {
        $categories = Category::getCategoriesList();
        $result = false;
        $id = User::checkLogin();
        $user = User::userData($id);
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $user['email'];
            $password = $_POST['password'];
            User::updateUserById($id, $name, $email, $password);
            $result = true;
        }
        require_once(ROOT . '/views/cabinet/edit.php');
        return $user;
    }
}
