<?php
namespace App\Controller;
use App\Model\User;

class UserController extends MainController {

	public function indexAction(){
		//load form login
	    //kiem tra phong nguoi dung dung route de load form khi da dang nhap rôi
		//$this->app['session']->remove('logged');
		//var_dump($this->app['session']->get('logged'));
		if($this->app['session']->get('logged')){
			return $this->redirect('home');
		}
		return $this->render('user/login.html.twig');
	}
	public function loginAction(){
		
		if($this->getPostData()) {
			$postData = $this->getPostData();
			$t = User::checkLogin($postData['email']);
			if(count($t) > 0){
				if($t[0]['password'] == md5($postData['password'])){
					$this->app['session']->set('logged',$postData['email']);
					return $this->render('product/home.html.twig');
				}	
			}
				$data['error_login'] = 'Email or password not true !';
				return $this->render('user/login.html.twig', $data);
		}
	}

	public function signupAction(){

		if($this->getPostData()) {  //co the dung them ham : isPostRequest() để kiểm tra cái hàm này tự viết
			$postData = $this->getPostData();
			$t = User::checkLogin($postData['email']);

			 if(count($t)<=0){
				$postD['password'] = md5($postData['password']);
				$postD['email'] = $postData['email'];
				User::insertNew($postD);
				return $this->redirect('loadlogin');
				
			 }
			 $data['error_login'] = "Email is exist ! Try new !";
 				 return $this->render('user/login.html.twig', $data);
			
		}
	}

	public function loggoutAction(){
		$this->app['session']->remove('logged');
		return $this->redirect('loadlogin');
	}

}