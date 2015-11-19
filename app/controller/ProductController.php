<?php
namespace App\Controller;
use App\Model\Product;

class ProductController extends MainController{
	public function mainpageAction(){
		$data['category'] = Product::getCategory();
		$data['newproduct'] = Product::getAll();
		return $this->render('product/mainpage.html.twig',$data);
	}
	public function categorypageAction($id){
		$data['category'] = Product::getCategory();
		$data['newproduct'] = Product::getByCategory($id);
		return $this->render('product/mainpage.html.twig',$data);

	}
	public function detailPageAction($id){
		$data['product'] = Product::getById($id);
		 // dump($data['product']);
		// return "test";
		return $this->render('product/detailpage.html.twig',$data);
	}

}