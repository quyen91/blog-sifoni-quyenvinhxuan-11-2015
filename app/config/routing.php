<?php

return array(
    '/' => array(
        '/' => 'HomeController:index:home::get',
        '/hello.html/{name}/{tuoi}' => 'HomeController:hello:hello_person:name=quyen,tuoi=12', //ap dung cho nhieu bien
        '/loginform' => 'UserController:index:loadlogin',
        '/login' => 'UserController:login:login',
        '/signup' => 'UserController:signup:signup',
        '/loggout' => 'UserController:loggout:loggout',

        '/product.html' => 'ProductController:mainpage:mainpage_route',
        '/product.html/paginate' => 'ProductController:paginate:paginate',
        '/detailpage/{id}' =>'ProductController:detailPage:detail_r',
        '/category/{id}' =>'ProductController:categorypage:category',
        '/addcart' => 'CartController:addcart:addcart_route::post',
        '/yourcart' => 'CartController:viewCart:viewCart',
        '/deleteOneCart' => 'CartController:delete_oneCart:delete_oneCart::post',
        '/deleteAllCart' => 'CartController:delete_allCart:delete_allCart::post',
        '/updateCart' => 'CartController:updateCart:updateCart::post',

        '/news.html' => 'NewsController:news_page:newspage',
        '/newsdetail/{id}' => 'NewsController:news_detail:newsdetail',
        '/addcomment' => 'NewsController:getComment:getComment',
        '/page/{id}' => 'NewsController:pagination:paginate_post'



    ),
     '/admin' => array(
        '/' => 'admin\HomeController:index:admin_home::get',
        '/login' => 'admin\AdminController:login:admin_login',
        '/loggout' => 'admin\AdminController:loggout:admin_loggout',

        '/addproduct' => 'admin\ProductController:add:addproduct',
        '/viewproduct.html' => 'admin\ProductController:view:viewproduct',
        '/updateproduct.html/{id}' => 'admin\ProductController:update:updateproduct',
        '/deleteproduct' => 'admin\ProductController:delete:deleteproduct',

        '/addnews' => 'admin\NewsController:add:addNews',
        '/viewnews' => 'admin\NewsController:view:viewnews',
        '/update/{id}' => 'admin\NewsController:update:updatenews',
        '/deletenews' => 'admin\NewsController:delete:deletenews',
        

    ),

);
