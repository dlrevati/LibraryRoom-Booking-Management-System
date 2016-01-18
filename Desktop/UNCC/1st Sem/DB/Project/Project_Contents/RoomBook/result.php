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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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
        h1,h2{
            text-align: center;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 500;
            color: white;
            margin-bottom: 20px;
        }
        .main{
            width: 60%;
            background-color: #F7F7F7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            margin: 6% auto 0;
            padding: 20px 30px 30px;
            opacity: 0.9;
        }
        .table.result_table td, .table.result_table th{
            border: 1px solid #ddd;
            text-align: center;
        }
        .result_table.table-hover tr:hover{
            cursor: pointer;
        }
        .result_table.table-hover tr.table_head:hover{
            cursor: auto;
            background: none;
        }
        .result_table tr.booked.active td{
            background: #73AD21;
        }
        .bookbtn{
            display: block;
            margin: 0px;
            font-size: 10px;
        }
        .thanku{
            display: none;
            width: 250px;
            margin: 40px auto 0;
            color: red;
        }
    </style>
    <body>
        <h1>Go to Study Room</h1>
        <h2>Available Rooms and Times</h2>

        <div class = "main">
            <table class = "result_table table table-hover">
                <tr class = "table_head">
                    <th>Room Number</th>
                    <th>Floor Number</th>
                    <th>Capacity</th>
                    <th>Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>

                <?php
                session_start();
                $result = $_SESSION['availablerooms'];
                $startTime = $_SESSION['time'];
                $date = $_SESSION['date'];

                $c = 0;
                foreach ($result as $i) {
                    echo "<tr id='$c'>";
                    echo "<td id=" . "'room" . $c . "'>" . $i['room_number'] . "</td>";
                    echo "<td id=" . "'floor" . $c . "'>" . $i['floor_number'] . "</td>";
                    echo "<td id=" . "'capacity" . $c . "'>" . $i['capactity'] . "</td>";
                    echo "<td id=" . "'date" . $c . "'>" . $date . "</td>";
                    echo "<td id=" . "'starttime" . $c . "'>" . $startTime . "</td>";
                    echo "<td id=" . "'endtime" . $c . "'>"
                    . "<input class='time-picker' type='time' name = 'timeTo".$c."'/> </td>";
                    echo "<td id=" . "'button" . $c . "'>"
                    . "<button id='" . $c . "' class = 'bookbtn btn btn-default' > Book Room</button></td>";
                    echo "</tr>";
                    $c = $c + 1;
                }
                ?>
            </table>
            <!--            <button class = "bookbtn btn btn-default">Book</button>-->
            <p class = "thanku">Thank You. Booking Successful</p>
        </div>
    </body>
    <script>
        var tData;
        var timeSelected;
        $(".result_table tr").not(".result_table tr:first-child").on("click", function () {
            $(".result_table tr").removeClass("active");
            $(this).addClass("active");
            tData = $(this).children("td").map(function () {
                return $(this).html();
            }).get();

        });

        $(".bookbtn").on("click", function () {
            var selectedid = $(this).attr("id");
            var timeName = "timeTo"+selectedid;
            timeSelected = $('[name='+timeName+']').val();
            tData.push(timeSelected);
            $.ajax(
                    {
                        url: 'bookroom.php',
                        data: {id: tData},
                        type: 'post',
                        success: function (output) {
                            $(".thanku").fadeIn("slow");
                            $("tr.active").addClass("booked");
                            window.location = "mailpage.php";
                        },
                        error: function (output) {
                            alert(output);
                        }
                    });
        });
    </script>
</html>