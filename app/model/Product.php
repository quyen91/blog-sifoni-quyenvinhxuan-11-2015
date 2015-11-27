<?php

namespace App\Model;

use Sifoni\Model\Base;
use Sifoni\Model\DB;

class Product extends Base {

	protected $table = 'product';
	public $timestamp = true;
	protected $fillable = array('name', 'price', 'description','qty','short_description','type','feature_img');

	function getAll(){

		//return User::select('id', 'name')->get();
		//can sap xep co so du lieu de lay nhung cai moi nhat
		return Product::get();
	}
	function getById($id){
		//$t = Product::where('id',$id);
		return Product::where('id',$id)->get();
		
	}
	function getPaginate($start,$limit){
		return Product::skip($start)->take($limit)->get();
	}
	function getByCategory($cate){
		return Product::where('type',$cate)->get();
	}
	function getCategory(){
		
		return DB::table('product_type')->get();
	}
	function insertProduct($product){
		
		$p = Product::create($product);
		return $p;
	 
	}
	function updateProduct($id,$product){
		//return Product::where(`id`,$id)->update()
		$t = Product::find($id)->update($product);
		return $t;
	}
	function deleteProduct($id){
		return Product::find($id)->delete();
	}


} 