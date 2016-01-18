<?php

session_start();
ob_start();
$connection = mysqli_connect("localhost:3306", "root", "", "meeting")or die("cannot connect");
//$database=  mysqli_select_db("meeting") or die(mysqli_error());

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login']) != "") {
    $email = mysql_real_escape_string($_POST['email']);
    $pass = mysql_real_escape_string($_POST['pass']);
    $query = "select distinct mu.u_id from master_user as mu join user as u on mu.u_id = u.u_id"
            . " where mu.email='" . $email . "' and u.password='" . $pass . "';";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    if (mysqli_num_rows($result) >= 1) {

        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['u_id'];
            $_SESSION['user_id'] = $uid;
        }
        echo "<script type=\"text/javascript\">document.location.href=\"home.php\";</script>";
    } else {
        echo "invalid credentials";
    }
}
ob_end_flush();
