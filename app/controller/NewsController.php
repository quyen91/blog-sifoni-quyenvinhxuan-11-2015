<?php 
namespace App\Controller;

use App\Model\News;

class NewsController extends MainController{

	
	public function news_pageAction(){
		$data['news'] = News::getAll();
		$data['tag'] = News::getAllTag();
		return $this->render('news/mainpage.html.twig',$data);
	}
	public function news_detailAction($id){
		$data['news'] = News::getById($id);
		$data['tag'] = News::getPostTag($id);
		$data['comment'] = News::get_comments($id);
		return $this->render('news/detailpage.html.twig',$data);
	}	
	function getCommentAction(){

		//comment
		header('Content-Type: application/json');
		$date1 = date("Y-m-d H:i:s");
		 $postData = $this->getPostData();
		 $name = "<h4 style='color: red' class='author-cm'>".$postData['name']."</h4>";
		 $comment = '<p class="content-cm">'.$postData['comment'].'</p>';
		 //chen comment vao csdlO
			$commentArr = array(
		 		'on_post' => $postData['id'],
		 		'from_user' => $postData['name'],
		 		'email' => $postData['email'],
		 		'body' => $postData['comment'],
		 		'created_at' => $date1
		 		);

		 	News::save_comments($commentArr);

			//cap nhat so luong comment
				$result = News::get_comments($postData['id']);
				$qty_comment = count($result);


		 return json_encode(array('name' => $name, 'email'=>$postData['email'], 'comment' =>$comment, 'time' => $date1, 'qty_comment' => $qty_comment));
		//return json_encode(array('name'=> 'sd'));
	}
	function paginationAction($id){

		$totalpage = "";   //tinh xem minh co khoan bao nhieu page
		$per_page = 3;  //tong so item tren mot trang
		$record  = count(News::getAll()); //tong so hang cua csdl

		if($record > $per_page){
			$totalpage = ceil($record/$per_page);
		}else{
			$totalpage = 1;
		}

		$start = ($id -1) * $per_page;   //tinh so dong bat dau trong co so du lieu tu page nhap vao
		$end_page = $totalpage - 1;

		$html = "<div class='pagi'><ul>";
		for($i= 1; $i<=$totalpage;$i++){
			if($id == $i){
				$html .= "<li class='current'><a href='/page/$i'> $i </a></li>";
			}
			else $html .= "<li ><a href='/page/$i'> $i </a></li>";
		}
		$html.='</ul></div>';
		

		$data['news'] = News::getPaginate($start,$per_page);
		$data['html'] = $html;
		$data['tag'] = News::getAllTag();
		return $this->render('news/mainpage.html.twig',$data);
	}

}