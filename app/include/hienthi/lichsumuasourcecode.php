<?php
require_once __DIR__."/../config/database.php";
require_once __DIR__."/../../theme/head.php";
require_once __DIR__."/../../theme/header.php";

if(!isset($_SESSION['user'])){
  header('location: /');
}
require_once __DIR__. "/../page/lichsumuasourcecode.php";
require_once __DIR__. "/../../theme/footer.php";

?>