<?php

namespace App\Model;

use Sifoni\Model\Base;

class News extends Base {

	protected $table = 'news';

	function getAll(){

		//return User::select('id', 'name')->get();
		return Product::get();
	}
	function getById($id){
		//$t = Product::where('id',$id);
		return Product::where('id',$id)->get();
		
	}
	function insertNews($new){

	}

} 