<?php
class ContactsController
{
    public function actionContacts()
    {
        $categories = Category::getCategoriesList();
        require_once(ROOT . '/views/about/contacts.php');
        return true;
    }
}
