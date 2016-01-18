<?php
ob_start();
include("DB.php");
if (isset($_POST['login']) != "") {
    $fname = mysql_real_escape_string($_POST['fname']);
    $lname = mysql_real_escape_string($_POST['lname']);
    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['pass']);
    $update = mysql_query("INSERT INTO master_user(first_name,last_name, email)VALUES
                                      ('$fname','$lname','$email')");
    $updateP = mysql_query("INSERT INTO user(password, u_id)VALUES
                                      ('$password', LAST_INSERT_ID())");
    if ($update && $updateP) {
        echo "You have been registered successfully";
    } else {
        echo "Registration unsuccessful";
    }
}
ob_end_flush();
