<?php 
namespace App\Controller\admin;
use Sifoni\Controller\Base;


class AdminController extends Base {

	public function indexAction(){
		return $this->render('admin/layout.html.twig');
	
	}
	public function loginAction(){
		

	}
}

