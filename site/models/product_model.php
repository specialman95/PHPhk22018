<?php
require_once "C:/xampp/htdocs/ltweb/system/core/Database.php";
require_once "C:/xampp/htdocs/ltweb/system/core/Function.php";
?>
<?php
class PRODUCT_MODEL {
	public function listProduct(){
		$db = new Database;
		$cate = $db->FetchAll("products");
		return $cate;
	}
	public function cataloge(){
		$db = new Database;
		$cate = $db->FetchAll("categories");
		return $cate;
	}
	public function searchProduct($valueSearchfrom,$valueSearchto){
		$db = new Database;
		$cate = $db->searchAll("products",$valueSearchfrom,$valueSearchto);
		return $cate;
	}
	public function listBrand(){
		$db = new Database;
		$cate = $db->FetchAll("brands");
		return $cate;
	}
	public function detailProduct($id){
		$db3 = new Database;
		$cate3 = $db3->searchID("products",$id);
		return $cate3;
	}
	public function filter($idBrand){
		$db = new Database;
		$cate = $db->searchID("products",$idBrand);
		return $cate;
	}
	public function filter2($idCate,$idBrand){
		$db = new Database;
		$cate = $db->searchAllCondition("products",$idCate,$idBrand);
		return $cate;
	}

	public function searchall($key_search){
		$db = new Database;
		$cate = $db->searchallPro("products",$key_search);
		return $cate;
	}
}
