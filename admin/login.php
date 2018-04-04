<?php 
session_start();
require "C:/xampp/htdocs/ltweb/system/core/Function.php";
require "C:/xampp/htdocs/ltweb/system/core/Database.php";
$db = new Database;
$data = 
[
  "username" => postInput('username'),
  "password" => postInput('password')
];
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $error = [];
  if(postInput('username') == ''){
    $error['username'] = "Nhập tên đăng nhập";
  }
  if(postInput('password') == ''){
    $error['password'] = "Nhập mật khẩu";
  }
  if(empty($error)){
    $result = $db->fetchOne("admins","username = '".$data['username']."' AND password = '".$data['password']."' ");
    if(!empty($result)){
      $_SESSION['admin_name'] = $result['name'];
      $_SESSION['admin_id'] = $result['id'];
      header("Location: index.php");
    }
    else{
      $_SESSION['error'] = "Thông tin không chính xác";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="/ltweb/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/ltweb/public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/ltweb/public/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <?php require "C:/xampp/htdocs/ltweb/system/core/notification.php";?>
        <form method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên đăng nhập</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Tên đăng nhập" name="username" value='<?php if(isset($data['username'])) echo $data['username'];?>'>
            <?php if(isset($error['username'])):?>
              <p class="text-danger"><?php echo $error['username']?></p>
            <?php endif ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Mật khẩu" name="password">
            <?php if(isset($error['password'])):?>
              <p class="text-danger"><?php echo $error['password']?></p>
            <?php endif ?>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
              </div>
            </div>
            <button type="submit" class="btn btn-success" name="btnLogin">Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small" href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/ltweb/public/vendor/jquery/jquery.min.js"></script>
    <script src="/ltweb/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/ltweb/public/vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>

  </html>
