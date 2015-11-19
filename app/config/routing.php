<?php

return array(
    '/' => array(
        '/' => 'HomeController:index:home::get',
        '/hello.html/{name}/{tuoi}' => 'HomeController:hello:hello_person:name=quyen,tuoi=12', //ap dung cho nhieu bien
        'loginform' => 'UserController:index:loadlogin',
        '/login' => 'UserController:login:login',
        '/signup' => 'UserController:signup:signup',
        '/loggout' => 'UserController:loggout:loggout',

        '/product.html' => 'ProductController:mainpage:mainpage_route',
        '/detailpage/{id}' =>'ProductController:detailPage:detail_r',
        '/category/{id}' =>'ProductController:categorypage:category',
        '/addcart' => 'CartController:addcart:addcart_route::post',
        '/yourcart' => 'CartController:viewCart:viewCart',
        '/deleteOneCart' => 'CartController:delete_oneCart:delete_oneCart::post',
        '/deleteAllCart' => 'CartController:delete_allCart:delete_allCart::post',
        '/updateCart' => 'CartController:updateCart:updateCart::post',

    ),
     '/admin' => array(
        '/' => 'admin\AdminController:index:admin-home::get',
        '/login.html' => 'admin\HomeController:login:admin-login',

        '/addproduct' => 'admin\ProductController:add:addproduct',
        '/viewproduct.html' => 'admin\ProductController:view:viewproduct',
        '/updateproduct.html/{id}' => 'admin\ProductController:update:updateproduct',
        '/deleteproduct/{id}' => 'admin\ProductController:delete:deleteproduct',
        

    ),

);
