<?php
require_once "C:/xampp/htdocs/ltweb/system/core/Database.php";
require_once "C:/xampp/htdocs/ltweb/system/core/Function.php";
?>
<?php
class ADMIN_MODEL {
	public function __construct(){
		$db = new Database;
	}
	public function listAdmin(){
		$db = new Database;
		$admin = $db->FetchAll("admins");
		return $admin;
	}
}
?>