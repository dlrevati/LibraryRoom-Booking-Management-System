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
        .home_cont{
            margin-top: 10%;
            color: #fff;
            overflow: hidden;
        }
        h2,h4{
            margin-bottom: 30px;
        }
    </style>
    <body>
        <h1><center>Go to Study Room</center></h1>
        <div class="home_cont">
            <h2><center>Welcome to Go to Study room!</center></h2>
            <h4 align=center>I want to</h4>
            <center><button type="button" class="history_btn btn btn-default">View my booking History</button>
                <button class="book_btn btn btn-default">Book a room</button></center>
        </div>
    </body>
    <script>
        $(".history_btn").click(function () {
            window.location = "viewhistory.php";
        });
        $(".book_btn").click(function () {
            window.location = "book.php";
        });
    </script>
</html>