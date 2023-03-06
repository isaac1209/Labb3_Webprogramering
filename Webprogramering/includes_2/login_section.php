<?php

if (!empty($_REQUEST["login_button_2"])) {
    $user_name='admin';
    $password='1234';

    //hämta input från text lådorna
    $input_name=$_REQUEST['name'];
    $input_password=$_REQUEST['password'];

    //kolla att det stämmer med inloggning info
    if ($user_name==$input_name && $password==$input_password){

        $_SESSION['logged_in']=true;
        print  $input_name." ".$input_password;

        exit();

    } else header("Location:login.php");
}
?>

<form method="post" id="login_section">
    <div id="login_details">
        <p id="login_p">Login </p>
        <p id="login_p2">User Name:</p>
        <input type="text" name="name" id="name" value="" required >
        <p id="login_p3">Password:</p>
        <input type="password" name="password" id="password" required>
        <input type="submit" name="login_button_2" value="Login" id="button" >
    </div>
</form>

