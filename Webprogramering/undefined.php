<?php
if(empty($_SERVER['HTTP_REFERER'])) {
    header('Location:login.php');
    exit();
}
include ("includes_2/header.php");
include ("includes_2/text_undefined.php");
include ("includes_2/footer.php");
