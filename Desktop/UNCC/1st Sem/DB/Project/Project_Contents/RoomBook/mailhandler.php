<?php

require_once "Mail.php";
session_start();
ob_start();
$connection = mysqli_connect("localhost:3306", "root", "", "meeting")or die("cannot connect");
//$database=  mysqli_select_db("meeting") or die(mysqli_error());
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login']) != "") {
    $toEmails = mysql_real_escape_string($_POST['toEmail']);
    $myMailIds = explode(',', $toEmails);
    $agenda = mysql_real_escape_string($_POST['agenda']);
    $inserted_id = $_SESSION['last_inserted_id'];

    $query = "update meeting_table set agenda = '" . $agenda . "'where meeting_id = '" . $inserted_id . "';";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    if ($result) {
        foreach ($myMailIds as $toEmail) {
            $from = 'rexp.ayachama@gmail.com';
            str_replace(' ', '', $toEmail);
            $to = $toEmail;
            $subject = 'Study Room Agenda';
            $body = $agenda;

            $headers = array(
                'From' => $from,
                'To' => $to,
                'Subject' => $subject
            );

            $smtp = Mail::factory('smtp', array(
                        'host' => 'ssl://smtp.gmail.com',
                        'port' => '465',
                        'auth' => true,
                        'username' => 'rexp.ayachama@gmail.com',
                        'password' => 'rexprexp'
            ));

            $mail = $smtp->send($to, $headers, $body);

            if (PEAR::isError($mail)) {
                echo('<p>' . $mail->getMessage() . '</p>');
            } else {
                echo "<script type=\"text/javascript\">document.location.href=\"home.php\";</script>";
            }
        }
    } else {
        echo "Updated Failure";
    }
}

ob_end_flush();
?>