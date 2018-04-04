<?php require "C:/xampp/htdocs/ltweb/system/core/Function.php"; ?>
<?php require "C:/xampp/htdocs/ltweb/system/core/Database.php"; ?>
<?php
class ADMIN_CONTROLLER {
	private $model;
	public function __construct(){
		require ('models/admin_model.php');
		$this->model = new ADMIN_MODEL();
	}
	public function run(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		switch ($action) {
			case 'listAdmin':
			$this->listAdmin();
			break;
			default:
				# code...
			break;
		}
	}
	public function listAdmin(){
		$listAdmin=$this->model->listAdmin();
		require('views/list_admin.php');
	}	
}
?>