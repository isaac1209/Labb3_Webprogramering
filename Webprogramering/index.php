<?php
session_start();
if(!$_SESSION['logged_in']){     // här kollar vi at personen är inloggad innan något annat kan göras
    header("Location:login.php");
    exit();
}
include ("includes_2/header.php");
include ("includes_2/info.php");
include("includes_2/GoToMain.php");
include ("includes_2/footer.php");
