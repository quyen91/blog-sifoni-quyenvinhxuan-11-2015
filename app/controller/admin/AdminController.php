<?php 
namespace App\Controller\admin;
use Sifoni\Controller\Base;
use App\Model\Admin;


class AdminController extends Base{

	
	public function loginAction(){
		
			//khi tao admin trong database
			//dung lenh : update tablenam set columpass = md5(columpass);
			if($this->getPostData()){
				$post = $this->getPostData();
				$t = Admin::getByName($post['email']);
				if(count($t)>0){
					if($t[0]['password'] == md5($post['password'])){
						$this->app['session']->set('admin_authed',$post['email'] );
						return $this->redirect('admin_home');
					}
				}
				$data['error'] = "Tên hoặc mật khẩu không đúng @";
				return $this->render('admin/login.html.twig',$data);
			}
			return $this->render('admin/login.html.twig');
	}
	public function loggoutAction(){
		$this->app['session']->remove('admin_authed');
		return $this->redirect('admin_login');
	}
}

