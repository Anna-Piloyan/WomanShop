<?php

return [
    //'news/([0-9]+)' => 'news/view/$1',  // NewsController, actionView
    //'news' => 'news/index',  // NewsController, actionIndex
    //'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2', 
    'cart/checkout' => 'cart/checkout',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart' => 'cart/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    'admin/order/create' => 'adminCategory/create',
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',
    'admin' => 'admin/index',
    'register' => 'user/register', //UserController,
    'contacts' => 'contacts/contacts', //ContactsController, actionContacts
    'about' => 'about/index', //AboutController, actionIndex
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //CatalogController, actionCategory
    'category/([0-9]+)' => 'catalog/category/$1', //CatalogController, actionCategory
    'catalog' => 'catalog/index', // CatalogController, actionIndex
    'product/([0-9]+)' => 'product/view/$1', //ProductController, actionView
    '' => 'site/index' //SiteController, actionList

];
