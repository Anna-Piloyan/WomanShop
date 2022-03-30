<?php

class SiteController
{
  public function actionIndex()
  {
    $categories = Category::getCategoriesList();
    $products = Product::getProductList();
    $productsList = Product::getProductsList();
   // print_r($products); die;
    require_once(ROOT . '/views/site/index.php');
    return true;
  }
  
}
