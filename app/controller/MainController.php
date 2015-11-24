<?php

namespace App\Controller;

use Sifoni\Controller\Base;
use App\Model\Product;

class MainController extends Base {
	public function isLogin(){
		
	}
	public function isPostRequest(){
		if($this->app['request']->getMethod()=='POST') return true;
		return false;
	}
	public function pagination($page){
		
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
		
		// $current = ($start/$per_page) + 1;
		// $next = $start + $per_page;
		// $previous = $start - $per_page;
		// $last = ($page - 1)*$per_page;

		// if($current >4){
		// 	$start_page = $current -2;
		// 	if($page > $current+2)  $end_page = $current + 2;
		// }

		//hien thi first , previous
		// if($current > 1){
		// 	$html .= "<li><a> First </a></li>";
		// 	$html .= "<li><a> Previous </a></li>";

		// }
		
		//hien thi link page: 2 3 4....
		$html = "";
		for($i= 1; $i<=$end_page;$i++){
			if($page == $i){
				$html .= "<li class='current'><a href='#' onclick='demo($i)'> $i </a></li>";
			}
			else $html .= "<li ><a href='#' onclick='demo($i)'> $i </a></li>";
		}
		//hien thi last page va next
		// if($current < $page){
		// 	$html .= "<li><a> Next </a></li>";
		// 	$html .= "<li><a> Last </a></li>";
		// }

		
		return $html;
	}

}