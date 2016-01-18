<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            background: url("img/homeimg.jpg") no-repeat;
            background-size: 100% auto;
        }
        body h1 {
            margin: 0;
            padding: 20px 0;
            background-color: rgb(128, 0, 0);
            color: #fff;
        }
        .container{
            background-color: #F7F7F7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            margin: 6% auto 0;
            opacity: 0.9;
        }
    </style>
    <body>
        <h1><center>Go to Study Room</center></h1>
        <div class="container">
            <h2> My Booking History</h2>
            <input type ="button" name="cancel" class="login login-submit" value="<< Back" onclick="history.go(-1);"/>
            <?php
            session_start();
            $arrayHistoryResult = $_SESSION['bookingHistory'];
            if (sizeof($arrayHistoryResult) > 0) {
            echo"<table class = 'table table-hover'>";
            echo"<tr>";
            echo"<th style='background-color: blue; color: white'>Date</th>";
            echo"<th>Room Number</th>";
            echo"<th>Floor Number</th>";
            echo"<th>Capacity</th>";
            echo"<th>Start Time</th>";
            echo"<th>End Time</th>";
            echo"</tr>";

            foreach ($arrayHistoryResult as $ia) {
                echo "<tr>";
                echo "<td style='background-color: lightblue; color: white'>" . $ia['date'] . "</td>";
                echo "<td>" . $ia['room_number'] . "</td>";
                echo "<td>" . $ia['floor_number'] . "</td>";
                echo "<td>" . $ia['capactity'] . "</td>";
                echo "<td>" . $ia['start_time'] . "</td>";
                echo "<td>" . $ia['end_time'] . "</td>";
                echo "</tr>";
            }
            }
            else{
                echo "<br><br><br><label>No records found</label>";
            }
            ?>

        </table>
    </div>
</body>
</html>