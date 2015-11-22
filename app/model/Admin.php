<?php 
namespace App\Model;
use Sifoni\Model\Base;

class Admin extends Base {
	protected $table = 'admin';
	public $timestamp = false;

	function getByName($email){
		return Admin::where('name', $email)->get();
	}
}


