
<?php
class AboutController
{
    public function actionIndex()
    {
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/about/index.php');
        return true;
    }
}
