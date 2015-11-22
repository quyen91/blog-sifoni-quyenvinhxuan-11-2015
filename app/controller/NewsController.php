<?php 
namespace App\Controller;

use App\Model\News;

class NewsController extends MainController{

	
	public function news_pageAction(){
		$data['news'] = News::getAll();
		return $this->render('news/mainpage.html.twig',$data);
	}
	public function news_detailAction($id){
		$data['news'] = News::getById($id);
		return $this->render('news/detailpage.html.twig',$data);
	}	

}