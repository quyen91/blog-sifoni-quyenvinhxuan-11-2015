<?php 
namespace App\Controller;
use App\Model\Product;

Class CartController extends MainController{
	public function addcartAction(){
		
		$t = $this->getPostData();
		$id = $t['id'];
		

		//$this->app['session']->remove('cart');
		$getSS = $this->app['session']->get('cart');
		if(isset($getSS[$id])){
			$getSS[$id] ++;
		}
		else {
			$getSS[$id]=1;
		}

		/**
		 * 	trong cart gom co:
		 * 	cart = array(
		 * 		 id => qty
		 * 		 id => qty
		 * 	
		 * 	);
		 * 
		 */
		$this->app['session']->set('cart',$getSS);
		$t = count($this->app['session']->get('cart'));

		return $t;

	}
	public function viewCartAction(){
		$data = array();
		$temp = array();
		$sum = 0;
		$getSS = $this->app['session']->get('cart');
		

		foreach($getSS as $id => $qty) {
			$p = Product::getById($id);
			$sum = $sum +  $p[0]['price']*$qty;
			array_push($temp, $p);
		}
		// tinh tong tien
		$data['cart'] = $temp;
		$this->app['session']->set('totalcart', $sum);
		//var_dump($temp);
		return $this->render('product/viewcart.html.twig',$data);

	}
	public function updateCartAction(){
  	
header('Content-Type: application/json');
		$t = $this->getPostData();
		$getSS = $this->app['session']->get('cart');
		$id = $t['id']; 
		$getSS[$id]=$t['qty'];
		$this->app['session']->set('cart',$getSS);
		
		$sum = 0;
		$getSS = $this->app['session']->get('cart');
		foreach($getSS as $id => $qty) {
			$p = Product::getById($id);
			$sum = $sum +  $p[0]['price']*$qty;
		}
		return json_encode(array('qty'=> $t['qty'], 'sum'=> $sum));

	}
	public function delete_oneCartAction(){

	}
	public function delete_allCartAction(){

	}
}


