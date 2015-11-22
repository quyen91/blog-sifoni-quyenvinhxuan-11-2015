<?php 
namespace App\Controller\admin;
use Sifoni\Controller\Base;
use App\Model\News;

class NewsController extends AuthorController {

	public function viewAction(){
		$data = array();
		$data['news'] = News::getAll();
		return $this->render('admin/viewnews.html.twig',$data);
	}
	public function addAction(){
		return $this->render('admin/addproduct.html.twig');
	
	}
	public function updateAction($id){
		
		if($this->getPostData()){
			$news = $this->getPostData();
			$news['img'] = "img/news/".$_FILES['image']['name'];
			$path = 'img/news/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			//end img upload
			$news['slug'] = $this->app['slugify']->slugify($news['name']);
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



