<?php

namespace App\Model;


use Sifoni\Model\Base;

class User extends Base {

	protected $table = 'users';

	function getAll(){
		//return User::select('id', 'name')->get();
	}
	function insertNew($postD){
		dump($postD);
		//se dung ajax de kiem tra xem co trong co so du lieu chua
		return User::insertGetId($postD);

	}

} 