<?php
require_once "C:/xampp/htdocs/ltweb/system/core/Database.php";
require_once "C:/xampp/htdocs/ltweb/system/core/Function.php";
?>
<?php
class PRODUCT_MODEL {
	public function listProduct(){
		$db = new Database;
		$sql = "SELECT products.*, categories.name as cate_name, brands.name as brand_name FROM products INNER JOIN categories ON products.cate_id = categories.id INNER JOIN brands ON products.brand_id = brands.id";
		$result = $db->fetchsql($sql);
		return $result;
	}
	public function delete($id){
		$db = new Database;
		$result = $db->delete("products",$id);
		if($result>0){
			$_SESSION['success'] = "Xóa thành công.";
			header("Location: ?controller=category&action=listProduct");
		}
	}
	public function add($data){
		$db = new Database;
		$id_insert = $db->insert("products",$data);
		if($id_insert>0)
		{
			$_SESSION['success'] = "Thêm mới thành công.";
		}
	}
	public function edit($data, $id){
		$db = new Database;
		$id_update = $db->update("products",$data,array("id"=>$id));
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