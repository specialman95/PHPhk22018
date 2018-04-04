<?php require "C:/xampp/htdocs/ltweb/system/core/Function.php"; ?>
<?php require "C:/xampp/htdocs/ltweb/system/core/Database.php"; ?>
<?php
class CATEGORY_CONTROLLER {
	private $model;
	public function __construct(){
		require ('models/category_model.php');
		$this->model = new CATEGORY_MODEL();
	}
	public function run(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		switch ($action) {
			case 'listCategory':
			$this->listCategory();
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
	public function listCategory(){
		$listCategory=$this->model->listCategory();
		require('views/list_category.php');
	}
	public function delete(){
		$db = new Database;
		$id=getInput('id');
		$cateDel = $db->fetchID("categories",$id);
		if(empty($cateDel))
		{
			$_SESSION['error']="ID không tồn tại";
			header("Location: ?controller=category&action=listCategory");
		}
		$this->model->delete($id);
		header("Location: ?controller=category&action=listCategory");
	}
	public function add(){
		$db = new Database;
		if(!isset($_POST['btnAdd']))
			require('views/add_category.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"description" => postInput('description')
			];
			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên danh mục không được để trống";
				require('views/add_category.php');
			}
			if(empty($error)){
				$isset = $db->fetchOne("categories","name= '".$data['name']."'");
				if(count($isset)>0){
					$_SESSION['error'] = "Tên danh mục đã tồn tại";
					require('views/add_category.php');
				}
				else{
					$this->model->add($data);
					header("Location: ?controller=category&action=listCategory");
				}
			}
		}
	}
	public function edit(){
		$db = new Database;
		$id=getInput('id');
		$editCate = $db->fetchID("categories",$id);
		if(!isset($_POST['btnEdit']))
			require('views/edit_category.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"description" => postInput('description')
			];

			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên danh mục không được để trống";
				require('views/edit_category.php');
			}
			if(empty($error)){
				if($editCate['name']!=$data['name']){
					$isset = $db->fetchOne("categories","name= '".$data['name']."'");
					if(count($isset)>0){
						$_SESSION['error'] = "Tên danh mục đã tồn tại";
						require('views/edit_category.php');
					}
					else{

						$this->model->edit($data, $id);
						header("Location: ?controller=category&action=listCategory");
					}
				}
				else {
					$this->model->edit($data, $id);
					header("Location: ?controller=category&action=listCategory");
				}
			}
		}
	}
}
?>