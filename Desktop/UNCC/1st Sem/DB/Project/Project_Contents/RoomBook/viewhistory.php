<?php

session_start();
ob_start();
$connection = mysqli_connect("localhost:3306", "root", "", "meeting")or die("cannot connect");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$userid = $_SESSION['user_id'];
$sql1 = "select mt.date, r.room_id, r.room_number, r.capactity, fl.floor_number , mt.start_time,"
        . " mt.end_time from meeting.meeting_table as mt join meeting.room as r join meeting.floor as fl
            on mt.room_room_id = r.room_number and fl.floor_id = r.floor_id
            where mt.user_user_id = " . $userid . " order by (mt.date) desc;";
$result1 = mysqli_query($connection, $sql1) or die(mysqli_error($connection));

if (mysqli_num_rows($result1) >= 0) {

    while ($row1 = mysqli_fetch_assoc($result1)) {
        $arrayHistory[$row1['room_id']] = $row1;
    }
    $_SESSION['bookingHistory'] = $arrayHistory;

    echo "<script type=\"text/javascript\">document.location.href=\"history.php\";</script>";
} else {
    echo "0 results";
}

mysqli_close($connection);

ob_end_flush();

