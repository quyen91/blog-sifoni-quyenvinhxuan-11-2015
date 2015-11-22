<?php

namespace App\Model;

use Sifoni\Model\Base;
date_default_timezone_set( 'Asia/Ho_Chi_Minh' );

class News extends Base {

	protected $table = 'news';
	protected $fillable = array('name', 'img', 'author', 'tag','decription', 'content','slug');

	function getAll(){

		//return User::select('id', 'name')->get();
		return News::get();
	}
	function getById($id){
		return News::where('id',$id)->get();
		
	}
	function insertNews($new){

	}
	function updateNews($id,$news){
		//return Product::where(`id`,$id)->update()
		$t = News::find($id)->update($news);
		return $t;
	}

} 