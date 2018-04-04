<?php require "C:/xampp/htdocs/ltweb/system/core/Function.php"; ?>
<?php require "C:/xampp/htdocs/ltweb/system/core/Database.php"; ?>
<?php
class ORDER_CONTROLLER {
	private $model;
	public function __construct(){
		require ('models/order_model.php');
		$this->model = new ORDER_MODEL();
	}
	public function run(){
		$action = isset($_GET['action'])?$_GET['action']:'';
		switch ($action) {
			case 'listOrder':
			$this->listOrder();
			break;
			case 'delete':
			$this->delete();
			break;
			case 'detailOrder':
			$this->detailOrder();
			break;
			default:
				# code...
			break;
		}
	}
	public function listOrder(){
		$listOrder=$this->model->listOrder();
		require('views/list_order.php');
	}
	public function delete(){
		$db = new Database;
		$id=getInput('id');
		$cateDel = $db->fetchID("orders",$id);
		if(empty($cateDel))
		{
			$_SESSION['error']="ID không tồn tại";
			header("Location: ?controller=order&action=listOrder");
		}
		$this->model->delete($id);
		header("Location: ?controller=order&action=listOrder");
	}
	public function detailOrder(){
		$db = new Database;
		$id=getInput('id');
		$orderDetail = $db->fetchID("orderdetails",$id);
		if(empty($orderDetail))
		{
			$_SESSION['error']="ID không tồn tại";
			header("Location: ?controller=order&action=listOrder");
		}
		$this->model->detailOrder($id);
		require('views/detail_order.php');
	}
}
?>