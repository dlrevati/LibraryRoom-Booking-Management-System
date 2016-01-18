<?php

session_start();
ob_start();
$connection = mysqli_connect("localhost:3306", "root", "", "meeting")or die("cannot connect");
//$database=  mysqli_select_db("meeting") or die(mysqli_error());

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

 $date;
 $time;

$date = $_GET["date"];
$time = $_GET["time"];

//$sql = "select r.room_id, r.room_number, fl.floor_number ,fl.start_time, fl.end_time from meeting.room as r join meeting.floor as fl on r.floor_id = fl.floor_id where r.room_id IN
//(select room_room_id from meeting_table as mt where mt.start_time > 1000 and mt.date = 01312015 order by (mt.room_room_id));";

$sql = "select r.room_id, r.room_number, r.capactity, fl.floor_number ,fl.start_time, fl.end_time from meeting.room as r join meeting.floor
    as fl on r.floor_id = fl.floor_id where r.room_id NOT IN (select room_room_id from meeting_table as mt where mt.start_time
    > '" . $time . ":00' and mt.date = '" . $date . "' order by (mt.room_room_id));";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $new_array[$row['room_id']] = $row;
//        echo "id: " . $row["room_number"];
    }
    $_SESSION['availablerooms'] = $new_array;
    $_SESSION['time'] = $time;
    $_SESSION['date'] = $date;

    echo "<script type=\"text/javascript\">document.location.href=\"result.php\";</script>";
} else {
    echo "0 results";
}

mysqli_close($connection);

ob_end_flush();

