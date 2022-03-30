<?php
class AdminProductController extends AdminBase
{

    public function actionIndex()
    {
        self::checkAdmin();
        $productsList = Product::getProductsList();
        require_once(ROOT . '/views/admin_product/index.php');
        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();
        if (isset($_POST['submit'])) {
            Product::deleteProductById($id);
            header("location: /admin/product");
        }
        require_once(ROOT . '/views/admin_product/delete.php');
        return true;
    }

    public function actionCreate()
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();
        $image = "";
        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            if (isset($_FILES['image']['name']))
                $options['image'] = $_FILES['image']['name'];
            else
                $options['image'] = $image;
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['rate'] = 0;
            $options['proposition'] = '';
           // $options['rate'] = $_POST['rate'];
           // $options['proposition'] = $_POST['proposition'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = "Fill all fields";
            }
            if ($errors == false) {
                $id = Product::createProduct($options);
                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                       
                        move_uploaded_file($_FILES["image"]["tmp_name"], ROOT . "/template/images/{$options['image']}");
                    }
                }

                header("location: /admin/product");
            }
        }
        require_once(ROOT . '/views/admin_product/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();
        $product = Product::getProductById($id);
        $image = Product::getImage($id);
        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            if (isset($_FILES['image']['name']))
                $options['image'] = $_FILES['image']['name'];
            else
                $options['image'] = $image;
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['rate'] = 0;
            $options['proposition'] = '';
           // $options['rate'] = $_POST['rate'];
           // $options['proposition'] = $_POST['proposition'];
            $options['status'] = $_POST['status'];

            if (Product::updateProductById($id, $options)) {
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    echo "/template/images/{$options['image']}";
                    die;
                    move_uploaded_file($_FILES["image"]["tmp_name"], ROOT . "/template/images/{$options[0]['image']}");
                }
            }
            header("location: /admin/product");
        }
        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }
}
