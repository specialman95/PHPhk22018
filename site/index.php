<!-- //index.php?controller=product&action=listProduct -->

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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WELCOME YOU TO VISIT SITE!</title>
    <?php require_once 'views/meta-data.php' ?>
  </head>
  <body class=" p-0 bg-red">



    <div class="container-fluid p-0 bg-black" style="height:100%">
      <div class="container-fluid d-flex align-items-center justify-content-center w-100 h-100">
        <div>
            <p style="font-family: 'Mina', sans-serif;font-size:300%;font-weight:bold;" class="fadein wow text-light">WELCOME TO MY WEBSITE</p><br>
            <p class="text-center text-light fadein" style="font-family: 'Mina', sans-serif;font-size:160%;font-weight:bold;">What You Want Access WEB?</p>
            <div class="d-flex justify-content-around pt-5">
              <a class="button2 wow bounceInLeft btn btn-light rounded" href="../../ltweb/admin/">Administrator</a>
              <a class="button2 wow bounceInRight btn btn-light rounded" href="index.php?controller=product&action=listProduct">Visit Site</a>
            </div>
            </div>
          </div>
        </div>

    <?php require_once 'views/animated.js' ?>
  </body>
</html>
