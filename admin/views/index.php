<?php
require_once "header.php";
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Blank Page</li>
</ol>
<div class="row">
  <div class="col-12">
    <h1>Blank</h1>
    <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
    <?php 
    require_once "C:/xampp/htdocs/ltweb/system/core/Database.php";
    $db = new Database;
    $cate = $db->FetchAll("categories");
    var_dump($cate);
    ?>
  </div>
</div>
<?php
require_once "footer.php";
?>