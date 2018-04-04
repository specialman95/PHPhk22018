<?php
require_once "C:/xampp/htdocs/ltweb/system/core/Database.php";
require_once "C:/xampp/htdocs/ltweb/system/core/Function.php";
?>
<?php
class USER_MODEL {
	public function __construct(){
		$db = new Database;
	}
	public function listUser(){
		$db = new Database;
		$user = $db->FetchAll("users");
		return $user;
	}
	public function delete($id){
		$db = new Database;
		$result = $db->delete("users",$id);
		if($result>0){
			$_SESSION['success'] = "Xóa thành công.";
			header("Location: ?controller=user&action=listUser");
		}
	}
	public function add($data){
		$db = new Database;
		$id_insert = $db->insert("users",$data);
		if($id_insert>0)
		{
			$_SESSION['success'] = "Thêm mới thành công.";
		}
	}
	public function edit($data, $id){
		$db = new Database;
		$id_update = $db->update("users",$data,array("id"=>$id));
		if($id_update>0)
		{
			$_SESSION['success'] = "Sửa thành công.";
		}
		else
		{
			$_SESSION['noti'] = "Dữ liệu không thay đổi";
		}
	}
}
?>