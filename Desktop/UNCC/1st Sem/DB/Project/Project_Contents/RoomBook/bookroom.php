<?php

session_start();
ob_start();
$connection = mysqli_connect("localhost:3306", "root", "", "meeting")or die("cannot connect");
//$database=  mysqli_select_db("meeting") or die(mysqli_error());
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$userid = $_SESSION['user_id'];

$data = $_POST["id"];
$room = $data[0];
$floor = $data[1];
$capacity = $data[2];
$date = $data[3];
$stime = $data[4];
$etime = $data[7];

$sql = "INSERT INTO meeting_table(room_room_id, date, start_time, end_time, user_user_id) "
        . "VALUES ('$room','$date','$stime', '$etime', '$userid');";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if ($connection->query($sql) === TRUE) {
    $last_id = $connection->insert_id;
    $_SESSION['last_inserted_id'] = $last_id;
}

if ($result) {
    echo ("true");
} else {
    echo "false";
}
mysqli_close($connection);

ob_end_flush();