<?php

class CartController
{
    public function actionIndex()
    {
        $categories = Category::getCategoriesList();
        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            $productIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productIds);
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

    public function actionAdd($id)
    {
        Cart::addProduct($id);

        $refferer = $_SERVER['HTTP_REFERER'];
        header("location: $refferer");
    }

    public function actionAddAjax($id)
    {
        echo '<span class="icon-shopping_cart"></span>Cart [' . Cart::addProduct($id) . ']';

        return true;
    }

    public function actionCheckout()
    {
        $categories = Category::getCategoriesList();
        $result = false;

        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            $errors = false;
            if (!User::checkName($userName)) {
                $errors[] = "Name is not correct";
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = "Phone is not correct";
            }

            if ($errors == false) {
                $productsInCart = Cart::getProducts();
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogin();
                }
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                if ($result) {
                    //$adminEmail = 'admin@gmail.com';
                    //$message = 'http://http://mysite.com:82/admin/orders';
                    //$sublect = 'New Order';
                    
                    Cart::clear();
                }
            } else {
                $productsInCart = Cart::getProducts();
                $productIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
            }
        } else {
            $productsInCart = Cart::getProducts();
            if ($productsInCart == false) {
                header("location: /");
            } else {
                $productIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

                $userName = false;
                $userPhone = false;
                $userComment = false;
                if (User::isGuest()) {
                } else {
                    $userId = User::checkLogin();
                    $user = User::userData($userId);
                    $userName = $user['name'];
                }
            }
        }
        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }
    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        header("location: /cart");
    }
}
