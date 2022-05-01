<?php
session_start();
session_destroy();
if(empty($_SESSION['name'])):
echo "<script>document.location='index.php';</script>";
endif;
?>