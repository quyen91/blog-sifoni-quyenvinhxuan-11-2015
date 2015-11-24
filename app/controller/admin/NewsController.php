<?php 
namespace App\Controller\admin;

use Sifoni\Controller\Base;
use App\Model\News;
use Sifoni\Model\DB;


class NewsController extends AuthorController {

	public function viewAction(){
		$data = array();
		$data['news'] = News::getAll();
		return $this->render('admin/viewnews.html.twig',$data);
	}
	public function addAction(){

		if($this->getPostData()){
			$news = $this->getPostData();
			$news['img'] = "img/news/".$_FILES['image']['name'];
			$path = 'img/news/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			//end img upload
			$news['slug'] = $this->app['slugify']->slugify($news['name']);
			
			
			$postID = News::insertNews($news);
			News::add_tag($postID,$news['tag']);
			return $this->redirect('viewnews');
		}
		return $this->render('admin/addnews.html.twig');
	
	}
	public function updateAction($id){
		
		if($this->getPostData()){
			$news = $this->getPostData();
			$news['img'] = "img/news/".$_FILES['image']['name'];
			$path = 'img/news/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			//end img upload
			$news['slug'] = $this->app['slugify']->slugify($news['name']);

			//xoa gia tri hien tai cua bang post_tag
			News::deletePostTag($id);
			News::add_tag($id,$news['tag']);

		   News::updateNews($id, $news);
		   return $this->redirect('viewnews');
		}
	
		$data = array();
		$data['news'] = News::getById($id);
		return $this->render('admin/updatenews.html.twig',$data);
	}
	public function deleteAction(){

	}
	
}



