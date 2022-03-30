<?php

class UserController extends AdminBase
{


  public function actionRegister()
  {
    $categories = Category::getCategoriesList();
    $name = '';
    $email = '';
    $password = '';
    $result = false;
    if (isset($_POST["submit"])) {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      $errors = false;
      if (!User::checkName($name)) {
        $errors[] = "Name can't be less then 4 symbols";
      }
      if (!User::checkEmail($email)) {
        $errors[] = "Email is wrong!";
      }
      if (!User::checkPassword($password)) {
        $errors[] = "Password can't be less then 5 symbols";
      }
      if (User::checkEmailExists($email)) {
        $errors[] = "Email already exists!";
      }
      if ($errors == false) {
        $result = User::register($name, $email, $password);
        $result = true;
      }
    }


    require_once(ROOT . '/views/user/register.php');
    return true;
  }
  public function actionLogin()
  {
    $categories = Category::getCategoriesList();
    $email = '';
    $password = '';
    $result = false;
    if (isset($_POST["submit"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
      $errors = false;
      $userId = User::login($email, $password);
      if ($userId == false) {
        $errors[] = "Login or Password is wrong!";
      } else {
        User::authorization($userId);
        if (self::checkAdmin()) {

          header("location: /admin");
        } else
          header("location: /cabinet");
      }
    }
    require_once(ROOT . '/views/user/login.php');
    return true;
  }
  public function actionLogout()
  {
    User::logout();
    User::checkLogin();
    // require_once(ROOT . '/views/site/index.php');
    return true;
  }
}
