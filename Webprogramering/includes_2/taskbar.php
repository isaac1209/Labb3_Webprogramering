<?php
if (!empty($_REQUEST["home"])) {
    header("Location: index_2.php");
    exit();
}elseif (!empty($_REQUEST["about_us"])){
    header("Location: undefined.php");
    exit();
}elseif (!empty($_REQUEST["profile"])){
    header("Location: undefined.php");
    exit();
}elseif (!empty($_REQUEST["logout"])){
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<form method="post" id="menu_id">
    <div id="task_bar_id">
        <input type="submit" name="home" value="Home" id="home">
        <input type="submit" name="about_us" value="About us" id="about_us">
        <input type="submit" name="profile" value="Profile" id="home">
        <input type="submit" name="logout" value="Logout" id="logout">

    </div>
</form>

