<?php require "C:/xampp/htdocs/ltweb/system/core/Function.php"; ?>
<?php require "C:/xampp/htdocs/ltweb/system/core/Database.php"; ?>
<?php
class USER_CONTROLLER {
	private $model;
	public function __construct(){
		require ('models/user_model.php');
		$this->model = new USER_MODEL();
	}
	public function run(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		switch ($action) {
			case 'listUser':
			$this->listUser();
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
	public function listUser(){
		$listUser=$this->model->listUser();
		require('views/list_user.php');
	}
	public function delete(){
		$db = new Database;
		$id=getInput('id');
		$userDel = $db->fetchID("users",$id);
		if(empty($userDel))
		{
			$_SESSION['error']="ID không tồn tại";
			header("Location: ?controller=user&action=listUser");
		}
		$this->model->delete($id);
		header("Location: ?controller=user&action=listUser");
	}
	public function add(){
		$db = new Database;
		if(!isset($_POST['btnAdd']))
			require('views/add_user.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"description" => postInput('description')
			];
			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên danh mục không được để trống";
				require('views/add_user.php');
			}
			if(empty($error)){
				$isset = $db->fetchOne("users","name= '".$data['name']."'");
				if(count($isset)>0){
					$_SESSION['error'] = "Tên danh mục đã tồn tại";
					require('views/add_user.php');
				}
				else{
					$this->model->add($data);
					header("Location: ?controller=user&action=listUser");
				}
			}
		}
	}
	public function edit(){
		$db = new Database;
		$id=getInput('id');
		$editCate = $db->fetchID("users",$id);
		if(!isset($_POST['btnEdit']))
			require('views/edit_user.php');
		else{
			$data = 
			[
				"name" => postInput('name'),
				"description" => postInput('description')
			];

			$error = [];
			if(postInput('name') == ''){
				$error['name'] = "Tên danh mục không được để trống";
				require('views/edit_user.php');
			}
			if(empty($error)){
				if($editCate['name']!=$data['name']){
					$isset = $db->fetchOne("users","name= '".$data['name']."'");
					if(count($isset)>0){
						$_SESSION['error'] = "Tên danh mục đã tồn tại";
						require('views/edit_user.php');
					}
					else{

						$this->model->edit($data, $id);
						header("Location: ?controller=user&action=listUser");
					}
				}
				else {
					$this->model->edit($data, $id);
					header("Location: ?controller=user&action=listUser");
				}
			}
		}
	}
}
?>