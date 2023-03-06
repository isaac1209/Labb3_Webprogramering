<?php
if(!empty($_REQUEST["ToMain_button"])) { // när knappen är tryckt ska vi hoppa to maininfo sida
    header("Location: maininfo.php");
    exit();
}
?>

<form method="post" id="login_div">
    <input type="submit" value="Go to maininfo" name="ToMain_button" id="login_button">
</form>
