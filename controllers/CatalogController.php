<?php

class CatalogController{
    public function actionIndex(){
        $categories = Category::getCategoriesList();
        //конфигурационный файлик с прописанными количествами
        $products = Product::getProductList(CATALOG_ITEMS_AMOUNT);
        require_once(ROOT . '/views/catalog/index.php');
    return true;
    }

    public function actionCategory($categoryId, $page=1){
        $categories = Category::getCategoriesList();
        //конфигурационный файлик с прописанными количествами
        $categoryProducts = Product::getProductListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);
        $pagination = new Pagination($total, $page, SHOW_BY_DEFAULT, PAGE_INDEX);
       // print_r($total); die;
        require_once(ROOT . '/views/catalog/category.php');
    return true;
    }
}