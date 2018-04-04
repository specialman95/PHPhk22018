<?php
session_start();
if(!isset($_SESSION['admin_id'])){
  header("Location: login.php");
} 
?>
<?php
$controller=isset($_GET['controller'])?$_GET['controller']:'';
if (!empty($controller)) {
  require 'controllers/'.$controller.'_controller.php';
  $controller_name = strtoupper($controller).'_CONTROLLER';
  $new_controller_object = new $controller_name();
  $new_controller_object->run();
  exit();
}
?>
<?php
require_once "views/header.php";
?>
<h1>Xin chào <strong style="color:#343a40"><?php echo $_SESSION['admin_name']?></strong></h1>
<?php
require_once "views/footer.php";
?>