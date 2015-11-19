<?php

namespace App\Controller;

use Sifoni\Controller\Base;

class MainController extends Base {
	public function isLogin(){
		
	}
	public function isPostRequest(){
		if($this->app['request']->getMethod()=='POST') return true;
		return false;
	}

}