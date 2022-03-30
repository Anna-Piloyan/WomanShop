<?php
class ProductController
{
    public function actionView($id)
    {
        $categories = Category::getCategoriesList();
        $product = Product::getProductById($id);
       // print_r($product); die;
        require_once(ROOT . '/views/product/view.php');
        return true;
  
    }
}
