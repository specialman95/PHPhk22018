<?php require "C:/xampp/htdocs/ltweb/system/core/Function.php"; ?>
<?php require "C:/xampp/htdocs/ltweb/system/core/Database.php"; ?>
<?php
class PRODUCT_CONTROLLER {
	private $model;
	public function __construct(){
		require ('models/product_model.php');
		require ('models/category_model.php');
		require ('models/brand_model.php');
		$this->model = new PRODUCT_MODEL();
		$this->cateModel = new CATEGORY_MODEL();
		$this->brandModel = new BRAND_MODEL();
	}
	public function run(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		switch ($action) {
			case 'listProduct':
			$this->listProduct();
			break;
			case 'delete':
			$this->delete();
			break;
			case 'add':
			$this->add();
			break;
			case 'edit':
			$this->edit();
			break;
			default:
				# code...
			break;
		}
	}
	public function listProduct(){
		$listProduct=$this->model->listProduct();
		require('views/list_product.php');
	}
	public function delete(){
		$db = new Database;
		$id=getInput('id');
		$productDel = $db->fetchID("products",$id);
		if(empty($productDel))
		{
			$_SESSION['error']="ID không tồn tại";
			header("Location: ?controller=product&action=listProduct");
		}
		$this->model->delete($id);
		header("Location: ?controller=product&action=listProduct");
	}
	public function add(){
		$db = new Database;
		$categories = $this->cateModel->listCategory();
		$brands = $this->brandModel->listBrand();
		if(!isset($_POST['btnAdd']))
			require('views/add_product.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"cate_id" => postInput('cate_id'),
				"brand_id" => postInput('brand_id'),
				"price" => postInput('price'),
				"quantity" => postInput('quantity'),
				"discount" => postInput('discount'),
				"image" => postInput('image'),
				"description" => postInput('description')
			];
			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên sản phẩm không được để trống";
			}
			if(postInput('cate_id') == ''){
				$error['cate_id'] = "Danh mục không được để trống";
			}
			if(postInput('brand_id') == ''){
				$error['brand_id'] = "Nhãn hiệu không được để trống";
			}
			if(postInput('price') == ''){
				$error['price'] = "Giá không được để trống";
			}
			if(postInput('quantity') == ''){
				$error['quantity'] = "Số lượng không được để trống";
			}
			if(postInput('description') == ''){
				$error['description'] = "Mô tả không được để trống";
			}
			if(!empty($error)){
				require('views/add_product.php');
			}
			else{
				$isset = $db->fetchOne("products","name= '".$data['name']."'");
				if(count($isset)>0){
					$_SESSION['error'] = "Tên sản phẩm đã tồn tại";
					require('views/add_product.php');
				}
				else{
					$this->model->add($data);
					header("Location: ?controller=product&action=listProduct");
				}
			}
		}
	}
	public function edit(){
		$db = new Database;
		$categories = $this->cateModel->listCategory();
		$brands = $this->brandModel->listBrand();
		$id=getInput('id');
		$editProduct = $db->fetchID("products",$id);
		if(!isset($_POST['btnEdit']))
			require('views/edit_product.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"cate_id" => postInput('cate_id'),
				"brand_id" => postInput('brand_id'),
				"price" => postInput('price'),
				"quantity" => postInput('quantity'),
				"discount" => postInput('discount'),
				"image" => postInput('image'),
				"description" => postInput('description')
			];

			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên danh mục không được để trống";
				require('views/edit_product.php');
			}
			if(empty($error)){
				if($editProduct['name']!=$data['name']){
					$isset = $db->fetchOne("products","name= '".$data['name']."'");
					if(count($isset)>0){
						$_SESSION['error'] = "Tên danh mục đã tồn tại";
						require('views/edit_product.php');
					}
					else{

						$this->model->edit($data, $id);
						header("Location: ?controller=product&action=listProduct");
					}
				}
				else {
					$this->model->edit($data, $id);
					header("Location: ?controller=product&action=listProduct");
				}
			}
		}
	}
}
?>