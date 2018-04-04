<?php require "C:/xampp/htdocs/ltweb/system/core/Function.php"; ?>
<?php require "C:/xampp/htdocs/ltweb/system/core/Database.php"; ?>
<?php
class BRAND_CONTROLLER {
	private $model;
	public function __construct(){
		require ('models/brand_model.php');
		$this->model = new BRAND_MODEL();
	}
	public function run(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		switch ($action) {
			case 'listBrand':
			$this->listBrand();
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
	public function listBrand(){
		$listBrand=$this->model->listBrand();
		require('views/list_brand.php');
	}
	public function delete(){
		$db = new Database;
		$id=getInput('id');
		$branDel = $db->fetchID("brands",$id);
		if(empty($branDel))
		{
			$_SESSION['error']="ID không tồn tại";
			header("Location: ?controller=brand&action=listBrand");
		}
		$this->model->delete($id);
		header("Location: ?controller=brand&action=listBrand");
	}
	public function add(){
		$db = new Database;
		if(!isset($_POST['btnAdd']))
			require('views/add_brand.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"description" => postInput('description')
			];
			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên nhãn hiệu không được để trống";
				require('views/add_brand.php');
			}
			if(empty($error)){
				$isset = $db->fetchOne("brands","name= '".$data['name']."'");
				if(count($isset)>0){
					$_SESSION['error'] = "Tên Nhãn hiệu đã tồn tại";
					require('views/add_brand.php');
				}
				else{
					$this->model->add($data);
					header("Location: ?controller=brand&action=listBrand");
				}
			}		
		}
	}
	public function edit(){
		$db = new Database;
		$id=getInput('id');
		$editBrand = $db->fetchID("brands",$id);
		if(!isset($_POST['btnEdit']))
			require('views/edit_brand.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"description" => postInput('description')
			];

			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên danh mục không được để trống";
				require('views/edit_brand.php');
			}
			if(empty($error)){
				if($editBrand['name']!=$data['name']){
					$isset = $db->fetchOne("brands","name= '".$data['name']."'");
					if(count($isset)>0){
						$_SESSION['error'] = "Tên Nhãn hiệu đã tồn tại";
						require('views/edit_brand.php');
					}
					else{

						$this->model->edit($data, $id);
						header("Location: ?controller=brand&action=listBrand");
					}
				}
				else {
					$this->model->edit($data, $id);
					header("Location: ?controller=brand&action=listBrand");
				}
			}
		}
	}
}
?>