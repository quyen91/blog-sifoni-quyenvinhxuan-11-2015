<?php
namespace App\Controller;
use App\Model\User;

class UserController extends MainController {

	public function indexAction(){
		//load form 
		//$this->app['session']->remove('logged');
		var_dump($this->app['session']->get('logged'));
		return $this->render('user/login.html.twig');
	}
	public function loginAction(){
		if($this->getPostData()) {
			$postData = $this->getPostData();
			$postD['password'] = md5($postData['password']);
			$postD['email'] = $postData['email'];
			$this->app['session']->set('logged',$postData['email']);
			return $this->redirect('home');
		}
		
	}

	public function signupAction(){
		if($this->getPostData()) {  //co the dung them ham : isPostRequest() để kiểm tra cái hàm này tự viết
			$postData = $this->getPostData();
			$postD['password'] = md5($postData['password']);
			$postD['email'] = $postData['email'];
			User::insertNew($postD);
			return $this->redirect('loadlogin');
		}

	
	}

	public function loggoutAction(){
		$this->app['session']->remove('logged');
		return $this->redirect('loadlogin');
	}

}