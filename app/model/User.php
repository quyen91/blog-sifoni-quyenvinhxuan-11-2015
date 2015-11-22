<?php

namespace App\Model;

use Sifoni\Model\Base;


class User extends Base {

	protected $table = 'users';

	function getAll(){
		//return User::select('id', 'name')->get();
		return User::get();
	}
	function insertNew($postD){
		return User::insertGetId($postD);

	}
	function checkLogin($email){
		
		return User::where('email', $email)->get();
		
	}

} 