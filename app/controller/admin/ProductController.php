<?php 
namespace App\Controller\admin;
use Sifoni\Controller\Base;
use App\Model\Product;


class ProductController extends Base {

	public function addAction(){

		if($this->getPostData()){
			$product = $this->getPostData();
			// $postData = $this->getPostData();
			// $product['name'] = $postData['name'];
			// $product['price'] = $postData['price'];
			// $product['description'] = $postData['description'];
			// $product['qty'] = $postData['qty'];
			// $product['short_description'] = $postData['short_description'];
			// $product['type'] = $postData['type'];

			//img upload
			$product['feature_img'] = "img/product/".$_FILES['image']['name'];
			$path = 'img/product/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			//end img upload
			
			Product::insertProduct($product);
			return $this->redirect('viewproduct');

		}
		return $this->render('admin/addproduct.html.twig');
	
	}
	public function viewAction(){
		$data = array();
		$data['product'] = Product::getAll();
		return $this->render('admin/viewproduct.html.twig',$data);
	}
	public function updateAction($id){
		if($this->getPostData()){
			$product = $this->getPostData();
			// $postData = $this->getPostData();
			// $product['name'] = $postData['name'];
			// $product['price'] = $postData['price'];
			// $product['description'] = $postData['description'];
			// $product['qty'] = $postData['qty'];
			// $product['short_description'] = $postData['short_description'];
			// $product['type'] = $postData['type'];

			
				//img upload
			$product['feature_img'] = "img/product/".$_FILES['image']['name'];
			$path = 'img/product/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
			//end img upload
		   Product::updateProduct($id, $product);
		   return $this->redirect('viewproduct');

		}

		$data = array();
		$data['product'] = Product::getById($id);
		return $this->render('admin/updateproduct.html.twig',$data);
	}
	public function deleteAction($id){
		
	}
}
