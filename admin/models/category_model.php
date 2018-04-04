<?php
require_once "C:/xampp/htdocs/ltweb/system/core/Database.php";
require_once "C:/xampp/htdocs/ltweb/system/core/Function.php";
?>
<?php
class CATEGORY_MODEL {
	public function __construct(){
		$db = new Database;
	}
	public function listCategory(){
		$db = new Database;
		$cate = $db->FetchAll("categories");
		return $cate;
	}
	public function delete($id){
		$db = new Database;
		$result = $db->delete("categories",$id);
		if($result>0){
			$_SESSION['success'] = "Xóa thành công.";
			header("Location: ?controller=category&action=listCategory");
		}
	}
	public function add($data){
		$db = new Database;
		$id_insert = $db->insert("categories",$data);
		if($id_insert>0)
		{
			$_SESSION['success'] = "Thêm mới thành công.";
		}
	}
	public function edit($data, $id){
		$db = new Database;
		$id_update = $db->update("categories",$data,array("id"=>$id));
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