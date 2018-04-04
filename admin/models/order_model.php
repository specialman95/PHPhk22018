<?php
require_once "C:/xampp/htdocs/ltweb/system/core/Database.php";
require_once "C:/xampp/htdocs/ltweb/system/core/Function.php";
?>
<?php
class ORDER_MODEL {
	public function __construct(){
		$db = new Database;
	}
	public function listOrder(){
		$db = new Database;
		$sql="SELECT orders.*,users.name as user_name FROM orders JOIN users On orders.user_id=users.id";
		$result = $db->fetchsql($sql);
		return $result;
	}
	public function delete($id){
		$db = new Database;
		$result = $db->delete("orders",$id);
		if($result>0){
			$_SESSION['success'] = "Xóa thành công.";
			header("Location: ?controller=category&action=listOrder");
		}
	}
	public function detailOrder($id){
	}
}
?>