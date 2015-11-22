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
		return $this->render('product/detailpage.html.twig',$data);
	}

/** 
 * [paginationAction description]
 * @return [type] [description]
 * this is using ajax but it not good for seo
 */
	public function paginationAction(){

		header('Content-Type: application/json');
		//goi ham phan trang trong maintroller
		$t = $this->getPostData();
		$page = $t['id'];
		//$html = $this->pagination($page);
		// ================================== goi ham phan trang =======
		$totalpage = "";   //tinh xem minh co khoan bao nhieu page
		$per_page = 3;  //tong so item tren mot trang
		$record  = count(Product::getAll()); //tong so hang cua csdl
		if($record > $per_page){
			$totalpage = ceil($record/$per_page);
		}else{
			$totalpage = 1;
		}

		
		$start = ($page -1) * $per_page;   //tinh so dong bat dau trong co so du lieu tu page nhap vao
		$end_page = $totalpage - 1;
		$productpage  = Product::getPaginate($start,$per_page);
		//var_dump($productpage);
		//hien thi data
		$data = "";
		
		foreach($productpage as $p){
			$data .= '<li>';
			$data .=	'<div class="product-item">';
			$data .= '<div class="img-feature">'	;	
			$data .= '<img src='.$p["feature_img"].' width="200" height="250" alt="">';			
			$data .= '</div>';	
			$data .='<div class="desc">';
			$data .= "<p>Name:".$p['name']."</p>";	
			$data .= "<p>Giá:".$p['price'] . "</p>";		
			$data .= "<p>Tình trạng:". $p['qty']."</p>";		
			$data .= "</div>";	
			$data .= "<span class='BTN'> <a href='#' onclick='addcart(".$p['id'] .")'> AddToCart</a></span>";
			$data .= "<br> ";
			

			$data .= "<span class='BTN'> <a href='../detailpage/".$p['id']  ."'> Chi tiet</a></span>";	
			$data .= "</div></li>"	;
		}


		//hien thi link page: 2 3 4....
		$html = "";
		for($i= 1; $i<=$totalpage;$i++){
			if($page == $i){
				$html .= "<li class='current'><a href='#' onclick='demo($i)'> $i </a></li>";
			}
			else $html .= "<li ><a href='#' onclick='demo($i)'> $i </a></li>";
		}
		// ===================================================
		
		return json_encode(array('html' => $html, 'data'=> $data));

	}
	function paginateAction(){
		
	}

}