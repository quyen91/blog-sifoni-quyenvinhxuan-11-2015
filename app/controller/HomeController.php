<?php
namespace App\Controller;
use App\Model\User;


class HomeController extends MainController {
    public function indexAction() {
        $data['name'] = 'sifoni';
        $cart['id'] = '3';
        $cart['name'] = '4';
        $this->app['session']->set('test', $cart);
       // dump($this->app['session']->get('test')['id']);
       dump($this->app['session']->get('logged'));

       $t = $this->app['session']->get('logged', 'This is default value');
       dump($t);
        
        return $this->render('product/home.html.twig', $data);
    }

    public function helloAction($tuoi,$name) {
    
        echo $name;
        echo $tuoi;
        return "&nbsp;return";

        // return $this->render('home.html.twig', $data);
    }
}
