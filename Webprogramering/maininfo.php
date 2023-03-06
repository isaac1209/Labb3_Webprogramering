<?php
session_start();
if(!$_SESSION['logged_in']){
    header("Location:login.php");
    exit();
}
include ("includes_2/header.php");
include ("includes_2/taskbar.php");
include ("includes_2/show_info.php");
include ("includes_2/footer.php");
