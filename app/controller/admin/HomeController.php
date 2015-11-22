<?php 
namespace App\Controller\admin;
use Sifoni\Controller\Base;
use App\Model\Admin;


class HomeController extends AuthorController{

	public function indexAction(){

		return $this->render('admin/layout.html.twig');
	}
}